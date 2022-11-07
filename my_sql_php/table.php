<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "mydb";
$conn = new mysqli($host, $username, $password, $db);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$sql = "create table mydb.myguest(id int AUTO_INCREMENT,
name varchar(20) not null,
address varchar(30) not null,
PRIMARY KEY (id)
)";
if($conn->query($sql)){
    echo "table has been created:";
}else{
    echo "error creating table".$conn->error;
}
$conn->close();
?>


