<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="tranphuc1.css">
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
		<div class="left_header">	
			<div class="Main_logo">
				<img src="./image/logo.png">
			</div>
		</div>
		<div class="right_header">
				<form class="searchform" action="" method="get">
					<input class="searchbox" onfocus="if (this.value == 'Search this website …') {this.value = '';}" onblur="if (this.value == '') {this.value = '';}" type="text" name="s" value="" />
					<input class="searchsubmit" type="submit" value="Tìm" />
				</form>
			<div class="shoptool">
						Chào <?php echo $_SESSION['username'];  ?>
	                        <li>
	                            <div class="textlable2" title="Giỏ hàng">Giỏ hàng (<span class="shownumber">0</span>)
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
    </div>

	<br><h5>DANH MỤC SẢN PHẨM</h5></br>
	<div class="main_menu">
		<ul>
			<li><a href="" style="height: 50px;"><h4>Nổi bật</h4></a>
				<ul class="submenu1">
					<li><a href="" target="_self">Sách bán chạy</a></li>
					<li><a href="" target="_self">Sách mới</a></li>
					<li><a href="" target="_self">Sắp phát hành</a></li>
					<li><a href="" target="_self">Sắp giảm giá</a></li>
				</ul>
			</li>
			<li><a href="">Sách kinh tế</a>
					<ul class="submenu2">
						<li><a href="" target="_self">Tài chính- Kế toán</a></li>
						<li><a href="" target="_self">Quản trị-lãnh đạo</a></li>
						<li><a href="" target="_self">Maketing-Bán hàng</a></li>
						<li><a href="" target="_self">Kỹ năng làm việc</a></li>
						<li><a href="" target="_self">Kinh tế học</a></li>
						<li><a href="" target="_self">Khởi nghiệp</a></li>
						<li><a href="" target="_self">Doanh nhân- Tập đoàn</a></li>
						<li><a href="" target="_self">Bài học kinh doanh</a></li>
					</ul>
			</li>
			<li><a href="">Văn học nước ngoài</a>
					<ul class="submenu3">
						<li><a href="" target="_self">Tiểu sử-Hồi ký</a></li>
						<li><a href="" target="_self">Truyện lịch sử-Kiếm hiệp</a></li>
						<li><a href="" target="_self">Truyện ngắn-Tản văn</a></li>
						<li><a href="" target="_self">Tác phẩm kinh điển</a></li>
						<li><a href="" target="_self">Huyền bí-giả tưởng</a></li>
						<li><a href="" target="_self">Truyện trinh thám</a></li>
						<li><a href="" target="_self">Tiểu thuyết tình cảm-lãng mạn</a></li>
						<li><a href="" target="_self">Tiểu thuyết đam mỹ</a></li>
						<li><a href="" target="_self">Bách hợp</a></li>

					</ul>
			</li>
			<li><a href="">Sách kỹ năng sống</a>
					<ul class="submenu4">
						<li><a href="" target="_self">Tài chính- Kế toán</a></li>
						<li><a href="" target="_self">Quản trị-lãnh đạo</a></li>
						<li><a href="" target="_self">Maketing-Bán hàng</a></li>
						<li><a href="" target="_self">Kỹ năng làm việc</a></li>
					</ul>
			</li>
			<li><a href="">Sách tuổi teen</a>
					<ul class="submenu5">
						<li><a href="" target="_self">Văn học teen</a></li>
						<li><a href="" target="_self">Hướng nghiệp - kỹ năng</a></li>
						<li><a href="" target="_self">Light Novel</a></li>
						<li><a href="" target="_self">Truyện tranh, Comic</a></li>
					</ul>
			</li>

			<li><a href="">Học ngoại ngữ</a>
				<ul class="submenu6">
					<li><a href="" target="_self">Từ điển</a></li>
					<li><a href="" target="_self">Sách học tiếng Anh</a></li>
					<li><a href="" target="_self">Sách học tiếng Hoa</a></li>
					<li><a href="" target="_self">Sách học tiếng Nhật</a></li>
				</ul>
			</li>
			<li><a href="">Sách thiếu nhi</a>
				<ul class="submenu7">
						<li><a href="" target="_self">Truyện cổ tích - Thần thoại</a></li>
						<li><a href="" target="_self">Kiến thức - Kỹ năng</a></li>
						<li><a href="" target="_self">Văn học</a></li>
						<li><a href="" target="_self">Truyện kể cho bé</a></li>
				</ul>
			</li>
			<li><a href="" target="_self">Phương thức đời sống</a>
				<ul class="submenu8">
					<li><a href="" target="_self">Chăm sóc sức khỏe</a></li>
					<li><a href="" target="_self">Phong thủy -Nhà cửa</a></li>
					<li><a href="" target="_self">Nấu ăn</a></li>
					<li><a href="" target="_self">Thể thao - Giải trí</a></li>
				</ul>
			</li>
			<li><a href="" target="_self">Sách chuyên ngành</a>
				<ul class="submenu9">
					<li><a href="" target="_self">Giáo dục</a></li>
					<li><a href="" target="_self">Công nghệ thông tin</a></li>
					<li><a href="" target="_self">Lịch sử - Địa lý</a></li>
					<li><a href="" target="_self">Khoa học tự nhiên</a></li>
					<li><a href="" target="_self">Mỹ thuật - Kiến trúc</a></li>
					<li><a href="" target="_self">Chính trị -Triết học</a></li>
					<li><a href="" target="_self">Y dược</a></li>
					<li><a href="" target="_self">Khoa học xã hội</a></li>
				</ul>
			</li>
			<li><a href="" target="_self">Sách văn hóa - Nghệ thuật</a>
				<ul class="submenu10">
					<li><a href="" target="_self">Doanh nhân - Người nổi tiếng</a></li>
					<li><a href="" target="_self">Văn hóa - Du lịch</a></li>
					<li><a href="" target="_self">Tâm linh - Tôn giáo</a></li>
				</ul>
			</li>
			<li><a href="" target="_self"><b>Công ty phát hành<b></a>
				<ul class="submen11">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</li>
		
		</ul>
	</div>
<script language="javascript" type="text/javascript">
	function checksearch()
	{
		kw = gde("keyword");
		if(kw.value == "" || kw.value == "Tìm...")
		{
			Boxy.alert("Vui lòng nhập từ khóa để tìm kiếm", null , {title: 'Thông báo'});
			kw.focus();
			return false;
		}
	}
	
	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	
	}	
	
	$(document).mouseup(function (e)
	{
		var container = $(".search");	
		if (!container.is(e.target) && container.has(e.target).length === 0) 
		{
			$("#autocomplete").hide();
		}
	});
	
	$(document).keydown(function(e)
	{
		if(e.which == 38 || e.which == 40)
		{
			var pid = 0;
			var pvalue = 0;
			var active = 0;
			if($('#autocomplete').length > 0)
			{
				i = 0;
				$( ".vsmall_products" ).each(function( index )
				{
					if($(this).hasClass("headerpactive" ))
					{
						pid = i;
						active = 1;
						$(this).removeClass("headerpactive");
					}
					i++;
				});
									
				if(e.which == 38)
				{
					pid --;
				}
				
				if(e.which == 40 && active == 1)
				{
					pid++;
				}
				
				if(pid < 0)
				{
					$("#productid").val(0);
				}
				
				if(pid == i)
				{
					$("#productid").val(0);
				}
				
				i = 0;
				$( ".vsmall_products" ).each(function( index )
				{					
					if(pid == i)
					{
						$("#productid").val(this.id);
						$(this).addClass("headerpactive");
					}
					i++;
				});
			}
			e.preventDefault();
		}
	});
	
	$( "#keyword" ).keyup(function(e)
	{
		if(e.which == 38 || e.which == 40)
		{
			return true;
		}
		
		kw = gde("keyword");
		if(kw == '')
		{
			$("#autocomplete").hide();
			return true;
		}
		address = '/home/autocomplete/index.html';
		address = addQuery(address, 'keywords='+kw.value);
		$.ajax({
			url: address,
			dataType: "html",
			type: "GET",
			cache: false,
			error: function(e)
			{
				Boxy.alert('Lỗi ajax', null, {title: 'Lỗi'});
				return false;
			},
			success: function(data)
			{
				if(data)
				{
					$("#autocomplete").empty();
					$("#autocomplete").append(data);
					$('#autocomplete').stop(true, true).slideDown("normal");
				}
				else
				{
					$("#autocomplete").hide();
				}
			}
		});		
	});
	
	function getcartnumber()
	{					
		address = '/home/cartnumber/index.html';
		$.ajax({
			url: address,
			dataType: "json",
			type: "GET",
			cache: false,
			error: function(e)
			{
				Boxy.alert('Lỗi ajax', null, {title: 'Thông báo'});
				return;
			},
			success: function(data)
			{
				$('.shownumber').empty();
				$('.shownumber').append(data.id);
				if(data.id > 0)
				{
					getcartslist();
				}
				else
				{					
					$('#showcartlink').hide();
					$('#cartslist').empty();
					$('#cartslist').append('<span class="empty">Giỏ hàng chưa có sản phẩm</span>');
				}
			}
		});
	}
	
	function getcartslist()
	{
		address = '/home/cartslist/index.html';
		$.ajax({
			url: address,
			dataType: "html",
			type: "GET",
			cache: false,
			error: function(e)
			{
				Boxy.alert('Lỗi ajax', null, {title: 'Lỗi'});
				return false;
			},
			success: function(data)
			{
				if(data)
				{
					$("#cartslist").empty();
					$("#cartslist").append(data);
				}
				else
				{
					$('#showcartlink').hide();
					$('#cartslist').empty();
					$('#cartslist').append('<span class="empty">Giỏ hàng chưa có sản phẩm</span>');
				}
				return true;
			}
		});
	}
	
	function delecart(id, pid)
	{
		address = '/home/delete/index.html';
		address = addQuery(address, 'id='+id);		
		$.ajax({
			url: address,
			dataType: "json",
			type: "GET",
			cache: false,
			error: function(e)
			{
				Boxy.alert('Lỗi ajax', null, {title: 'Thông báo'});
				return;
			},
			success: function(data)
			{
				if(data.id > 0)
				{
					getcartnumber();
				}
				else
				{
					Boxy.alert('Lỗi ajax', null, {title: 'Thông báo'});
				}				
			}
		});
	}
	
	$(function()
	{
		$('.cartlink').boxy({ovlay:true, unloadOnHide:true});
		getcartnumber();
	});
</script>

<div class="slideshow-container">

	<div class="mySlides fade">
  		<img src="./image/1.jpg" style=" width: 92%;height: 400px;">
	</div>

	<div class="mySlides fade">
 		 <img src="./image/2.jpg" style=" width: 92%;height: 400px;">
	</div>

	<div class="mySlides fade">
 		 <img src="./image/3.jpg" style=" width: 92%;height: 400px;">
	</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex> slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 3000); // Change image every 3 seconds
	}
</script>
		</div>
		<div class="sortable" id="layoutGroup1">
			<div class="block" id="module_newproducts">
	<h2>
    	<a class="title" href="/sach-moi.html" title="Sách mới">Sách mới
    		<span class="b-main__category-arrow">     </span>
    	</a>
		<a class="more" href="/sach-moi.html" title="Xem tất cả">Xem tất cả</a>
    </h2>
	<div class="blockcontent">
    	<div style="position:relative; padding:0 20px; overflow:hidden; height:340px;">
        	<div id="ajaxncontainer">
                <div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2134/ngoi-nha-so-11.html" title="Ngôi Nhà Số 11"><img src="./image/image book/Ngoinhaso11.jpg" alt="Ngôi Nhà Số 11" title="Ngôi Nhà Số 11" /></a>
            <span class="saleprice">-20%</span>
		</div>
		<div class="productname">
			<a href="/2134/ngoi-nha-so-11.html" title="Ngôi Nhà Số 11">Ngôi Nhà Số 11</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1212/sophie-hannah.html" title="Sophie Hannah">Sophie Hannah</a></span></div>
		
        
        <div class="prices">103.200 ₫</div>
		<div class="rootprice">129.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2132/harry-potter-va-ten-tu-nhan-nguc-azkaban-tap-03.html" title="Harry Potter Và Tên Tù Nhân Ngục Azkaban - Tập 03"><img src="./image/image book/harrytunguc.jpg" alt="Harry Potter Và Tên Tù Nhân Ngục Azkaban - Tập 03" title="Harry Potter Và Tên Tù Nhân Ngục Azkaban - Tập 03" /></a>
            <span class="saleprice">-15%</span>
		</div>
		<div class="productname">
			<a href="/2132/harry-potter-va-ten-tu-nhan-nguc-azkaban-tap-03.html" title="Harry Potter Và Tên Tù Nhân Ngục Azkaban - Tập 03">Harry Potter Và Tên Tù Nhân Ngục Azkaban -...</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/348/j-k-rowling.html" title="J. K. Rowling">J. K. Rowling</a></span></div>
		
        
        <div class="prices">153.000 ₫</div>
		<div class="rootprice">180.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2131/harry-potter-va-chiec-coc-lua-tap-04.html" title="Harry Potter Và Chiếc Cốc Lửa - Tập 04"><img src="./image/image book/harypottercoclua.jpg" alt="Harry Potter Và Chiếc Cốc Lửa - Tập 04" title="Harry Potter Và Chiếc Cốc Lửa - Tập 04" /></a>
            <span class="saleprice">-15%</span>
		</div>
		<div class="productname">
			<a href="/2131/harry-potter-va-chiec-coc-lua-tap-04.html" title="Harry Potter Và Chiếc Cốc Lửa - Tập 04">Harry Potter Và Chiếc Cốc Lửa - Tập 04</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/348/j-k-rowling.html" title="J. K. Rowling">J. K. Rowling</a></span></div>
		
        
        <div class="prices">229.500 ₫</div>
		<div class="rootprice">270.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2126/dieu-tuyet-voi-nhat-cua-thanh-xuan-tron-bo-2-tap-.html" title="Điều Tuyệt Vời Nhất Của Thanh Xuân (Trọn Bộ 2 Tập)"><img src="./image/image book/dieutuyetvoinhat.jpg" alt="Điều Tuyệt Vời Nhất Của Thanh Xuân (Trọn Bộ 2 Tập)" title="Điều Tuyệt Vời Nhất Của Thanh Xuân (Trọn Bộ 2 Tập)" /></a>
            <span class="saleprice">-20%</span>
		</div>
		<div class="productname">
			<a href="/2126/dieu-tuyet-voi-nhat-cua-thanh-xuan-tron-bo-2-tap-.html" title="Điều Tuyệt Vời Nhất Của Thanh Xuân (Trọn Bộ 2 Tập)">Điều Tuyệt Vời Nhất Của Thanh Xuân...</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/260/bat-nguyet-truong-an.html" title="Bát Nguyệt Trường An">Bát Nguyệt Trường An</a></span></div>
		
        
        <div class="prices">135.200 ₫</div>
		<div class="rootprice">169.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2125/carol.html" title="Carol"><img src="./image/image book/carol.jpg" alt="Carol" title="Carol" /></a>
            <span class="saleprice">-19%</span>
		</div>
		<div class="productname">
			<a href="/2125/carol.html" title="Carol">Carol</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1209/patricia-highsmith.html" title="Patricia Highsmith">Patricia Highsmith</a></span></div>
		
        
        <div class="prices">90.720 ₫</div>
		<div class="rootprice">112.000 ₫</div>
	</div>
</div>
            </div>
            <div class="clear"></div>
            <div class="list_btn">
           		<a onclick="showproduct(-1);" id="prevn" class="prev" href="javascript:"><i class="fa fa-chevron-left"></i></a>
               <a onclick="showproduct(1);" id="nextn" class="next" href="javascript:"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
	</div>
	<div class="clear"></div>
	<script>
		var pagen = 1;
		var countn = 4;
		$( "#prevn" ).addClass( "disable" );
		if(countn <= 1) $( "#nextn" ).addClass( "ndisable" );
    	function showproduct(step)
		{
			if((pagen ==1 && step == -1) || (pagen ==countn && step == 1)) return;
			
			pagen = pagen + step;
			if(pagen < 1)
			{
				pagen = 1;
			}
			
			if(pagen == 1)
			{
				$( "#prevn" ).addClass( "disable" );
			}else
			{
				$( "#prevn" ).removeClass( "disable" );
			}
			
			if(pagen == countn || pagen > countn)
			{
				$( "#nextn" ).addClass( "ndisable" );
			}else
			{
				$( "#nextn" ).removeClass( "ndisable" );
			}
			
			address = '/home/newproducts/index.html';
			address = addQuery(address, 'page='+pagen);
			$.ajax({
				url: address,
				dataType: "html",
				type: "GET",
				cache: false,
				error: function(e)
				{
					Boxy.alert('Lỗi ajax', null, {title: 'Lỗi'});
					return false;
				},
				success: function(data)
				{
					$("#ajaxncontainer").empty();
					$("#ajaxncontainer").append(data);
					i = 0;
					if(step == 1)
					{
						$(".hide").each(function(index)
						{
							$(this).delay(50 * i).fadeIn(100);
							i++;			
						});
					}
					else
					{
						$($(".hide").get().reverse()).each(function(index)
						{
							$(this).delay(50 * i).fadeIn(100);
							i++;			
						});
					}
					return true;
				}
			});
		}
    </script>
</div>

            <div class="block" id="module_publishing">
	<h2>
    	<a class="title" href="/sach-sap-phat-hanh.html" title="Sắp phát hành">Sắp phát hành<span class="b-main__category-arrow"></span></a><a class="more" href="/sach-sap-phat-hanh.html" title="Xem tất cả">Xem tất cả</a>
    </h2>
	<div class="blockcontent">
    	<div style="position:relative; padding:0 20px; overflow:hidden; height:340px">
        	<div id="ajaxcontainer">
                <div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2137/ngoi-nha-cua-nguoi-ca-say-ngu.html" title="Ngôi Nhà Của Người Cá Say Ngủ"><img src="./image/image book/ngoi-nha-cua-nguoi-ca-say-ngu__83284_thum_135.jpg" alt="Ngôi Nhà Của Người Cá Say Ngủ" title="Ngôi Nhà Của Người Cá Say Ngủ" /></a>
            <span class="saleprice">-20%</span>
		</div>
		<div class="productname">
			<a href="/2137/ngoi-nha-cua-nguoi-ca-say-ngu.html" title="Ngôi Nhà Của Người Cá Say Ngủ">Ngôi Nhà Của Người Cá Say Ngủ</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/688/higashino-keigo.html" title="Higashino Keigo">Higashino Keigo</a></span></div>
		
        
        <div class="prices">80.000 ₫</div>
		<div class="rootprice">100.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2136/tao-lap-mo-hinh-kinh-doanh-ca-nhan.html" title="Tạo Lập Mô Hình Kinh Doanh Cá Nhân"><img src="./image/image book/mohinhkinhdoanhcanhan.jpg" alt="Tạo Lập Mô Hình Kinh Doanh Cá Nhân" title="Tạo Lập Mô Hình Kinh Doanh Cá Nhân" /></a>
            <span class="saleprice">-20%</span>
		</div>
		<div class="productname">
			<a href="/2136/tao-lap-mo-hinh-kinh-doanh-ca-nhan.html" title="Tạo Lập Mô Hình Kinh Doanh Cá Nhân">Tạo Lập Mô Hình Kinh Doanh Cá Nhân</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/136/nhieu-tac-gia.html" title="Nhiều tác giả">Nhiều tác giả</a></span></div>
		
        
        <div class="prices">183.200 ₫</div>
		<div class="rootprice">229.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2135/sword-art-online-aincrad-tron-bo-2-tap-phien-ban-manga.html" title="Sword Art Online Aincrad - Trọn Bộ 2 Tập (Phiên Bản Manga)"><img src="./image/image book/sword-art-online-manga__44281_thum_135.jpg" alt="Sword Art Online Aincrad - Trọn Bộ 2 Tập (Phiên Bản Manga)" title="Sword Art Online Aincrad - Trọn Bộ 2 Tập (Phiên Bản Manga)" /></a>
            <span class="saleprice">-10%</span>
		</div>
		<div class="productname">
			<a href="/2135/sword-art-online-aincrad-tron-bo-2-tap-phien-ban-manga.html" title="Sword Art Online Aincrad - Trọn Bộ 2 Tập (Phiên Bản Manga)">Sword Art Online Aincrad - Trọn Bộ 2 Tập...</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1213/tamako-nakamura-reki-kawahara.html" title="Tamako Nakamura - Reki Kawahara">Tamako Nakamura - Reki Kawahara</a></span></div>
		
        
        <div class="prices">63.000 ₫</div>
		<div class="rootprice">70.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2130/cuoc-chien-luan-hoi-phien-ban-manga-2-tap-.html" title="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)"><img src="./image/image book/cuocchienluanhoi1.jpg" alt="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)" title="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)" /></a>
            <span class="saleprice">-10%</span>
		</div>
		<div class="productname">
			<a href="/2130/cuoc-chien-luan-hoi-phien-ban-manga-2-tap-.html" title="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)">Cuộc Chiến Luân Hồi (Phiên Bản Manga 2...</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1211/hiroshi-sakurazaka-takeshi-obata-yoshitoshi-abe.html" title="Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe">Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe</a></span></div>
		
        
        <div class="prices">63.000 ₫</div>
		<div class="rootprice">70.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2129/cuoc-chien-luan-hoi-phien-ban-light-novel-.html" title="Cuộc Chiến Luân Hồi (Phiên Bản Light Novel)"><img src="./image/image book/cuocchienluanhoifull.jpg" alt="Cuộc Chiến Luân Hồi (Phiên Bản Light Novel)" title="Cuộc Chiến Luân Hồi (Phiên Bản Light Novel)" /></a>
            <span class="saleprice">-15%</span>
		</div>
		<div class="productname">
			<a href="/2129/cuoc-chien-luan-hoi-phien-ban-light-novel-.html" title="Cuộc Chiến Luân Hồi (Phiên Bản Light Novel)">Cuộc Chiến Luân Hồi (Phiên Bản Light...</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1211/hiroshi-sakurazaka-takeshi-obata-yoshitoshi-abe.html" title="Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe">Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe</a></span></div>
		
        
        <div class="prices">80.750 ₫</div>
		<div class="rootprice">95.000 ₫</div>
	</div>
</div>
            </div>
            <div class="clear"></div>
            <div class="list_btn">
               <a onclick="publishing(-1);" id="pprev" class="prev" href="javascript:"><i class="fa fa-chevron-left"></i></a>
               <a onclick="publishing(1);" id="pnext" class="next" href="javascript:"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
	</div>
	<div class="clear"></div>
    <script>
		var page = 1;
		var count = 2;
		$( "#pprev" ).addClass( "disable" );
		if(count <= 1) $( "#pnext" ).addClass( "ndisable" );
    	function publishing(step)
		{
			if((page ==1 && step == -1) || (page ==count && step == 1)) return;
			
			page = page + step;
			if(page < 1)
			{
				page = 1;
			}
			
			if(page == 1)
			{
				$( "#pprev" ).addClass( "disable" );
			}else
			{
				$( "#pprev" ).removeClass( "disable" );
			}
			
			if(page == count || page > count)
			{
				$( "#pnext" ).addClass( "ndisable" );
			}else
			{
				$( "#pnext" ).removeClass( "ndisable" );
			}
			
			address = '/home/publishing/index.html';
			address = addQuery(address, 'page='+page);
			$.ajax({
				url: address,
				dataType: "html",
				type: "GET",
				cache: false,
				error: function(e)
				{
					Boxy.alert('Lỗi ajax', null, {title: 'Lỗi'});
					return false;
				},
				success: function(data)
				{
					$("#ajaxcontainer").empty();
					$("#ajaxcontainer").append(data);
					i = 0;
					if(step == 1)
					{
						$(".hide").each(function(index)
						{
							$(this).delay(50 * i).fadeIn(100);
							i++;			
						});
					}
					else
					{
						$($(".hide").get().reverse()).each(function(index)
						{
							$(this).delay(50 * i).fadeIn(100);
							i++;			
						});
					}
					return true;
				}
			});
		}
    </script>
</div>
            <div class="block" id="module_bestseller">
	<h2>
    	<a class="title" href="/sach-ban-chay.html" title="Sách bán chạy">Sách bán chạy<span class="b-main__category-arrow"></span></a>
		<a class="more" href="/sach-ban-chay.html" title="Xem tất cả">Xem tất cả</a>
    </h2>
	<div class="blockcontent">
    	<div style="position:relative; padding:0 20px; overflow:hidden; height:340px">
        	<div id="bajaxcontainer">
	            <div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2128/all-you-need-is-kill-cuoc-chien-luan-hoi.html" title="Cuộc Chiến Luân Hồi (Bản Đặc Biệt)"><img src="./image/image book/cuoc-chien-luon-hoi-nho__15283.jpg" alt="Cuộc Chiến Luân Hồi (Bản Đặc Biệt)" title="Cuộc Chiến Luân Hồi (Bản Đặc Biệt)" /></a>
            <span class="saleprice">-15%</span>
		</div>
		<div class="productname">
			<a href="/2128/all-you-need-is-kill-cuoc-chien-luan-hoi.html" title="Cuộc Chiến Luân Hồi (Bản Đặc Biệt)">Cuộc Chiến Luân Hồi (Bản Đặc Biệt)</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1211/hiroshi-sakurazaka-takeshi-obata-yoshitoshi-abe.html" title="Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe">Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe</a></span></div>
		
        
        <div class="prices">161.500 ₫</div>
		<div class="rootprice">190.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2068/lang-nghe-tieng-nang-tron-bo-2-tap.html" title="Lắng Nghe Tiếng Nắng - Trọn Bộ 2 Tập"><img src="./image/image book/lang-nghe-tieng-nang__45208.jpg" alt="Lắng Nghe Tiếng Nắng - Trọn Bộ 2 Tập" title="Lắng Nghe Tiếng Nắng - Trọn Bộ 2 Tập" /></a>
            <span class="saleprice">-10%</span>
		</div>
		<div class="productname">
			<a href="/2068/lang-nghe-tieng-nang-tron-bo-2-tap.html" title="Lắng Nghe Tiếng Nắng - Trọn Bộ 2 Tập">Lắng Nghe Tiếng Nắng - Trọn Bộ 2 Tập</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1176/fumino-yuki.html" title="Fumino Yuki">Fumino Yuki</a></span></div>
		
        
        <div class="prices">76.500 ₫</div>
		<div class="rootprice">85.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/1936/gio-thoi-sac-dao-bay.html" title="Gió Thổi Sắc Đào Bay"><img src="./image/image book/gio-thoi-sac-dao-bay__17716.jpg" alt="Gió Thổi Sắc Đào Bay" title="Gió Thổi Sắc Đào Bay" /></a>
            <span class="saleprice">-25%</span>
		</div>
		<div class="productname">
			<a href="/1936/gio-thoi-sac-dao-bay.html" title="Gió Thổi Sắc Đào Bay">Gió Thổi Sắc Đào Bay</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/617/phan-lac.html" title="Phàn Lạc">Phàn Lạc</a></span></div>
		
        
        <div class="prices">134.250 ₫</div>
		<div class="rootprice">179.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/2130/cuoc-chien-luan-hoi-phien-ban-manga-2-tap-.html" title="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)"><img src="./image/image book/cuocchienluanhoi1.jpg" alt="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)" title="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)" /></a>
            <span class="saleprice">-10%</span>
		</div>
		<div class="productname">
			<a href="/2130/cuoc-chien-luan-hoi-phien-ban-manga-2-tap-.html" title="Cuộc Chiến Luân Hồi (Phiên Bản Manga 2 Tập)">Cuộc Chiến Luân Hồi (Phiên Bản Manga 2...</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/1211/hiroshi-sakurazaka-takeshi-obata-yoshitoshi-abe.html" title="Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe">Hiroshi Sakurazaka - Takeshi Obata - Yoshitoshi Abe</a></span></div>
		
        
        <div class="prices">63.000 ₫</div>
		<div class="rootprice">70.000 ₫</div>
	</div>
</div><div class="product_contener">
	<div class="products">
		<div class="image"><a href="/1902/sat-pha-lang-tap-1.html" title="Sát Phá Lang - Tập 1"><img src="./image/image book/sat-pha-lang__13894.jpg" alt="Sát Phá Lang - Tập 1" title="Sát Phá Lang - Tập 1" /></a>
            <span class="saleprice">-20%</span>
		</div>
		<div class="productname">
			<a href="/1902/sat-pha-lang-tap-1.html" title="Sát Phá Lang - Tập 1">Sát Phá Lang - Tập 1</a>
		</div>
        <div class="fields"> <span><a href="/thuong-hieu/22/priest.html" title="Priest">Priest</a></span></div>
		
        
        <div class="prices">103.200 ₫</div>
		<div class="rootprice">129.000 ₫</div>
	</div>
</div>
            </div>
            <div class="clear"></div>
            <div class="list_btn">
               <a onclick="bestproduct(-1);" class="prev" id="bprev" href="javascript:"><i class="fa fa-chevron-left"></i></a>
               <a onclick="bestproduct(1);" class="next" id="bnext" href="javascript:"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
	</div>
	<div class="clear"></div>
    <script>
		var pageb = 1;
		var countb = 4;
		$( "#bprev" ).addClass( "disable" );
		if(countb <= 1) $( "#bnext" ).addClass( "ndisable" );
    	function bestproduct(step)
		{
			if((pageb ==1 && step == -1) || (pageb ==countb && step == 1)) return;
			
			pageb = pageb + step;
			if(pageb < 1)
			{
				pageb = 1;
			}
			
			if(pageb == 1)
			{
				$( "#bprev" ).addClass( "disable" );
			}else
			{
				$( "#bprev" ).removeClass( "disable" );
			}
			
			if(pageb == countb || pageb > countb)
			{
				$( "#bnext" ).addClass( "ndisable" );
			}else
			{
				$( "#bnext" ).removeClass( "ndisable" );
			}
			
			address = '/home/bestseller/index.html?datetime=7';
			address = addQuery(address, 'page='+pageb);
			$.ajax({
				url: address,
				dataType: "html",
				type: "GET",
				cache: false,
				error: function(e)
				{
					Boxy.alert('Lỗi ajax', null, {title: 'Lỗi'});
					return false;
				},
				success: function(data)
				{
					$("#bajaxcontainer").empty();
					$("#bajaxcontainer").append(data);
					i = 0;
					if(step == 1)
					{
						$(".hide").each(function(index)
						{
							$(this).delay(50 * i).fadeIn(100);
							i++;			
						});
					}
					else
					{
						$($(".hide").get().reverse()).each(function(index)
						{
							$(this).delay(50 * i).fadeIn(100);
							i++;			
						});
					}
					return true;
				}
			});
		}
    </script>
    <div class="block " id="content_seohome"><div class="blockcontent"><h1>
	Mua S&aacute;ch Online Tại Nobita.Vn</h1>
</div></div>
		</div>
	</div>
	<div id="footer">
        <div id="container">
    <div class="footer_menu">
        <div class="block " id="menu_Footer"><div class="blockcontent"><ul><li class="group">Hỗ trợ khách hàng<ul><li class="group">Hotline: <b>097. 4941. 097</b></li><li class="group">Email: info@nobita.vn</li></ul></li><li class="group">Giới thiệu<ul><li ><a href="/gioi-thieu-nobita.html" title="Về nobita" target="_self">Về nobita</a></li><li ><a href="/tuyen-dung.html" title="Tuyển dụng" target="_self">Tuyển dụng</a></li></ul></li><li class="group">Tài khoản<ul><li ><a href="/users/login/index.html" title="Tài khoản" target="_self">Tài khoản</a></li><li ><a href="/users/login/index.html" title="Danh sách đơn hàng" target="_self">Danh sách đơn hàng</a></li><li ><a href="/users/login/index.html" title="Thông báo" target="_self">Thông báo</a></li></ul></li><li class="group">Hướng dẫn<ul><li ><a href="/huong-dan-mua-hang.html" title="Hướng dẫn mua hàng" target="_self">Hướng dẫn mua hàng</a></li><li ><a href="/phuong-thuc-thanh-toan.html" title="Phương thức thanh toán" target="_self">Phương thức thanh toán</a></li><li ><a href="/contents/danh-muc/2/cau-hoi-thuong-gap.html" title="Câu hỏi thường gặp" target="_self">Câu hỏi thường gặp</a></li><li ><a href="/phuong-thuc-van-chuyen.html" title="Phương thức vận chuyển" target="_self">Phương thức vận chuyển</a></li></ul></li></ul></div></div>
    </div>
    <div class="facebook">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fnobita.vn&amp;width=300&amp;height=200&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:200px;" allowTransparency="true"></iframe>    </div>
    <div class="clear"></div>
    <div class="footer_address">
        <div class="block " id="content_FooterAddress"><div class="blockcontent"><div style="text-align: center;">
	Copyright &copy; 2014 Nobita.vn</div>
<div style="text-align: center;">
	&nbsp;</div>
<div style="text-align: center;">
	Địa chỉ: Số 9, đường 59, P. Thảo Điền, Quận 2, TP. Hồ Ch&iacute; Minh</div>
<div style="text-align: center;">
	&nbsp;</div>
<div style="text-align: center;">
	&nbsp;</div>
</div></div>
    </div>
</div>
<div class="homecoupon">
    <div class="titlebar">
    	<div class="fleft">Nhiều ưu đãi hấp dẫn đang chờ bạn</div>
        <div class="fright"><span onclick="showdialog(0)">-</span></div>
        <div class="clear"></div>
    </div>
    <form action="/newsletters/submit/index.html" onsubmit="updateemail(this); return false;" id="homecoupon">
    	<div align="center" style="margin:5px">
        	<input placeholder="Nhập email của bạn vào đây" type="email" value="" id="newemail" class="homeemail" name="newemail" required="">
        </div>
        <div align="center" style="margin:5px">
        	<input type="submit" class="homesubmit" value="Đăng ký" name="subscribe" id="homesubmit">
        </div>
        <span id="help1"></span>
        <input type="hidden" name="C0ed14b567757f5bb1e11b11fac23a48d" value="1" />
    </form>
</div>
<div class="coupon">
    <a href="javascript:" onclick="showdialog(1)">Ưu đãi</a>
</div>
<div id='bttop' class="bttop"><i class="fa fa-arrow-up"></i></div>
<script language="javascript" type="text/javascript">
	$(function(){
		$(window).scroll(function(){if($(this).scrollTop()!=0){
			$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});
			$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);
		});		
	});
	function showdialog(value)
	{
		if(value == 1)
		{
			$(".homecoupon").show();
		}else
		{
			$(".homecoupon").hide();
		}
	}
	
	function updateemail(obj)
	{		
		address = obj.action;	
		var formdata = $("#homecoupon").serialize();		
		$.ajax({
			type: "POST",
			dataType: "html",
			url: address,
			data: formdata,
			cache: false,
			error: function(e)
			{
				Boxy.alert('Lỗi ajax', null, {title: 'Lỗi ajax'});
			},
			success: function(data)
			{
				if(data != '')
				{
					$("#help1").empty();
					$("#help1").append(data);
					gde('newemail').value = '';
				}
			}
		});
	};
	
	var previousScroll = 0;
	$(window).scroll(function()
	{
		var currentScroll = $(this).scrollTop();
		if (currentScroll < previousScroll && currentScroll > 300)
		{
			if($('.top_header').css('position') != 'fixed')
			{
				$('.top_header').css('position','fixed');
			}
		}else
		{
			$('.top_header').css('position','inherit');
		}
		previousScroll = currentScroll;
	});

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-56977516-1', 'auto');
	ga('send', 'pageview');

	
</script>
    </div>
</div>
</body>
</html>