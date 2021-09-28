<?php 
include_once "loginback.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Messages</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrapcss/bootstrap.min.css">
  <script type="text/javascript " src="bootstrapjs/bootstrap.min.js"></script>
  <script type="text/javascript " src="bootstrapjs/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<a href="index.php">Go Back</a>
		<h2>New Messages</h2>
		<ul>
			 <?php 
            $useremail = $_SESSION['name'];
            $userid = $_SESSION['id'];
            $result2 = mysqli_query($conn,"SELECT * FROM mestouser where userid='$userid' && status=0"); 
              if(mysqli_num_rows($result2) > 0){
                while ($fetch = mysqli_fetch_assoc($result2)) {
                  $proemail = $fetch['proemail'];
                  $res = mysqli_query($conn,"SELECT * FROM professional where email = '$proemail'");
                  $arr = mysqli_fetch_assoc($res);
                  $proname = $arr['first'];
                   
                 echo'<li>'.$proname." has " .$fetch['message'].'</li>';

                
                }
              }
              // $result = mysqli_query($conn,"UPDATE mestouser SET status = 1 where userid = $userid");
              
             ?> 
		</ul>
		<h2>Older Messages</h2>
		<ul>
			 <?php 
            $useremail = $_SESSION['name'];
            $userid = $_SESSION['id'];
            $result2 = mysqli_query($conn,"SELECT * FROM mestouser where userid='$userid' && status=1"); 
              if(mysqli_num_rows($result2) > 0){
                while ($fetch = mysqli_fetch_assoc($result2)) {
                  $proemail = $fetch['proemail'];
                  $res = mysqli_query($conn,"SELECT * FROM professional where email = '$proemail'");
                  $arr = mysqli_fetch_assoc($res);
                  $proname = $arr['first'];
                   
                 echo'<li>'.$proname." has " .$fetch['message'].'</li>';

                
                }
              }
              $result = mysqli_query($conn,"UPDATE mestouser SET status = 1 where userid = $userid");
              
             ?> 
		</ul>
	</div>

</body>
</html>