<html>
	<head>
		<title> Form đăng ký thành viên</title>
	</head>
	<body>
		<?php
		require_once("ketnoi.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $fullname = $_POST["fullname"];
  			$gioitinh = $_POST["gioitinh"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $fullname == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from user where username='$username'";
					$kt=mysqli_query($conn, $sql);
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO user(
	    					username,
	    					password,
	    					fullname,
						    gioitinh
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$fullname',
	    					'$gioitinh'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file ketnoi.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
	?>
	<form action="register.php" method="post">
		<table>
			<tr>
				<td colspan="2">Form dang ky</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Full Name :</td>
				<td><input type="text" id="name" name="fullname"></td>
			</tr>
			<tr>
                    <td>
                        Giới tính :
                    </td>
                    <td>
                        <select name="gioitinh">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </td>
            </tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng Ký"></td>
			</tr>

		</table>

	</form>
	</body>
	</html>