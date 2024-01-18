<?php
$sn = "localhost";
$un = "root";
$pwd = "";
$dbname = "task";

$conn = new mysqli($sn, $un, $pwd, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
