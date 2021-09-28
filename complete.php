<?php 
include_once 'connection.php';


$id = $_GET['id'];




$update = mysqli_query($conn, "UPDATE bookingpro SET status = '1' WHERE proid='$id'");
$updatee = mysqli_query($conn, "UPDATE bookings  SET state = '3' WHERE proid='$id'");

if($update){
	header("location:bookingpro.php");
}
?>