<?php
mysqli_report(MYSQLI_REPORT_OFF);

$server = "localhost";
$username = "root";
$password = "";
$database = "login_sys";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){

    die("Error". mysqli_connect_error());
}