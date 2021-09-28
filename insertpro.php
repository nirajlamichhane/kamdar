<?php
include_once "connection.php";
if (isset($_POST['submit'])) {
	$fname = $_POST['first'];
	$lname = $_POST['second'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$number = $_POST['txtEmpPhone'];
	$address = $_POST['address'];
	$role = "pro";
	$service = $_POST['services'];

	//inserting image
	$defValue = 0;
	$fileName = basename($_FILES["file"]["name"]);
	$fileName = basename($_FILES['file']['name']);
	$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
	$lowerFileTypes = strtolower($fileType);
	$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
	if (in_array($lowerFileTypes, $allowTypes)) {
		$files = addslashes(file_get_contents($_FILES['file']['tmp_name']));

		$insert = mysqli_query($conn, "INSERT INTO professional(first,last,email,gender,phone,address,service,images,stats) VALUES('$fname','$lname','$email','$gender','$number','$address','$service','$files','$defValue')");

		if ($insert) {
			echo '<script type=text/javascript> alert("sucessfully uploaded") </script>';
		} else {
			echo '<script type=text/javascript> alert("Not sucessfully uploaded") </script>';
		}
	} else {
		echo '<script type=text/javascript> alert("insert image only ") </script>';
	}
}
$result = mysqli_query($conn, "INSERT INTO users(fname,lname,password,email,address,gender,phone,role) VALUES('$fname','$lname','$pass','$email','$address','$gender','$number','$role')");


if ($result) {
	header("location:login.php");
}
