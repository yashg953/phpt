<?php
abstract class A{
    public $name;
    abstract protected function calc($a, $b);
}
class B extends A{
    public function calc($c, $d){
       echo $c + $d;
       
    }
}
$obj = new B();
$obj->calc(100, 20);

?>
