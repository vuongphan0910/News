<?php 
if(isset($_GET['idLT']))
$idLT=$_GET['idLT'];
$kq=$t->TinTrongLoai($idLT);
$lt=$t->chitietLT($idLT);
$row=$lt->fetch_array();
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
	<li class="breadcrumb-item"><a href="#"><?=$row['TenTL']?></a></li>
	<li class="breadcrumb-item"><a href=""></a><?=$row['Ten']?></li>
</ol>
<?php
while($rowLT=$kq->fetch_array()){
	?>  
	<div class="single_stuff wow fadeInDown">
		<div class="single_stuff_img"> <a href="?p=chitiettin&idTin=<?=$rowLT['idTin']?>"><img src="<?=$rowLT['urlHinh']?>" alt="" onerror="this.src='dataupload/default-img.gif'"></a> </div>
		<div class="single_stuff_article">
			<div class="single_sarticle_inner">
				<a class="stuff_category" href="#">
					<?=$rowLT['Ten']?>
				</a>
				<div class="stuff_article_inner"> <span class="stuff_date"><?=date('M',strtotime($rowLT['Ten']))?> <strong><?=date('d',strtotime($rowLT['Ten']))?></strong></span>
					<h2><a href="?p=chitiettin&idTin=<?=$rowLT['idTin']?>"><?=$rowLT['TieuDe']?></a></h2>
					<p><?=$rowLT['TomTat']?></p>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
