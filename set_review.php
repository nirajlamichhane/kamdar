<?php
session_start();
$userid = $_SESSION['id'];
require_once 'connection.php';
if (isset($_POST['submit'])) {

    $rating = $_POST['rate'];
    $comment = $_POST['comment'];
    $proid = $_POST['proid'];
    $insert = mysqli_query($conn, "INSERT INTO rating (userid,proid,rating,comment) VALUES('$userid','$proid','$rating','$comment')");

    if ($insert) {
        header('location:mybooking.php');
    }
}
