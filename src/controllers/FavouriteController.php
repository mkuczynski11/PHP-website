<?php
require_once '../views/RedirectView.php';

class FavouriteController {
  public function add() {
    if(!isset($_POST['favourite']))
    {
      return new RedirectView('/imgs', 303);
    }
    $favourites = $_POST['favourite'];
    foreach($favourites as $favourite)
    {
      if(isset($_SESSION['favourite']) && !in_array($favourite, $_SESSION['favourite']) || !isset($_SESSION['favourite']))
      {
        $_SESSION['favourite'][] = implode(',', (array)$favourite);
      }
    }
    return new RedirectView('/imgs', 303);
  }

  public function remove() {

  }

  public function show() {

  }
}


 ?>
