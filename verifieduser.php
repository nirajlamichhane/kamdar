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
	<h2>Verified Users:</h2>
  <!-- <th>s.no</th> -->
  <th>Name</th>
  <th> Address</th>
  <th> Email</th>
  <th> Gender</th>
  <th> Phone</th>
  <th>Images</th>
  <th>Edit</th>
  <th>Delete</th>

  <?php 
        $result =  mysqli_query($conn,"SELECT * FROM professional where stats ='1' ");
        while($main_result = mysqli_fetch_assoc($result)) :?>
            <?php 
            $proid = $main_result['id'];
            $proname = $main_result['first'];
            $proaddress = $main_result['address'];
            $proemail= $main_result['email'];
            $progender = $main_result['gender'];
            $prophone = $main_result['phone'];
            $proimage = $main_result['images'];

  ?>
  <tr>
    <td><?php echo $proname; ?></td>
    <td><?php echo $proemail; ?></td>
     <td><?php echo $proaddress; ?></td>
    <td><?php echo $progender; ?></td>
    <td><?php echo $prophone; ?></td>
    <td><?php echo '<img height="200" width="200" src="data:image/jpeg;base64,'.base64_encode($proimage).'"/>'; ?></td>
   
    <td> <a href="editpro.php?id=<?php echo $proid ?>"><button type="button" class="btn btn-success">Edit</button></a></td>
       <td> <a href="deletepro.php?id=<?php echo $proid ?>" ><button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php endwhile ?>










</table>
</div>
</body>
</html>