<?php
include_once "header.php";
?>
<div class="container">
<h3>Your Bookings </h3>

<table class="table">
  <thead>
    <tr>
      <th>User Name</th>
		<th>User Gender</th>
		<th>User address</th>
		<th>User Number</th>
		<th>Date</th>
		<th></th>
		
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$email= $_SESSION['name'];
  	$result6 = mysqli_query($conn,"SELECT * from professional where email = '$email'");
$ma = mysqli_fetch_assoc($result6);
$proid = $ma['id'];

  	$result =  mysqli_query($conn,"SELECT * FROM bookingpro where proid ='$proid'");
		while($main_result = mysqli_fetch_assoc($result)) :?>
		<?php 
		$proname = $main_result['proname'];
		$userid = $main_result['userid'];
		$dates = $main_result['dates'];

		$result2 = mysqli_query($conn,"SELECT * FROM users where id ='$userid' ");
		while ($maiinresulr = mysqli_fetch_assoc($result2)) {
			$username = $maiinresulr['fname'];
			$usergender = $maiinresulr['gender'];
			$useraddress = $maiinresulr['address'];
			$usergender = $maiinresulr['gender'];
			
}
		?>
		
    <tr>
      
      <td><?php echo $username;?></td>
       <td><?php echo $usergender;?></td>
        <td><?php echo $useraddress;?></td>
         <td><?php echo $usergender;?></td>
         <td><?php echo $dates;?></td>
         <?php 
         $sat = mysqli_query($conn,"SELECT * from bookingpro where proid = '$proid' and userid = '$userid'");
         $satresult = mysqli_fetch_assoc($sat);
         $status = $satresult['status'];

         if ($status == 0) {
         	?>
         	<td> <a href="complete.php?id=<?php echo $proid ?>"><button type="button" class="btn btn-warning">Completed</button></a></td>
         	<?php
         	// code...
         }
         else{
         	echo "<td>Already Completed</td>";

         }
         ?>

        <!--  <td> <a href="complete.php?id=<?php echo $proid ?>"><button type="button" class="btn btn-warning">Completed</button></a></td> -->
         
         
    </tr>
    <?php endwhile ?>
  </tbody>
</table>

</div>