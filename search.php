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
 

?>