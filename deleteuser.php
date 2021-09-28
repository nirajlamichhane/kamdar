<?php
include_once 'connection.php';
 
 $id = $_GET['id'];

$del2 = mysqli_query($conn,"DELETE  FROM users where id = '$id'");

if($del2){
	header("location : admindash.php");
}

?>  