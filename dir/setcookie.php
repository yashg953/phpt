<?php
$name = "user";
$value = "yash";
setcookie($name, $value, time() + (86400 *30),"/");
echo $_COOKIE[$name];

// but some times some people turn of there cookie save setting in that time echo line will give error for that we should place echo statemtn in if statement


?>