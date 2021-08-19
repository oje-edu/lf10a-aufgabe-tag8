<?php
$conn = mysqli_connect("localhost","root","","reisebuero");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());
}
?>