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
              <?php include 'layouts/searchbox.php'?>
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
   <img src="img/bannernu.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Danh sách yêu thích</h2>
        <ol class="breadcrumb">
          <li><a href="home.php">trang Chủ</a></li>                   
          <li class="active">Danh sách yêu thích</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table aa-wishlist-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="img/man/polo-shirt-1.png" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                        <td>$250</td>
                        <td>Trong kho</td>
                        <td><a href="#" class="aa-add-to-cart-btn">Thêm vào giỏ đồ</a></td>
                      </tr>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="img/man/polo-shirt-2.png" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                        <td>$150</td>
                        <td>Trong kho</td>
                        <td><a href="#" class="aa-add-to-cart-btn">Thêm vào giỏ đồ</a></td>
                      </tr>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="img/man/polo-shirt-3.png" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                        <td>$50</td>
                        <td>Trong kho</td>
                        <td><a href="#" class="aa-add-to-cart-btn">Thêm vaò giỏ đồ</a></td>
                      </tr>                     
                      </tbody>
                  </table>
                </div>
             </form>             
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
   <?php include 'layouts/subscribesection.php' ?>
  <!-- / Subscribe section -->

  <!-- footer -->  
    <?php include'layouts/footerpage.php' ?>

  </body>
</html>