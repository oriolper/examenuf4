<?php

/*
* @Author: Adrian Salado
*
*/
$image = new Imagick('photo.jpg');
$image->resizeImage(640, 480, imagick::FILTER_LANCZOS, 0.9);
?>