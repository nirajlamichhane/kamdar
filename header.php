<?php

include "loginback.php";
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/headerstyle.css">



  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Kamdar-Welcome</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="images\kamdar22.png" id="logo">Kamdar
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 40%;">


        <ul class="navbar-nav">

          <?php
          if (isset($_SESSION['role'])) {
            echo '
         <li class="nav-item">
          <a class="nav-link " aria-current="page" href="professionalhome.php">Home</a>
        </li>';
          } else {
            echo '
         <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>';
          }
          ?>
          <!-- <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li> -->

          <li class="nav-item">
            <a class="nav-link" href="professionalindex.php">Professionals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="teams.php">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact US</a>
          </li>
          <?php
          // session_start();
          if (!isset($_SESSION['name'])) {
            echo '

        <li style="padding-left: 20px;"><a href="login.php"><button class="btn btn-primary me-md-2" id="but" name="login">Login</button></a></li>
        <li style="padding-left: 20px;"><a href="userreg.php"><button class="btn btn-primary me-md-2" id="but" name="register">Register</button></a></li>';
          } else {
            if (!isset($_SESSION['role'])) {
              $userid = $_SESSION['id'];
              $useremail = $_SESSION['name'];
              $result = mysqli_query($conn, "SELECT * FROM mestouser Where userid = '$userid' && status = 0 ");
              $count = mysqli_num_rows($result); ?>

              <li class="nav-item">
                <a class="nav-link" href="mybooking.php">My Booking</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Message<span class="badge bg-secondary"><?php echo $count; ?></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                  $useremail = $_SESSION['name'];
                  $userid = $_SESSION['id'];
                  $result2 = mysqli_query($conn, "SELECT * FROM mestouser where userid='$userid' && status=0");
                  if (mysqli_num_rows($result2) > 0) {
                    while ($fetch = mysqli_fetch_assoc($result2)) {
                      $proemail = $fetch['proemail'];
                      $res = mysqli_query($conn, "SELECT * FROM professional where email = '$proemail'");
                      $arr = mysqli_fetch_assoc($res);
                      $proname = $arr['first'];

                      echo '<li> <a href="readmessage.php">' . $proname . " has " . $fetch['message'] . '</a></li>';

                      echo '<li><hr class="dropdown-divider"></li>';
                    }
                  } else {
                    echo '<li> No message</li>';

                    echo '<li><hr class="dropdown-divider"></li>';
                  }
                  ?>



                </ul>
              </li>
              <li style="padding-left: 20px;"><a href="logout.php"><button class="btn btn-primary me-md-2" type="submit" id="but" name="logout">Logout</button></a></li>
          <?php
            } else {
              echo '
             
            <li ><a class="nav-link" href="bookingpro.php">Bookings</a></li>
            <li style="padding-left: 20px;"><a href="logout.php"><button class="btn btn-primary me-md-2" type="submit" id="but" name="logout">Logout</button></a></li>';
            }
          }
          ?>

        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="search col-md-6 mr-auto" style="margin-left:300px; ">
      <form class="form-inline " action="profile.php" method="post" style=" display:inline;">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search" id="search" name="searchText">
        <button class="btn btn-outline-success " type="submit" name="searchSubmit">Search</button>
      </form>
    </div>

  </nav>
  <div class="col-md-6" style="position: relative; margin-top:-9px; margin-left:300px; z-index:100;">
    <div class="list-group" id="show-list"> </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#search").keyup(function() {
        var searchtext = $(this).val();
        if (searchtext != '') {
          $.ajax({
            url: 'search_result.php',
            method: 'post',
            data: {
              "query": searchtext
            },
            success: function(response) {
              $('#show-list').html(response);
            }
          })
        } else {
          $('#show-list').html('');
        }



      });
      $(document).on('click', '.list-data', function() {
        $('#search').val($(this).text());
        $('#show-list').html('');

      });
    });
  </script>

</body>

</html>