<?php
require_once '../views/StronaGlownaView.php';
require_once '../views/KibicowanieView.php';
require_once '../views/FormularzView.php';
require_once '../views/ZbudujDruzyneView.php';


class StaticController {
  public function stronaglowna() {
    return new StronaGlownaView();
  }
  public function kibicowanie() {
    return new KibicowanieView();
  }
  public function formularz() {
    return new  FormularzView();
  }
  public function zbudujdruzyne() {
    return new ZbudujDruzyneView();
  }
}

 ?>
