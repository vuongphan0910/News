  <?php $kq=$t->TinXN(); ?>
  <ul class="middlebar_nav wow">
  	  <?php while($xn=$kq->fetch_array()){ ?>
  	<li> <a href="?p=chitiettin&idTin=<?=$xn['idTin']?>" class="mbar_thubnail"><img alt="" src="<?=$xn['urlHinh']?>" onerror="this.src='dataupload/default-img.gif'"></a> <a href="?p=chitiettin&idTin=<?=$xn['idTin']?>" class="mbar_title"><?=$xn['TieuDe']?></a> </li>
	<?php } ?>
  </ul>