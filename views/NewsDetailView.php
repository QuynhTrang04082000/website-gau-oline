<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<div class="top">
  <div class="row" >
    <div class="col-md-12 news-detail">
    	<h3><?php echo $record->name; ?></h3>
    	<p><?php echo $record->description; ?></p>
    	<p><?php echo $record->content; ?></p>
    </div>
  </div>
</div>
<style type="text/css">
	.news-detail img{max-width: 100%;}
</style>