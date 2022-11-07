<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$servername = "localhost";
$username = "root";
$password = "";
$db = "user";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("we failed to connect ".mysqli_connect_error());
}
$login= false;
$showError = false;
$username = $_POST["username"];
$password = $_POST["password"];


  $sql = "select * from user where username ='$username' and password = '$password'";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_row($result);

   if($num == 1 ){
    $login= true;
   }
    else {
        $showError = "invlid credentials";


    }



}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>LOGIN.PHP</title>
  </head>
  <body>
    <h1></h1>
      <?php require'partials/_nav.php';?>
      <?php
      if($login){
      echo '<div class="alert alert-warning alert-success fade show" role="alert">
      <strong>success!</strong> You are logged in 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }
    ?>
       <div class="contianer">
        <h1 class="text-center">LOGIN to our website</h1>
        <form action="/phpt/dir/dir2/login.php" method="post" >
  <div class="form-group col-md-6">
    <label for="username">username</label>
    <input type="text" class="form-control" id="exampleInputEmai" name="username" aria-describedby="emailHelp" placeholder="username">
    
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">login</button>
</form>
       </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>