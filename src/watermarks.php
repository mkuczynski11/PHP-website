<?php

function generateWatermark($target, $watermarkPath, $format, $watermark) {
  $type = "imagecreatefrom{$format}";
  $img = $type($target);
  $color = imagecolorallocate($img, 200, 200, 200);
  $font_file = '../Arial.ttf';
  $width = 0;
  $height = 0;
  imagefttext($img, 15, 315, $width, $height, $color, $font_file, $watermark);
  imagepng($img, $watermarkPath);
  imagedestroy($img);
}

 ?>
