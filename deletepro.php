<?php
include_once 'connection.php';
 
 $id = $_GET['id'];
  // echo $id;

  $result = mysqli_query($conn,"SELECT * FROM professional where id = $id");
  $main = mysqli_fetch_assoc($result);
  $email = $main['email'];
  // echo $email;

$del = mysqli_query ($conn,"DELETE FROM professional where id = '$id'");
$del2 = mysqli_query($conn,"DELETE  FROM users where email = '$email'");

if($del2){
	header("location : admin.php");
}

?>