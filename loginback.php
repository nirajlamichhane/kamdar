<?php 
session_start();
include_once"connection.php";
// $email = $password = "";
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];


 $result = mysqli_query($conn,"SELECT * FROM users where email = '$email' && password = '$password'"); 
 $main = mysqli_fetch_assoc($result);
 $count = mysqli_num_rows($result);
    if($count==1){
        if($main['role'] == "user"){
            $_SESSION['name'] = $main['email'];  
            $_SESSION['id'] = $main['id'];        
            echo $_SESSION['name'];
            header("location:index.php");
        }
         if($main['role'] == "pro"){
            $_SESSION['name'] = $main['email'];
            $_SESSION['id'] = $main['id'];
             $_SESSION['role'] = "pro";
            echo $_SESSION['name'];
            header("location:finalprofessional.php");

         }
         if($main['role'] == "admin"){
            // $_SESSION['name'] = $main['email'];  
            // $_SESSION['id'] = $main['id'];        
            // echo $_SESSION['name'];
            header("location:admindash.php");
        }

    }
    else{
         echo "Sorry !!! You can't  login something might be wrong check again ";
         ?>
         <a href="login.php">Go back</a>
         <?php
     
       }
       
   }
 
?>