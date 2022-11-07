<?php
$host = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($host,$username,$password);
if($conn->connect_error){
    die("failed to connect ". $conn->connect_error);

}
  $sql = "create database mydb";
  if($conn->query($sql)){
    echo "database succesfully created ";
  }else{
    echo "error creating database: ".$conn->error;
  }

  $conn->close();
  ?>
