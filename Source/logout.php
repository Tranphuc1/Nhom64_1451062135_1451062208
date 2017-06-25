<?php 
	session_start();
	include("./login/ketnoi.php");
	include("./login/checklogin.php");
	session_destroy();
	header('location:index.html');
 ?>