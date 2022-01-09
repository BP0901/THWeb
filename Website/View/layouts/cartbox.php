
<div class="aa-cartbox">
    <a class="aa-cart-link" href="#">
        <span class="fa fa-shopping-basket"></span>
        <span class="aa-cart-title">Giỏ Hàng</span>
        <span class="aa-cart-notify"><?php echo count($data); ?></span>
    </a>
    <div class="aa-cartbox-summary">
        <ul>
            <?php 
        $totalPrice = 0;
        for($i=0 ; $i< count($data) ;$i++){ 
            $amount = $_SESSION['amount'][$data[$i]->getProductId()];
            $total = 0;
      ?>
            <li>
                <a class="aa-cartbox-img" href="#"><img src="../Adminpage/view/<?php echo $data[$i]->getImg(); ?>"
                        alt="img"></a>
                <div class="aa-cartbox-info">
                    <h4><a href="#"><?php echo $data[$i]->getProductName(); ?></a></h4>
                    <?php if($data[$i]->getPriceSale() == 0){?>
                      <td><?php echo $amount.' x '. number_format($data[$i]->getPriceCurrent()); ?><sup>đ</sup></td>
                    <?php $total = $amount * $data[$i]->getPriceCurrent(); 
                                                        $totalPrice += $amount;
                                                    ?>
                    <?php } else { ?>
                      <td><?php echo $amount.' x '. number_format($data[$i]->getPriceSale()); ?><sup>đ</sup></td>
                    <?php $total = $amount * $data[$i]->getPriceSale(); 
                                                         $totalPrice += $amount;
                                                    ?>
                    <?php } ?>

                   
                </div>
                <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
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
        <a class="aa-cartbox-checkout aa-primary-btn" href="#">Thanh Toán</a>
    </div>
</div> -->




<div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Giỏ Hàng</span>
                  <span class="aa-cart-notify">3</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Dán Hình SP</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Dán Hình SP</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Tổng
                      </span>
                      <span class="aa-cartbox-total-price">
                        2000000
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Thanh Toán</a>
                </div>
              </div>