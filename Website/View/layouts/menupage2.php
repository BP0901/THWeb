<?php
include_once '../Model/Category.php';

$category = new Category(0, "");
$cateData = $category->getAllCategory();
?>
 <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="home.php">Tranh Chủ</a></li>
              <li><a href="#">Danh mục sản phẩm <span class="caret"></span></a>
                <ul class="dropdown-menu"> 
                <?php 
                  for($i = 0; $i < count($cateData); $i++){
                      echo '<li><a href="product.php?category='.$cateData[$i]['category_id'].'">'.$cateData[$i]['category_name'].'</a></li>';
                    }
                  ?>               
                </ul>
              </li>
                     
             <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="blog-archive.html">Blog Dạng 1</a></li>
                  <li><a href="blog-archive-2.html">Blog Dạng 2</a></li>
                  <li><a href="blog-single.html">Blog Cá Nhân</a></li>                
                </ul>
              </li>
              <li><a href="contact.php">Liên Hệ</a></li>
              <li><a href="#">Trang<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="product.php">Trang Của Cửa Hàng</a></li>
                  <li><a href="product-detail.php">Mua Sắm Đơn Lẻ</a></li>                
                  <li><a href="404.php">Trang 404</a></li>                
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
      </div>
    </div>
  </section>