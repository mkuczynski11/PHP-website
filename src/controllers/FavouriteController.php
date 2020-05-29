<?php
require_once '../views/RedirectView.php';
require_once '../views/FavouriteView.php';
require_once '../models/Img.php';

class FavouriteController {
  public function add() {
    if(!isset($_POST['favourite']))
    {
      return new RedirectView('/images_list', 303);
    }
    $favourites = $_POST['favourite'];
    foreach($favourites as $favourite)
    {
      if(isset($_SESSION['favourite']) && !in_array($favourite, $_SESSION['favourite']) || !isset($_SESSION['favourite']))
      {
        $_SESSION['favourite'][] = implode(',', (array)$favourite);
      }
    }
    return new RedirectView('/images_list', 303);
  }

  public function show() {
    $images = Img::get_fav();
    return new FavouriteView($images);
  }
  public function remove() {
    if(!isset($_POST['remove']))
    {
      return new RedirectView('/images_list', 303);
    }
    $to_remove = $_POST['remove'];
    foreach($to_remove as $remove)
    {
      if(isset($_SESSION['favourite']))
      {
        if (($key = array_search($remove, $_SESSION['favourite'])) !== false)
        {
          unset($_SESSION['favourite'][$key]);
        }
      }
    }
    $images = Img::get_fav();
    return new FavouriteView($images);
  }
}


 ?>
