<?php
$fptr = fopen("yash.txt",'r');

$output = fread($fptr,filesize("yash.txt"));
fclose($fptr);
echo "$output";
?>