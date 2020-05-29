<?php
require_once '../DB.php';

class Img{
  private $id;
  public $author;
  public $title;
  public $format;

  public function __construct($author, $title, $format){
    $this->author = $author;
    $this->title = $title;
    $this->format = $format;
  }
  static private function image_to_display($object) {
    $image = new static(
      $object['author'],
      $object['title'],
      $object['format']
    );
    $image->id = (string)$object['_id'];
    return $image;
  }
  public function save(){
    $response = DB::get()->images->insertOne([
      'author' => $this->author,
      'title' => $this->title,
      'format' => $this->format
    ]);
    $this->id = $response->getInsertedId();
  }
  public function id() {
    return $this->id;
  }
  static public function getAll($page){
    $pageSize = 3;
    $opts = [
      'skip' => ($page - 1) * $pageSize,
      'limit' => $pageSize
    ];
    $response = DB::get()->images->find([], $opts);
    $images = [];
    foreach ($response as $image) {
      array_push($images, static::image_to_display($image));
    }
    return $images;
  }
  static public function get_fav(){
    $images = [];
    if(!isset($_SESSION['favourite'])) return $images;
    foreach($_SESSION['favourite'] as $key => $value){
      $response = DB::get()->images->findOne(['_id' => new MongoDB\BSON\ObjectID($value)]);
      array_push($images, static::image_to_display($response));
    }
    return $images;
  }

}


 ?>
