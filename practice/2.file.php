<?php
class A{
    public $n;
    function rec($n){
        echo "$n";
        echo "<br>";
        if($n>1){
            $n--;
            rec($n);
        
        }
    }
}