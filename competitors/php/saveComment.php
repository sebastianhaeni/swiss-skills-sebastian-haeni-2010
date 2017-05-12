<?php
include("init.php");

$idWork = $_GET['idWork'];
$name = htmlentities($_GET['name']);
$email = htmlentities($_GET['email']);
$message = htmlentities($_GET['message']);

if(isValid($name,$email,$message)){
	query("insert into comment (idWork, createdate, author_name, author_email, message) values ('".$idWork."',".time().",'".$name."','".$email."','".$message."')");
} else {
	
}


function isValid($name,$email,$message){
	return true;
}

?>