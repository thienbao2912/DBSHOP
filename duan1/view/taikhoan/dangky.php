<div class=" ">
            <div class=" ">
                <div class="">
        
            <h3 align="center" class="boxtitle mt-3">ĐĂNG KÝ THÀNH VIÊN</h3>
                <div class=" ml-2 boxcontent formtaikhoan">
                        <form action="index.php?act=dangky" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                       
                        <div class=" mb10">
                            Tên đăng nhập
                            <input class="form-control" type="text" name="ten" id="ten">
                            <p style="color: red;" id="name"></p>
                        </div>
                        <div class=" mb10">
                            Email
                            <input class="form-control" type="email" name="email" id="email">
                            <p style="color: red;" id="email"></p>
                        </div>
                        <div class=" mb10">
                            Mật khẩu
                            <input class="form-control" type="password" name="pass" id="pass">
                            <p style="color: red;" id="pass"></p>
                        </div>
                            <input class="btn-secondary btn" type="submit" value="Đăng ký" name="dangky">
                            <input class="btn-secondary btn text-white" type="reset" value="Nhập lại">
                        </form>  
                        <h2 class="thongbao">   
                        <?php

                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                        
                        ?>
                        </h2>
                </div>
        </div>

            </div>
            <!-- <div class="boxphai">
                <?php
                    // include "view/boxright.php";
                ?>
            </div> -->
        </div>
        <script>
             function validateForm() {
        let tenuser = document.getElementById("ten").value;
        let mkuser = document.getElementById("pass").value;
        let emailuser = document.getElementById("email").value;
        let text;

        // Tên tài khoản
        if (tenuser == "") {
            text = "Tên tài khoản không được để trống";
            document.getElementById("name").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("name").innerHTML = text;
        }
        
        // Mật khẩu
        if (mkuser == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("pass").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("pass").innerHTML = text;
        }

        // Email
        if (emailuser == "") {
            text = "Email không được để trống";
            document.getElementById("email").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("email").innerHTML = text;
        }

        
    }
        </script>