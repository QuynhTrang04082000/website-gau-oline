<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<h1 style="margin-top: -60px;">Tin tức</h1>
        <div class="wrapper-blog"> 
          <!-- list news -->
          <div class="row">
          <?php foreach($data as $rows): ?>
            <div class="col-md-6 article" style="height: 400px;"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" style="width:100%;" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
              <h3><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
              <p class="date"><?php echo $rows->description; ?></p>
            </div>
          <?php endforeach; ?>
          </div>
          <!-- end list news -->
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>