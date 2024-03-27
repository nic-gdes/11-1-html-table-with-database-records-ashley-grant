<?php

$conn = mysqli_connect("db", "root", "root", "products");

if(mysqli_connect_errno()) {
    echo "Database error: " . mysqli_connect_error();
    exit();
}

?>