<?php
class mobile{
    public $title;
    public $price;
    function set_name($name){
        $this->title = $name;

    }
    function get_name(){
        echo $this->title;
    }
}
$apple = new mobile();
$samsung = new mobile();
//1. Inside the class (by adding a set_name() method and use $this):
$samsung->set_name("s22 ultra");
$samsung->get_name();
echo "<br>";
//2. Outside the class (by directly changing the property value):
$apple->title = "iphone 14 pro max ";
echo $apple->title;


?>