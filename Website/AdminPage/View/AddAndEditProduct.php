<?php
include_once '../model/Category.php';
?>

<!-- View modal-->
<div class="modal fade bd-example-modal-lg" id="view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">Thông tin sản phẩm</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-5">
                            <img id="vprodimg" width="400px" class="img-fluid " src="vendors/images/img/áo thun man.jpg">
                        </div>
                        <div class="col-7">
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">ID:</span>
                                <span id="vprodid" class="input-group-addon" ></span>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Tên:</span>
                                <span id="vprodname" class="input-group-addon" style="width:250px;"></span>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Mô tả:</span>
                                <span id="vprodinfo" class="input-group-addon" ></span>
                            </div>   
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Giá:</span>
                                <span id="vprodprice" class="input-group-addon" ></span>
                            </div>   
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Giá giảm:</span>
                                <span id="vproddiscount" class="input-group-addon" ></span>
                            </div>  
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Loại:</span>
                                <span id="vprodgenre" class="input-group-addon" ></span>
                            </div>
                        </div> 
                    </div>  
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="../controller/ProductController.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">Chỉnh thông tin sản phẩm</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group input-group">
                            <input type="text" name="txt_id" class="form-control" id="eprodid" hidden>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Tên sản phẩm: </span>
                            <input type="text" name="txt_name" class="form-control" id="eprodname">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Mô tả: </span>
                            <textarea rows="9" cols="70" name="txt_desc" class="form-control" id="eproddesc">
                            
                            </textarea>  
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá:</span>
                            <input type="number" name="txt_price" class="form-control" id="eprodprice">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá giảm:</span>
                            <input type="number" name="txt_discount" class="form-control" id="eproddiscount">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Danh mục:</span>
                            <select name="cbx_cate" id="eprodcate">
                                <?php
                                $cate = new Category(0, "");
                                $dataCate = $cate->getAllCategory();
                                for ($i = 0; $i < count($dataCate); $i++) { ?>
                                    <option value="<?php echo $dataCate[$i]['category_id']; ?>" ><?php echo $dataCate[$i]['category_name']; ?></option>
                                <?php } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Hình ảnh:</span>
                            <input type="file" name="prod_img" accept="image/*" id="eprodimg">
                        </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bỏ</button>
                    <button type="submit" name="grp_btn_product" value="edit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Add Modal-->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="../controller/ProductController.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">Thêm sản phẩm</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Tên sản phẩm:</span>
                            <input type="text" name="txt_name_pro" style="width:350px;" class="form-control">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Mô tả:</span>
                            <input type="text" name="txt_desc_pro" style="width:350px;" class="form-control">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá:</span>
                            <input type="number" name="txt_price_current" style="width:350px;" class="form-control">
                        </div>   
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá giảm:</span>
                            <input type="number" name="txt_price_sale" style="width:350px;" class="form-control">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Danh mục:</span>
                            <select name="cbx_category" id="vprodgenre">
                            <?php
                            $cate = new Category(0, "");
                            $dataCate = $cate->getAllCategory();
                            for ($i = 0; $i < count($dataCate); $i++) { ?>
                                <option
                                value="<?php echo $dataCate[$i]['category_id'] ?>" >
                                <?php echo $dataCate[$i]['category_name']; ?>
                                </option>
                            <?php } 
                            ?>
                            </select>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Hình ảnh:</span>
                            <input type="file" name="prod_img" accept="image/*">
                        </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bỏ</button>
                    <button type="submit" name="grp_btn_product" value="add" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i>Thêm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- delete Modal-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="../controller/ProductController.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">Chỉnh thông tin sản phẩm</h4>
                </div> -->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group input-group">
                            <input type="text" name="txt_id" class="form-control" id="dprodid" hidden>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Bạn muốn xóa: </span>
                            <span id="dprodname" class="input-group-addon" ></span>
                        </div>
                    </div> 
                </div>      
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bỏ</button>
                    <button type="submit" name="grp_btn_product" value="delete" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Xóa</button>
                </div>
            </div>
        </form>
    </div>
</div>