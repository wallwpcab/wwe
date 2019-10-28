<?php

$server_name = "localhost";
$user_name = "root";
$password = "pwd" ; 
$database = "crud";

$conn = mysqli_connect($server_name,$user_name,$password,$database) ; 
if(!$conn){
	die("connection failed : " .mysqli_connect_error());
}
echo "connected seccessfully " ;
?>