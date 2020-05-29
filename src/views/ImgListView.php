<?php

class ImgListView{
  public $images;
  public $page;

  public function __construct($images,$page){
    $this->images = $images;
    $this->page = $page;
  }

  public function render(){
    $images = $this->images;
    $page = $this->page;
    include '../layouts/imglist.php';
  }
}

 ?>
