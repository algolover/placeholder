<?php
session_start();
header('Content-type: image/jpeg');

$image_width=$_GET['Width'];
$image_height=$_GET['Height'];

$image=imagecreate($image_width, $image_height);
imagecolorallocate($image,255,255,255);



imagejpeg($image);

?>
