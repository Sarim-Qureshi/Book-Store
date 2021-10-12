<?php
$dfrom = $_COOKIE['from'];
$dto = $_COOKIE['to'];

$dfrom = substr($dfrom, 1, (strlen($dfrom)-2));
$dto = substr($dto, 1, (strlen($dto)-2));

$conn = mysqli_connect("localhost", "root", "", "bookstore");

$sqla = "DELETE from `chat` where `username`='$dfrom' and `contact`='$dto' or `username`='$dto' and `contact`='$dfrom'";
$resulta = mysqli_query($conn, $sqla);

$sqlb = "DELETE from `conversation` where `from`='$dfrom' and `to`='$dto' or `from`='$dto' and `to`='$dfrom'";
$resultb = mysqli_query($conn, $sqlb);

if($resulta and $resultb){

    echo '
    <script>
    alert("Successful");
    location.href="chat.php";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("An error occurred!! Please try again");
    location.href="chat.php";
    </script>
    ';
}


?>