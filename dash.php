<?php
// require('connection.php');
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

$conn = mysqli_connect("localhost", "root", "", "bookstore");
if(isset($_GET['type']) && $_GET['type']!=''){
  $bid = $_GET['bid'];
  $sql = "delete from entrybook where bookid = '$bid'";
  $res = mysqli_query($conn, $sql);

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

    </style>
  </head>
  <body>

  
  
    <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo"> Book Store</a></h1>
        <ul class="list-unstyled components mb-5">
        <li class="">
            <span class="fa fa-login mr-3"></span><?php echo $custname; ?>
          </li>
          <li >
            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li class="active">
              <a href="dash.php"><span class="fa fa-user mr-3"></span> Dashboard</a>
          </li>
          <li>
            <a href="buybooks.php"><span class="fa fa-sticky-note mr-3"></span> Search Books</a>
          </li>
          <li>
            <a href="sellbooks.php"><span class="fa fa-sticky-note mr-3"></span> Sell Books</a>
          </li>
          <li>
            <a href="forum.php"><span class="fa fa-paper-plane mr-3"></span> Discussion Forum</a>
          </li>
          <li>
            <a href="chat.php"><span class="fa fa-paper-plane mr-3"></span> Your chats</a>
          </li>
          <li>
            <a href="logout.php"><span class="fa fa-paper-plane mr-3"></span> Logout</a>
          </li>
        </ul>

    	</nav>
     
      <div class = "container mt-5">
      <div class = "card card-body">
      <?php
      
      $conn = mysqli_connect("localhost","root","","bookstore");
$cuby = "";
$sql = "select count(uploaded_by) as cuby from entrybook where uploaded_by = '{$_SESSION['USERNAME']}'";
$res = mysqli_query($conn,$sql);
while ($x = mysqli_fetch_assoc($res))
{
  $cuby = $x['cuby'];
}
      ?>

      <h1>Your Uploaded books Total No: <?php echo $cuby ?>&nbsp;&nbsp;<span class='badge bg-primary'><a href='sellbooks.php' >Add New Book</a></span>   </h1> 
      
      <table class="table table-hover">
    <thead>
      <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Category</th>
        <th>Rent</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php

$conn = mysqli_connect("localhost","root","","bookstore");
$cuby = "";
      $sql = "select * from entrybook where uploaded_by = '{$_SESSION['USERNAME']}'";
      $res = mysqli_query($conn,$sql);
     
      while ($row = mysqli_fetch_assoc($res))
      {
          $bname = $row['book_name'];
          $bid = $row['bookid'];
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



      ?>
<tr>
        <td><?php echo $bid ?></td>
        <td><?php echo $bname ?></td>
        <td><?php echo $auth ?></td>
        <td><?php echo $category ?></td>
        <td><?php echo $rent ?></td>
        <td><?php echo $price ?></td>
      <?php  echo "<td><span class='badge bg-primary'><a href='?type=delete&bid=$bid' >Delete</a></span>&nbsp;
      <span class='badge bg-primary'><a href='changeprice.php?&bid=$bid' >Change Price</a></span>
</td>"; ?>



      </tr>
     <?php } ?>
    </tbody>
  </table>


      
    
 

  


    </div>
    </div>
    </div>
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

<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>
<?php


?>