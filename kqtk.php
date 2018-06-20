<?php
if(isset($_GET['tk']))
$tk=$_GET['tk'];
$kq=$t->timkiem($tk)
?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
	<li class="breadcrumb-item"><a href="#">Tìm Kiếm</a></li>
	<li class="breadcrumb-item"><a href=""></a><?=$tk?></li>
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
