<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">



    <style>
    a {
        text-decoration: none;
        color: #fff;
    }

    a:link {
        color: #fff;
    }

    a:visited {
        color: #fff;
    }





    body {
        margin: 150;
    }

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
        height: 1500px;
        /* Used in this example to enable scrolling */
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



</head>

<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
    </div>


    <div class="container">
        <?php
    $forum_id = $_GET['fid'];

    $conn = mysqli_connect("localhost", "root", "", "bookstore");
    $sql = "select * from forumnew where id='$forum_id'";
    $result = mysqli_query($conn, $sql);

    $title = "";
    $description = "";
    $date = "";

while ($row = mysqli_fetch_assoc($result))
{
    $title = $row['title'];
    $description = $row['description'];
    $date = $row['created'];

}


echo'
    <div class="jumbotron">
    <h1 class="display-4">'.$title.'</h1>
    <p class="lead">'.$description.'</p>
    <hr class="my-4">
   
';
session_start();
if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']!=''){

//   echo '
//   <p class="lead">
//     <a class="btn btn-primary btn-lg" href="#" role="button">Add comment</a>
//   </p>
// </div>
//   ';

   echo '
   <p class="lead">
  <a class="btn btn-primary btn-lg" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Add Comment
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <form method="POST" action="comments.php?fid='.$forum_id.'">
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Enter your comment</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="border:1px solid black;" name="comment" required></textarea>
  </div>

  
  <div class = "mb-3">
    <input type = "submit" class = "btn btn-success" value = "Post"><br>

</div>

  </form>
  </div>
</div>
</div>
   ';
}else{
	echo '
  <h5>Please <a href="login.php" style="color:#339;">login</a> to comment.</h5>
  </div>
  
  ';
}

    ?>



<?php

$conn = mysqli_connect("localhost", "root", "", "bookstore");
$sql = "select * from comment where id='$forum_id' order by datetime DESC";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if($rows>0){
  echo '
  <h1 style="text-align:center;">Browse comments</h1>
  <hr>
  ';
    $i=1;
    while ($row = mysqli_fetch_assoc($result))
    {
    $name = $row['name'];
    $comment = $row['comment'];
    $datetime = $row['datetime'];

    echo '
    
    <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-heading'.$i.'">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$i.'" aria-expanded="false" aria-controls="flush-collapse'.$i.'">
          <img src="images/usericonnew.png" alt="" width="7%"> &nbsp;&nbsp; <font style="font-size:1.1em;">'.$name.'</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font style="font-size:0.82em;" class="text-end">Posted on &nbsp;'.$datetime.'</font>
        </button>
      </h2>
      <div id="flush-collapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$i.'" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">'.$comment.'</div>
      </div>
    </div>
    </div>
    <hr>
    ';
    $i++;
    }
}
else{
  echo'
  <h1 style="text-align:center;">No comments</h1>
  <p style="text-align:center; font-size:1.5em">Be the first person to comment!</p>
  ';
  
}

?>


<!-- 
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          <img src="images/usericonnew.png" alt="" width="4%">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div> -->




    </div>

    <footer class="bg-dark text-center text-white" style="margin-top:5%">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <a href="">About Us</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="">Contact Us</a>



        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © <script>
            document.write(new Date().getFullYear())
            </script> Copyright: Book Store
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>

<?php
$conn = mysqli_connect("localhost","root","","bookstore");
if ($_SERVER['REQUEST_METHOD']=='POST'){

        $comment = $_POST["comment"];
        $comment = str_replace("'", "\'", $comment);
        $comment = str_replace("<", "&lt;", $comment);
        $comment = str_replace(">", "&gt;", $comment);
        $id = $_GET["fid"];
        $date = date('Y-m-d H:i:s');
        
        $sql0 = "select name from register where email = '{$_SESSION['USERNAME']}'";
        $res = mysqli_query($conn,$sql0);
        
        $name = "";
        while ($x = mysqli_fetch_assoc($res))
        {
        $name = "".$x['name'];
        }

        $sql = "INSERT into comment (`id`, `name`, `comment`, `datetime`) VALUES ('$id','$name','$comment',CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo '
          <script>
          alert("Your comment was added!");
          window.location.href = "comments.php?fid='.$id.'"
          </script>
          ';
         
        }
        else{
          echo '
          <script>
          alert("An error occurred! Your comment was not added!");
          window.location.href = "comments.php?fid='.$id.'"
          </script>
          ';
        }

        
}

?>