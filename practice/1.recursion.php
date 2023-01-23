<?php
$n=10;
function rec($n){
    echo "$n";
    echo "<br>";
    if($n>1){
        $n--;
        rec($n);
    
    }
}

rec($n);

?>