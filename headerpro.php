<?php 
include_once"connection.php";
include"loginback.php";
?>
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/headerstyle.css">

    <title>Kamdar-Welcome</title>
  </head>
  <body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="images\kamdar22.png" id="logo" >Kamdar
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 60%;" >
      <ul class="navbar-nav">
        <li><a href="admin.php"><button class="btn btn-primary me-md-2" type="submit" id="but" name="logout">Home</button></a></li>
        <li  style="padding-left: 20px;"><a href="user.php"><button class="btn btn-primary me-md-2" type="submit" id="but" name="logout">Users</button></a></li>
        <li style="padding-left: 20px;"><a href="verifieduser.php"><button class="btn btn-primary me-md-2" type="submit" id="but" name="logout">Verified </button></a></li>
        <li style="padding-left: 20px;"><a href="logout.php"><button class="btn btn-primary me-md-2" type="submit" id="but" name="logout">Logout</button></a></li>
         
      </ul>
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>