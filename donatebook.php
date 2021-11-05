
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
$check=1;
$bid;
while($check>0){
  $bid = mt_rand();
  $sql = "select bookid from entrybook where bookid = '$bid'";
  $res = mysqli_query($conn, $sql);
  $check = mysqli_num_rows($res);
}

// $sql = "select bookid from entrybook where bookid = '$bookid'";
// $res = mysqli_query($conn,$sql);
// $check = mysqli_num_rows($res);
// while ($x = mysqli_fetch_assoc($res))
// {
//   $dataid = $x['bookid'];
  
// }







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
          <h1 class="display-4">Donate Books</h1>
          <p class="lead">Upload your books here to donate. The price of the book uploaded here will be Rs. 0.</p>
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
                <input type="text" id="bname" name="bname" required><br>
              </div>
            </div>

           

            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Book Front Page</label><br>
                <input type="file" id="bimg" name="file" required><br>
              </div>
            </div>



        
            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Author</label><br>
                <input type="text" id="author" name="author" required><br>
              </div>
            </div>

            
            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Category</label><br>
                <select type="select" id="catg" name="catg" required><br>
                <option value = "1">Fictional</option>
                <option value = "2">Engineering</option>
                <option value = "0">others</option>
                </select>
              </div>
            </div>

            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Price</label><br>
                <input type="price" id="price" name="price" value="0" readonly><br>
              </div>
            </div>
          </div>

            <div class = "form-group">
              <div class = "col-sm-6">
                <label class="form-check-label" for="fname">Description</label><br>
                <textarea id="desc" name="desc" rows="4" cols="50" required></textarea><br>
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
        <a href="aboutUs.php">About Us</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="contactUs.php">Contact Us</a>
     
     
      
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

  //$bookid = $_POST['nbid'];
  $bookname = $_POST['bname'];
  $categ = $_POST['catg'];
  $auth = $_POST['author'];
  $price = $_POST['price'];
  $desc = $_POST['desc'];
  

  $targetDir = "uploads/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  
  if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

          }
        }
      }
  
      
  $sql = "INSERT INTO entrybook (`uploaded_by`,`bookid`, `book_name`, `book_image`, `author`, `category`, `price`, `description`) VALUES ('{$_SESSION['USERNAME']}','$bid','$bookname','".$fileName."','$auth','$categ','$price','$desc')";
  mysqli_query($conn,$sql);

      
  
  $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
  //you keep your column name setting for insertion. I keep image type Blob.
  $query = "INSERT INTO bookimage (`bookid`, `image`) VALUES('$bid','$image')";  
  mysqli_query($conn, $query);





?>

<script>
alert(" Successfull ");
window.location.href = "dash.php";
    </script>
<?php
}


?>


