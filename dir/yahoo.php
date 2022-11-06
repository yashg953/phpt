<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo $_REQUEST['fname']."<br>";
echo $_REQUEST['age'];
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['HTTP_HOST'];
?>