<?php
class bike{
    public $title;
    public $price;
    function __construct($title,$price){
        $this->title = $title;
        $this->price = $price;

    }
    function get_name(){
        echo $this->title;
    }
    function get_price(){
        echo $this->price;
    }
}
$honda = new bike("cbr",150000);
$honda->get_name();
echo "<br>";
$honda->get_price();
?>