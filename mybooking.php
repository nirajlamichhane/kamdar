<?php
include_once "header.php";
?>
<div class="container">
<h3>Your Bookings Till Now  </h3>

<table class="table">
  <thead>
    <tr>
      <th>Professional Name</th>
		<th>Professional Gender</th>
		<th>Professional address</th>
		<th>Professional Number</th>
		<th>Date</th>
		<th>Service</th>
		<th>State</th>
		<th></th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$useremail = $_SESSION['name'];

  	$result =  mysqli_query($conn,"SELECT * FROM bookings where useremail ='$useremail' ");
		while($main_result = mysqli_fetch_assoc($result)) :?>
		<?php 
		$proname = $main_result['proname'];
		$date = $main_result['dates'];
		$proid = $main_result['proid'];
		$state = $main_result['state'];

			$result3 = mysqli_query($conn,"SELECT * FROM professional where id ='$proid' ");
			$arr3= mysqli_fetch_assoc($result3);

			$proemail = $arr3['email'];
	

		$result2 = mysqli_query($conn,"SELECT * FROM professional where email='$proemail' ");
		while ($maiinresulr = mysqli_fetch_assoc($result2)) {
			$progender = $maiinresulr['gender'];
			$proaddress = $maiinresulr['address'];
			$proservice = $maiinresulr['service'];
			$prophone = $maiinresulr['phone'];
		}

		?>
    <tr>
      
      <td><?php echo $proname;?></td>
      <td><?php echo $progender;?></td>
      <td><?php echo $proaddress;?></td>
       <td><?php echo $prophone;?></td>
        <td><?php echo $date;?></td>
         <td><?php echo $proservice;?></td>

         <?php
         if($state == 0){ ?>
         	<td style="background-color: yellow; text-align: center; color : black;">pending</td>
         	<?php 
         } 
         	if($state == 1){
         		?>
         		<td style="background-color: green; text-align:center; color : white;">Accepted</td>
         		<?php
         	}
         	if ($state == 3) {
         				?>
         		<td style="background-color: green; text-align:center; color : yellow;">Completed</td>
         		<?php
         		}
         		if($state == 2){

         		?>
         		<td style="background-color: red; text-align:center; color : white;">Rejected</td>
         		<?php 
         	}
         
         ?>
         <?php 
         if($state == 3){
         	?>
         	<td><a href="review.php?id=<?php echo $proid ?>"><button type="button" class="btn btn-warning">Review</button></a></td>
         	<?php
         }
         ?>
         <?php 
         if($state == 4){
         	?>
         	<td>Already Reviewed</td>
         	<td><a href="view.php?id=<?php echo $proid ?>"><button type="button" class="btn btn-warning">View</button></a></td>
         	<?php
         }
         ?>



    </tr>
    <?php endwhile ?>
  </tbody>
</table>

</div>