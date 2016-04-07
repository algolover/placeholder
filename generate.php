<?php
session_start();
header('Content-type: image/jpeg');

$image_width=$_GET['Width'];
$image_height=$_GET['Height'];

$text="$image_height"."X"."$image_width";
$text_color="#969696";
/*
if($image_height <=100 && $image_width <=100 ){
	$fontsize=10;
}else {
	if($image_height >100 && $image_width<400 ){
		$fontsize=18;
	}else{
		if($image_height >100 && $image_width <1000){
			$fontsize=30;
		}
		else{
			$fontsize=40;
		}
	}
}*/
if ($image_width<=$image_height){
	$fontsize=10+(0.01*$image_width);
}else{
	$fontsize=10+(0.05*$image_height);

}
$image=imagecreate($image_width, $image_height);
imagecolorallocate($image,205,204,204);
imagettftext($image,$fontsize,0,$image_width/2.5,$image_height/2, imagecolorallocate($image,255,254,254)
, 'bakery.ttf', $text);



imagejpeg($image);

?>
