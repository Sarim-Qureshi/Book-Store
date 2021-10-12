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

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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



   
    .chat
{
    list-style: none;
    margin: 0;
    padding: 0;
}

.chat li
{
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
}

.chat li.left .chat-body
{
    margin-left: 60px;
}

.chat li.right .chat-body
{
    margin-right: 60px;
}


.chat li .chat-body p
{
    margin: 0;
    color: #777777;
}

.panel .slidedown .glyphicon, .chat .glyphicon
{
    margin-right: 5px;
}

.panel-body
{
    overflow-y: scroll;
    height: 60vh;
}

::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>



<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
    </div>




    <div class="container">
        <h1 style="text-align:center">Conversation Screen</h1><br>
    <div class="row">

        <div class="col-md-12" >
            <div class="panel panel-primary"  style=" border:1px solid black; background-color:beige">
                <div class="panel-heading" style="text-align:center; font-size:1.2em; background-color:#222; border:2px solid black;">
                  Chat
                    <!-- <div class="btn-group pull-right">
                        
                       
                    </div> -->
                </div>
                <div class="panel-body"  style=" border:1px solid black;">
                    <ul class="chat">




<?php
$user = $_GET['user'];
$contact_id = $_GET['contact_id'];
$contact_name = $_GET['contact_name'];


$conn = mysqli_connect("localhost", "root", "", "bookstore");
$sql = "select * from conversation where `from`='$user' and `to`='$contact_id' or `from`='$contact_id' and `to`='$user' order by datetime";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if($rows>0){
    while ($row = mysqli_fetch_assoc($result))
    {
    $from = $row['from'];
    $to = $row['to'];
    $datetime = $row['datetime'];
    $message = $row['message'];

    if(strcmp($from, $user) == 0){

        echo'
        <li class="right clearfix"><span class="chat-img pull-right">
                       
        </span>
            <div class="chat-body clearfix" >
                <div class="header">
                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'.$datetime.'</small>
                    <strong class="pull-right primary-font">You</strong>
                </div>
                <p>
                   '.$message.'
                </p>
            </div>
        </li>
        ';
    }
    else{

        echo '
        <li class="left clearfix"><span class="chat-img pull-left">
                         
                            <img src="http://placehold.it/50/1e3f66/fff&text=user" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">'.$contact_name.'</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>'.$datetime.'</small>
                                </div>
                                <p>
                                   '.$message.'
                                </p>
                            </div>
                        </li>
        ';

    }


    }
}


                    

echo'
                    </ul>
                </div>
                <?php
                
               
                
                
                <div class="panel-footer"  style=" border:1px solid black;">
                <form action="conversation.php?user='.$user.'&contact_id='.$contact_id.'&contact_name='.$contact_name.'" method="POST">
                    <div class="input-group">
                        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." / required >
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-success btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                    </form>
                </div>
                ';
                ?>
            </div>
        </div>
    </div>
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
$conn = mysqli_connect("localhost","root","","bookstore");
if ($_SERVER['REQUEST_METHOD']=='POST'){

        $message = $_POST["message"];
        $message = str_replace("'", "\'", $message);
        $message = str_replace("<", "&lt;", $message);
        $message = str_replace(">", "&gt;", $message);

        $user = $_GET["user"];
        $contact_id = $_GET["contact_id"];
        $contact_name = $_GET["contact_name"];
        $date = date('Y-m-d H:i:s');
        

        $sql1 = "INSERT into conversation (`from`, `to`, `datetime`, `message`) VALUES ('$user','$contact_id',CURRENT_TIMESTAMP,'$message')";
        $result1 = mysqli_query($conn,$sql1);

        $sql2 = " UPDATE `chat` set `last_message`='$message', `timestamp`=CURRENT_TIMESTAMP where `username`='$user' and `contact`='$contact_id' or `username`='$contact_id' and `contact`='$user'";
        $result2 = mysqli_query($conn,$sql2);

        
        if($result1 and $result2){
          echo '
          <script>
          alert("Your message was sent!");
          window.location.href = "conversation.php?user='.$user.'&contact_id='.$contact_id.'&contact_name='.$contact_name.'"
          </script>
          ';
         
        }
        else{
          echo '
          <script>
          alert("An error occurred! Your message was not sent!");
          window.location.href = "conversation.php?user='.$user.'&contact_id='.$contact_id.'&contact_name='.$contact_name.'"
          </script>
          ';
        }

        
}

?>






                        <!-- <li class="left clearfix"><span class="chat-img pull-left">
                         
                            <img src="http://placehold.it/50/1e3f66/fff&text=user" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                       
                        </span>
                            <div class="chat-body clearfix" >
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">You</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/1e3f66/fff&text=user" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li> -->










                        <!-- <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix" >
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>

                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix" >
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">You</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li> -->
                        