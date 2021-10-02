
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

  </head>
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
  z-index: 10;
  top: 0;
  width: 100%;
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


/* @media screen and (max-width: 767px)
 {
#jumbo{
  margin-top: 10%;
}
}
@media (min-width:1281px) {
  #jumbo{
  margin-top: 2%;
}
} */


</style>
  <body>

  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>
  
    <section>
      <div class="jumbotron jumbotron-fluid">
        <div class="container" id="jumbo">
          <h1 class="display-4">Login Page</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
    </section>

    <section>
      <div class = "container">
      <div class = "card mb-5" >
        <div class = "card-body">

        
      <form method = "POST" action = "checkCredentials.php">
      <div class = "container">
        <div class = "row">
          <div class = "col-sm-6">
            <img src = "https://image.shutterstock.com/image-vector/library-book-shelves-cartoon-vector-260nw-1388485544.jpg" height = "100%" width = "100%">
          </div>
          <div class = "col-sm-6">

            <!-- <form method="POST" action="checkCredentials.php"> -->
            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Email:</label><br>
                <input type="text" id="username" name="username" required><br>
              </div>
            </div>
            <div class = "form-group">
              <div class = "col-sm-6">
              <label class="form-check-label" for="lname">Password:</label><br>
              <input  type="password" id="pass" name="password" required><br>
            </div>
          </div>
          <div class = "form-group">
            <div class = "col-sm-6">
              <input type = "submit" class = "btn btn-primary" value = "Login"><br>
            </div>
          </div>

          <div class = "form-group" >
            <div class = "col-sm-8" >
              <button class = "btn btn-outline-success" ><a href = "register.php">Create a new  account</a></button>
          </div>
        </div>

        <!-- </form> -->
            
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
