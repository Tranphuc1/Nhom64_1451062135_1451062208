<?php
session_start();
include("lib_db.php");
include("checklogin.php");
$user = getLoggedUser();
if ($user) {
	header("Location:index.html");
	exit();
}
//1. get input
$username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : "";
$password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : "";
echo $username.$password ;
$error = '';
$checkLogin = 1;
$user = 0;
if (isset($_REQUEST["username"])){
	unset($_SESSION['user']);
	//da nhap thong tin
	//2. Kiem tra
	//2.1.1 tao sql
	$sql ="select * from user";
	$sql .=" where username='{$username}'";
	//echo "sql=[$sql]"; exit();
	//2.1.2 Thuc thi sql
	$user = select_one($sql);
	//print_r($user);exit();
	//co user
	if (!$user){
		//thuc hien co user o day
		$checkLogin = 0;
		$error = 'Khong ton tai username';
	}else{
		//kiem tra pass
		if (($password) != $user['password']){
			$checkLogin = 0;
			$error = 'Password khong dung';
		}
	}
	//dung
	if ($checkLogin){
		//session_start();
		setLoggedUser($user);
		//$_SESSION['user'] = $user;
		//print_r($_SESSION['user']);exit();
		//echo "Ban da login thanh cong,username[$username],password=[$password]";
		//exit();
		//chuyen den trang account
		header("Location:index.html");
		exit();
	}
}
?>
<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web - Đăng nhập hệ thống</title>
<link rel="stylesheet" type="text/css" href="css/dangnhap.css" />
</head>
<body>
<form method="post">
<div id="form-login" class="form-group">
    <h2>Đăng nhập hệ thống</h2>
    <ul>
    <?php  if ($error){ ?>
        <li><?php echo $error ;?></li>
        <?php } ?>
        <li><label class="control-label col-xs-2">tài khoản</label><input type="text" name="username" value="<?php echo $username; ?>" /></li>
        <li><label class="control-label col-xs-2">mật khẩu</label><input type="password" name="password" /></li>
        <li><label>ghi nhớ</label><input type="checkbox" name="check" checked="checked" /></li>
        <li><input type="submit" name="submit" value="Đăng nhập" /> <input type="reset" name="resset" value="Làm mới" /></li>
    </ul>
</div>
</form>
</body>
</html>