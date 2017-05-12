<?php
include("init.php");

if($_GET['upload'] == "1"){
	$uploaddir = 'userfiles/works/';
	$filename = basename($_FILES['picture']['name']);

	if(file_exists($uploaddir.$filename)){
		$filename = "(Copy)".basename($_FILES['picture']['name']);
	}
	$uploadfile = $uploaddir.$filename;
	
	
	if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
		$name = $_POST['name'];
		$description = $_POST['description'];
		if(isValid($name, $description)){
			query("insert into work (name, description, picture) values ('".$name."','".$description."','".$filename."')");
			$saveWorkWasSuccessful = true;
		} else {
			throw new Exception("The data wasn't valid!");
		}
	} else {
		throw new Exception("Possible file upload attack!");
	}

}

/**
 *
 * @param string $ext
 * @param string $name
 * @param string $email
 */
function isValid($name,$description){
	if(strlen($name) > 3 && strlen($name) < 20 && strlen($description) < 300){
		return true;
	}
	return false;
}


?>