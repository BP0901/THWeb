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
				$userID = array("U000001","U000002","U000003","U000004","U000005","U000006");
				$userUsername = array("User1","User2","User3","User4","User5","User6");
				$userPass = array("123","123","123","123","123","123");
				$userPhone = array("0101010101","0202020202","0303030303","0404040404","0505050505","0606060606");
				$userEmail = array("User1@gmail.com","User2@gmail.com","User3@gmail.com","User4@gmail.com","User5@gmail.com","User6@gmail.com");
			?>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Tài khoản người dùng</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">ID</th>
									<th>Username</th>
									<th>Password</th>
									<th>Phone</th>
                                    <th>Email</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<!-- loop load data -->
								<?php
									for($i = 0; $i < count($userID);$i++){ ?>
									<tr>
									<td class="table-plus"><?php echo $userID[$i]  ?></td>
									<td><?php echo $userUsername[$i] ?></td>
									<td><?php echo $userPass[$i] ?> </td>
                                    <td><?php echo $userPhone[$i] ?></td>
									<td><?php echo $userEmail[$i] ?></td>
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