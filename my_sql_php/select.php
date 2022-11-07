<?php
require 'connection.php';
$sql ="select *from myguest order by name";
$result = $conn->query($sql);
if(!$result){
   echo $result->error; 
}
if($result->num_rows > 0){
    echo "<table><tr><th>id</th><th>name</th><th>password</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
    }
    echo "</table>";    
}else{
        echo "0 result";
}
$conn->close();
?>
   