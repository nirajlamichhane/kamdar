Yo page used va xaina



<?php
include_once "connection.php";
session_start();
if(isset($_GET['id'])){
	$proid = $_GET['id'];

	$date = $_GET['date'];

	$username = $_SESSION['name'];
	$state = $_SESSION['state'];
	

	$result = mysqli_query($conn,"SELECT * FROM professional where id = '$proid'");
	$arr = mysqli_fetch_assoc($result);
    $proemail = $arr['email'];

    echo $proemail;

    $result2 = mysqli_query($conn,"SELECT * FROM users where email= '$proemail'");
    $arr2 = mysqli_fetch_assoc($result2);
    $id = $arr2['id'];
    $proname = $arr2['fname'];

    echo $id;



	$insert = mysqli_query($conn,"INSERT INTO mestopro (proid,proname,dates,useremail)VALUES('$id','$proname','$date','$username')");
	$insert2 = mysqli_query($conn,"INSERT INTO bookings(proid,proname,dates,useremail,state)VALUES('$id','$proname','$date','$username','$state')");



	if($insert){
		echo ("booked succesful");
		$_SESSION['message'] = "You have succesfully booked $proname for date : $date";

		echo $_SESSION['message'];
		header("location:index.php");
	
	
	}
	else{
		echo mysqli_error($insert);
	}




}

 ?>
