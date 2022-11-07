<?php
class bike{
    public $title;
    public $price;
    function __construct($title){
        $this->title = $title;
    }
}
class bike2 extends bike{
    function display(){
      echo  $this->title;
    }

}
$honda = new bike2("cbr");
$honda->display();





?>