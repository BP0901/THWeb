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
				$orderMDH = array("O000001","O000002","O000003","O000004","O000005","O000006");
				$ordeoVD = array("VD001","VD002","VD003","VD004","VD005","VD006");
				$orderStatus = array("Completed","Completed","Waiting","Waiting","Waiting","Pending");
				$orderMoney = array("100000","2500000","50000","400000","800000","1200000");
				$orderAddress = array("123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC","123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC","123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC","123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC","123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC","123 ABC,ABC,ABC,ABC,ABC, ABC,ABC,ABC");
				$orderCustomer = array("User1","User2","User3","User4","User5","User6");
			?>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Đơn đặt hàng</h4>
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
								<?php
									for($i = 0; $i < count($orderMDH);$i++){ ?>
									<tr>
									<td class="table-plus"><?php echo $orderMDH[$i]  ?></td>
									<td><?php echo $ordeoVD[$i] ?></td>
									<td><?php echo $orderStatus[$i] ?> </td>
                                    <td><?php echo number_format($orderMoney[$i]) ?><sup>đ</sup></td>
                                    <td><?php echo $orderAddress[$i] ?></td>
									<td><?php echo $orderCustomer[$i] ?></td>
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
	<!-- js -->
	<?php include('Layout/js/tablejs.php'); ?>
</html>