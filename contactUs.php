
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
  <body style = "background-color : #2E98EB;">

  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>
  
    <section>
      <div class="jumbotron jumbotron-fluid">
        <div class="container" id="jumbo">
          <h1 class="display-4">Contact Us</h1>
          <p class="lead">Have any new ideas or suggestions on improving the website or any issues?<br> Feel free to contact us, we would love to hear from you</p>
        </div>
      </div>
    </section>

    <section class = "container mb-4">
      <div class = "card card-body" style = "border-radius:30px;"> 
    <form class="row g-3 needs-validation text-body"  >
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" style = "border:1px solid black" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" style = "border:1px solid black" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    
    <div class="input-group has-validation">
     
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"    style = "border:1px solid black" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" style = "border:1px solid black" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required style = "border:1px solid black">
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" style = "border:1px solid black" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>

  <div class = "form-group">
    <div class="col-12">
  <label for="exampleFormControlTextarea1" class="form-label">Feedback/Complaint</label>
  <textarea class="form-control" name = "address" rows="5" style = "border:1px solid black" required></textarea>
</div>
</div>


  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
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




