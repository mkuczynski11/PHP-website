<?php

function generateMini($target, $miniPath, $format) {
  $type = "imagecreatefrom{$format}";
  $img = $type($target);
  $mini = imagescale($img, 200, 125);
  imagedestroy($img);
  imagepng($mini, $miniPath);
}


 ?>
