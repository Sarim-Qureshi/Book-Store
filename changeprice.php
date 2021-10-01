
<!doctype html>
<?php
//require('connection.php');
if (require('always.php'))
{
 
  $sql = "select name from register where email = '{$_SESSION['USERNAME']}'";
  $res = mysqli_query($conn,$sql);
  
  $custname = " ";
  while ($x = mysqli_fetch_assoc($res))
  {
  $custname = " ".$x['name'];
  }
  
}


$bid = $_GET['bid'];
$conn = mysqli_connect("localhost","root","","bookstore");

      $sql = "select * from entrybook where bookid= '$bid'";
      $res = mysqli_query($conn,$sql);
     
      while ($row = mysqli_fetch_assoc($res))
      {
          $bname = $row['book_name'];
          $auth = $row['author'];
          $category = $row['category'];
          $price = $row['price'];
        $rent = $row['rent'];

          if ($category == 1){
            $category = "Fictional";
          }
          elseif ($category == 2)
          {
            $category = "Engineering";

          }
          
          if ($rent == 1)
          {
            $rent = "Yes";
          }
          else
          {
            $rent = "No";
          }

        }



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
          <h1 class="display-4">Sell Books</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
    </section>


  <?php
 

  ?>



    <section>
      <div class = "container">
      <div class = "card mb-5" >
        <div class = "card-body">

        
      <form method = "POST" action = "" enctype = multipart/form-data>
      <div class = "container">
        <div class = "row-col-sm-10">
        
        <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Book ID</label><br>
                <label class="form-check-label" name="nbid"><?php echo $bid; ?></label><br>
               </div>
            </div>

          <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Book Name</label><br>
                <label class="form-check-label" name="nbid"><?php echo $bname; ?></label><br>
               
              </div>
            </div>

           

            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Book Front Page</label><br>
               <img src = "bimage" alt = "not available"></img>
              </div>
            </div>



        
            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Author</label><br>
                <label class="form-check-label" name="nbid"><?php echo $auth; ?></label><br>
              </div>
            </div>

            
            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Category</label><br>
                <label class="form-check-label" name="nbid"><?php echo $category; ?></label><br>
              </div>
            </div>

            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Rent Status</label><br>
                <label class="form-check-label" name="nbid"><?php echo $rent; ?></label><br>
              </div>
            </div>




            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">New Price</label><br>
                <input type="price" id="price" name="price" required><br>
              </div>
            </div>
          </div>
        
          <div class = "form-group">
            <div class = "col-sm-6">
              <input type = "submit" class = "btn btn-primary" value = "Submit"><br>
            </div>
          </div>

          <div class = "col-sm-6">
            <img src = "">

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

////for Image upload


if ($_SERVER['REQUEST_METHOD']=='POST'){


  $newprice = $_POST['price'];
//   $bookid = $_POST[]

      
  $sql = "Update entrybook set price = '$newprice' where bookid = '$bid'";
  mysqli_query($conn,$sql);

      






?>

<script>
alert(" Successfull ");
window.location.href = "dash.php";
    </script>
<?php
}
?>


