<?php
require('connection.php');
    $username = $_POST['username'];  
    $password = $_POST['password'];  

	$sql = "select * from users where `username`='$username' and `password`='$password'";
	$res = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);
    echo $sql;
    echo $count;
  if ($count > 0)
  {
    $_SESSION['LOGIN']='yes';
    $_SESSION['USERNAME']=$username;
    header('location:dash.php'); 
 }
 else{
     header('location:login.php');
 }
  

?>
