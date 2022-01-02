<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'layouts/headerpage.php' ?>
  </head>
  <body>
  
   <!-- wpf loader Two -->
    <?php include'layouts/loading.php' ?>
    <!-- / wpf loader Two -->       
 <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
<?php include 'layouts/menupage1.php'?>
    <!-- / header top  -->

    <!-- start header bottom  -->
     <?php include 'layouts/logo.php' ?>
              <!-- / logo  -->
               <!-- cart box -->
               <?php include 'layouts/cartbox.php'?>
              <!-- / cart box -->
              <!-- search box -->
              <?php include 'layouts/searchbox.php' ?>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <?php include 'layouts/menupage2.php'?>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Trang Account</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Trang Chủ</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Đăng Nhập</h4>
                 <form action="" class="aa-login-form">
                  <label for="">Tên tài khoản & Email Người Dùng<span>*</span></label>
                   <input type="text" placeholder="Username or email">
                   <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button type="submit" class="aa-browse-btn">Đăng Nhập</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Lưu Đăng Nhập </label>
                    <p class="aa-lost-password"><a href="#">Quên Mật Khẩu?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Đăng Kí</h4>
                 <form action="" class="aa-login-form">
                    <label for="">Tên tài khoản & Email Người Dùng<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button type="submit" class="aa-browse-btn">Đăng Ký</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

  <!-- footer -->  
    <?php include'layouts/footerpage.php' ?>
  

  </body>
</html>