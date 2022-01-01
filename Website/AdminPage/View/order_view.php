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
                    <span class="input-group-addon fw-bold" style="width:150px;">ID:</span>
                    <p id="voderID" class="input-group-addon"></p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:150px;">Mã vận đơn:</span>
                    <p id="voderVD" class="input-group-addon"></p>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:150px;">Trạng thái:</span>
                    <p id="voderStatus" class="input-group-addon"></p>
                </div>   
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:150px;">Tổng tiền:</span>
                    <p id="voderMoney" class="input-group-addon"></p>
                </div>   
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:150px;">Địa chỉ giao:</span>
                    <p id="voderAddr" class="input-group-addon"></p>
                </div>  
                <div class="form-group input-group">
                    <span class="input-group-addon fw-bold" style="width:150px;">Người đặt:</span>
                    <p id="voderOwner" class="input-group-addon"></p>
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
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '#btnt', function () {
                alert("aaa");
            });
        });
        function te() {
            var id = sessionStorage.getItem("oderID");// get product id
            var vd = sessionStorage.getItem("oderVD");// get product Vận đơn
            var status = sessionStorage.getItem("oderStatus");// get product status
            var price = sessionStorage.getItem("oderMoney");// get product Money
            var addr = sessionStorage.getItem("oderAddr");// get product Address
            var customer = sessionStorage.getItem("oderOwner");// get product customer
            // alert(id +"\n"+ vd+"\n"+status+"\n"+price+"\n"+addr+"\n"+customer);
            $('#voderID').text(id);
            $('#voderVD').text(vd);
            $('#voderStatus').text(status);
            $('#voderMoney').text(price);
            $('#voderAddr').text(addr);
            $('#voderOwner').text(customer);
        }
    </script>
    <!-- js -->
    <?php include('Layout/js/tablejs.php'); ?>
</html>