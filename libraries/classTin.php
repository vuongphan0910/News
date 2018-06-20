<?php 
include 'classDB.php';
class Tin extends DB{
	function TheLoai(){
		$sql="select * from theloai where AnHien=1 and lang='vi' order by ThuTu ";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}
	function LoaiTinTrongTL($idTL){
		$sql="select * from loaitin where AnHien=1 and idTL=$idTL order by ThuTu ";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;

	}
	function TinMoi(){
		$sql="select idTin,TieuDe,TomTat,urlHinh,Ten,Ngay from tin,loaitin where tin.idLT=loaitin.idLT And tin.AnHien=1 AND tin.lang='vi' order by idTin DESC";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;

	}
	function TinNoiBat(){
		$sql="select idTin,TieuDe,TomTat,urlHinh,Ten,Ngay 
		from tin,loaitin 
		where tin.idLT=loaitin.idLT and tin.AnHien=1 And tin.TinNoiBat=1 order by idTin limit 0,5";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}
	function TinXN(){
		$sql="select idTin,TieuDe,TomTat,urlHinh,Ten,Ngay 
		from tin,loaitin 
		where tin.idLT=loaitin.idLT and tin.AnHien=1  order by SoLanXem limit 0,5";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}

	function TinNN(){
		$sql="select idTin,TieuDe,TomTat,urlHinh,Ten,Ngay 
		from tin,loaitin 
		where tin.idLT=loaitin.idLT and tin.AnHien=1 and tin.lang='vi'  order by rand() limit 0,5";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}

	function ChiTiet_Tin($idTin){
		$sql="select idTin,TieuDe,ConTent,TomTat,urlHinh,Ten,Ngay,SoLanXem 
		from tin,loaitin 
		where tin.idLT=loaitin.idLT And tin.AnHien=1 AND tin.lang='vi' And idTin=$idTin";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}

	function TinTrongLoai($idLT){
		$sql="select idTin,TieuDe,ConTent,TomTat,urlHinh,Ten,Ngay,SoLanXem 
		from tin,loaitin 
		where tin.idLT=loaitin.idLT And tin.AnHien=1 And tin.idLT=$idLT order by idTin DESC";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}

	function chitietLT($idLT){
		$sql="select Ten,TenTL,idLT
		from loaitin,theloai 
		where loaitin.idTL=theloai.idTL and loaitin.idLT=$idLT";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}

	function timkiem($tk){
		$sql="select idTin,TieuDe,ConTent,TomTat,urlHinh,Ten,Ngay,SoLanXem 
		from tin,loaitin 
		where tin.idLT=loaitin.idLT And tin.AnHien=1 And (TieuDe like '%$tk%' or TomTat like '%$tk%') order by idTin DESC";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}

	function DKTV(&$loi){
		$thanhcong=true;
		$hoten=$this->db->escape_string(trim(strip_tags($_POST['hoten'])));
		$email=$this->db->escape_string(trim(strip_tags($_POST['email'])));
		$username=$this->db->escape_string(trim(strip_tags($_POST['username'])));
		$pass=$this->db->escape_string(trim(strip_tags($_POST['pass'])));
		$repass=$this->db->escape_string(trim(strip_tags($_POST['repass'])));
		$gioitinh=$_POST['gioitinh'];
		settype($gioitinh,"int");
		if($this->Check_email($email)==false){
			$thanhcong=false;
			$loi['email']="Email đã có người sử dụng";
		}
		if($this->Check_user($username)==false){
			$thanhcong=false;
			$loi['username']="Tên Đăng Nhập Đã Tồn Tại";
		}
		if($pass!=$repass){
			$thanhcong=false;
			$loi['pass']="Mật Khẩu Không Trùng Khớp";
		}
		if($thanhcong==true){
			$pass=md5($pass);
			$sql="insert into users set HoTen='$hoten',Username='$username',Password='$pass',Email='$email',NgayDangKy=now(),idGroup=0,GioiTinh=$gioitinh,active=0";
			$kq=$this->db->query($sql);
			if(!$kq) die($this->db->error);
		}
		return $thanhcong;
	}

	function Check_user($user){
		$sql="select idUser from users where Username='$user'";
		$kq=$this->db->query($sql);
		if($kq->num_rows>0)
			return false;
		else 
			return true;
	}

	function Check_email($email){
		$sql="select Email from users where Email='$email'";
		$kq=$this->db->query($sql);
		if($kq->num_rows>0)
			return false;
		else 
			return true;
	}

	function Detail_user($u,$p){
		$u=$this->db->escape_string($u);
		$p=$this->db->escape_string($p);
		$p=md5($p);
		$sql="select * from users where Username='$u' And Password='$p'";
		$kq=$this->db->query($sql);
		if($kq->num_rows==0)
			return false;
		else return $kq->fetch_assoc();
	}//end detail_user

	function DangNhap(){
		$u=trim($_POST['username']);
		$p=trim($_POST['pass']);
		$kq=$this->Detail_user($u,$p);
		if($kq==true){
			$_SESSION['login_id']=$kq['idUser'];
			$_SESSION['login_user']=$kq['Username'];
			$_SESSION['login_pass']=$kq['Password'];
			$_SESSION['login_hoten']=$kq['HoTen'];
			$_SESSION['login_email']=$kq['Email'];
			$_SESSION['login_group']=$kq['idGroup'];
			if(isset($_POST['rem'])==true)
			{
				setcookie("un",$_POST['username'],time()+60*60*24*7);
				setcookie("pw",$_POST['pass'],time()+60*60*24*7);
				setcookie("gr",$_SESSION['login_group'],time()+60*60*24*7);
				setcookie("ht",$_SESSION['login_hoten'],time()+60*60*24*7);
				setcookie("em",$_SESSION['login_email'],time()+60*60*24*7);
			}
			else{
				setcookie("un",$_POST['username'],time()-1);
				setcookie("pw",$_POST['pass'],time()-1);
				setcookie("gr",$_SESSION['login_group'],time()-1);
				setcookie("ht",$_SESSION['login_hoten'],time()-1);
			}
			header("location:index.php");
		}
		else
		{ 
			$_SESSION['error']="<p class='alert alert-warning'>Tên Đăng Nhập Hoặc Mật Khẩu Của Bạn Không Đúng !</p>";
			header("location:index.php?p=dn");
		}
	}//end Function DangNhap()

}
?>