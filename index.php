<?php
include "header.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome to kamdar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrapcss/bootstrap.min.css">
  <script type="text/javascript " src="bootstrapjs/bootstrap.min.js"></script>
  <script type="text/javascript " src="bootstrapjs/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
</head>
<body>
<div class="container">
  <div class="left">

  	<h2 class="maintext" style="padding: 10px;">
  Looking for an Professionals to Hire near your Location??</h2>

<form method="post" action="selectpro.php">
  <select class="form-select" aria-label="Default select example" id="selectloc"name="location" required>
  <option selected value="">Choose Location</option>
  <option value="Hetauda">Hetauda</option>
  <option value="Kathmandu">Kathmandu</option>
  <option value="Pokhara">Pokhara</option>
  <option value="Chitwan">Chitwan</option>
</select>
<select class="form-select" aria-label="Default select example" id="selectpro" name="professionals" required>
  <option selected value="">Choose Professionals</option>
  <option value="Plumber">Plumber</option>
  <option value="Electrician">Electrician</option>
  <option value="Driver">Driver</option>
  <option value="Teacher">Teacher</option>
  <option value="Cook">Cook</option>
  <option value="Cleaner">Cleaner</option>
</select>
<!-- <input type="date" name="date" id="selectdate" required> -->

<?php 
          if(!isset($_SESSION['name'])){?>
          <input type="button" name="" value="submit" id="submitt" onClick= "myfunction();">
          <?php } ?>
          <?php 
         if(isset($_SESSION['name'])){
          echo'<input type="submit" name="submit" value="Submit" id="submitt"> ';

          }?>
         
</form>

  </div>
  <div class="right">
    
<img src="images\front.jpg" class="ima">

  </div>
</div>

<!----------------------------------------------------- topservices -->
<div class="container">
	<h1 style="text-align:center;">Our Top Services</h1>
	<div class="card-group">
  <div class="card" style="border:0px ">
    <img src="images\plumber.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" >Plumber</h5>
      
      
    </div>
  </div>
  <div class="card"style="border:0px ">
    <img src="images\electrician.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Electrician</h5>
     
    </div>
  </div>
  <div class="card"style="border:0px ">
    <img src="images\electrician.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Driver</h5>
    
    </div>
  </div>
   <div class="card"style="border:0px ">
    <img src="images\teacher.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Teacher</h5>
     
    </div>
  </div>
   <div class="card"style="border:0px ">
    <img src="images\gas.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" >Gas delivery</h5>
      
      
    </div>
  </div>
  <div class="card"style="border:0px ">
    <img src="images\cook.jpg" class="card-img-top" alt="..." id="cook">
    <div class="card-body">
      <h5 class="card-title">Cook</h5>
     
    </div>
  </div>
</div>

<div class="card-group">
  <div class="card" style="border:0px ">
    <img src="images\gas.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" >Gas delivery</h5>
      
      
    </div>
  </div>
 
   <div class="card"style="border:0px ">
    <img src="images\electrician.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Painter</h5>
     
    </div>
  </div>
  <div class="card"style="border:0px ">
    <img src="images\pandit.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" >Pandit</h5>
      
      
    </div>
  </div>
   <div class="card"style="border:0px ">
    <img src="images\videographerjpg.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Videographer</h5>
     
    </div>
    </div>
    <div class="card"style="border:0px ">
    <img src="images\cleaner.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cleaner</h5>
     
    </div>
    </div>
    <div class="card" style="border: 0px;">
    </div>
</div>

</div> 
<!--------------------------------------------------------------- how do we work----------------------------------------------------- -->

<div class="container" style="margin-top: 40px;" >
 <h1>How Do We Work :</h1>
<div class="card-group" >
  <div class="card" id="how"  style="border: 0px; ">
    <img src="images\peoplw.jpg" class="card-img-top" alt="..." id="imgh">
    <div class="card-body">

      <p class="card-text">Pick the services u want.</p>
    
    </div>
  </div>
  <div class="card"id="how"style="border:0px;">
    <img src="images\date.jpg" class="card-img-top" alt="..." id="imgh">
    <div class="card-body">
    
      <p class="card-text">Select Date and Time.</p>
    </div>
  </div>
  <div class="card"id="how"style="border: 0px;">
    <img src="images\service.jpg" class="card-img-top" alt="..." id="imgh">
    <div class="card-body">
   
      <p class="card-text">Book the Professional you want.</p>
   
    </div>
  </div>
   <div class="card"id="how"style="border: 0px;">
    <img src="images\done.jpg" class="card-img-top" alt="..." id="imgh">
    <div class="card-body">
  
      <p class="card-text">Get your Job done. </p>

    </div>
  </div>
</div>
</div>
<?php 
if(isset($_SESSION['message'])){
  $mes = $_SESSION['message'];
  echo "<script>alert ('$mes');</script>";
}
?>

</body>
</html>
<?php 
include "footer.php";
?>
<script type="text/javascript">
  function myfunction(){
    confirm("please login first");
    href="header.php";
  }

</script>