<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>"method="POST">
name : <input type="text" name="name"><br>
age : <input type="number" name="age"><br>
<input type="submit"   value ="save"  name="save">

</form>
    <?php
    if(isset($_POST['save'])){
    echo $_POST['name'];
    }
    ?>

</body>
</html>