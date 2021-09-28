<?php
require_once 'connection.php';
include_once "headerpro.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container">
    <?php 
    $result = mysqli_query($conn,"SELECT * FROM users where role='admin'");
    $main = mysqli_fetch_assoc($result);


     $name = $main['fname'];
     $lname = $main['lname'];

    ?>
<h2>Welcome As Admin : <?php echo $name ; echo "  " ;echo $lname;?> </h2>
<h3>New unverified professionals:</h3>
<table class="table table-striped table-hover">
  <!-- <th>s.no</th> -->
  <th> Name</th>
  <th> Address</th>
  <th>Serives</th>
  <th> Email</th>
  <th> Gender</th>
  <th> Phone</th>
  <th>Images</th>
  <th>Verified</th>
  <th>Delete</th>

  <?php 
        $result =  mysqli_query($conn,"SELECT * FROM professional where stats ='0' ");
        while($main_result = mysqli_fetch_assoc($result)) :?>
            <?php 
            $proid = $main_result['id'];
            $proname = $main_result['first'];
            $prolast = $main_result['last'];
            $proaddress = $main_result['address'];
            $proemail= $main_result['email'];
            $progender = $main_result['gender'];
            $prophone = $main_result['phone'];
            $proimage = $main_result['images'];
            $service = $main_result['service']

  ?>
  <tr>
    <td><?php echo $proname; echo" " ; echo $prolast; ?></td>
   
     <td><?php echo $proaddress; ?></td>
      <td><?php echo $service; ?></td>
    <td><?php echo $proemail; ?></td>
    
    <td><?php echo $progender; ?></td>
    <td><?php echo $prophone; ?></td>
    <td><?php echo '<img height="200" width="200" src="data:image/jpeg;base64,'.base64_encode($proimage).'"/>'; ?></td>
    <td> <a href="verify.php?id=<?php echo $proid ?>"><button type="button" class="btn btn-success">Verify</button></a></td>
    <td> <a href="deletepro.php?id=<?php echo $proid ?>" ><button type="button" class="btn btn-danger">Delete</button></a></td>
      
  </tr>
  <?php endwhile ?>










</table>



</div>

</body>

</html>