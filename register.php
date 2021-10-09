<!doctype html>



<html lang="en">
  <head>
    <title>Book Store</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

    <script>
        function validate(){
            var phone = document.register.phno.value;
            if (phone.length < 10)
            {
                alert("Please enter a valid phone number");
                document.register.phno.focus();
                return false;
            }
            
            var password = document.register.pass.value;
            var repeat = document.register.rpass.value;
            if (password!= repeat)
            {
                alert("Please Enter the Same Password both the fields");
                return false;
            }
        }
        </script>
  <style>

     a{
        text-decoration: none;
        color:#fff;
      }
      a:link{
        color: #fff;
      }
      a:visited{
        color: #fff;
      }





body {margin:150;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  top: 0;
  width: 100%;
  z-index: 10;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 150px;
  height: 1500px; /* Used in this example to enable scrolling */
}



</style>
  </head>
  <body>
  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>


    <section>
      <div class="container" id="jumbo">
      <div class="jumbotron "  style="background-color:beige">
          <h1 class="display-4 ">Register Page</h1>
          <hr>
          <p class="lead">Register yourself to get some amazing features like:</p>
          <hr>
          <ul>
            <li>Upload books to sell, rent or donate</li>
            <li>Start a discussion and comment on any discussion in the discussion forum</li>
            <li>Chat with the seller of a book or any other person registered to book store</li>
          </ul>
          <hr>
        </div>
      </div>
    </section>

    <section>
      <div class = "container" >
      <div class = "card mb-5" style="border:3px groove black;  box-shadow: -5px -5px #888888;  border-radius: 40px; font-weight:bold; font-size:1.1em;">
        <div class = "card-body">
    <form method = "POST" action = "" name = "register" onsubmit = "return validate()">
      <div class = "container">
        <div class = "row">
          <div class = "col-sm-6">
            <img src = "https://image.shutterstock.com/image-vector/library-book-shelves-cartoon-vector-260nw-1388485544.jpg" height = "100%" width = "100%">
          </div>
          <div class = "col-sm-6">
            
            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Name</label><br>
                <input type="text" id="name" name="name" required><br>
              </div>
            </div>
            <div class = "form-group">
              <div class = "col-sm-6">
              <label class="form-check-label" for="lname">Email</label><br>
              <input  type="email" id="email" name="email" required><br>
            </div>
            <div class = "form-group">
              <div class = "col-sm-6">
              <label class="form-check-label" for="lname">Phone Number</label><br>
              <input  type="text" id="phno" name="phno" required maxlength = 10><br>
            </div>
            <div class = "form-group">
              <div class = "col-sm-6">
              <label class="form-check-label" for="lname">Password</label><br>
              <input  type="password" id="pass" name="pass" required><br>
            </div>
            <div class = "form-group">
              <div class = "col-sm-6">
              <label class="form-check-label" for="lname">Repeat Password</label><br>
              <input  type="password" id="rpass" name="rpass" required><br>
            </div>


            <div class = "form-group" style="margin-top:10px">
            <div class = "col-sm-8" >
              <input class = "btn btn-success" name="submit" type="submit" value="Register"><br>
          </div>
        </div>
</form>
<form method="GET" action="login.php">
        <div class = "form-group" >
            <div class = "col-sm-8" >
              <button class = "btn btn-outline-primary" ><a href = "login.php">Already have an new account?</a></button>
          </div>
        </div>


            <!-- <div class = "form-group">
            <div class = "col-sm-6" >
             <input type = "submit" value = "Register" name = "submit">
          </div>
        </div> -->
          </div>
         

         

  
            
          </div>
        </div>
      </div>    
         
    
      </form>
    </div>
  </div>
</div>
    </section>
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <a href="">About Us</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="">Contact Us</a>
     
     
      
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © <script>document.write(new Date().getFullYear())</script> Copyright: Book Store
      </div>
      <!-- Copyright -->
    </footer>
  </body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","bookstore");
if ($_SERVER['REQUEST_METHOD']=='POST'){

        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phno'];
        $pass = $_POST['pass'];
        $pass=password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT into register (`name`, `email`, `phone`, `password`) VALUES ('$fullname','$email','$phone','$pass')";
        $res1 = mysqli_query($conn,$sql);

        $sql1 = "INSERT into users (`username`, `password`) VALUES ('$email','$pass')";
        $res2 = mysqli_query($conn,$sql1);


if($res1 and $res2){
  echo '
<script>
alert("Registration Successfull ! Please Now login to your account");
window.location.href = "login.php";
    </script>
    ';
}
else{
  echo '
<script>
alert("Account already exists ! Enter unique email id");
window.location.href = "register.php";
    </script>
    ';
}

}


?>