<?php
/*
 * @Author: Admin Project A
 * 
 * */

// load the image from the file specified:
$im = imagecreatefrompng("image.png");
// if there's an error, stop processing the page:
if(!$im)
{
die("");
}
 
// define some colours to use with the image
$yellow = imagecolorallocate($im, 255, 255, 0);
$black = imagecolorallocate($im, 0, 0, 0);
 
// get the width and the height of the image
$width = imagesx($im);
$height = imagesy($im);
 
// draw a black rectangle across the bottom, say, 20 pixels of the image:
imagefilledrectangle($im, 0, ($height-20) , $width, $height, $black);
 
// now we want to write in the centre of the rectangle:
$font = 4; // store the int ID of the system font we're using in $font
$text = "tiposaurus"; // store the text we're going to write in $text
// calculate the left position of the text:
$leftTextPos = ( $width - imagefontwidth($font)*strlen($text) )/2;
// finally, write the string:
imagestring($im, $font, $leftTextPos, $height-18, $text, $yellow);
 
// output the image
// tell the browser what we're sending it
Header('Content-type: image/png');
// output the image as a png
imagepng($im);
 
// tidy up
imagedestroy($im);
?>
