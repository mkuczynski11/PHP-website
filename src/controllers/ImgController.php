<?php
require_once '../models/Img.php';
require_once '../views/ImgAddView.php';
require_once '../views/ImgListView.php';
require_once '../views/RedirectView.php';
require_once '../watermarks.php';
require_once '../mini.php';

class ImgController {
  public function new() {
    return new ImgAddView();
  }

  public function add() {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $watermark = $_POST['watermark'];
    $valid = true;

    if ($author == '')
    {
      $_SESSION['error'][] = "Pole autor jest puste.";
      $valid = false;
    }

    if ($title == '')
    {
      $_SESSION['error'][] = "Pole tytuł jest puste.";
      $valid = false;
    }

    if ($watermark == '')
    {
      $_SESSION['error'][] = "Pole znak wodny jest puste.";
      $valid = false;
    }

    if(isset($_FILES['img']) && $_FILES['img']['size'] > 0 )
    {
      $filePath = $_FILES['img']['tmp_name'];
      $type = mime_content_type($filePath);
      $format = explode('/', $type)[1];
      $fileSize = $_FILES['img']['size'];
      if ($format !== 'jpeg' && $format !== 'png' && $fileSize > 1024 * 1024)
      {
        $_SESSION['error'][] = "Plik waży więcej niż 1Mb i nie ma rozszerzenia JPG lub PNG.";
        $valid = false;
      }
      if ($format !== 'jpeg' && $format !== 'png')
      {
        $_SESSION['error'][] = "Należy użyć formatu JPG lub PNG.";
        $valid = false;
      }
      if ($fileSize > 1024 * 1024)
      {
        $_SESSION['error'][] = "Plik waży więcej niż 1Mb.";
        $valid = false;
      }
    }
    else
    {
      $_SESSION['error'][] = "Nie załadowano pliku.";
      $valid = false;
    }

    if($valid)
    {
      $img = new Img($author, $title, $format);
      $img->save();
      $id = $img->id();
      $name = "{$id}.{$format}";
      $upload_dir = '/var/www/dev/src/web/images/';
      $target = $upload_dir . $name;
      if(!move_uploaded_file($filePath, $target))
      {
        $_SESSION['error'][] = "Błąd podczas ładowania pliku.";
      }

      $upload_dir = '/var/www/dev/src/web/';
      $watermarkPath = $upload_dir . "watermark/{$id}_watermark.png";
      generateWatermark($target, $watermarkPath, $format, $watermark);

      $miniPath = $upload_dir . "mini/{$id}_mini.png";
      generateMini($target, $miniPath, $format);

    }

    return new RedirectView('/img/new', 303);
  }

  public function show() {
    if($_GET)
    {
      $page_form = intval($_GET['page']);
      if($_GET['move'] == 'before') $move = -1;
      else if ($_GET['move'] == 'next') $move = 1;
    }
    else
    {
      $page_form = 1;
      $move = 0;
    }
    $page = $page_form + $move;
    $images = Img::getAll($page);
    if(!$images)
    {
      $page = $page -1;
      $images = Img::getAll($page);
      $_SESSION['error'][] = "Brak zdjęć na następnej stronie.";
    }
    return new ImgListView($images,$page);
  }
}
