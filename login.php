<!doctype html>
<?php



?>

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
body {margin:150;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
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
</style>
  <body>

  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>
  
    <section>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Login Page</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
    </section>

    <section>
      <div class = "container">
      <div class = "card mb-5" style="z-index: 1;">
        <div class = "card-body">

        
      <form method = "POST" action = "checkCredentials.php">
      <div class = "container">
        <div class = "row">
          <div class = "col-sm-6">
            <img src = "https://image.shutterstock.com/image-vector/library-book-shelves-cartoon-vector-260nw-1388485544.jpg" height = "100%" width = "100%">
          </div>
          <div class = "col-sm-6">
            <form action="/action_page.php">
            <div class = "form-group">
              <div class = "col-sm-5">
                <label class="form-check-label" for="fname">Username</label>
                <input type="text" id="username" name="username" required>
              </div>
            </div>
            <div class = "form-group">
              <div class = "col-sm-5">
              <label class="form-check-label" for="lname">Password:</label>
              <input  type="password" id="pass" name="password" required>
            </div>
          </div>
          <div class = "form-group">
            <div class = "col-sm-5">
              <input type = "submit" class = "btn btn-primary" value = "Submit">
            </div>
          </div>

          <div class = "form-group" style="margin-top: 50px;">
            <div class = "col-sm-8" >
              <button class = "btn btn-primary" ><a href = "register.php">Create a new  account</a></button>
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
