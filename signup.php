<?php 
$loi=array();
if(isset($_POST['btn_dk']))
{
	$thanhcong=$t->DKTV($loi);
	if($thanhcong==true)
		header("location:index.php?p=dktc");	 
} 
?>
<div class="panel  panel-default">
	<div class="panel-heading">Đăng Ký Thành Viên</div>
	<div class="panel-body">
		<?php if(isset($loi)&&$loi!=Null){ ?>
			<div class="alert alert-danger">Đã Có Lỗi Xảy Ra Vui Lòng Kiểm Tra Lại</div>
		<?php } ?>  
		<form action="" class="form-horizontal" method="post">
			<div class="form-group">
				<label for="hoten" class="control-label col-sm-3">Họ tên:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="hoten" required placeholder="Họ Tên" value="<?php if(isset($_POST['hoten'])) echo $_POST['hoten']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-sm-3">Email :</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" name="email" required placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
					<p style="color: red;"><?php if(isset($loi['email'])){echo $loi['email'];}?>
				</p>
			</div>
		</div>
		<div class="form-group">
			<label for="username" class="control-label col-sm-3">Tên Đăng Nhập :</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" name="username" required placeholder="Tên Đăng Nhặp" minlength="3" value="<?php if(isset($_POST['username'])) echo $_POST['username']?>">
				<p style="color: red;"><?php if(isset($loi['username'])){echo $loi['username'];}?>
			</p>
		</div>
	</div>
	<div class="form-group">
		<label for="pass" class="control-label col-sm-3">Mật Khẩu :</label>
		<div class="col-sm-9">
			<input type="password" class="form-control" name="pass" required placeholder="Mật Khẩu" minlength="6">
		</div>
	</div>
	<div class="form-group">
		<label for="repass" class="control-label col-sm-3">Nhập lại mật khẩu:</label>
		<div class="col-sm-9">
			<input type="password" class="form-control" name="repass" required placeholder="Nhập lại mật khẩu" minlength="6">
			<p style="color: red;"><?php if(isset($loi['pass'])){echo $loi['pass'];}?>
		</p>
	</div>

</div>
<div class="form-group">
	<label for="gioitinh" class="control-label col-sm-3">Giới tính:</label>
	<div class="col-sm-9">
		<input type="radio" name="gioitinh" value="0" checked> Nam 
		<input type="radio" name="gioitinh" value="1"> Nữ
	</div>
</div>
<div class="form-group">
	<label for="gioitinh" class="control-label col-sm-3">Giới tính:</label>
	<div class="col-sm-9">
		<button type="reset" class="btn btn-default">Xóa</button>
		<button type="submit" class="btn btn-default" name="btn_dk">Đăng Ký</button>
	</div>
</div>
</form>
</div>
</div>