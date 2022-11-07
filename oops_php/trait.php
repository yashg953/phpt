<?php
trait test{
    public function hello(){
        echo "hello";
        echo "<br>";
    }
}
trait test2{
    public function bye(){
        echo "bye";
        echo "<br>";
    }
}
class A{
    use test,test2;

}
class B{
    use test;
}
$obj = new A();
$obj2 = new B();
$obj2->hello();
$obj->hello();
$obj->bye();
date_default_timezone_set("Asia/Kolkata");
echo date('H:i:s Y-m-d');
header("refresh: 1");
?>