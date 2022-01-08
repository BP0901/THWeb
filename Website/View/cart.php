<?php
  function loadClass($classname){
    include "../model/$classname.php";
  }
  spl_autoload_register('loadClass');
  session_start();
    if(isset($_SESSION['cart-item'])){
        $data = array_values($_SESSION['cart-item']);
    } else {
        $data = array();
    }
//   var_dump($_SESSION['amount']);
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
                    <h2>Giỏ Hàng</h2>
                    <ol class="breadcrumb">
                        <li><a href="home.php">Trang Chủ</a></li>
                        <li class="active">Giỏ Hàng</li>
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
                        <div class="cart-view-table">
                            <form action="">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Xóa</th>
                                                <th>Hình ảnh</th>
                                                <th>Sản Phẩm</th>
                                                <th>Giá</th>
                                                <th>Số Lượng</th>
                                                <th>Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                             $totalPrice = 0;
                                            if(isset($_SESSION['cart-item'])){
                                            for($i=0 ; $i< count($_SESSION['amount']) ;$i++){ 
                                                $amount = $_SESSION['amount'][$data[$i]->getProductId()];
                                                $total = 0;
                    
                                            ?>
                                            <tr>
                                                <td><a class="remove" href="#">
                                                        <fa class="fa fa-close"></fa>
                                                    </a></td>
                                                <td><a href="#"><img src="../Adminpage/view/<?php echo $data[$i]->getImg(); ?>" alt="img"></a></td>
                                                <td><a class="aa-cart-title" href="#"><?php echo $data[$i]->getProductName(); ?></a></td>
                                                <?php if($data[$i]->getPriceSale() == 0){?>
                                                    <td><?php echo number_format($data[$i]->getPriceCurrent()); ?><sup>đ</sup></td>
                                                    <?php $total = $amount * $data[$i]->getPriceCurrent(); 
                                                        $totalPrice += $total;
                                                    ?>
                                                <?php } else { ?>
                                                    <td><?php echo number_format($data[$i]->getPriceSale()); ?><sup>đ</sup></td>
                                                    <?php $total = $amount * $data[$i]->getPriceSale(); 
                                                         $totalPrice += $total;
                                                    ?>
                                                <?php } ?>
                                                <td><input class="aa-cart-quantity" type="number" min="1" value="<?php echo $amount; ?>"></td>
                                                <td><?php echo number_format($total); ?><sup>đ</sup></td>
                                            </tr>
                                            <?php } } ?>
                                            <tr>
                                                <td colspan="6" class="aa-cart-view-bottom">
                                                    <div class="aa-cart-coupon">
                                                        <input class="aa-coupon-code" type="text"
                                                            placeholder="Khuyến Mãi">
                                                        <input class="aa-cart-view-btn" type="submit"
                                                            value="Áp Dụng Khuyến Mãi">
                                                    </div>
                                                    <input class="aa-cart-view-btn" type="submit"
                                                        value="Cập Nhật Giỏ Hàng">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <!-- Cart Total view -->
                            <div class="cart-view-total">
                                <h4>Tổng Giỏ Hàng</h4>
                                <table class="aa-totals-table">
                                    <tbody>
                                        <tr>
                                            <th>Tổng tiền</th>
                                            <td><?php echo number_format($totalPrice); ?><sup>đ</sup></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="aa-cart-view-btn">Thủ Tục Thanh Toán</a>
                            </div>
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