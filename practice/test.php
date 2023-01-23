<?php
$obj = array("one"=>1,"two"=>2,"three"=>3);
echo json_encode($obj);
echo "<br>";
$obj1 = json_encode($obj);
var_dump(json_decode($obj1, true));
?>