<?php

class FavouriteView{
  public $images;

  public function __construct($images){
    $this->images = $images;
  }

  public function render(){
    $images = $this->images;
    include '../layouts/favourite.php';
  }
}

 ?>
