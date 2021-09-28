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
$id = $_SESSION['id'];
$message = "accepted";

$result6 = mysqli_query($conn,"SELECT * from professional where email = '$proemail'");
$ma = mysqli_fetch_assoc($result6);
$proid = $ma['id'];

 $result3 = mysqli_query($conn,"SELECT * FROM mestopro where proid ='$proid' ");
        while ($maiinresule= mysqli_fetch_assoc($result3)) {
            $userdate= $maiinresule['dates'];
            $useremail = $maiinresule['useremail'];
            }

$book = mysqli_query($conn,"SELECT * FROM bookings where  proid ='$proid' and  useremail ='$useremail' and state = 0");
$main = mysqli_fetch_assoc($book);
 $todate = $main['dates'];




$result = mysqli_query($conn,"INSERT INTO mestouser(proid,proemail,userid,message) VALUES('$proid','$proemail','$userid','$message')");
$result2 = mysqli_query($conn,"INSERT INTO bookingpro(proid,proname,dates,userid) VALUES('$proid','$proemail','$todate','$userid')");
$book = mysqli_query($conn,"UPDATE bookings SET state = 1 where proid = '$proid' and useremail ='$useremail' and dates = '$todate'") ;


$del = mysqli_query($conn,"DELETE FROM mestopro WHERE proid ='$proid' &&dates = '$userdate' && useremail='$useremail'");

if($del){
	header("location:professionalhome.php");
}
       
?>