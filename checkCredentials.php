
<?php
// require('connection.php');
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $username = $_POST['username'];  
  $password = $_POST['password'];  
  $conn = mysqli_connect("localhost","root","","bookstore");
	$sql = "select * from users where `username`='$username'";
	$res = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);
    // echo $sql;
    echo $count;

  if ($count > 0)
  {
    $row = mysqli_fetch_assoc($res);
    $verify = password_verify($password, $row['password']);
    if($verify){
 
    $_SESSION['LOGIN']='yes';
    $_SESSION['USERNAME']=$username;
    // header('location:dash.php'); 
    echo'
    <script type = "text/javascript"> 
   alert("Login successful");
    window.location.href = "dash.php";
    </script>
    ';
    }
    else{
      echo '
      <script type = "text/javascript"> 
      alert("Invalid Username or Password");
      window.location.href = "login.php";
      </script>
      ';
    }
 }

 else{

     echo '
     <script type = "text/javascript"> 
     alert("Invalid Username or Password");
     window.location.href = "login.php";
     </script>
';
 }
}
?>
