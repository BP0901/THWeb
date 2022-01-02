<!DOCTYPE html>
<html>
    <head>
        <?php include('Layout/Header.php'); ?>
    </head>
    <body>

        <!-- Title Bar -->
        <?php include('Layout/TitleBar.php'); ?>

        <!-- Menu -->
        <?php include('Layout/Menu.php'); ?>

        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            <div class="container-fluid">
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Mã đơn hàng:</span>
                    <p class="input-group-addon">
                        <?php echo $data['order'][0]['order_id'] ?>
                    </p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Mã người tạo đơn hàng:</span>
                    <p class="input-group-addon">
                        <?php echo $data['order'][0]['user_id'] ?>
                    </p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Tên người nhận:</span>
                    <p class="input-group-addon">
                        <?php echo $data['order'][0]['receiver'] ?>
                    </p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Địa chỉ giao:</span>
                    <p class="input-group-addon">
                        <?php echo $data['order'][0]['to_address'] ?>
                    </p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Số điện thoại:</span>
                    <p class="input-group-addon">
                        <?php echo $data['order'][0]['phone_number'] ?>
                    </p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Phương thức thanh toán:</span>
                    <p class="input-group-addon">
                        <?php echo $data['order'][0]['payment_methods'] ?>
                    </p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Trạng thái:</span>
                    <p class="input-group-addon">
                        <?php echo $data['order'][0]['order_status'] ?>
                    </p>
                </div>   
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:220px;">Tổng tiền:</span>
                    <p class="input-group-addon">
                        <?php echo number_format($data['order'][0]['order_total_price']) ?> Đ
                    </p>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Mã sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Danh mục</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <!-- loop load data -->
                             <?php for ($i = 0; $i < count($data['product']); $i++) { ?>
                               
                                <tr>
                                    <td class="table-plus">
                                        <?php echo $data['product'][$i][0]['id'] ?>
                                    </td>
                                    <td>
                                        <img src="../view/<?php echo ltrim($data['product'][$i][0]['product_img'], ".") ?>" width="70" height="70" alt="">
                                    </td>
                                    <td>
                                        <?php echo $data['product'][$i][0]['product_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($data['order_detail'][$i]['price']) ?> <sup>đ</sup>
                                    </td>
                                    <td>
                                        <?php echo $data['order_detail'][$i]['quatity'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $data['product'][$i][0]['category'];
                                        $cate = new Category($id, "");
                                        echo $cate->getCategoryById()[0]['category_name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $total = $data['order_detail'][$i]['price'] * $data['order_detail'][$i]['quatity'];
                                        echo number_format($total);
                                        ?><sup>đ</sup>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- js -->
    <?php include('Layout/js/tablejs.php'); ?>
</html>