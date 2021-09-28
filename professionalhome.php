<?php 
include_once "header.php";
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/professionalindexx.css">
</head>
<div class="container">
	<a href="index.php" class="hire">Hire Professionals</a>
<!-- <h1>Welcome<?php  echo " " ;echo $_SESSION['name'];?></h1>  -->
<div class="row">
<?php
$email= $_SESSION['name'];
// $id = $_SESSION['id'];

$result2 = mysqli_query($conn,"SELECT * FROM professional WHERE email = '$email'");
$main = mysqli_fetch_assoc($result2);
$id = $main['id'];
$name = $main['first'];
$last = $main['last'];
 

?>
<h1>Welcome<?php  echo " " ;echo $name  ;echo " "; echo $last;?></h1> 
<?php



$result  = mysqli_query($conn,"SELECT * FROM mestopro WHERE proid = '$id'");

$count = mysqli_num_rows($result);

if($count>0){
	while($arr = mysqli_fetch_assoc($result)) :?><?php 	
	$useremail = $arr['useremail'];

	$result2 =  mysqli_query($conn,"SELECT * FROM users WHERE email = '$useremail'");
	$arr2 = mysqli_fetch_assoc($result2);
 	?>

		<div class="card" style="width: 25rem; margin: 10px;">
 			 <div class="card-body">
 		   <h3 class="card-title">You Got Request From</h3>
 		  <h4 class="card-subtitle mb-2 text-muted"><?php echo $arr2['fname']; echo" "; echo $arr2['lname'] ;?></h4>
  		  <p class="card-text">Address :<?php echo $arr2['address'];?></p>
   		 <p class="card-text">Phone Number :<?php echo $arr2['phone'];?></p>
   		 <p class="card-text">On Date :<?php echo $arr['dates'];?></p>
   		  <p class="card-text">Time :<?php echo $arr['time'];?></p>
   		   <p class="card-text">Message :<?php echo $arr['message'];?></p>
   		  
   		 <a href="acceptreq.php?id=<?php echo $arr2['id']?>" class="card-link"><button class="btnnn_1">Accept</button></a>
   		<!-- <a href="chat.php?id=<?php echo $arr2['id']?>" class="card-link"><button class="btnnn_3">Chat</button></a> -->
   		 <a href="rejectreq.php?id=<?php echo $arr2['id']?>" class="card-link"><button class="btnnn_2">Reject</button></a>
 			 </div>
		</div>

	
<?php endwhile	?>
<?php } 
else {
	echo"<h2> Sorry no request for you yet !!!!! </h2>";
}
?>




	
</div>








</div>
