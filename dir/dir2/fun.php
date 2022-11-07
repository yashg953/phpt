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
  function set_price($price){
    $this->price = $price;
  }
  function get_price(){
    echo $this->price;
  }
  
}
$apple = new mobile();
$samsung = new mobile();
$samsung->set_name("s22 ultra");
$samsung->get_name();
echo "<br>";
$samsung->set_price(110000);
$samsung->get_price();
echo "<br>";
$apple->title = "iphone 14 pro max";
$apple->price = 120000;
echo $apple->title;
echo "<br>";
echo $apple->price;
?>
    