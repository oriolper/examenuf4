<?php 
// filename of the original image
$fileName = "cow.jpg";
 
// degrees to rotate the image (counter clockwise)
$angle = 45.0;
 
// if the resulting image is not rectangular..
// .. what colour will the uncovered bits be?
$bgColour = 0xFFFFFF; // red
 
// load the original image from the file
$original = imagecreatefromjpeg($fileName);
 
// rotate the image by $angle degrees
$rotated = imagerotate($original, $angle, $bgColour);
 
// print the appropriate header type
// this tells the browser we're displaying a jpeg image
header('Content-type: image/jpeg');
// use the imagejpeg() method to display the rotated image
imagejpeg($rotated);
?>
