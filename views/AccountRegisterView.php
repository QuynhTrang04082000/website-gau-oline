 <?php 
  //load LayoutTrangTrong.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<div class="template-customer" style="margin-top: -60px;">
          <h1>Đăng ký tài khoản</h1>
          <?php if(isset($_GET["notify"])&&$_GET["notify"]=="exists"): ?>
            <p style="color:red;">Email đã tồn tại!</p>
          <?php else: ?>
            <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
          <?php endif; ?>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=registerPost">
                  <input name="__RequestVerificationToken" type="hidden" value="CfDJ8NCDIeDSHgNIh7wY7X1HBtTBzdju-hUg15GcW6GapXzfmQE3y2P-Pa1gLzKPnkBBOeGOPfIY8YizaUAza1qjuq-S7qBC9cNJ5wBCsY1hvEGhDYHpl9GdoxvRVGcVgf20tVL6_NtcL9vQLmmDhdq91T0" />
                  <p class="title"><span>Đăng ký tài khoản</span></p>
                  <div class="form-group">
                    <label>Họ và tên:</label>
                    <input type="text" name="name" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="text" name="email" class="input-control" required>
                  </div>
                  <div class="form-group">
                    <label>Địa chỉ:</label>
                    <input type="text" name="address" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Điện thoại:</label>
                    <input type="text" name="phone" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" name="password" class="input-control" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="button"style="background: pink;" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title" ><span>Đăng nhập</span></p>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=account&action=login" class="button" style="background: pink;">Đăng nhập</a> </div>
            </div>
          </div>
        </div>