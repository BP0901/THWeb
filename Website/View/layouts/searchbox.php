<div class="aa-search-box">
    <form action="product.php" method="get">
        <?php if(isset($_GET['txt_search'])){?>
            <input type="text" name="txt_search" value="<?php echo $_GET['txt_search'];?>" id="" placeholder="Nhập Vào Đây Để Tìm Kiếm">
        <?php } else { ?>
            <input type="text" name="txt_search" id="" placeholder="Nhập Vào Đây Để Tìm Kiếm">
        <?php } ?>
    <input type="text" name="category" value="-1" hidden>
    <button type="submit" name="search"><span class="fa fa-search"></span></button>
    </form>
</div>