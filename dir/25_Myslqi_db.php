<?php
$conn1 = mysqli_connect("localhost","root","");
$sql = "create database dbyash";// varialble to store query 
$result = mysqli_query($conn1,$sql);// this function takes 2 parameters 
if($result){
    echo "the db succesfully created";

}
else{
    echo "the db was not created because of this erro --->".mysqli_error($conn1);
}

?>