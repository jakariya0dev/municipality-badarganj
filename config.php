<?php 

include_once 'static-data.php';


$host = 'localhost';
$user = "root";
$password = "";
$db = "municipality-badarganj";

// $host = 'localhost';
// $user = "bitwise1_admin";
// $password = ")}qX}L~Ubt9B";
// $db = "bitwise1_municipality_badarganj";

$conn = mysqli_connect($host, $user, $password, $db) or die("Database Connection failed: ". mysqli_error($conn));

mysqli_set_charset($conn, 'utf8mb4');