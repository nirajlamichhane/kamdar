<?php
include_once 'connection.php';


$id = $_GET['id'];



$update = mysqli_query($conn, "UPDATE professional SET stats = '1' WHERE id='$id'");
if ($update) {
    mysqli_close($conn);
    header("location:admin.php");
    exit;
} else {
    echo "something went wrong";
}
