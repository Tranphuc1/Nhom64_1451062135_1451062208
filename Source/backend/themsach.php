 <?php
//session_start();
include_once('ketnoi2.php');
 // include('checklogin.php');
 // $user = checkLoggedUser();
//nho sua lai ten db trong file lib_db.php dong 12

//get input
//echo "id=[$id]"; exit();
//tao sql
$sql = "select * from dmsanpham";
//echo "sql=[$sql]"; exit();
//Thuc thi sql
// 
$categories = select_list($sql);
//print_r($categories);exit();
?>
  
<div class="container-fluid ">
  <div class="row well">
    <div class="col-md-6 ">
    <h3 class="text-center text-danger">
          THÔNG TIN SÁCH
      </h3> 
      <form role="form" class="content-add" action="themsach_exec.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
          <label for="tensach">
           Tên sách
          </label>
          <input type="text" class="form-control" id="ten_sach" name="ten_sp" />
        </div>
        <div class="form-group">
          <label for="giasach">
            Giá
          </label>
          <input type="text" class="form-control" id="gia_ban" name="gia_sp" />
        </div>
        <div class="form-group">
          <label for="Ncc">
            Chuyên mục
          </label> 
        </div>
        <div class="form-group">
          <label for="anh">
            Ảnh mô tả
          </label>
          <input type="file" id="anh_sp"  name="anh_sp"/>
        </div>
        <div class="form-group">
          <label for="km">
            Khuyến mại
          </label>
          <input type="text" class="form-control" name="khuyen_mai" />
        </div>
        <div class="form-group">
          <label for="tt">
            Tình trạng
          </label>
          <input type="text" class="form-control" name="tinh_trang" />
        </div>
		<div class="form-group">
          <label for="tt">
            Trạng thái
          </label>
          <input type="text" class="form-control" name="trang_thai" />
        </div> 
        <div class="form-group">
          <label for="ttct">
            Thông tin chi tiết
          </label>
          <textarea class="form-control" rows="3" name="chi_tiet_sp"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
          Thêm
        </button>
        <button type="submit" class="btn btn-default" onclick="return boquaForm();">
          Bỏ qua
        </button>
      </form>
    </div>
  </div>
</div>
