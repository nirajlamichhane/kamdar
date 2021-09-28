<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/admindashstyle.css">
</head>
<body>
<div class="name">
	<a href="logout.php"><button class="btn btn-primary me-md-2" type="submit" id="but" name="logout">Logout</button></a>
	<h2>Welcome Admin</h2>
	<?php 
    $result = mysqli_query($conn,"SELECT * FROM users where role='admin'");
    $main = mysqli_fetch_assoc($result);


     $name = $main['fname'];
     $lname = $main['lname'];

    ?>
    <h1><?php echo $name ; echo "  " ;echo $lname;?> </h1>

	
</div>
<?php 
    $result2 = mysqli_query($conn,"SELECT * FROM users where role='user'");
    $countuser = mysqli_num_rows($result2);

    $result3 = mysqli_query($conn,"SELECT * FROM professional where stats='1'");
    $countpro = mysqli_num_rows($result3);

       $result4= mysqli_query($conn,"SELECT * FROM professional where stats='0'");
    $countnew = mysqli_num_rows($result4);


    ?>


<div class="left">
	<ul class="list-group">
  <a href=""><li class="list-group-item active">Home</li></a>
  <a href="useradmin.php"><li class="list-group-item">Users</li></a>
  <a href="professionaladmin.php"><li class="list-group-item">Professionals</li></a>
  <a href="admin.php"><li class="list-group-item">New Professional Request</li></a>
 
</ul>

</div>
<div class="right">
	<div class="card" id="user" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Number of Users</h5>
    
    <p class="card-text"><?php echo $countuser ?></p>
    
  </div>
</div>
<div class="card" id="pro" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Number of Professionals</h5>
 
    <p class="card-text"><?php echo $countpro ?></p>
    
  </div>
</div>
<div class="card"  id ="new"style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">New Professionals</h5>
    
    <p class="card-text"><?php echo $countnew ?></p>
   
  </div>
</div>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">User</th>
      <th scope="col">Message</th>
      <th scope="col">Professional</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 

    $result =  mysqli_query($conn,"SELECT * FROM mestouser");
    $count = mysqli_num_rows($result);
    if ($count > 0 ) {
    
    
    while($main_result = mysqli_fetch_assoc($result)) :?>
    <?php 
    $proemail = $main_result['proemail'];
    $userid = $main_result['userid'];
    $message = $main_result['message'];

      $result3 = mysqli_query($conn,"SELECT * FROM users where email ='$proemail' ");
      $arr3= mysqli_fetch_assoc($result3);

      $proname = $arr3['fname'];
      $prolast = $arr3['lname'];

      $result4 = mysqli_query($conn,"SELECT * FROM users where id ='$userid' ");
      $arr4= mysqli_fetch_assoc($result4);
      $username = $arr4['fname'];
      $userlast = $arr4['lname'];

    ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo "$username"; echo ' ' ;echo "$userlast"; ?></td>
      <td>Requested</td>
      <td><?php echo "$proname"; echo ' ' ;echo "$prolast"; ?></td>

      <td><?php echo $message ?></td>
    </tr>
    
  </tbody>
</table>
 <?php endwhile ?>
<?php  } ?>


</div>



</body>
</html>