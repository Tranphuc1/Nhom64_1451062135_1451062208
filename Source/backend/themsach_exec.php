 <?php
session_start();
include_once('ketnoi2.php');
 // include('../login/checklogin.php');
  //$user = checkLoggedUser();
	//print_r($_REQUEST);exit();
	//print_r($_FILES);exit();
	//buoc 1
	//upload file
	/*$anh_sp = '';
	if (isset($_FILES['anh_sp'])){
		$fitem = $_FILES['anh_sp'];
		$filename = pathinfo($fitem['name'],PATHINFO_FILENAME);
		$ext = pathinfo($fitem['name'],PATHINFO_EXTENSION);
		$extra = time();
		$toFile = "img/{$filename}-{$extra}.{$ext}";
		if (move_uploaded_file($fitem['tmp_name'],$toFile)){
			$anh_sp = $toFile;
		}
	}
	*/
	$upload_image=$_FILES["anh_sp"]["name"];
	move_uploaded_file($_FILES['anh_sp']['tmp_name'],'./img/'.$_FILES["anh_sp"]["name"]);
	//end upload file
//print_r($_REQUEST);exit();
//get input
$id_dm = isset($_REQUEST["id_dm"]) ? $_REQUEST["id_dm"]* 1 : 0;
$ten_sp = isset($_REQUEST["ten_sp"]) ? $_REQUEST["ten_sp"] : "";
$gia_sp = isset($_REQUEST["gia_sp"]) ? $_REQUEST["gia_sp"] * 1: 0;
// $anh_sp = isset($_REQUEST["anh_sp"]) ? $_REQUEST["anh_sp"] : "";
$khuyen_mai = isset($_REQUEST["khuyen_mai"]) ? $_REQUEST["khuyen_mai"] : "";
$tinh_trang = isset($_REQUEST["tinh_trang"]) ? $_REQUEST["tinh_trang"] : "";
$trang_thai = isset($_REQUEST["trang_thai"]) ? $_REQUEST["trang_thai"] : "";
$chi_tiet_sp = isset($_REQUEST["chi_tiet_sp"]) ? $_REQUEST["chi_tiet_sp"] : "";
//buoi 2.1 :tao sql
$sql = "INSERT INTO sanpham (id_dm,ten_sp,gia_sp,anh_sp,khuyen_mai,tinh_trang,trang_thai,chi_tiet_sp) ";
$sql .= " VALUES (";
$sql .= "	'{$id_dm}', ";
$sql .= "	'{$ten_sp}', ";
$sql .= "	'{$gia_sp}', ";
$sql .= " '{$upload_image}', ";
$sql .= "	'{$khuyen_mai}' ,";
$sql .= "	'{$tinh_trang}', ";
$sql .= "	'{$ban_chay}', ";
$sql .= "	'{$chi_tiet_sp}' ";
$sql .= ")";
//echo "sql=[$sql]"; exit();

//Thuc thi sql
$ret = 0;
$ret = exec_update($sql);
if ($ten_sp){
header("Location:danhsachsp.php");
exit();
	}
	?>
	<html>
<head>
	<meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
</head>
<style>
label{width:200px;float:left;}
button{width:111px; height: 45px; font-size: 18px; border-radius: 6px; margin: 30px 120px;}
</style>
<body>
<?php if ($ret) {?>
Bạn đã thêm thành công sản phẩm <?php echo $ten_sp?>
<?php }else {?>
<?php }?>
<br/> 
<a href="quantri.php?page_layout=themsach"><button>Thêm Tiếp</button></a>
<a href="quantri.php?page_layout=danhsachsp"><button>Trở về</button></a>
</body>
</html>