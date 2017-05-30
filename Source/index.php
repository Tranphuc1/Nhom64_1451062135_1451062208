<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="/ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type='text/javascript' src='js/jquery.boxy.js'></script>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />	
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<script type="text/javascript">var app = '';</script>

</head>
<body>
<div id="container">

	<div class="header">
		<div class="Main_logo">
			<img src="./image/logo.png">
		</div>
		<div>
			<form class="searchform" action="" method="get">
				<input class="searchbox" onfocus="if (this.value == 'Search this website …') {this.value = '';}" onblur="if (this.value == '') {this.value = '';}" type="text" name="s" value="" />
				<input class="searchsubmit" type="submit" value="Tìm" />
			</form>
		</div>
	        <div class="shoptool">
                <ul class="right_topbar">
                    <li>
                        <div class="textlable" title="Tài khoản của bạn">
                                Tài khoản của bạn<i class="fa fa-sort-desc"></i>
                        </div>
                            <div class="subcontent">
                                 <div class="buttom">
    								<div><a href="javascript:" class="btn_face" onclick="checkLoginState();"></a></div>
    								<div><a class="btn_login" href="">Đăng nhập</a></div>
    								<div align="center" class="loginlink">Khách hàng mới? <a href="">Tạo tài khoản</a></div>
								</div>
                            </div>
                    </li>
                        <li>
                            <div class="textlable" title="Giỏ hàng">
                                Giỏ hàng (<span class="shownumber">0</span>)
                                <i class="fa fa-sort-desc"></i>
                            </div>
                            <div class="subcontent">
                                <h3>Giỏ hàng</h3>
                                <div id="cartslist">
                                </div>
                                <div class="buttom" id="showcartlink">
                              		<a class="cartlink" href="/orders/carts/gio-hang.html" title="GIỎ HÀNG CỦA TÔI">Xem giỏ hàng<i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </li>
                </ul>
            </div>
    </div>

	<br><h5>DANH MỤC SẢN PHẨM</h5></br>
	<div class="main_menu">
		<ul>
			<li><a href=""><h3>Nổi bật</h3></a>
				<ul class="submenu1">
					<li><a href="">Sách bán chạy</a></li>
					<li><a href="">Sách mới</a></li>
					<li><a href="">Sắp phát hành</a></li>
					<li><a href="">Sắp giảm giá</a></li>
				</ul>
			</li>
			<li><a href="">Sách kinh tế</a>
					<ul class="submenu2">
						<li><a href="">Tài chính- Kế toán</a></li>
						<li><a href="">Quản trị-lãnh đạo</a></li>
						<li><a href="">Maketing-Bán hàng</a></li>
						<li><a href="">Kỹ năng làm việc</a></li>
						<li><a href="">Kinh tế học</a></li>
						<li><a href="">Khởi nghiệp</a></li>
						<li><a href="">Doanh nhân- Tập đoàn</a></li>
						<li><a href="">Bài học kinh doanh</a></li>
					</ul>
			</li>
			<li><a href="">Văn học nước ngoài</a>
					<ul class="submenu3">
						<li><a href="">Tiểu sử-Hồi ký</a></li>
						<li><a href="">Truyện lịch sử-Kiếm hiệp</a></li>
						<li><a href="">Truyện ngắn-Tản văn</a></li>
						<li><a href="">Tác phẩm kinh điển</a></li>
						<li><a href="">Huyền bí-giả tưởng</a></li>
						<li><a href="">Truyện trinh thám</a></li>
						<li><a href="">Tiểu thuyết tình cảm-lãng mạn</a></li>
						<li><a href="">Tiểu thuyết đam mỹ</a></li>
						<li><a href="">Bách hợp</a></li>

					</ul>
			</li>
			<li><a href="">Sách kỹ năng sống</a>
					<ul class="submenu4">
						<li><a href="">Tài chính- Kế toán</a></li>
						<li><a href="">Quản trị-lãnh đạo</a></li>
						<li><a href="">Maketing-Bán hàng</a></li>
						<li><a href="">Kỹ năng làm việc</a></li>
					</ul>
			</li>
			<li><a href="">Sách tuổi teen</a></li>
			<li><a href="">Học ngoại ngữ</a></li>
			<li><a href="">Sách thiếu nhi</a></li>
			<li><a href="">Phương thức đời sống</a></li>
			<li><a href="">Sách chuyên ngành</a></li>
			<li><a href="">Sách văn hóa - Nghệ thuật</a></li>
			<li><a href=""><h3>Công ty phát hành</h3></a></li>
		
		</ul>
	</div>
	<div id="container">
		<div id="mainbanner">
			<div class="mainbaner">
				<link rel="stylesheet" href="jquery.bxslider.css" type="text/css" /> 
		<script type="text/javascript" src="./js/jquery.bxslider.js"></script>
		<div id="slider-wrapper">
    		<ul class="bxslider">
        		<li><a href="" target="_self"><img  height="400" src="./image/1.jpg" title="nhan hinh quan"></a></li>
        		<li><a href="/" target="_self"><img height="400" src="./image/2.jpg" title="gio thoi sach dao bay"></a></li>
        		<li><a href="" target="_self"><img height="400" src="./image/3.jpg" title="nhung ngoi nha ma am"></a></li>
    		</ul>
	</div>
	<script type="text/javascript">
	$(window).load(function()
		{
		$('.bxslider').bxSlider({
			auto: true,
			infiniteLoop: true
		});
	});
	</script>

		</div>
		</div>
		</div>
</body>
</html>