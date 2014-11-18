<?php 
// The PHP -- Color to Greyscale
//to black and white
if(!file_exists('cow.png')) {
	$img = imagecreatefrompng('dw-manipulate-me.png');
	imagefilter($img,IMG_FILTER_GRAYSCALE);
	imagepng($img,'cow-bw.png');
	imagedestroy($img);
}
//The PHP -- Color to Negative
//to negative
if(!file_exists('cow.png')) {
	$img = imagecreatefrompng('dw-manipulate-me.png');
	imagefilter($img,IMG_FILTER_NEGATE);
	imagepng($img,'cow-negative.png');
	imagedestroy($img);
}
//The PHP -- Color to Sepia
//to black and white, then sepia
if(!file_exists('cow.png')) {
	$img = imagecreatefrompng('dw-manipulate-me.png');
	imagefilter($img,IMG_FILTER_GRAYSCALE);
	imagefilter($img,IMG_FILTER_COLORIZE,100,50,0);
	imagepng($img,'cow-sepia.png');
	imagedestroy($img);
}

?>
