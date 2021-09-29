<?php

$conn = mysqli_connect("localhost", "root", "", "bookstore");
 
if(isset($_REQUEST["term"])){
    $sql = "SELECT * FROM entrybook WHERE book_name LIKE ?";
    
    if($sql = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($sql, "s", $param_term);
        
        $param_term = $_REQUEST["term"] . '%';
        
        if(mysqli_stmt_execute($sql)){
            $result = mysqli_stmt_get_result($sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["book_name"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    mysqli_stmt_close($sql);
}
 


// mysqli_close($conn);

// $conn = mysqli_connect("localhost", "root", "", "bookstore");
$mysqli = new mysqli("localhost", "root", "", "bookstore");
if($mysqli->connect_error) {
  exit('Could not connect');
}




$sql1 = "SELECT book_name,author,category,price from entrybook WHERE book_name = ?";
$stmt = $mysqli->prepare($sql1);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($bookname, $author, $category, $price);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Book Name</th>";
echo "<th>Author</th>";
echo "<th>Category</th>";
echo "<th>Price</th>";
echo "</tr>";
echo "<tr><td>" . $bookname . "</td>";
echo "<td>" . $author . "</td>";
echo "<td>" . $category . "</td>";
echo "<td>" . $price . "</td>";
echo "</tr>";
echo "</table>";






?>