<?php

// $conn = mysqli_connect("db", "root", "root", "products"); // Local
$conn = mysqli_connect("127.0.0.1:3308", "2024agrant", "agrant494", "welearnd_gdes261_2024_agrant"); // Remote


if(mysqli_connect_errno()) {
    echo "Database error: " . mysqli_connect_error();
    exit();
}

?>