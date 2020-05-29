<?php
require_once '../DB.php';

class User {
  private $_id;
  public $login;
  public $email;
  public $passwordHash;

  public function __construct($login, $email, $passwordHash) {
    $this->login = $login;
    $this->email = $email;
    $this->passwordHash = $passwordHash;
  }

  public static function check_login($query = []) {
    $object = DB::get()->users->findOne($query);
    if($object)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function save() {
    $response = DB::get()->users->insertOne([
      'login' => $this->login,
      'email' => $this->email,
      'password' => $this->passwordHash
    ]);
    $this->_id = $response->getInsertedId();
  }

  public static function find_user($query = []) {
    $object = DB::get()->users->findOne($query);
    return $object;
  }
}

 ?>
