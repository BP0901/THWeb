 <header id="aa-header">
   <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/english.jpg" alt="english flag">Tiếng Việt
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/french.jpg" alt="">English</a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">Tiếng Việt</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>VND
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>USD</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>0816.346.989</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.php">Tài Khoản</a></li>
                  <li class="hidden-xs"><a href="wishlist.php">Danh Sách Yêu Thích</a></li>
                  <li class="hidden-xs"><a href="cart.php">Giỏ Hàng</a></li>
                  <li class="hidden-xs"><a href="checkout.php">Thanh Toán</a></li>
                  <?php 
                    session_start();
                    if(isset($_SESSION["username"])){ ?>
                      <li class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Xin chào <?php echo $_SESSION["username"] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                          <a class="dropdown-item" href="../controller/logout-controller.php">Đăng xuất</a>
                        </div>
                    </li>
                    <?php } else { ?>
                      <li><a href="" data-toggle="modal" data-target="#login-modal">Đăng Nhập</a></li>
                    <?php } ?>  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>