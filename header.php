<header id="header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php"><span>Tin Tuc</span></a> </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav custom_nav">
              <li class=""><a href="index.php">Trang chủ</a></li>
              <?php  
              $kq=$t->TheLoai();
              while($rowTL=$kq->fetch_array()){
               ?>
               <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$rowTL['TenTL']?></a>
                <ul class="dropdown-menu" role="menu">
                  <?php $lt=$t->LoaiTinTrongTL($rowTL['idTL']);
                        while($rLT=$lt->fetch_array()){
                   ?>
                  <li><a href="index.php?p=tintrongloai&idLT=<?=$rLT['idLT']?>"><?=$rLT['Ten']?></a></li>
                <?php } ?>
                </ul>
              </li>
            <?php } ?> 
          </ul>
        </div>
      </div>
    </nav>
    <form id="searchForm" action="" method="get">
      <input type="hidden" value="timkiem" name="p">
      <input type="text" placeholder="Search..." name="tk">
      <input type="submit" value="">
    </form>
    <a href="index.php?p=dn" class="fa fa-sign-in sign_in"> Sign In</a>
    <?php if(isset($_SESSION['login_hoten'])){ echo "<p class='sign_in'>Chào ".$_SESSION['login_hoten']."</p>";?>
    <a href="index.php?p=thoat" class="fa fa-sign-out sign_in">Sign out</a>
  <?php } ?>
  </div>
</header>