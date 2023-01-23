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
$showAlert= false;
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$email = $_POST["email"];
$exits=false;   
$usertype = "student";
$phone = $_POST["phone"];
$email = $_POST['email'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
  if($password == $cpassword && $exits==false){
    $sql = "INSERT INTO `user1` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES ('', '$username', '$phone', '$email', '$usertype', '$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
     $showAlert= true;
    }
   
   
 
 
 }
 else{
   echo "password and confirm password don't match";
 }
}else{
  echo "email is not valid";
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

    <title>signup</title>
  </head>
  <body>
    <h1></h1>
      <?php require'partials/_nav.php';?>
      <?php
      if($showAlert){
      echo '<div class="alert alert-warning alert-success fade show" role="alert">
      <strong>success!</strong> You should check in on some of those fields below.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }
    ?>
       <div class="contianer">
        <h1 class="text-center">signup to our website</h1>
        <form action="/phpt/dir/dir2/signup.php" method="post" >
        <div class="form-group col-md-6">
    <label for="username">username</label>
    <input type="text" class="form-control" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="username">

    
  </div>
  <div class="form-group col-md-6">
    <label for="phone">phone</label>
    <input type="number" class="form-control" id="exampleInputEmail" name="phone" aria-describedby="emailHelp" placeholder="phone">
    
  </div>
  <div class="form-group col-md-6">
    <label for="email">email</label>
    <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="email">
    
  </div>
  </div>
  <div class="form-group col-md-6">
    <label for="password">password</label>
    <input type="password" class="form-control" id="exampleInputEmai" name="password" aria-describedby="emailHelp" placeholder="password">
    
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword">cpassword</label>
    <input type="password" class="form-control" id="exampleInputEmai" name="cpassword" aria-describedby="emailHelp" placeholder="cpassword">
    
  </div>
  
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
       </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
