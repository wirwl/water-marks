<?php
	require_once 'wideimage/WideImage.php';

//	use \WideImage\WideImage as WideImage;

	$image = WideImage::loadFromFile('../'.$_POST['bg_img']);
	$watermark = WideImage::loadFromFile('../'.$_POST['wm_img']);
	
	$merged = $image->merge($watermark, $_POST['pos_x']*$_POST['ratio'], $_POST['pos_y']*$_POST['ratio'] ,$_POST['opacity'])->saveToFile('../result/result.jpg');
?>