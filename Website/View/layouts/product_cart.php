<?php
// Layout product theo chiều dọc
function product($product){
    echo '     <li>
                 <figure>
                  <a  class="aa-product-img" href="product-detail.php?prod='.$product["id"].'"><img width="250" height="300" src="../Adminpage/view/'.$product["product_img"].'" alt="polo shirt img"></a>
                  <form action="../controller/order-controller.php" method="post">
                    <input type="text" name="txt_id" value='.$product["id"].' hidden/>
                    <button type="submit" name="order_action" value="add" class="aa-add-card-btn"href="cart.php"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ đồ</button>
                  </form>
                  <figcaption>
                     <h4 class="aa-product-title"><a href="product-detail.php?prod='.$product["id"].'">'.$product["product_name"].'</a></h4>';
                        if($product["product_price_discount"] != 0){
                              echo '<span class="aa-product-price">'.number_format($product["product_price_discount"]).'<sup>đ</sup></span><span class="aa-product-price"><del>'.number_format($product["product_price"]).'<sup>đ</sup></del></span>';
                        } else {
                              echo '<span class="aa-product-price">'.number_format($product["product_price"]).'<sup>đ</sup></span>';
                        }
      echo '</figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                          </div>';
                          if($product["product_price_discount"] != 0){
                            echo '<span class="aa-badge aa-sale" href="#">SALE!</span>';
                          }
                        echo '</li>';
}