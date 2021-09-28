<?php
include_once"connection.php";
session_start();
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$mes = $_POST['description'];
	$username = $_SESSION['name'];


}

echo $mes;
echo $username;

$result = mysqli_query($conn,"SELECT * FROM professional where id = '$id'");
	$arr = mysqli_fetch_assoc($result);
    $proemail = $arr['email'];
    // $proname = $arr['fname'];
 $result2 = mysqli_query($conn,"SELECT * from users where email = '$proemail'");
$main2 = mysqli_fetch_assoc($result2);
$proname = $main2['fname'];
    echo $proemail;

    $insert = mysqli_query($conn,"INSERT INTO mestopro (proid,proname,dates,useremail,time,message)VALUES('$id','$proname','$date','$username','$time','$mes')");
    $insert2 = mysqli_query($conn,"INSERT INTO bookings(proid,proname,dates,useremail)VALUES('$id','$proname','$date','$username')");

    if($insert){
		echo ("booked succesful");
		// $_SESSION['message'] = "You have succesfully booked $proname for date : $date";

		// echo $_SESSION['message'];
		header("location:index.php");
	
	
	}

?>