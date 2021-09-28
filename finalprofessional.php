<?php 
include_once "header.php";
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/finalprofessionall.css">
</head>
<body>
	<?php
$email= $_SESSION['name'];
// $id = $_SESSION['id'];

$result2 = mysqli_query($conn,"SELECT * FROM professional WHERE email = '$email'");
$main = mysqli_fetch_assoc($result2);
$id = $main['id'];
$name = $main['first'];
$last = $main['last'];
 

?>
<div class="name">
	<h4>Welcome As Professional:</h4>
	<h2><?php  echo " " ;echo $name  ;echo " "; echo $last;?></h2>
	
</div>
<?php



$result  = mysqli_query($conn,"SELECT * FROM mestopro WHERE proid = '$id'");

$count = mysqli_num_rows($result);

?><p><?php echo $count ?> New Request</p> 
<?php
if($count>0){
	while($arr = mysqli_fetch_assoc($result)) :?><?php 	
	$useremail = $arr['useremail'];

	$result2 =  mysqli_query($conn,"SELECT * FROM users WHERE email = '$useremail'");
	$arr2 = mysqli_fetch_assoc($result2);

 	?>
 			<div class="container">
 				
		<div class="card" style="width: 25rem; margin: 10px;">
 			 <div class="card-body">
 		   <!-- <h3 class="card-title">You Got Request From</h3> -->
 		  <h3 class="card-subtitle mb-2 text-muted"><?php echo $arr2['fname']; echo" "; echo $arr2['lname'] ;?></h3>
 		  <hr>
  		  <span class="card-text">Address :<b><?php echo $arr2['address'];?></b></span>
   		 <span class="card-text" style="float:right;">Phone Number :<b><?php echo $arr2['phone'];?></b></span>
   		 <br><br>
   		 <!-- <hr> -->
   		 <span class="card-text">On Date :<b><?php echo $arr['dates'];?></b></span>
   		  <span class="card-text" style="float:right;">Time :<b><?php echo $arr['time'];?></b></span>
   		  <br><br>
   		   <span class="card-text">Message :<b><?php echo $arr['message'];?></b></span>
   		   <br>
   		   <br>
   		  
   		 <a href="acceptreq.php?id=<?php echo $arr2['id']?>" class="card-link"><button class="btnnn_1">Accept</button></a>
   		
   		 <a href="rejectreq.php?id=<?php echo $arr2['id']?>" class="card-link"><button class="btnnn_2">Reject</button></a>
 			 </div>
		</div>
	</div>

	
<?php endwhile	?>
<?php } 
else {
	?>
	<div class="main">
		<h3>Oops...</h3>
		<h4>You got No request for now	</h4>
		<a href="bookingpro.php" class="card-link"><button class="btnnn_3">Booking</button></a>
	</div>
	<?php
}
?>
</body>