<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "user";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("we failed to connect ".mysqli_connect_error());
}
?>