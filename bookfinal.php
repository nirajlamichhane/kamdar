<?php 
include_once"connection.php";
$id = $_GET['id'];

// echo $id;

$result = mysqli_query($conn,"SELECT * from professional where id = '$id'");
$main = mysqli_fetch_assoc($result);

$proemail = $main['email'];

$result2 = mysqli_query($conn,"SELECT * from users where email = '$proemail'");
$main2 = mysqli_fetch_assoc($result2);

$proname = $main2['fname'];
$lastname = $main2['lname'];
$address = $main2['address'];
$gender = $main2['gender'];
$phone = $main2['phone'];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>booking</title>
	<link rel="stylesheet" type="text/css" href="bootstrapcss/bootstrap.min.css">
  <script type="text/javascript " src="bootstrapjs/bootstrap.min.js"></script>
  <script type="text/javascript " src="bootstrapjs/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bookfinal.css">
	 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="main">
			<a href="index.php"><i class="glyphicon glyphicon-remove" id="cross"></i></a>
			<br><br>
			<h1>Are you sure you want to book :</h2>
			<h2><?php echo $proname ; echo " " ; echo $lastname; ?></h3>
			<div class="form">
		<form method="post" action="prolimeg.php">
		<input type="hidden" name="id" value="<?php echo $id?>">
		<h3>Select Date:</h3>
		<input type="date" name="date" id="selectdate" required><br><br>
		<h3>Select Time:</h3>
		<input type="time" name="time" required><br><br>
		<h3>Mesaage:</h3>
		<textarea name = "description">
         </textarea><br><br>
         <a href="prolimeg.php"><input type="submit" name="submit" value="Submit" id="submitt"></a>
	</form>
</div>
		</div>
	</div>

</body>
</html>