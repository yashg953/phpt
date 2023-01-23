<?php
class A{
    public static $name = "yash";

}
class B extends A{
    public static function pri(){
        echo parent::$name;
    }
}
B::pri();
?>