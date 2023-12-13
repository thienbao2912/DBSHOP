<?php

// Kết nối database
// $pdo = new PDO("mysql:host=localhost;dbname=duan1;charset=utf8");

// Khởi tạo biến
$email = "";
$error = "";

// Xử lý form
if (isset($_POST["email"])) {
    $email = $_POST["email"];

    // Kiểm tra email hợp lệ
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không hợp lệ.";
    } else {
        // Lấy thông tin người dùng từ database
        $dburl = "SELECT * FROM khachhang WHERE email = :email";
        $statement = $pdo->prepare($dburl);
        $statement->bindParam(":email", $email);
        $statement->execute();

        $khachhang = $statement->fetch();

        // Nếu người dùng không tồn tại
        if ($khachhang === false) {
            $error = "Email không tồn tại.";
        } else {
            // Gửi email cho người dùng
            $subject = "Lấy lại mật khẩu";
            $body = "Mật khẩu mới của bạn là: " . generate_password();
            mail($khachhang["email"], $subject, $body);

            // Chuyển hướng đến trang xác nhận
            header("Location: forgot-password-confirm.php");
        }
    }
}

// Hiển thị form
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quên mật khẩu</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Gửi">
    </form>

    <?php if ($error) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>
</body>
</html>