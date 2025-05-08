<?php
$host = "localhost";
$username = "cars_user";
$password = "1234";
$database = "exhibition_db";

$dbconnection = mysqli_connect($host, $username, $password, $database);

if (!$dbconnection) {
die("Connection failed: " . mysqli_connect_error());
}
