<?php
$servername = "localhost";
$username = "root";
$pass = "";
$conn = mysqli_connect($servername,$username,$pass);
if(!$conn){
    die("we failed to connect ".mysqli_connect_error());
}
else{
    echo "connect was succesful";
}
?>