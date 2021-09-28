<?php
include_once 'connection.php';
if (isset($_POST['query'])) {
    $inputvar = $_POST['query'];
    $query = "SELECT *   FROM professional WHERE first LIKE '%$inputvar%'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo " <a href='#' class='list-group-item list-group-item-action list-data border-1'>" . $row['first'] . " " . $row['last'] . "</a> ";
        }
    } else {
        echo "<p class='list-group-item border-1'>No Record found</p>";
    }
}
