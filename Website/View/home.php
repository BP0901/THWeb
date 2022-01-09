<?php
function loadClass($classname){
  include "../model/$classname.php";
}
spl_autoload_register('loadClass');

$product = new Product("","",0,"",0,0,0,0);
$data = $product->getAllProduct();

$category = new Category(0,"");
$cate = $category->getAllCategory();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/headerpage.php' ?>
</head>

<body>
    <!-- wpf loader Two -->
    <!-- <?php include'layouts/loading.php' ?> -->
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <?php include 'layouts/menupage1.php';
          include 'layouts/quick_view_product.php';
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
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/banner.jpg" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Giảm giá đến 75% </span>
                                <h2 data-seq>Bộ Sưu Tập Cho Đàn Ông</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua sắm ngay</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/bannernu.jpg" alt="Wristwatch slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Giảm giá đến 40%</span>
                                <h2 data-seq>Bộ sưu tập Wristwatch</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">mua sắm ngay</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/banner.jpg" alt="Women Jeans slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Giảm giá đến 75%</span>
                                <h2 data-seq>Bộ sưu tập của Jeans</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua sắm ngay</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/bannernu.jpg" alt="Shoes slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Giảm giá đến 75%</span>
                                <h2 data-seq>Exclusive Shoes</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua sắm ngay</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/banner.jpg" alt="Male Female slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Giảm giá đến 50%</span>
                                <h2 data-seq>Bộ sưu tập đỉnh nhất</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Mua Sắm Ngay</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            <!-- promo left -->
                            <div class="col-md-5 no-padding">
                                <div class="aa-promo-left">
                                    <div class="aa-promo-banner">
                                        <img src="img/banner.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>75% Off</span>
                                            <h4><a href="#">For Women</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- promo right -->
                            <div class="col-md-7 no-padding">
                                <div class="aa-promo-right">
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/300x220(1).jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Mặt hàng độc quyền</span>
                                                <h4><a href="#">For Men</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/300x220(2).jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Giảm Giá</span>
                                                <h4><a href="#">Cho Giày</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/300x220(3).jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Điểm Mới</span>
                                                <h4><a href="#">Cho Trẻ Em</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/300x220(4).jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Giảm giá 25% </span>
                                                <h4><a href="#">Cho Túi</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#allprod" data-toggle="tab">Tất cả</a></li>
                                    <?php
                                      for($i = 0; $i < 3; $i++){
                                        echo '<li><a href="#'.$cate[$i]['category_id'].'" data-toggle="tab">'.$cate[$i]['category_name'].'</a></li>';
                                      }
                                    ?>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="allprod">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->
                                            <?php
                                              for($i = 0; $i < 8; $i++){
                                                      product($data[$i]);
                                              }
                                            ?>

                                        </ul>
                                        <a class="aa-browse-btn" href="#">Tìm kiếm tất cả sản phẩm <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / men product category -->
                                    <!-- start product category -->
                                    <div class="tab-pane fade" <?php echo "id=".$cate[0]['category_id'].">"; ?> 
                                      <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <?php
                                              $product->setCategory($cate[0]['category_id']);
                                              $data = $product->getProductByCategory();
                                              if(count($data) >= 8){
                                                for($i = 0; $i < 8; $i++){
                                                        product($data[$i]);
                                                }
                                              } else {
                                                for($i = 0; $i < count($data); $i++){
                                                  product($data[$i]);
                                                }
                                              }
                                            ?>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Tìm kiếm tất cả sản phẩm <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / women product category -->
                                    <!-- start sports product category -->
                                    <div class="tab-pane fade" <?php echo "id=".$cate[1]['category_id'].">"; ?> 
                                      <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <?php
                                              $product->setCategory($cate[1]['category_id']);
                                              $data = $product->getProductByCategory();
                                              if(count($data) >= 8){
                                                for($i = 0; $i < 8; $i++){
                                                        product($data[$i]);
                                                }
                                              } else {
                                                for($i = 0; $i < count($data); $i++){
                                                  product($data[$i]);
                                                }
                                              }
                                            ?>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Tìm kiếm tất cả sản phẩm <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / sports product category -->
                                    <!-- start electronic product category -->
                                    <div class="tab-pane fade" <?php echo "id=".$cate[2]['category_id'].">"; ?> 
                                      <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <?php
                                              $product->setCategory($cate[2]['category_id']);
                                              $data = $product->getProductByCategory();
                                              if(count($data) >= 8){
                                                for($i = 0; $i < 8; $i++){
                                                        product($data[$i]);
                                                }
                                              } else {
                                                for($i = 0; $i < count($data); $i++){
                                                  product($data[$i]);
                                                }
                                              }
                                            ?>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Tìm kiếm tất cả sản phẩm <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / electronic product category -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>MIỄN PHÍ VẬN CHUYỄN</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>Hoàn Tiền 30 Ngày</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>Hỗ trợ 24/7</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Testimonial -->
    <section id="aa-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-testimonial-area">
                        <ul class="aa-testimonial-slider">
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg"
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Allison</p>
                                        <span>Thiết Kế</span>
                                        <a href="#">Dribble.com</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg"
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>KEVIN MEYER</p>
                                        <span>CEO</span>
                                        <a href="#">Alphabet</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg"
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Luner</p>
                                        <span>COO</span>
                                        <a href="#">Kinatic Solution</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Testimonial -->

    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad?
                                            Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim
                                            repellendus animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Tiếp<span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad?
                                            Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim
                                            repellendus animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Tiếp <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad?
                                            Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim
                                            repellendus animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Tiếp <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                            <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
                            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->

    <!-- Subscribe section -->
    <?php include 'layouts/subscribesection.php' ?>
    <!-- / Subscribe section -->

    <!-- footer -->
    <?php include'layouts/footerpage.php' ?>
</body>

</html>