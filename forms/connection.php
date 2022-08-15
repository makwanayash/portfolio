<?php


$server = 'localhost';
$root = 'root';
$psw = '';
$database = 'portfolio';
$conn = mysqli_connect($server,$root,$psw,$database);
 
// connection query

$conn = mysqli_connect($server,$root,$psw,$database);
 if($conn){
     echo "";

 }
 else{
     echo "not connected";
 }
 
?>