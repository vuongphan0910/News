<?php 
if(isset($_GET['idTin']));
$idTin=$_GET['idTin'];
$kq=$t->ChiTiet_Tin($idTin);
$rowTin=$kq->fetch_array();
$tinnext=$idTin+1;
$pr=$idTin-1;
if($pr==0)
  $pr=1;
?>
<div class="singlepost_area">
  <div class="singlepost_content"> <a href="#" class="stuff_category"><?=$rowTin['Ten']?></a> <span class="stuff_date"><?=date('M',strtotime($rowTin['Ngay']))?> <strong><?=date('d',strtotime($rowTin['Ngay']))?></strong></span>
    <h2><a href="#"><?=$rowTin['TieuDe']?></a></h2>
    <img class="img-center" src="<?=$rowTin['urlHinh']?>" alt="">
    <blockquote><?=$rowTin['TomTat']?> </blockquote>
    <p><?=$rowTin['ConTent']?></p>
    <div class="singlepage_pagination"> <a class="previous_btn" href="index.php?p=chitiettin&idTin=<?=$pr?>">Previous</a> <a class="next_btn" href="index.php?p=chitiettin&idTin=<?=$tinnext?>">Next</a> </div>
    <div class="social_area wow fadeInLeft">
      <ul>
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
        <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
      </ul>
    </div>
  </div>
</div>