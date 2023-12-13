<!DOCTYPE html>
<html dir="ltr" lang="en">

<div class="main-panel">
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        <div class="">
            <br><br>
            <div class="row">
                <div class="container pt-5">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center">Thêm sản phẩm</h5>
                            <form class="form-horizontal" action="index.php?act=addsp" method="post"
                                enctype="multipart/form-data">

                                <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Danh mục</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="danhmuc_id">
                                        <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="' . $id . '">' . $ten . '</option>';
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div><br>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Mã sản phẩm</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="id" disabled>
                                    </div>
                                </div><br>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Tên sản phẩm</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Nhập tên....." name="ten"
                                            required>
                                    </div>

                                </div><br>
                                <div class="row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Hình ảnh</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" name="hinhanh">
                                    </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-end control-label col-form-label">Giá Tiền</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Nhập giá....."
                                                name="giaban" required>
                                        </div>
                                    </div><br>
                                     <div class="form-group row">
                                        <label class="col-sm-3 text-end control-label col-form-label">Giá được giảm</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Nhập giá....."
                                                name="giamgia" required>
                                        </div>
                                    </div>
                                </div>
<br>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Mô tả</label>
                                    <div class="col-sm-6">
                                        <textarea  type="text" class="form-control" rows="3" placeholder="Enter your text here..." name="mota" required> </textarea>
                                    </div>

                                </div>
                                <br><br>
                                <div class="text-center">


                                    <input class="btn btn-outline-success" type="submit" name="themmoi"
                                        value="Thêm mới">

                                    <input class="btn btn-outline-danger" type="reset" value="Nhập lại">
                                    <a href="index.php?act=listsp">
                                        <input class="btn btn-outline-info" type="button" value="Danh sách"></a>
                                </div>
                                <?php
                                if (isset($thongbao) && ($thongbao != ""))
                                    echo $thongbao;

                                ?>

                            </form>
                        </div>

                    </div>

                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>

    </div>