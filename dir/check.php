<?php 
  $conn11 = mysqli_connect("localhost","root","","contactus");
  if(!$conn11){
    echo "we failed to connnect";
  }
  else{
    echo "we ara connected succefully ";
  }
  $sql1 = "SELECT * FROM `conyash`";
  $result1 = mysqli_query($conn11, $sql1);
  
  $num = mysqli_num_rows($result1);
  echo $num;
  
  ?>