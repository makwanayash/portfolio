<?php
include "connection.php";

$a = $_POST["name"];
$b = $_POST["email"];
$c = $_POST["subject"];
$d = $_POST["message"];


// insert query
$sql = "INSERT INTO message (name,email,subject,your_message) 
VALUES ('$a','$b','$c','$d')";
$result = mysqli_query($conn, $sql);

if ($result) {
  header('location:index.php');

   } else {
     echo "Error:";
    }

?>
