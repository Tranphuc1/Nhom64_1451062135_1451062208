<?php
ob_start();
session_start();
include_once('ketnoi2.php');
?>
<?php
//
$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : "";
$q = trim($q);
$cond = "";
if ($q){
	$cond = "where (username like '%{$q}%')";
	$cond.="OR (user like '%{$q}%'))";
}
$sql = " select * from user {$cond}";
$datas = select_list($sql);
?>

<div class="container-fluid">
	<div class="row well">
		<div class="col-md-12">
			<h3 class="text-center text-danger">
				QUẢN LÝ THÀNH VIÊN
			</h3>
			<table class="table" border="1px;" align="center">
				<thead>
				  <tr >
					<td class="text-center">ID </td>
					<td class="text-center">UserName</td>
					<td class="text-center">FullName</td>
					<td class="text-center">Edit</td>
					<td class="text-center">Delete</td>
				  </tr>
				</thead>
				<tbody>
				<?php $i=1; if($datas) foreach ($datas as $data){?>
				  <tr>
					<td>
					  <?php echo $i++;?>
					</td>
					<td>
					 <?php echo $data['username'];?>
					</td>
					<td>
					 <?php echo $data['fullname'];?>
					</td>
					<td>
					  <a class="btn btn-info" href=""><span class="glyphicon glyphicon-edit"></span>Sửa</a>
					</td>
					<td>
					 <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-remove-circle"></span>Xóa</a>
					</td>
				  </tr>
				  <?php } ?>
				</tbody>
			  </table>
			</div>
		  </div>
	</div>