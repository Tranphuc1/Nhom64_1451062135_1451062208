<html>
<head>
	<title>Form đăng ký thành viên</title>
</head>
<body>
	<form action="register.php" method="post">
		<table>
			<tr>
				<td colspan="2">Form đăng ký</td>
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
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
			</tr>
 
		</table>
		
	</form>
</body>
</html>