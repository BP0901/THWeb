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
				$prodID = array("P00001","P000002","P000003","P000004","P000005","P000006");
				$prodName = array("ÁO THUN POLO NAM TS","QUẦN THỂ THAO NAM ACTIVE TS","QUẦN SHORT GIÓ V3 TS","Áo croptop in Sun Kissed","ÁO KHOÁC TÚI KHÓA KÉO AB657","Áo khoác Jockey chống tia UV");
				$prodPrice = array("193000","79000","282000","210000","2650000","485000");
				$prodSize = array("M,L,XL,2XL,3XL","M,L,XL,2XL,3XL","M,L,XL,2XL,3XL","M,L,XL,2XL,3XL","M,L,XL,2XL,3XL","M,L,XL,2XL,3XL");
				$prodDiscount = array("119000","0","169000","0","200000","0");
                $prodGenre = array("Áo thun nam","Quần short","Quần short","Áo thun nữ","Áo khoác","Áo khoác");
				$prodImg = array("vendors/images/img/áo thun man.jpg","vendors/images/img/Quần short.jpg","vendors/images/img/quần short 2.jpg","vendors/images/img/áo thun nữ.jpg","vendors/images/img/áo khoác 1.jpg","vendors/images/img/áo khoác nam.jpg")
            ?>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Sản phẩm</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">ID</th>
									<th>Hình ảnh</th>
									<th>Tên sản phẩm</th>
									<th>Giá</th>
                                    <th>Giá sau giảm</th>
                                    <th>Loại</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<!-- loop load data -->
								<?php
									for($i = 0; $i < count($prodID);$i++){ ?>
									<tr>
									<td class="table-plus"><?php echo $prodID[$i]  ?></td>
									<td >
										<img src="<?php echo $prodImg[$i] ?>" width="70" height="70" alt="">
									</td>
									<td><?php echo $prodName[$i] ?></td>
                                    <td><?php echo number_format($prodPrice[$i]) ?><sup>đ</sup></td>
									<td><?php echo $prodDiscount[$i] ?></td>
									<td><?php echo $prodGenre[$i] ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Chi tiết</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Chỉnh sửa</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Xóa</a>
											</div>
										</div>
									</td>
								</tr>
								<?php } ?>


				<!-- Simple Datatable End -->
			
				
				



			</div>
		</div>
	</div>
	<!-- JS -->
	<?php include('Layout/js/tablejs.php'); ?>
</html>