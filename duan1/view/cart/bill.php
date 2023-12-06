<div class="container mb">
    <div class=" mr">
     
        <form action="index.php?act=billcomfirm" method="post">
            <div class=" mb">
                <h3 class="mt-2">THÔNG TIN ĐẶT HÀNG</h3>
                <div class=" row ">
                    <table>
                        <?php 
                            if (isset($_SESSION['user'])) {
                               $name = $_SESSION['user']['user'];
                               $address = $_SESSION['user']['address'];
                               $email = $_SESSION['user']['email'];
                               $tel = $_SESSION['user']['tel'];
                            }else{
                                $name = "";
                               $address = "";
                               $email = "";
                               $tel = "";
                            }
                        ?>

                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input class="form-control" type="text" name="name" value="<?=$name?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input class="form-control" type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input class="form-control" type="text" name="email" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input class="form-control" type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <h3 class="mt-4">PHƯƠNG THỨC THANH TOÁN</h3>
                    <div class="row mt-2 ml-2">
                        <table>
                            <tr>
                            <td><input type="radio" name="pttt" checked value="1"> Trả tiền khi nhận hàng</td>
                                <td><input type="radio" name="pttt" value="2"> Chuyển khoản ngân hàng</td>
                                <td><input type="radio" name="pttt" value="3"> Thanh toán online</td>
                            </tr>
                        </table>
                    </div>
            </div>
            
            <div class=" mb">
                <h3 class="mt-4">THÔNG TIN GIỎ HÀNG</h3>
                    <div class="ml-2 row boxcontent cart">
                        <table id="viewcart">
                            <?php 
                              viewcart(0);    
                            ?>
                      </table>
                      </div>
            </div>
<br>
            <div class="">
                <input class="btn btn-secondary" type="submit" id="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>

        </form>
        
    </div>
   <br>
    
</div>




