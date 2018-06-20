<?php $kq=$t->TinNoiBat(); ?>
     <ul class="middlebar_nav">
        <?php while($nb=$kq->fetch_array()){ ?>
        <li> <a class="mbar_thubnail" href="?p=chitiettin&idTin=<?=$nb['idTin']?>"><img src="<?=$nb['urlHinh']?>" alt="" onerror="this.src='dataupload/default-img.gif'"></a> <a class="mbar_title" href="?p=chitiettin&idTin=<?=$nb['idTin']?>"><?=$nb['TieuDe']?></a> </li>
    <?php } ?>
    </ul>