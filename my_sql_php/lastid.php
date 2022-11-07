<?php
require 'connection.php';
if($lastid = $conn->insert_id){
    echo $lastid;
}else{
    echo "please insert record first";
}
?>