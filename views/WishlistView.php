<?php 
	//load LayoutTrangChu.php
	$this->layoutPath = "LayoutTrangTrong.php";
 ?>
 <h3>Sản phẩm yêu thích</h3>
 	<div class="template-cart">
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name" style="width: 300px; ">Tên sản phẩm</th>
                    <th style="width: 50px;">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($_SESSION["Wishlist"] as $product): ?>
                  <tr>
                    <td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
                    <td><a href="index.php?controller=wishlist&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
              	<?php endforeach; ?>
                </tbody>
              </table>
            </div>          
        </div>
