<?php
	//include('check.php');
	$id = $_POST['username'];
	$pass = $_POST['password'];
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		if(checkInputUser($id)==1)
		{
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$link=mysqli_connect($host, $user, $pass);
			mysqli_select_db($link,'nobita.vn');

			$dologin = "select * from user where username ='$id' and password = '$pass'";
			$result = mysqli_query($link,$dologin);

			if($result)
			{
			 echo "Successfully Logged In";
			 echo "Nhap vao day de <a href='http://localhost:8888/btl/index.html/'>Click Here</a>";
			}
			else
			{
			 echo "Wrong Id Or Password";
			}
		}else{
			echo 'Username ko hop le';
		}

	}else
	{
		echo 'Ban chua nhap du lieu';
	}
?>