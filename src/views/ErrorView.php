<?php

class ErrorView {
  public function render() {
    http_response_code(404);
    include '../layouts/Error.php';
  }
}


 ?>
