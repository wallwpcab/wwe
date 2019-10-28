<?php

include_once ('../com/connection.php');


if (isset($_REQUEST['Submit'])){
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phone= $_REQUEST['cell'];
	$password = $_REQUEST['pwd'];
	 
	echo $name,$email,$phone ; 
	
	$sql="insert into users ('name','email','cell','password') value('".$name")" ;
	mysqli_query($con) 

	$sql ="UPDATE  users SET 'name' = '".$name."' , 'email' =  '".$name."' , 'cell' = 

}
?>