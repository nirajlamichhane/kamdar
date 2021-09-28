<?php
require_once 'connection.php';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admindashstyle.css">
    <title>Admin Panel</title>
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
  <a href="admindash.php"><li class="list-group-item">Home</li></a>
  <a href=""><li class="list-group-item active">Users</li></a>
  <a href="professionaladmin.php"><li class="list-group-item">Professionals</li></a>
  <a href="admin.php"><li class="list-group-item  ">New Professional Request</li></a>
 
</ul>

</div>
<div class="right">
  <table class="table table-striped table-hover">
  <!-- <th>s.no</th> -->
  <th> Name</th>
  <th> Address</th>
  <th> Email</th>
  <th> Gender</th>
  <th> Phone</th>
  <th>Delete</th>

  <?php 
        $result =  mysqli_query($conn,"SELECT * FROM users where role ='user' ");
        while($main_result = mysqli_fetch_assoc($result)) :?>
            <?php 
            $userid = $main_result['id'];
            
            $username = $main_result['fname'];
            $userlast = $main_result['lname'];
            $useraddress = $main_result['address'];
            $useremail= $main_result['email'];
            $usergender = $main_result['gender'];
            $userphone = $main_result['phone'];

  ?>
  <tr>
    <td><?php echo $username; echo" " ; echo $userlast; ?></td>
   
     <td><?php echo $useraddress; ?></td>
    <td><?php echo $useremail; ?></td>
    <td><?php echo $usergender; ?></td>
    <td><?php echo $userphone; ?></td>
    <td> <a href="deleteuser.php?id=<?php echo $userid ?>" ><button type="button" class="btn btn-danger">Remove</button></a></td>
      
  </tr>
  <?php endwhile ?>










</table>

  


</div>
</body>

</html>