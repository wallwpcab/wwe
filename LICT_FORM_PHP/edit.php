<?php
$id = $_REQUEST['id'];
include_once ('../com/connection.php');
$sql = "SELECT * FROM users WHERE id = $id " ;
$qResult = mysqli_query
?>
