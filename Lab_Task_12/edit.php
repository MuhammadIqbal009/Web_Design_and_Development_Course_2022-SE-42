<?php 
require_once('connect.php');
$id = $_GET['Id'];
$Info = $conn->query("SELECT * FROM student WHERE id=$id")->fetch_assoc();


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $roll = $_POST['roll'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $conn->query("UPDATE `student` SET `First_name`='$fname',`Last_name`='$lname',`Roll_no`='$roll',`Date_of_Birth`='$dob',`Address`='$address' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    form {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    label {
      font-weight: bold;
      display: block;
      margin: 10px 0 5px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      display: inline-block;
      padding: 10px 20px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    button:hover {
      background: #45a049;
    }
  </style>
</head>
<body>
    <H1>Edit Student Detail</H1>
    <form action="#" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" required value="<?= $Info['First_name'] ?>">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" required value="<?=$Info['Last_name']?>">

    <label for="roll">Roll No</label>
    <input type="text" id="roll" name="roll" required value="<?=$Info['Roll_no']?>">

    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" required value="<?=$Info['Date_of_Birth']?>">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" required value="<?=$Info['Address']?>">
    

    <button type="submit">Update</button>
  </form>
</body>
</html>