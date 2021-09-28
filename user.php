<?php 
include 'connection.php';
include_once 'headerpro.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/verifyprostyle.css">
    <title>VERIFIED USERS</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
</head>

<body>
    <div class="container">
<table class="table table-striped table-hover">
	<h2>Users:</h2>
  <!-- <th>s.no</th> -->
  <th>Name</th>
  <th> Address</th>
  <th> Email</th>
  <th> Gender</th>
  <th> Phone</th>
  <!-- <th>Edit</th> -->
  <th>Delete</th>

  <?php 
        $result =  mysqli_query($conn,"SELECT * FROM users where role = 'user' ");
        while($main_result = mysqli_fetch_assoc($result)) :?>
            <?php 
            
            $name = $main_result['fname'];
            $lname = $main_result['lname'];
            $address = $main_result['address'];
            $email= $main_result['email'];
            $gender = $main_result['gender'];
            $phone = $main_result['phone'];
           

  ?>
  <tr>
    <td><?php echo $name;echo" " ; echo $lname; ?></td>
    <td><?php echo $address; ?></td>
    <td><?php echo $email; ?></td>
     
    <td><?php echo $gender; ?></td>
    <td><?php echo $phone; ?></td>
   
   
    <!-- <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a></td> -->
       <td> <a href="" ><button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php endwhile ?>










</table>
</div>
</body>
</html>