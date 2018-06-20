<?php 
$kq=$t->TinMoi();
while($rowTin=$kq->fetch_array()){
	?>  
	<div class="single_stuff wow fadeInDown">
		<div class="single_stuff_img"> <a href="?p=chitiettin&idTin=<?=$rowTin['idTin']?>"><img src="<?=$rowTin['urlHinh']?>" alt="" onerror="this.src='dataupload/default-img.gif'"></a> </div>
		<div class="single_stuff_article">
			<div class="single_sarticle_inner">
				<a class="stuff_category" href="#">
					<?=$rowTin['Ten']?>
				</a>
				<div class="stuff_article_inner"> <span class="stuff_date"><?=date('M',strtotime($rowTin['Ten']))?> <strong><?=date('d',strtotime($rowTin['Ten']))?></strong></span>
					<h2><a href="?p=chitiettin&idTin=<?=$rowTin['idTin']?>"><?=$rowTin['TieuDe']?></a></h2>
					<p><?=$rowTin['TomTat']?></p>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
