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

  </head>
  <body>
    <section>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Register Page</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
    </section>

    <section>
      <div class = "container">
      <div class = "card mb-5" style="z-index: 1;">
        <div class = "card-body">
    <form method = "POST" action = "" name = "register" onsubmit = "return validate()">
      <div class = "container">
        <div class = "row">
          <div class = "col-sm-6">
            <img src = "https://image.shutterstock.com/image-vector/library-book-shelves-cartoon-vector-260nw-1388485544.jpg" height = "100%" width = "100%">
          </div>
          <div class = "col-sm-6">
            
            <div class = "form-group">
              <div class = "col-sm-5">
                <label class="form-check-label" for="fname">Name</label>
                <input type="text" id="name" name="name" required>
              </div>
            </div>
            <div class = "form-group">
              <div class = "col-sm-5">
              <label class="form-check-label" for="lname">Email</label>
              <input  type="email" id="email" name="email" required>
            </div>
            <div class = "form-group">
              <div class = "col-sm-5">
              <label class="form-check-label" for="lname">Phone Number</label>
              <input  type="text" id="phno" name="phno" required maxlength = 10>
            </div>
            <div class = "form-group">
              <div class = "col-sm-5">
              <label class="form-check-label" for="lname">PASSWORD</label>
              <input  type="password" id="pass" name="pass" required>
            </div>
            <div class = "form-group">
              <div class = "col-sm-5">
              <label class="form-check-label" for="lname">Repeat Password</label>
              <input  type="password" id="rpass" name="rpass" required>
            </div>

            <div class = "form-group" style="margin-top: 50px;">
            <div class = "col-sm-5" >
             <input type = "submit" value = "Register" name = "submit">
          </div>
        </div>
          </div>
         

         

        </form>
            
          </div>
        </div>
      </div>    
         
    
      </form>
    </div>
  </div>
</div>
    </section>
  </body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","bookstore");
if ($_REQUEST['submit']){

        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phno'];
        $pass = $_POST['pass'];

        $sql = "INSERT into register (`name`, `email`, `phone`, `password`) VALUES ('$fullname','$email','$phone','$pass')";
        mysqli_query($conn,$sql);

        $sql1 = "INSERT into users (`username`, `password`) VALUES ('$email','$pass')";
        mysqli_query($conn,$sql1);


?>
<script>
alert("Registration Successfull ! Please Now login to your account");
window.location.href = "login.php";
    </script>
<?php
}


?>