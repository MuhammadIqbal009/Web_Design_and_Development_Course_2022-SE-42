<?php
$hostname = "localhost";
$username = "root";
$passward = "";
$db = "student";

$conn = new mysqli($hostname,$username,$passward,$db);
if ($conn->connect_error){
    die("connection faild: " . $conn->connect_error);
}

?>