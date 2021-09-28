<?php 
include_once "connection.php";

session_start();
 if(isset($_GET['id'])){
 	$userid = $_GET['id'];


 }
 $res = mysqli_query($conn,"SELECT * FROM users WHERE id = '$userid'");
 $arr = mysqli_fetch_assoc($res);
 $useremail = $arr['email'];

$proemail = $_SESSION['name'];
$proid = $_SESSION['id'];
$message = "rejected";

$result6 = mysqli_query($conn,"SELECT * from professional where email = '$proemail'");
$ma = mysqli_fetch_assoc($result6);
$proid = $ma['id']; 

$book = mysqli_query($conn,"SELECT * FROM bookings where  proid ='$proid' and  useremail ='$useremail' and state = 0");
$main = mysqli_fetch_assoc($book);
 $todate = $main['dates'];

$result = mysqli_query($conn,"INSERT INTO mestouser(proid,proemail,userid,message) VALUES('$proid','$proemail','$userid','$message')");

$del = mysqli_query($conn,"DELETE FROM mestopro WHERE proid ='$proid' &&dates = '$userdate'&& useremail='$useremail'");
$book = mysqli_query($conn,"UPDATE bookings SET state = 2 where proid = '$proid' and useremail ='$useremail' and dates = '$todate'") ;


if($del){
    header("location:professionalhome.php");
     // echo $arr['email'];
}

?>