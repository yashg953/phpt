<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        table,th {
            border: 1px solid blue;
           margin: 100px 10px 20px 446px;
           
        
        }
        td{
            border: 1px solid rgb(217, 106, 187);
        }
        h1{
            text-align: center; 
    
        }
        .con{
            align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <?php require'partials/_nav.php';?>
    <h1>this is admin login page</h1>
    <?php
    include 'connect.php';
    if($_POST['update']){
    }





    $sql = "select *from user1";
    $result = mysqli_query($conn,$sql);
    echo "<table><tr><th>id</th><th>username</th><th>phone</th><th>email</th><th>usertype</th></tr>";
    while($a = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$a['id']."</td><td>".$a['username']."</td><td>".$a['phone']."</td><td>".$a['email']."</td><td>".$a['usertype']."</td>";

    }
    echo "</table>";
    
?>

</body>
</html>
