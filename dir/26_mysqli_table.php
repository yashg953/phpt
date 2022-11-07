<?php
$conn1 = mysqli_connect("localhost","root","","ygdb");
$sql = "INSERT INTO `samsung` (`id`, `fname`) VALUES (NULL, 'yash7');";
$result = mysqli_query($conn1,$sql);
if($result){
    echo "table has been created ";
}
else {
    echo "table already exits";
}
?>
