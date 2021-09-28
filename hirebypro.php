<?php
include"connection.php";
 ?>

 <form method="post" action="selectpro.php">
  <select class="form-select" aria-label="Default select example" id="selectloc"name="location">
  <option selected>Choose Location</option>
  <option value="Hetauda">Hetauda</option>
  <option value="Kathmandu">Kathmandu</option>
  <option value="Pokhara">Pokhara</option>
  <option value="Chitwan">Chitwan</option>
</select>
<select class="form-select" aria-label="Default select example" id="selectpro" name="professionals">
  <option selected>Choose Professionals</option>
  <option value="Plumber">Plumber</option>
  <option value="Electrician">Electrician</option>
  <option value="Driver">Driver</option>
  <option value="Teacher">Teacher</option>
  <option value="Cook">Cook</option>
  <option value="Cleaner">Cleaner</option>
</select>
<input type="date" name="date" id="selectdate" required>