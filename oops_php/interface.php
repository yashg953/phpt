<?php
interface parent1 {
    function calc($a, $B);
    }   

interface parent2 {
    function sub($c, $d);
}
class childclass implements parent1,parent2{
    function calc($a, $b){
        echo $a + $b;
    }
    function sub($c, $d){
        echo $c - $d;
    }
}

$test = new childclass();
$test->calc(10,20);
echo "<br>";
$test->sub(20,10);
?>