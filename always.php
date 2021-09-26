<?php
require('connection.php');

if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>