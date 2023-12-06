
<div class="bg-white p-2 row mb">
                    
                        <?php
                            if(isset($_SESSION['ten'])){
                                extract($_SESSION['ten']);
                        ?>
                        <div class="row mb">
                            Xin chào <br>
                            <?=$ten?>
                        </div>
                        <div class="mb">
                                <li>
                                    <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                                </li>
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if($role==1){ ?>
                                <li>
                                    <a href="../admin/index.php">Đăng nhập admin</a>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                        </div> 
                        <?php

                            }else{

                            
                        ?>
                        <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form class="p-2" action="index.php?act=dangnhap" method="POST">
                            <div class="row mb10">
                            Tên đăng nhập <br>
                            <input class="form-control" type="text" name="ten" >
                        </div>
                        <div class="row mb10">
                            Mật khẩu <br>
                            <input class="form-control" type="password" name="pass" >
                        </div> <br>
                        <!-- <div class="row mb10">
                            <input type="checkbox" name="" > Ghi nhớ tài khoản?</div> -->
                        <div class="row mb10">
                            <input class="btn btn-secondary" type="submit" value="Đăng nhập" name="dangnhap"></div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                        <?php }?>
                    </div>
                </div>
  
                <!-- <div class="row mb">
                <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul> -->
                            <?php
                                // foreach ($dsdm as $dm) {
                                //     extract($dm);
                                //     $linkdm="index.php?act=sanpham&iddm=".$id;
                                //     echo '<li>
                                //             <a href="'.$linkdm.'">'.$name.'</a>
                                //         </li>';
                                // }
                            ?>
                            <!-- <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Balo</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li> -->
                        <!-- </ul>
                    </div>

                <div class="row ">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class=" row boxcontent"> -->
                        <?php
                            // foreach ($dstop10 as $sp) {
                            //     extract($sp);
                            //     $linksp="index.php?act=sanphamct&idsp=".$id;
                            //     $img = $img_path.$img;
                            //         echo '<div class="row mb10 top10">
                            //         <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                            //             <a href="'.$linksp.'">'.$name.'</a>
                            //         </div>';
                            //         }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/images/anh1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh2.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh3.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh4.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh5.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh6.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh7.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh8.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/anh9.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div> -->
                    <!-- </div>
                </div> -->