<?php
 session_start();
include_once('ketnoi2.php');
  //include('../login/checklogin.php');
  //$user = checkLoggedUser();
//
/*$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : "";
$q = trim($q);
$cond = "";
if ($q){
	$cond = "where (ten_dm like '%{$q}%' )";
}*/
$sql = " select * from dmsanpham";
$datas = select_list($sql);
?>
<div class="container-fluid">
		  <div class="row well">
			<div class="col-md-12">
			  <h3 class="text-center text-danger">
				  QUẢN LÝ DANH MỤC
			  </h3> 
				<h4>Xin chào <?php// echo $user['user'];?>!</h4>
			  <h4><a href="quantri.php?page_layout=themdm" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> &nbsp;THÊM MỚI DANH MỤC
			  </a></h4>
			  <table class="table" border="1px;" align="center">
				<thead >
				  <tr >
					<th class="text-center">ID danh mục</th>
					<th class="text-center">Tên danh mục</th>
					<th class="text-center">Sửa</th>
					<th class="text-center">Xóa</th>
				  </tr>
				</thead>
				<tbody>
				<?php $i=1; if($datas) foreach ($datas as $data){?>
				  <tr>
					<td>
					  <?php echo $i++;?>
					</td>
					<td>
					 <?php echo $data['ten_danhmuc'];?>
					</td>
					<td>
					  <a class="btn btn-info" href="quantri.php?page_layout=suadm&id_dm=<?php echo $data['id_dm']?> " action="suadm_exec.php"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
					</td>
					<td>
					 <a class="btn btn-danger" href="quantri.php?page_layout=xoadm&id_dm=<?php echo $data['id_dm']?> " action="xoadm_exec.php"><span class="glyphicon glyphicon-remove-circle"></span>Xóa</a>
					</td>
				  </tr>
				  <?php } ?>
				</tbody>
			  </table>
			</div>
		  </div>
		</div>
