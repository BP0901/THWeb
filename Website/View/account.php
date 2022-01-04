<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/headerpage.php' ?>
</head>

<body>

    <!-- wpf loader Two -->
    <?php include'layouts/loading.php' ?>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <?php include 'layouts/menupage1.php'?>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <?php include 'layouts/logo.php' ?>
    <!-- / logo  -->
    <!-- cart box -->
    <?php include 'layouts/cartbox.php'?>
    <!-- / cart box -->
    <!-- search box -->
    <?php include 'layouts/searchbox.php' ?>
    <!-- / search box -->
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- / header bottom  -->
    </header>
    <!-- / header section -->
    <!-- menu -->
    <?php include 'layouts/menupage2.php'?>
    <!-- / menu -->

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Trang Account</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Trang Chủ</a></li>
                        <li class="active">Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <?php 
   if(isset($_SESSION["username"])){ ?>
    <div class="col-sm-12 col-md-9 col-lg-9">
        <!-- Tab panes -->

        <h3>Account details </h3>
        <div class="col-md-6">
            <div class="aa-myaccount-login">
                <form action="../controller/user-controller.php" method="post" class="aa-login-form">
                    <label>Username</label><br>
                    <input type="text" name="txt_username" value="<?php echo $_SESSION['username'] ?>">
                    <br>
                    <div class="input-radio">
                        <span class="custom-radio">
                            <input type="radio" value="0" name="rad_gender" <?php
                                                            if($_SESSION['sex'] == 0) echo 'checked';
                                                            ?>> Nam
                        </span>
                        <span class="custom-radio">
                            <input type="radio" value="1" name="rad_gender" <?php
                                                            if($_SESSION['sex'] == 1) echo 'checked';
                                                            ?>> Nữ
                        </span>
                    </div> <br>
                    <label>Email</label><br>
                    <input type="email" name="txt_email" value="<?php echo $_SESSION['email'] ?>" disabled>
                    <br>
                    <label>Password</label>
                    <input type="password" name="txt_password" >
                    <label>Nhập lại Password</label>
                    <input type="password" name="txt_re_password" >
                    <br>
                    <button type="submit" name="grp_user_controller" value="update" class="aa-browse-btn mb_5">Cập
                        nhật</button>

                </form>
            </div>
        </div>

    </div>
    <div class="mx-auto" style="height: 200px;">

    </div>








    <?php }else{ ?>

    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-myaccount-area">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aa-myaccount-login">
                                    <h4>Đăng Nhập</h4>
                                    <form action="../controller/user-controller.php" method="POST"
                                        class="aa-login-form">
                                        <label for="">Email Người Dùng<span>*</span></label>
                                        <input type="text" placeholder="Email" name="email">
                                        <label for="">Password<span>*</span></label>
                                        <input type="password" placeholder="Password" name="password">
                                        <button type="submit" name="grp_user_controller" value="user_login"
                                            class="aa-browse-btn">Đăng Nhập</button>
                                        <label class="rememberme" for="rememberme"><input type="checkbox"
                                                id="rememberme"> Lưu Đăng Nhập </label>
                                        <p class="aa-lost-password"><a href="#">Quên Mật Khẩu?</a></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="aa-myaccount-register">
                                    <h4>Đăng Kí</h4>
                                    <form action="../controller/user-controller.php" method="post" class="aa-login-form">
                                        <label for="">Email<span>*</span></label>
                                        <input type="text" placeholder="Email" name="txtEmail">
                                        <label for="">Username<span>*</span></label>
                                        <input type="text" placeholder="Username" name="txtUsername">
                                        <label for="">Giới tính <span>*</span></label>
                                        <div>
                                            <input style="width: auto; height: auto" type="radio" name="radGender" value="Nam" checked>
                                            <label class="form-check-label" for="radGender">
                                                Nam
                                            </label>
                                            <input style="width: auto; height: auto" type="radio" name="radGender" value="Nữ">
                                            <label class="form-check-label" for="radGender">
                                                Nữ
                                            </label>
                                        </div>
                                        <label for="">Password<span>*</span></label>
                                        <input type="password" placeholder="Password" name="txtPassword">
                                        <label for="">Nhập lại Password<span>*</span></label>
                                        <input type="password" placeholder="Password" name="txtRePassword">
                                        <button type="submit" name="grp_user_controller" value="user_register" class="aa-browse-btn">Đăng Ký</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->

    <?php } ?>


    <!-- footer -->
    <?php include'layouts/footerpage.php' ?>


</body>

</html>