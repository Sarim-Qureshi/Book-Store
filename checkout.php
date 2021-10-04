
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
$conn = mysqli_connect("localhost","root","","bookstore");
$bid = $_GET['bid'];





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
     <div class = " container card card-body mt-5 mb-5">
    
     <form method = "POST" action = "" enctype = multipart/form-data>
      <div class = "row-col-sm-10">
      
      <div class = "form-group">
      <label class="form-check-label" for="fname">Logged In As:</label>
      <label class="form-check-label" name="nbid"><?php echo $custname; ?></label><br>
    </div>

    <div class = "form-group">
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Address to Delivery</label>
  <textarea class="form-control" name = "address" rows="3" style = "border:1px solid black" required></textarea>
</div>
</div>

<div class = "form-group card card-body">
<label class = "form-check-label" for = "summary">Order Summary</label>
<?php 
$conn = mysqli_connect("localhost", "root", "", "bookstore");

$sql = "select * from entrybook where bookid = '$bid'";
$res = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($res)){
  $bid = $row['bookid'];
  $bookname = $row['book_name'];
  $author = $row['author'];
  $price = $row['price'];
  $category = $row['category'];
  $image = $row['book_image'];
      
  if ($category == 1){
    $category = "Fictional";
  }
  elseif ($category == 2)
  {
    $category = "Engineering";

  }
}
?>

<div class = "row">
  <div class = "col-sm-6">
  <div class="card-body">
    <h5 class="card-title">Name:<?php echo $bookname; ?></h5>
    <h5 class="card-title">Author:<?php echo $author; ?></h5>
    <h5 class="card-title">Category:<?php echo $category; ?></h5>
    <h5 class="card-title">Rs:<?php echo $price; ?>/-</h5>

</div>
</div>
<div class = "col-sm-6">
<div class="card mt-5" style="width: 18rem;">
  <img src="<?php echo $image;?>" class="card-img-top" alt="Image not Available">
</div>


</div>
</div>

</div>

<div class = "form-group">
<label class = "form-check-label" for = "payment">Payment Methods</label>

</div>



<div class = "form-group">
<input type = "submit" class = "btn btn-primary" value = "Place Order">
</div>


</div>
</form>



    </div>
</scetion>





         
    
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

  $address = $_POST['address'];
        $sql = "INSERT INTO `order_place`(`ordered_by`, `bookid`,`address`, `book_name`, `book_image`, `author`, `category`, `price`) VALUES ('{$_SESSION['USERNAME']}','$bid','$address','$bookname','$bookimage','$author','$category','$price')";
        mysqli_query($conn,$sql);

        // $sql1 = "delete from entrybook where bookid = '$bid'";
        // mysqli_query($conn,$sql1);

        header('location:confirmed.php?bid='.$bid);


        
}
?>


      








