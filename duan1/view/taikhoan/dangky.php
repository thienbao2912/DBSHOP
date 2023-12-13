
</style>
<?php
// Khởi tạo biến
$username = "";
$email = "";
$password = "";
$confirm_password = "";
$error = "";

// Xử lý form
if(isset($_POST["dangky"])) {
    $username = $_POST["ten"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $confirm_password = $_POST["confirm_password"];

    // Kiểm tra username
    if(empty($username)) {
        $error = "Tên người dùng không được để trống.";
    } else if(!preg_match("/^[a-zA-Z0-9_-]{3,20}$/", $username)) {
        $error = "Tên người dùng phải có độ dài từ 3 đến 20 ký tự, chỉ bao gồm chữ cái, số và ký tự gạch dưới.";
    }

    // Kiểm tra email
    if(empty($email)) {
        $error = "Email không được để trống.";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không hợp lệ.";
    // } else {
    //     // Kiểm tra email đã tồn tại chưa
    //     $sql = "SELECT * FROM khachhang WHERE email = :email";
    //     $statement = $pdo->prepare($sql);
    //     $statement->bindParam(":email", $email);
    //     $statement->execute();

    //     $user = $statement->fetch();

    //     if($user !== false) {
    //         $error = "Email đã được sử dụng.";
    //     }
    }

    // Kiểm tra mật khẩu
    if(empty($password)) {
        $error = "Mật khẩu không được để trống.";
    } else if(!preg_match("/^[a-zA-Z0-9_-]{6,20}$/", $password)) {
        $error = "Mật khẩu phải có độ dài từ 6 đến 20 ký tự, chỉ bao gồm chữ cái, số và ký tự gạch dưới.";
    }

    // Kiểm tra mật khẩu xác nhận
    if(empty($confirm_password)) {
        $error = "Mật khẩu xác nhận không được để trống.";
        
    } else if($password !== $confirm_password) {
        $error = " Mật khẩu xác nhận không khớp.";
    }


}
?>
<div class="">
    <div class="">
        <div class="">

            <h3 align="center" class="boxtitle mt-3">ĐĂNG KÝ THÀNH VIÊN</h3>
            <div class=" ml-2 boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post"  enctype="multipart/form-data">

                    <div class=" mb10">
                        Tên đăng nhập
                        <input class="form-control" placeholder="Tên người dùng..." type="text" name="ten" id="ten">
                        <p style="color: red;" id="name"></p>
                    </div>
                    <div class=" mb10">
                        Email
                        <input class="form-control" placeholder="Email..." type="email" name="email" id="email">
                        <p style="color: red;" id="email"></p>
                    </div>
                    <div class=" mb10">
                        Mật khẩu
                        <input class="form-control" placeholder="Mật khẩu..." type="password" name="pass" id="pass">
                        <p style="color: red;" id="pass"></p>
                    </div>
                    <div class=" mb10">
                       Xác nhận mật khẩu
                        <input class="form-control" type="password" placeholder="Xác nhận mật khẩu..."
                            name="confirm_password" id="confirm_password">
                        <p style="color: red;" id="pass"></p>
                    </div>
                    <input class="btn-secondary btn" type="submit" value="Đăng ký" name="dangky">
                    <input class="btn-secondary btn text-white" type="reset" value="Nhập lại">
                </form>
<style>
    .error{
        color: red !important;
    }
</style>
                <?php if($error) { ?>
                    <p class="error">
                        <?php echo $error; ?>
                    </p>
                <?php } ?>
                <!-- <h3 class="thongbao">    -->
                <?php

                // if(isset($thongbao)&&($thongbao!="")){
                //     echo $thongbao;
                // }
                
                ?>
                <!-- </h3> -->
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
        } else {
            text = "";
            document.getElementById("name").innerHTML = text;
        }

        // Mật khẩu
        if (mkuser == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("pass").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("pass").innerHTML = text;
        }

        // Email
        if (emailuser == "") {
            text = "Email không được để trống";
            document.getElementById("email").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("email").innerHTML = text;
        }


    }
</script>