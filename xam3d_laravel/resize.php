<?php
$src = 'public/Image/logo4.png';
$dest = 'public/Image/logo4_small.png';

$img = imagecreatefrompng($src);
$width = imagesx($img);
$height = imagesy($img);

$new_height = 280;
$new_width = round($width * ($new_height / $height));

$new_img = imagecreatetruecolor($new_width, $new_height);
imagealphablending($new_img, false);
imagesavealpha($new_img, true);

imagecopyresampled($new_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
imagepng($new_img, $dest, 9);

imagedestroy($img);
imagedestroy($new_img);
echo "Done";
