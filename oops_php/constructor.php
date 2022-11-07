<?php
class bike{
    public $title;
    public $price;
    function __construct($name){
        $this->title = $name;
    }
    function get_name(){
        echo $this->title;
    }
}
$honda = new bike("cbr");
$honda->get_name();
?>