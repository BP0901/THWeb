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
  <?php include 'menupage1.php'?>
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
  <?php include 'menupage2.php'?>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Liên Hệ</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Trang Chủ</a></li>         
          <li class="active">Liên Hệ</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>Chúng tôi mong muốn hỗ trợ bạn ..</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quos.</p>
           </div>
           <!-- contact map -->
           <div class="aa-contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.3714257064535!2d-86.7550931378034!3d34.66757706940219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8862656f8475892d%3A0xf3b1aee5313c9d4d!2sHuntsville%2C+AL+35813%2C+USA!5e0!3m2!1sen!2sbd!4v1445253385137" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Tên của bạn" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="email" placeholder="Email" class="form-control">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Subject" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Công Ty" class="form-control">
                        </div>
                      </div>
                    </div>                  
                     
                    <div class="form-group">                        
                      <textarea class="form-control" rows="3" placeholder="Tin Nhắn"></textarea>
                    </div>
                    <button class="aa-secondary-btn">Gửi</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>DailyShop</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi dolor facilis! Nihil error, eius.</p>
                     <p><span class="fa fa-home"></span>195 Lê Văn Sĩ Phường 14 Quận Phú Nhuận</p>
                     <p><span class="fa fa-phone"></span>+84 816.346.989</p>
                     <p><span class="fa fa-envelope"></span>Email: support@gmail.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Subscribe section -->
   <?php include 'layouts/subscribesection' ?>
  <!-- / Subscribe section -->

  <!-- footer -->  
    <?php include'layouts/footerpage.php' ?>
  

  </body>
</html>