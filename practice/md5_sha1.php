<?php
$str = "hello";
echo "this is our string  ".$str."<br>";
echo "md5 binary ".md5($str, TRUE)."<br>";
echo "md5 HEX".md5($str)."<br>";
echo "sha1 binary ".sha1($str, TRUE)."<br>";
echo "sha1 HEX ".sha1($str)."<br>";

//matching the string 
if(md5($str) == "5d41402abc4b2a76b9719d911017c592"){
    echo "password matched";
    
}else {
    echo "password not matched";
}
?>