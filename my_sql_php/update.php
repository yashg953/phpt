<?php
require 'connection.php';



    
    $sql ="select *from myguest limit 3";
    $result = $conn->query($sql);
    if($result->num_rows >0){
        echo "<table><tr><th>id</th><th>name</th><th>address</th>";
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
        }
         echo "</table>";
    
}
?>