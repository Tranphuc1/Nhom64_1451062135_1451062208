<?php
ob_start();
session_start();
error_reporting(0);
include_once("ketnoi2.php");
include"header.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Trị Thành Viên Nobita.vn</title>
	<link rel="stylesheet" type="text/css" href="css/quantri.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap-theme.min.css">

</head>
<body>
<div class="topmenu">
	<ul>
		<li><a href="quantri.php?page_layout=user">User</a></li>
		<li><a href="quantri.php?page_layout=danhmucsp">Danh Mục Sách</a></li>
		<li><a href="quantri.php?page_layout=danhsachsp">Danh Sách Sách</a></li>
		<li><a target="_blank" href="http://localhost:8888/btl/index.html">Xem Website</a></li>
	</ul>
</div>
<?php
            switch($_GET['page_layout']){  
                case 'user': include_once('user.php');
                break;
                case 'danhmucsp': include_once('dmsanpham.php');
                break;
                case 'danhsachsp': include_once('danhsachsp.php');
                break;
                default: include_once('user.php');
            }
        ?>
</body>
</html>



 <?php 
 include"footer.php";
  ?>