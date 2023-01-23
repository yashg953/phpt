<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>welcome</title>
  </head>
  <body>
    
      <?php require'partials/_nav.php';?>
      <h1> user information</h1>
    <!-- Optional JavaScript -->
     <?php 
     include 'connect.php';
     session_start();
     

    if(isset($_POST['update']))
    {
      $sql = "update user1 set phone ='".$_POST['phone']."',email ='".$_POST['email']."' where id ='".$_SESSION['no']."' ";

      mysqli_query($conn,$sql);
      $sql = "select * from user1 where id ='".$_SESSION['no']."'";
      $result = mysqli_query($conn ,$sql);
      

      if($result)
      {
          $row = mysqli_fetch_assoc($result);
          if(!empty($row))
          {
            $_SESSION['phone']= $row["phone"];
            $_SESSION['email']= $row["email"];
            echo $_SESSION['username']."<br>";
            echo $_SESSION['phone']."<br>";
            echo $_SESSION['email'];
          }
      }
      else{
        die("error".mysqli_connect_error());
      }

    }
    else{
       
     if(isset($_SESSION['loggedin']))
     {
     echo $_SESSION['username']."<br>";
     echo $_SESSION['phone']."<br>";
     echo $_SESSION['email'];
              
   }else{
      header("location: login.php");
    }
    }
    ?>
    <form action="/phpt/dir/dir2/welcome.php" method ="POST">
    <div class="con" style="display: inline-">
    <div class="form-group col-md-6">
    <label for="username">phone</label>
    <input type="number" class="form-control" id="exampleInputEmai" name="phone" aria-describedby="emailHelp" placeholder="number" style="width: 150px">
    
    </div>
    <div class="form-group col-md-6">
    <label for="email">email</label>
    <input type="email" class="form-control" id="exampleInputEmai" name="email" aria-describedby="emailHelp" placeholder="email" style="width: 150px">
    
    </div>
    </div>
    

    <input type="submit" value= "update" name="update">



    </form>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>