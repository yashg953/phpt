<?php
/*
$a = array("yash", "manish", "ayushi", "rahul", "samsung", "kapil");
$c = array("one"=>"yash", "two"=>"harsh", "three"=>"manish");

foreach($c as $b => $value){
    echo "$b=>$value<br>";
}
echo "<pre>";
print_r ($c);
echo "</pre>";
*/
if($_SERVER['REQUEST_METHOD'] =='POST'){
    echo "<pre>";
print_r ($_REQUEST);
echo "</pre>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>"method = "post">
<input type="text" value="charles" name="name" >
<input type="submit" value="submit" name="submit">
</form>
<body>
</body>
</html>
