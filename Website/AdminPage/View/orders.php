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
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <?php
                    $orderMDH = array("O000001", "O000002", "O000003", "O000004", "O000005", "O000006");
                    $ordeoVD = array("VD001", "VD002", "VD003", "VD004", "VD005", "VD006");
                    $orderStatus = array("Completed", "Completed", "Waiting", "Waiting", "Waiting", "Pending");
                    $orderMoney = array("100000", "2500000", "50000", "400000", "800000", "1200000");
                    $orderAddress = array("123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC", "123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC", "123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC", "123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC", "123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC", "123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC");
                    $orderCustomer = array("User1", "User2", "User3", "User4", "User5", "User6");
                    ?>
                    <!-- Simple Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pd-20">
                            <h4 class="text-blue h4 text-center">Đơn đặt hàng</h4>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">Mã đơn hàng</th>
                                        <th>Mã vận đơn</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng tiền</th>
                                        <th>Địa chỉ</th>
                                        <th>Người đặt hàng</th>
                                        <th class="datatable-nosort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop load data -->
                                    <?php for ($i = 0; $i < count($orderMDH); $i++) { ?>
                                        <tr>
                                            <td id="oderID<?php echo $i; ?>" class="table-plus"><?php echo $orderMDH[$i] ?></td>
                                            <td id="oderVD<?php echo $i; ?>"><?php echo $ordeoVD[$i] ?></td>
                                            <td id="oderStatus<?php echo $i; ?>"><?php echo $orderStatus[$i] ?> </td>
                                            <td id="oderMoney<?php echo $i; ?>"><?php echo number_format($orderMoney[$i]) ?><sup>đ</sup></td>
                                            <td id="oderAddr<?php echo $i; ?>"><?php echo $orderAddress[$i] ?></td>
                                            <td id="oderOwner<?php echo $i; ?>"><?php echo $orderCustomer[$i] ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                        <a id="view<?php echo $i; ?>" class="dropdown-item" href="#"><i class="dw dw-eye"></i> Chi tiết</a>
                                                        <a id="edit<?php echo $i; ?>" class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Chỉnh sửa</a>
                                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Xóa</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>    <!-- Simple Datatable End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- js -->
    <?php include('Layout/js/tablejs.php'); ?>

    <script type="text/javascript">
    <?php for ($i = 0; $i < count($orderMDH); $i++) { ?>
            // load edit modals
            $(document).ready(function () {
                $(document).on('click', '#edit<?php echo $i; ?>', function () {
                    sessionStorage.setItem("oderID", "id");
                    var id = $('#oderID<?php echo $i; ?>').text();// get product id
                    var vd = $('#oderVD<?php echo $i; ?>').text();// get product Vận đơn
                    var status = $('#oderStatus<?php echo $i; ?>').text();// get product status
                    var price = $('#oderMoney<?php echo $i; ?>').text();// get product Money
                    var addr = $('#oderAddr<?php echo $i; ?>').text();// get product Address
                    var customer = $('#oderOwner<?php echo $i; ?>').text();// get product customer
                    sessionStorage.setItem("oderID", id);
                    sessionStorage.setItem("oderVD", vd);
                    sessionStorage.setItem("oderStatus", status);
                    sessionStorage.setItem("oderMoney", price);
                    sessionStorage.setItem("oderAddr", addr);
                    sessionStorage.setItem("oderOwner", customer);
                    var loc = window.location.pathname;
                    var dir = loc.substring(0, loc.lastIndexOf('/'));
                    window.location = dir + "/order_edit.php";
                });


                //load view modals 

                $(document).on('click', '#view<?php echo $i; ?>', function () {
                    sessionStorage.setItem("oderID", "id");
                    var id = $('#oderID<?php echo $i; ?>').text();// get product id
                    var vd = $('#oderVD<?php echo $i; ?>').text();// get product Vận đơn
                    var status = $('#oderStatus<?php echo $i; ?>').text();// get product status
                    var price = $('#oderMoney<?php echo $i; ?>').text();// get product Money
                    var addr = $('#oderAddr<?php echo $i; ?>').text();// get product Address
                    var customer = $('#oderOwner<?php echo $i; ?>').text();// get product customer
                    sessionStorage.setItem("oderID", id);
                    sessionStorage.setItem("oderVD", vd);
                    sessionStorage.setItem("oderStatus", status);
                    sessionStorage.setItem("oderMoney", price);
                    sessionStorage.setItem("oderAddr", addr);
                    sessionStorage.setItem("oderOwner", customer);
                    var loc = window.location.pathname;
                    var dir = loc.substring(0, loc.lastIndexOf('/'));
                    window.location = dir + "/order_view.php";
                });
            });
    <?php } ?>
    </script>
</html>