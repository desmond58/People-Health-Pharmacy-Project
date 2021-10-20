<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pharmacysystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

/*
use this on the page u want to link database

<?php
    include_once 'includes/db_connection.php';
?>
*/