<?php
  function loadClass($classname){
    include "../model/$classname.php";
  }
  spl_autoload_register('loadClass');
  
  $id = $_GET['category'];
  $data = array();

  if($id == -1){
    $search = $_GET['txt_search'];
    $product = new Product("","",0,"",0,0,0,0);
    $allProd = $product->getAllProduct();
    for($i = 0 ; $i < count($allProd) ; $i++){
        if(strpos(strtolower($allProd[$i]['product_name']),strtolower($search)) != false){
          $data =  $allProd[$i];     
        }
    }
  }else{
    $category = new Category($id,"");
    $cate = $category->getCategoryById();
    $cateData = $category->getAllCategory();
  
    $product = new Product("","",0,"",0,0,0,0);
    $product->setCategory($id);
    $data = $product->getProductByCategory();
  }

  


  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/headerpage.php' ?>
</head>
<!-- !Important notice -->
<!-- Only for product page body tag have to added .productPage class -->

<body class="productPage">
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
    <?php 
    include 'layouts/menupage2.php';
    include 'layouts/product_cart.php';
    ?>
    <!-- / menu -->

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="img/bannernu.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Thời Trang</h2>
                    <ol class="breadcrumb">
                        <li><a href="home.php">Trang Chủ</a></li>
                        <?php if($id != -1){?>
                            <li class="active"><?php echo $cate[0]['category_name']  ?></li>
                        <?php } else { ?>
                            <li class="active">Tìm kiếm</li>
                        <?php } ?>

                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-head">
                            <div class="aa-product-catg-head-left">
                                <form action="" class="aa-sort-form">
                                    <label for="">Sort by</label>
                                    <select name="">
                                        <option value="1" selected="Default">Default</option>
                                        <option value="2">Name</option>
                                        <option value="3">Price</option>
                                        <option value="4">Date</option>
                                    </select>
                                </form>
                                <form action="" class="aa-show-form">
                                    <label for="">Show</label>
                                    <select name="">
                                        <option value="1" selected="12">12</option>
                                        <option value="2">24</option>
                                        <option value="3">36</option>
                                    </select>
                                </form>
                            </div>
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg">
                                <?php
                                  for($i = 0; $i < count($data); $i++){
                                     product($data[$i]);
                                  }
                                ?>
                            </ul>
                            <!-- Pages -->
                        </div>
                        <div class="aa-product-catg-pagination">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Loại Đồ</h3>
                            <ul class="aa-catg-nav">
                                <?php 
                                  for($i = 0; $i < count($cateData); $i++){
                                      echo '<li><a href="product.php?category='.$cateData[$i]['category_id'].'">'.$cateData[$i]['category_name'].'</a></li>';
                                    }
                                  ?>
                            </ul>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Tags</h3>
                            <div class="tag-cloud">
                                <a href="#">Thời Trang</a>
                                <a href="#">Áo</a>
                                <a href="#">Quần</a>
                                <a href="#">Làm đẹp</a>

                            </div>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Mua sắm theo giá</h3>
                            <!-- price range -->
                            <div class="aa-sidebar-price-range">
                                <form action="">
                                    <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                    <button class="aa-filter-btn" type="submit">Filter</button>
                                </form>
                            </div>

                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Shop By Color</h3>
                            <div class="aa-color-tag">
                                <a class="aa-color-green" href="#"></a>
                                <a class="aa-color-yellow" href="#"></a>
                                <a class="aa-color-pink" href="#"></a>
                                <a class="aa-color-purple" href="#"></a>
                                <a class="aa-color-blue" href="#"></a>
                                <a class="aa-color-orange" href="#"></a>
                                <a class="aa-color-gray" href="#"></a>
                                <a class="aa-color-black" href="#"></a>
                                <a class="aa-color-white" href="#"></a>
                                <a class="aa-color-cyan" href="#"></a>
                                <a class="aa-color-olive" href="#"></a>
                                <a class="aa-color-orchid" href="#"></a>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- / product category -->


    <!-- Subscribe section -->
    <?php include 'layouts/subscribesection.php' ?>
    <!-- / Subscribe section -->

    <!-- footer -->
    <?php include'layouts/footerpage.php' ?>

</body>

</html>