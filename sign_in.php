<?php 
if (isset($_POST['btn_dn'])){
	unset($_SESSION['error']);
	$t->DangNhap();
}
?>
<div class="panel panel-default">
	<div class="panel-heading">Đăng Nhập</div>
	<?php if(isset($_SESSION['error'])) echo $_SESSION['error'];  ?>
	<div class="panel-body">
		<form action="" class="form-horizontal" method="post">
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
				<input type="password" class="form-control" name="pass" required placeholder="Mật Khẩu"  >
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-sm-3"></label>
			<div class="col-sm-9">
				<input type="checkbox" name="rem"> Remember
			</div>
		</div>
		<div class="form-group">
			<label for="dn" class="control-label col-sm-3"> </label>
			<div class="col-sm-9">
				<button type="submit" class="btn btn-default" name="btn_dn">Đăng Nhập</button>
			</div>
		</div>
		<div class="form-group">
			<label for="dn" class="control-label col-sm-3"> </label>
			<div class="col-sm-9">
				<a href="index.php?p=dktv">Tạo Tài Khoản</a>
			</div>
		</div>
	</form>
</div>
</div>