<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "mydb";

$conn = new mysqli($host, $username, $password, $db);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$sql = "insert into mydb.myguest values('','shubham','dwarka')";
if($conn->query($sql)){
    echo "data insert succesfully";
}else{
    echo $conn->error;
}
?>