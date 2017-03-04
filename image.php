<?php
include("database.php");
extract($_GET);
if(isset($upload)){
	$target_file = "uploads/". basename($upload);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imagepath="uploads/".$upload;
}
if($imageFileType == "jpg" || $imageFileType == "jpeg"){
$image=imagecreatefromjpeg($imagepath);
// get image height

$imgheight=imagesy($image);

//allocate color for image caption (white)

$color=imagecolorallocate($image, 255, 255, 255);

//Add text to image bottom

imagestring($image, 5, 100, $imgheight-50, "September 2005", $color);

header('Content-Type: image/jpeg');

imagejpeg($image);
}

if($imageFileType == "png"){
$image=imagecreatefrompng($imagepath);
// get image height

$imgheight=imagesy($image);

//allocate color for image caption (white)

$color=imagecolorallocate($image, 255, 255, 255);

//Add text to image bottom

imagestring($image, 5, 100, $imgheight-50, "September 2005", $color);

header('Content-Type: image/png');

imagepng($image);
}


?>
