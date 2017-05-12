<?php

ob_start();
session_start();

// Set cache control headers (dont know them)



mysql_connect("localhost","swissskills_user","swissskills") or die("could not establish a connection to the database server");
mysql_select_db("swissskills") or die("could not find the database");

include("util.php");
include("resize.php");
?>
