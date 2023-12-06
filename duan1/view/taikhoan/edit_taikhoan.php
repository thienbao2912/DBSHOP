<div class=" ml-2 mb">
    <div class="boxtrai mr">
        <div class=" mb">

            <h3 class="mt-2 text-center">CẬP NHẬT TÀI KHOẢN</h3>
            <div class="  boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['ten']) && (is_array($_SESSION['ten']))) {
                    extract($_SESSION['ten']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class=" mb10">
                        Tên đăng nhập
                        <input class="form-control" type="text" name="ten" value="<?= $ten?>">
                    </div>
                    <div class=" mb10">
                        Mật khẩu
                        <input class="form-control" type="password" name="pass" value="<?= $pass?>">
                    </div>
                    <div class=" mb10">
                        Email
                        <input class="form-control" type="email" name="email" value="<?= $email?>">
                    </div>
                    <div class=" mb10">
                        Số Điện thoại
                        <input class="form-control" type="text" name="sodienthoai" value="<?= $sodienthoai?>">
                    </div>
                    <div class=" mb10">
                        Địa chỉ
                        <input class="form-control" type="text" name="diachi" value="<?= $diachi?>">
                    </div>
                    <input type="hidden" name="id" value="<?= $id?>"><br>
                    <input class="btn btn-secondary" type="submit" value="Cập nhật" name="capnhat">
                    <input class="btn btn-secondary" type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php

                    if (isset($thongbao) && ($thongbao != "")) {
                        $thongbao="Hãy đăng nhập tài khoản";
                        echo $thongbao;
                    }

                    ?>
                </h2>
            </div>
        </div>

    </div>
    <!-- <div class="boxphai"> -->
        <?php
        // include "view/boxright.php";
        ?>
    <!-- </div> -->
</div>