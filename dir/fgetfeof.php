<?php  
$fptr = fopen("yash.txt",'r');
while(!feof($fptr)){
    $y = fgets($fptr)."<br>";
    echo $y;
}
?>