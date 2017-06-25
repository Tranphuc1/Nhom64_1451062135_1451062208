<div id="main" style="margin: 20px;"><!--#main-->
            <div class="container thumbnail content">
                <div class="row ">
					
                    <div class="col-md-4 col-xs-12 img-responsive " alt="boook" width="304" height="236">
					<?php foreach ($resultOther as $item) {?>
                        <div class="text-center"><img src="img/<?php echo $item['anh_sp'];?>" class="img-thumbnail" alt="Book" width="200px" height="170px"></div>
                        <div class="clearfix"></div>
                        <div class="panel panel-info col-md-12">
                            <div class="panel-heading text-center" style="font-weight: bold;">TIN TỨC LIÊN QUAN</div>
                            <div class="panel-body">
                                <div class="row">
                                    <ul>
                                        <div class="order_post_item ">
                                            <p class="title_feature_order"><a href="#">Lợi ích của đọc sách</a></p>
                                        </div>
                                        <div class="order_post_item ">
                                            <p class="title_feature_order"><a href="#">Sách giúp bạn mở rộng kiến thức</a></p>
                                        </div>
                                        <div class="order_post_item ">
                                            <p class="title_feature_order"><a href="#">Cách chọn một bộ sách hay</a></p>
                                        </div>
                                        <div class="order_post_item ">
                                            <p class="title_feature_order"><a href="#">Thiếu nhi đọc sách nào phù hợp?</a></p>
                                        </div>
                                        <div class="order_post_item ">
                                            <p class="title_feature_order"><a href="#">Tại sao đọc sách làm tăng trí thông minh</a></p>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
					
                    </div>  
                    <div class="col-md-8 col-xs-12">
                        <h3 style="color:#1ea815"><?php echo $item['ten_sp'];?></h3>
                        <h4 >Giá sản phẩm: <span style="color:#C9302C;"><?php echo $item['gia_sp'];?> VNĐ</span></h4>
                        <table class="table table-bordered">
                            <tr>
                                <td><span>Khuyến mại:</span></td>
                                 <td>• <?php echo $item['khuyen_mai'];?></td>
                            </tr>
                            <tr>
                                <td><span>Tình trạng:</span></td>
                                <td>• <?php echo $item['tinh_trang'];?></td>
                            </tr>
                            <tr>
                                <td><span>Còn hàng:</span></td>
                                <td>• <?php echo $item['trang_thai'];?></td>
                            </tr>
                        </table>
                        <p class="add-cart"><a href="frontent/giohang/themhang.php?id_sp=<?php echo $item['id_sp'];?>">
							<span class="btn btn-danger" style="font-size:15px;">Đặt mua</span></a></p>
                        <div class="prd-details">
                            <p><?php echo $item['chi_tiet_sp'];?></p>
                        </div>  
				<?php }?>	
                </div>	
            </div><!--end container thumbnail content-->
        </div><!--end main-->
        <div class="container thumbnail content"><!--container thumbnail content-->
          <div class="row">
             <h2><span class="label " style="color:#1ea815">SÁCH LIÊN QUAN </span></h2>
          </div>
          <div class="row margin1 text-center"><!--row margin1-->
            <?php if(!empty($datas['list'])) { ?>
            <div class="row margin1 text-center">
			<?php foreach ($datas['list'] as $item) {?>
                <div class="col-md-3 col-sm-12 col-xs-12 thumbnail">
					<a href="img/<?php echo $item['anh_sp'];?>" class="preview">
                      <img src="img/<?php echo $item['anh_sp'];?>" class="img-thumbnail text-center" alt="Book" style="max-height:270px; max-width:220px;">
					  </a>
                      <h4 class="text-center"><a href="index.php?page_layout=chitietsp&id_sp=<?php echo $item['id_sp'];?>"><?php echo $item['ten_sp'];?></a></h4>
                      <p>Tình trạng: <?php echo $item['tinh_trang'];?></p>
                      <p> Khuyến Mãi:<?php echo $item['khuyen_mai'];?></p>
                      <p class="text-center price"><span><?php echo $item['gia_sp'];?> VNĐ</span></p>
                       <p class="add-cart">
                        <a href="frontent/giohang/themhang.php?id_sp=<?php echo $item['id_sp'];?>">
                        <span class="glyphicon glyphicon-shopping-cart" style="font-size:20px;"> Mua </span></a> |
                        <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $item['id_sp'];?>"> <span style="font-size:15px;"> Xem thêm   </span></a>
                    </p>
                </div>
			<?php }?>	
            </div>
			 <?php }?>	
        </div><!-- end row margin1-->
    </div><!--end container thumbnail content-->   