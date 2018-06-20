 <?php  
 $kq=$t->TinNN(); ?>
 <ul class="featured_nav">
   <?php while($nn=$kq->fetch_array()){ ?>
  <li> <a class="featured_img" href="?p=chitiettin&idTin=<?=$nn['idTin']?>"><img src="<?=$nn['urlHinh']?>" alt="" onerror="this.src='dataupload/default-img.gif'"></a>
    <div class="featured_title"> <a class="" href="?p=chitiettin&idTin=<?=$nn['idTin']?>"><?=$nn['TieuDe']?></a> </div>
  </li>
    <?php } ?>
</ul>