<?php 
require_once('connect.php');
$result = $conn->query("SELECT * FROM student"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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

      a button {
        display: inline-block;
        padding: 10px 20px;
        background: #4caf50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 20px;
        transition: 0.3s;
      }

      a button:hover {
        background: #45a049;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      thead {
        background: #4caf50;
        color: white;
      }

      th,
      td {
        text-align: left;
        padding: 12px;
        border-bottom: 1px solid #ddd;
      }

      tr:hover {
        background: #f1f1f1;
      }
      /* Button base style */
a.edit, 
a.delete {
  display: inline-block;
  padding: 6px 14px;
  border-radius: 5px;
  font-size: 14px;
  text-decoration: none;
  color: #fff;
  font-weight: 500;
  transition: background 0.3s, transform 0.2s;
}

/* Edit button */
a.edit {
  background-color: #007bff;
}

a.edit:hover {
  background-color: #0056b3;
  transform: scale(1.05);
}

/* Delete button */
a.delete {
  background-color: #dc3545;
  margin-left: 8px;
}

a.delete:hover {
  background-color: #a71d2a;
  transform: scale(1.05);
}

    </style>
  </head>
  <body>
    <h1>Student Management System</h1>
    <a href="Create.php"><button>Add Student</button></a>
    <table>
      <thead>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Roll No</th>
        <th>Date of birth</th>
        <th>Address</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
  while($row = $result->fetch_assoc()): ?>
       <tr>
          <td><?= $row['Id']?></td>
          <td><?= $row['First_name']?></td>
          <td><?= $row['Last_name']?></td>
          <td><?= $row['Roll_no']?></td>
          <td><?= $row['Date_of_Birth']?></td>
          <td><?= $row['Address']?></td>
          <td>
            <a href="edit.php?Id=<?= $row['Id'] ?>" class="edit">Edit</a>
            <a href="delete.php?Id=<?= $row['Id'] ?>" class="delete">Delete</a>
          </td>
        </tr>
        

        <?php endwhile; ?>
      </tbody>
    </table>
  </body>
</html>
