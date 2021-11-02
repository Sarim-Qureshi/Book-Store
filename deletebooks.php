<?php
if (require('always.php')){
$bid = $_GET['bid'];
$sql = "delete from entrybook where bookid = '$bid'";
$res = mysqli_query($conn, $sql);
echo '<script>
window.location.href="dash.php"; 
</script>';
}
?>