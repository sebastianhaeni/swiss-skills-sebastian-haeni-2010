<?php

/**
 *
 * Enter description here ...
 * @param string $filename
 * @param string $picturePath
 * @param integer $maxSize
 * @param integer $maxHeight
 */
function getThumbPath($filename,$picturePath,$maxSize=160,$maxHeight=0){

	$rootThumb = $picturePath."thumb/";
	$sizeThumbPath = $rootThumb.$maxSize."/";
	if($maxHeight > 0){
		$sizeThumbPath = $rootThumb.$maxHeight.".".$maxHeight."/";
	}


	if(!file_exists($sizeThumbPath.$filename)){
		if(file_exists($picturePath.$filename)){
			// generate resized picture
			$ext = substr($filename,strrpos($filename, "."),strlen($filename));
			switch ($ext){
				case ".jpg":
					$newImage = imagecreatefromjpeg($picturePath.$filename);
					break;
				case ".png":
					$newImage = imagecreatefrompng($picturePath.$filename);
					break;
				case ".gif":
					$newImage = imagecreatefromgif($picturePath.$filename);
					break;
				default:
					throw new Exception("the extension ".$ext." is not allowed");
			}
				
			list($width,$height) = getimagesize($picturePath.$filename);
				
			$ratio = $width / $height;
			if($ratio > 0){
				$newWidth = $maxSize;
				$newHeight = $maxSize/$ratio;
			} else {
				$newWidth = $maxSize / $ratio;
				$newHeight = $maxSize;
			}
				
			$resizedImage = imagecreatetruecolor($newWidth, $newHeight);
				
			imagecopyresampled($resizedImage, $newImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
				
			// creating thumb dir
			if(!is_dir($rootThumb)){
				mkdir($rootThumb,0777);
			}
				
			if(!is_dir($sizeThumbPath)){
				mkdir($sizeThumbPath,0777);
			}
			
			imagejpeg($resizedImage,$sizeThumbPath.$filename);
			
			
			imagedestroy($newImage);
			imagedestroy($resizedImage);
				
		} else {
			throw new Exception("file ".$filname." not even existing!");
		}
	}

	return str_replace($rootThumb, "", $sizeThumbPath).$filename;

}