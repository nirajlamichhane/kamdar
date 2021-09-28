<?php 
include_once "connection.php";
if(isset($_POST['submit'])){
	$fname=$_POST['first'];
	$lname=$_POST['second'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$number=$_POST['txtEmpPhone'];
	$address=$_POST['address'];
	$role = "user";
	
}
 
 $result = mysqli_query($conn,"INSERT INTO users(fname,lname,password,email,address,gender,phone,role) VALUES('$fname','$lname','$pass','$email','$address','$gender','$number','$role')");

 if($result){
 	header("location:login.php");

 }
 else{
 	echo "fail";
 }



?>