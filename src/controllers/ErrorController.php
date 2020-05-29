<?php
require_once '../views/ErrorView.php';
class ErrorController {
  public function _404() {
    return new ErrorView();
  }
}

?>
