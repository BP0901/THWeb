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
            <form action="controller/OrderController.php" method="post" enctype="multipart/form-data">
                <div>
                    <button type="submit" name="edit" class="mb-15 btn btn-primary">Chỉnh sửa</button>
                </div>
                
                <div class="container-fluid">
                    <div class="form-group input-group">
                        <span class="input-group-addon fw-bold" style="width:150px;">ID:</span>
                        <input type="text" name="txt_id" style="width:350px;" class="form-control" id="eoderID">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon fw-bold" style="width:150px;">Mã vận đơn:</span>
                        <input type="text" name="txt_vd" style="width:350px;" class="form-control" id="eoderVD">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon fw-bold" style="width:150px;">Trạng thái:</span>
                        <input type="text" name="txt_status" style="width:350px;" class="form-control" id="eoderStatus">
                    </div>   
                    <div class="form-group input-group">
                        <span class="input-group-addon fw-bold" style="width:150px;">Tổng tiền:</span>
                        <input type="text" name="txt_totalprice" style="width:350px;" class="form-control" id="eoderMoney">
                    </div>   
                    <div class="form-group input-group">
                        <span class="input-group-addon fw-bold" style="width:150px;">Địa chỉ giao:</span>
                        <input type="text" name="txt_addr" style="width:350px;" class="form-control" id="eoderAddr">
                    </div>  
                    <div class="form-group input-group">
                        <span class="input-group-addon fw-bold" style="width:150px;">Người đặt:</span>
                        <input type="text" name="txt_costumer" style="width:350px;" class="form-control" id="eoderOwner">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon fw-bold" style="width:150px;"></span>
                        <p id="voderOwner" class="input-group-addon">Thông tin món hàng:</p>
                    </div>
                    <?php
                    $prodID = array("P00001", "P000002", "P000003", "P000004", "P000005", "P000006");
                    $prodName = array("Máy lạnh Sharp Inverter 1.5 HP AH-X12XEW", "Laptop HP 14-CF2033WM 3V7G4UA", "Tủ Lạnh Inverter PANASONIC 234 Lít NR-TV261BPAV", "Android Tivi 4K TCL 50 Inch 50P618", "OPPO Reno 5 5G(8GB+128GB), Bạc", "Điện thoại Samsung Galaxy A52s 5G");
                    $prodWarranty = array("1 năm", "1 năm", "1 năm", "1 năm", "6 tháng", "6 tháng");
                    $prodPrice = array("8200000", "24000000", "20000000", "11000000", "4000000", "8500000");
                    $prodDiscount = array("0", "0", "0", "0", "3800000", "83000000");
                    $prodGenre = array("Máy lạnh", "Laptop", "Tủ lạnh", "Tivi", "Điện thoại", "Điện thoại");
                    $prodImg = array("vendors/images/img/máy lạnh.png", "vendors/images/img/Laptop.jpg", "vendors/images/img/tủ lạnh.png", "vendors/images/img/Tivi.png", "vendors/images/img/điện thoại.png", "vendors/images/img/điện thoại 2.png")
                    ?>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">ID</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Thời gian bảo hành</th>
                                    <th>Giá</th>
                                    <th>Giá sau giảm</th>
                                    <th>Loại</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- loop load data -->
                                <?php for ($i = 0; $i < count($prodID); $i++) { ?>
                                    <tr>
                                        <td id="prodid<?php echo $i; ?>" class="table-plus"><?php echo $prodID[$i] ?></td>
                                        <td >
                                            <img id="prodimg<?php echo $i; ?>" src="<?php echo $prodImg[$i] ?>" width="70" height="70" alt="">
                                        </td>
                                        <td id="prodname<?php echo $i; ?>"><?php echo $prodName[$i] ?></td>
                                        <td id="prodwarranty<?php echo $i; ?>"><?php echo $prodWarranty[$i] ?> </td>
                                        <td id="prodprice<?php echo $i; ?>"><?php echo number_format($prodPrice[$i]) ?><sup>đ</sup></td>
                                        <td id="proddiscount<?php echo $i; ?>"><?php echo number_format($prodDiscount[$i]) ?><sup>đ</sup></td>
                                        <td id="prodgenre<?php echo $i; ?>"><?php echo $prodGenre[$i] ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a id="edit<?php echo $i; ?>" class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Chỉnh sửa</a>
                                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Xóa</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                    </div>  
                </div>
            </form>
        </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '#btnt', function () {
                alert("aaaaaaa");
            });
        });
    </script>
    <!-- js -->
    <?php include('Layout/js/tablejs.php'); ?>
</html>