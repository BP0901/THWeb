<?php
  function loadClass($classname){
    include "../model/$classname.php";
  }
  spl_autoload_register('loadClass');
  
  $id = $_GET['prod'];

  $product = new Product("","",0,"",0,0,0,0);
  $product->setProductId($id);
  $data = $product->getProductById();
  $product->setCategory($data[0]['category']);
  $category = new Category(0,"");
  $category->setCategoryID($data[0]['category']);
  $cate = $category->getCategoryById();
  // $cateData = $category->getAllCategory();
  // var_dump($cate[0]['category_name']);
  ?>
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
    <?php include 'layouts/menupage1.php';
     // import cart product
     include 'layouts/product_cart.php';
    ?>
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
        <img src="img/bannernu.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2><?php echo $data[0]['product_name']; ?></h2>
                    <ol class="breadcrumb">
                        <li><a href="home.php">Trang Chủ</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">
                                                <div class="simpleLens-big-image-container"><a
                                                        data-lens-image="../Adminpage/view/<?php echo $data[0]['product_img']; ?>"
                                                        class="simpleLens-lens-image"><img
                                                            src="../Adminpage/view/<?php echo $data[0]['product_img']; ?>"
                                                            class="simpleLens-big-image"></a></div>
                                            </div>
                                            <!-- <div class="simpleLens-thumbnails-container">
                          <a data-big-image="img/view-slider/medium/polo-shirt-1.png" data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                          </a>                                    
                          <a data-big-image="img/view-slider/medium/polo-shirt-3.png" data-lens-image="img/view-slider/large/polo-shirt-3.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                          </a>
                          <a data-big-image="img/view-slider/medium/polo-shirt-4.png" data-lens-image="img/view-slider/large/polo-shirt-4.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                          </a>
                      </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3><?php echo $data[0]['product_name']; ?></h3>
                                        <div class="aa-price-block">
                                            <?php 
                         if($data[0]["product_price_discount"] != 0){
                          echo '<span class="aa-product-view-price">'.number_format($data[0]['product_price_discount']).'<sup>đ</sup></span>';
                          echo '<span style="width: 200px;"></span>';
                          echo '<span class="aa-product-view-price"><del>'.number_format($data[0]['product_price']).'<sup>đ</sup></del></span>';
                        } else {
                          echo '<span class="aa-product-view-price">'.number_format($data[0]['product_price']).'<sup>đ</sup></span>';
                          }
                        ?>
                                        </div>
                                        <p><?php echo $data[0]['product_info']; ?></p>
                                        <h4>Size</h4>
                                        <div class="aa-prod-view-size">
                                            <a href="#">S</a>
                                            <a href="#">M</a>
                                            <a href="#">L</a>
                                            <a href="#">XL</a>
                                        </div>
                                        <h4>Color</h4>
                                        <div class="aa-color-tag">
                                            <a href="#" class="aa-color-green"></a>
                                            <a href="#" class="aa-color-yellow"></a>
                                            <a href="#" class="aa-color-pink"></a>
                                            <a href="#" class="aa-color-black"></a>
                                            <a href="#" class="aa-color-white"></a>
                                        </div>
                                        <div class="aa-prod-quantity">
                                            <form action="">
                                                <select id="" name="">
                                                    <option selected="1" value="0">1</option>
                                                    <option value="1">2</option>
                                                    <option value="2">3</option>
                                                    <option value="3">4</option>
                                                    <option value="4">5</option>
                                                    <option value="5">6</option>
                                                </select>
                                            </form>
                                            <p class="aa-prod-category">
                                                Category: <a href="#"><?php echo $cate[0]['category_name']; ?></a>
                                            </p>
                                        </div>
                                        <div class="aa-prod-view-bottom">
                                        <form action="../controller/order-controller.php" method="post">
                                            <input type="text" name="txt_id" value='<?php echo $data[0]['id']; ?>' hidden/>
                                            <button type="submit" name="order_action" value="add" class="aa-add-to-cart-btn"href="cart.php">Thêm vào giỏ đồ</button>
                                            <button class="aa-add-to-cart-btn" href="#">Danh sách yêu thích</button>
                                            <button class="aa-add-to-cart-btn" href="#">So Sánh</button>    
                                        </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aa-product-details-bottom">
                            <ul class="nav nav-tabs" id="myTab2">
                                <li><a href="#description" data-toggle="tab">Mô tả</a></li>
                                <li><a href="#review" data-toggle="tab">Nhận xét</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius
                                            esse!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!
                                        </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum
                                        voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid
                                        voluptate perferendis, distinctio!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea,
                                        voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus
                                        repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab,
                                        obcaecati, porro unde accusantium facilis repudiandae.</p>
                                </div>
                                <div class="tab-pane fade " id="review">
                                    <div class="aa-product-review-area">
                                        <h4>2 Reviews for T-Shirt</h4>
                                        <ul class="aa-review-nav">
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/testimonial-img-3.jpg"
                                                                alt="girl image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><strong>Marla Jobs</strong> -
                                                            <span>october 23, 2021</span>
                                                        </h4>
                                                        <div class="aa-product-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star-o"></span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/testimonial-img-3.jpg"
                                                                alt="girl image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><strong>Marla Jobs</strong> -
                                                            <span>March 26, 2016</span>
                                                        </h4>
                                                        <div class="aa-product-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star-o"></span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <h4>Add a review</h4>
                                        <div class="aa-your-rating">
                                            <p>Your Rating</p>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                        </div>
                                        <!-- review form -->
                                        <form action="" class="aa-review-form">
                                            <div class="form-group">
                                                <label for="message">Cảm Nghĩ của bạn</label>
                                                <textarea class="form-control" rows="3" id="message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Tên</label>
                                                <input type="text" class="form-control" id="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="example@gmail.com">
                                            </div>

                                            <button type="submit" class="btn btn-default aa-review-submit">Gửi</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Related product -->
                        <div class="aa-product-related-item">
                            <h3>Những sản phẩm tương tự</h3>
                            <ul class="aa-product-catg aa-related-item-slider">
                                <?php
                                  $productdata = $product->getProductByCategory();
                                  for($i = 0; $i < count($productdata); $i++){
                                    product($productdata[$i]);
                            }
                                ?>
                            </ul>
                        </div>
                    </div>
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