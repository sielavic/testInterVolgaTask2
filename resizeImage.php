<?php

function createImage($filename,$w,$h,$endName){//параметры загружаемого изображения
    $name=$filename;
    $createImage = imagecreatetruecolor($w, $h);
    $transparent = imagecolorallocatealpha($createImage, 0, 0, 0, 127);
    imagefill($createImage, 0, 0, $transparent);
    imagesavealpha($createImage, true);
    $image = imagecreatefrompng($name);
    imagecopyresampled($createImage, $image, 0, 0, 0, 0, $w, $h, imagesx($image), imagesy($image));
    imagepng($createImage, $endName, 9);
    return $endName;
}

createImage('img/image.png',200, 100, 'img/image.png');

echo '<img src="img/image.png">';