<!doctype html>
<?php
// require "always.php";
?>
<html lang="en">

<head>
    <title>Book Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">




</head>
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

<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
    </div>




    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Chat Corner</h1>
            <p class="lead">Welcome to the chat corner. Here you will be able to chat with other book lovers. Please
                keep in mind the following practices before proceeding.
            <ul>
                <li> Be respectful towards others.</li>
                <li> Don't share your private information with strangers. </li>
                <li> And lastly have fun. </li>
            </ul>
            </p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-primary btn-lg" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Add Contact
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form method="POST" action="chat.php">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Enter the email of the
                                contact</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" style="border:1px solid black;" name="contact_id" required>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-success" value="Add"><br>

                        </div>

                    </form>
                </div>
            </div>
        </div>


        <h1 style="text-align:center">Your Chats</h1>

        <table class="table table-hover">
            <thead class=" table-dark">
                <tr>

                    <th scope="col">Contacts</th>
                    <th scope="col">Last Message</th>
                    <th scope="col">Timestamp of last message</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']!='') {
                if (require "always.php") {
                    $conn = mysqli_connect("localhost", "root", "", "bookstore");

                    $sql = "select * from chat where username = '{$_SESSION['USERNAME']}' order by timestamp DESC";
                    $result = mysqli_query($conn, $sql);

                    $rows = mysqli_num_rows($result);
                    if ($rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $contact_id = $row['contact'];
                            $last_message = $row['last_message'];
                            $datetime = $row['timestamp'];

                            $sql0 = "select name from register where email = '$contact_id'";
                            $res0 = mysqli_query($conn, $sql0);

                            $contact_name = "";
                            while ($x = mysqli_fetch_assoc($res0)) {
                                $contact_name = "" . $x['name'];
                            }
                            echo '
  <td>' . $contact_name . '</td><br>
  <td>' . $last_message . '</td>
  <td>' . $datetime . '</td>
  <td><h6><span class="badge bg-danger"><a href="#" >Delete</a></span>&nbsp;
  <span class="badge bg-info"><a href="#" >Chat</a></span></h6>
</tr>
  ';
                        }
                    }
                }
                ?>
            </tbody>
            <!-- <tbody>
    <tr>
 
      <td>Mark</td><br>
      <td>Good work </td>
      <td>12:09:07 2021-09-08 </td>
      <td><h6><span class='badge bg-danger'><a href='#' >Delete</a></span>&nbsp;
      <span class='badge bg-info'><a href=#' >Chat</a></span></h6>
    </tr>
    <tr>
   
      <td>Jane</td>
      <td>Dammit</td>
      <td>12:09:07 2021-09-08 </td>
      <td><h6><span class='badge bg-danger'><a href='#' >Delete</a></span>&nbsp;
      <span class='badge bg-info'><a href=#' >Chat</a></span>
      </h6>
    </tr>
    <tr>
  
      <td>Kane</td>
      <td>It will be fine...</td>
      <td>12:09:07 2021-09-08 </td>
      <td><h6><span class='badge bg-danger'><a href='#' >Delete</a></span>&nbsp;
      <span class='badge bg-info'><a href=#' >Chat</a></span>
      </h6>
    </tr>
    <tr>
   
      <td>Harry</td>
      <td>Don't care.</td>
      <td>12:09:07 2021-09-08 </td>
      <td><h6><span class='badge bg-danger'><a href='#' >Delete</a></span>&nbsp;
      <span class='badge bg-info'><a href=#' >Chat</a></span></h6>
    </tr>
  </tbody> -->
        </table>


    </div>













    <footer class="bg-dark text-center text-white" style="margin-top:10%">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "bookstore");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $contact_id = $_POST["contact_id"];

    $sqla = "SELECT * FROM `chat` where `username`='{$_SESSION['USERNAME']}' and `contact` = '$contact_id'";
    $resulta = mysqli_query($conn, $sqla);
    $rowsa = mysqli_num_rows($resulta);
    

    if ($rowsa == 0) {


        $sql0 = "select * from register where email = '$contact_id'";
        $res0 = mysqli_query($conn, $sql0);
        $rows0 = mysqli_num_rows($res0);
        if ($rows0 > 0) {

            $sql = "INSERT into `chat` (`username`, `contact`, `last_message`, `timestamp`) VALUES ('{$_SESSION['USERNAME']}','$contact_id','','')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '
          <script>
          alert("Your contact was added!");
          window.location.href = "chat.php"
          </script>
          ';
            } else {
                echo '
          <script>
          alert("Your contact was not added! Make sure to enter correct email id.");
          window.location.href = "chat.php"
          </script>
          ';
            }
        } else {
            echo '
        <script>
        alert("Your contact was not added! Make sure to enter correct email id.");
        window.location.href = "chat.php"
        </script>
        ';
        }
    } else {
        echo '
    <script>
    alert("Your contact was not added! Contact already exists.");
    window.location.href = "chat.php"
    </script>
    ';
    }
}

?>