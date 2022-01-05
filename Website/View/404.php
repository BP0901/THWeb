<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'layouts/headerpage.php'?>
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
 
  
  <!-- 404 error section -->
  <section id="aa-error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-error-area">
            <h2>404</h2>
            <span>Xin Lỗi ! Trang không tìm thấy</span>
            <p>Xin Lỗi Vì Nội Dung Này Không Thể Hiển Thị Ngay Lúc Này</p>
            <a href="#"> Về trang Chủ</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / 404 error section -->

  <!-- Subscribe section -->
  <?php include 'layouts/subscribesection.php'?>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <?php include'layouts/footerpage.php' ?>
  

  </body>
</html>