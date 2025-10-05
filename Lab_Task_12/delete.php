<?php
     require_once('connect.php');
     $id = $_GET['Id'];
     $conn->query("DELETE FROM student WHERE id=$id ");
     header("Location: index.php");
?>