<?php 
ob_start();
session_start();
include 'libraries/classTin.php';
$t= new Tin;
if(isset($_COOKIE['un'])){
  $_SESSION['login_user']=$_COOKIE['un'];
  $_SESSION['login_hoten']=$_COOKIE['ht'];
}
$lang='vi';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Website Tin Tức</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/font.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/structure.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- Header -->
  <?php include 'header.php' ?>
  <!-- endHeader -->
  <section id="contentbody">
    <div class="container">
      <div class="row">
        <div class=" col-sm-12 col-md-6 col-lg-6">
          <div class="row">
            <div class="leftbar_content">
              <h2>Tin Mới Nhất</h2>
              <?php 
              if(isset($_GET['p'])){
                $p=$_GET['p'];
                switch ($p) {
                  case 'chitiettin':
                  include 'chitiettin.php';
                  break;
                  case 'tintrongloai':
                  include 'tintrongloai.php';
                  break;
                  case 'timkiem':
                  include 'kqtk.php';
                  break;
                  case 'dn':
                  include 'sign_in.php';
                  break;
                  case 'dktv':
                  include 'signup.php';
                  break;
                  case 'dktc':
                  include 'dkthanhcong.php';
                  break;
                  case 'thoat':
                  include 'logout.php';
                  break;
                }
              }
              else include 'tinmoi.php';
              ?>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-2 col-lg-2">
    <div class="row">
      <div class="middlebar_content">
        <h2 class="yellow_bg">Tin Nổi Bật</h2>
        <div class="middlebar_content_inner wow fadeInUp">
          <?php include 'tinnoibat.php' ?>
        </div>
        <div class="popular_categori  wow fadeInUp">
          <h2 class="limeblue_bg">Quảng Cáo</h2>
          <iframe width="260" height="315" src="https://www.youtube.com/embed/FkOt19CUC30" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="row">
      <div class="rightbar_content">
        <div class="single_blog_sidebar wow fadeInUp">
          <h2>Có Thể Bạn Quan Tâm</h2>
          <?php include 'tinNN.php'; ?>
        </div>
        <div class="single_blog_sidebar wow fadeInUp">
          <h2>Tin Xem Nhiều</h2>
          <?php include 'txn.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer_inner">
          <p class="pull-left">Copyright &copy; 2014 ColorMag</p>
          <p class="pull-right">Developed By Phan Quoc Vuong</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>