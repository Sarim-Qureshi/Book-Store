
<?php

$mysqli = new mysqli("localhost", "root", "", "bookstore");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$bid = "";
$sql1 = "SELECT bookid,book_name,author,category,price from entrybook WHERE book_name = ?";
$stmt = $mysqli->prepare($sql1);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($bid,$bookname, $author, $category, $price);

while($stmt->fetch()){

  if ($category == 1){
    $category = "Fictional";
  }
  elseif ($category == 2)
  {
    $category = "Engineering";

  }

echo "</tr>";
echo "<tr><td>" . $bookname . "</td>";
echo "<td>" . $author . "</td>";
echo "<td>" . $category . "</td>";
echo "<td>" . $price . "</td>";
// echo "<td><button class = 'btn btn-primary' onclick = 'buyBook()'>Check</button></td>";
echo "<td><span class='badge bg-primary'><a href='orderbook.php?bid=$bid' >Check</a></span>&nbsp
</td>";
echo "</tr>";

}

$stmt->close();



?>