<?php

$host = "localhost";
$username = "root";
$db = "cinema";
$pass = "";

$conn = new mysqli($host,$username, $pass, $db) OR DIE("DIE" .mysqli_error());

if(mysqli_connect_errno()){
	echo "It is not connecting". mysqli_connect_error();
}
global $conn;
?>
