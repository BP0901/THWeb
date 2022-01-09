<?php
    if(isset($_SESSION['cart-item'])){
        $datas = array_values($_SESSION['cart-item']);
    } else {
        $datas = array();
    }
  // var_dump($_SESSION['amount']);
?>
<div class="aa-cartbox">
                <a class="aa-cart-link" href="cart.php">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Giỏ Hàng</span>
                  <span class="aa-cart-notify"><?php echo count($datas); ?></span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                  <?php 
        $totalPrice = 0;
        for($i=0 ; $i< count($datas) ;$i++){ 
            $amount = $_SESSION['amount'][$datas[$i]->getProductId()];
            $total = 0;
      ?>

<li>
                <a class="aa-cartbox-img" href="#"><img src="../Adminpage/view/<?php echo $datas[$i]->getImg(); ?>"
                        alt="img"></a>
                <div class="aa-cartbox-info">
                    <h4><a href="#"><?php echo $datas[$i]->getProductName(); ?></a></h4>
                    <?php if($datas[$i]->getPriceSale() == 0){?>
                      <td><?php echo $amount.' x '. number_format($datas[$i]->getPriceCurrent()); ?><sup>đ</sup></td>
                    <?php $total = $amount * $datas[$i]->getPriceCurrent(); 
                                                        $totalPrice += $total;
                                                    ?>
                    <?php } else { ?>
                      <td><?php echo $amount.' x '. number_format($datas[$i]->getPriceSale()); ?><sup>đ</sup></td>
                    <?php $total = $amount * $datas[$i]->getPriceSale(); 
                                                         $totalPrice += $total;
                                                    ?>
                    <?php } ?>

                   
                </div>
            </li>
            <?php } ?>
            <li>
                <span class="aa-cartbox-total-title">
                    Tổng
                </span>
                <span class="aa-cartbox-total-price">
                    <?php echo number_format($totalPrice); ?><sup>đ</sup>
                </span>
            </li>
        </ul>
        <a class="aa-cartbox-checkout aa-primary-btn" href="cart.php">Thanh Toán</a>
    </div>
</div>