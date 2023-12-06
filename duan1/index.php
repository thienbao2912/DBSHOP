
<?php
ob_start();
session_start();
if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart'] = [];
}

include "global.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/pdo.php";
include "model/taikhoan.php";
include "model/cart.php";


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_home();
include "view/header.php";


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['danhmuc_id']) && ($_GET['danhmuc_id'] > 0)) {
                $danhmuc_id = $_GET['danhmuc_id'];

            } else {
                $danhmuc_id = 0;
            }
            $dssp = loadall_sanpham($kyw, $danhmuc_id);
            $tendm = load_ten_dm($danhmuc_id);
            include "view/sanpham.php";
            break;
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $danhmuc_id);
                include "view/product-detail.php";
                // include "view/sanphamct.php";
            } else {
                include "view/header.php";
                
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan( $ten,$email, $pass);
                $thongbao = "Bạn đã đăng ký thành công.";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ten = $_POST['ten'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($ten, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['ten'] = $checkuser;
                    $thongbao="Bạn đã đăng nhập thành công!";
                    header('Location: index.php');

                } else {
                    $thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra lại";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten = $_POST['ten'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['sodienthoai'];
                $address = $_POST['diachi'];
                $id = $_POST['id'];

                update_taikhoan($id, $ten, $pass, $email,$sodienthoai, $address);
                $_SESSION['ten'] = checkuser($ten, $pass);
                header('Location: index.php?act=edit_taikhoan');
                // echo "Bạn cập nhật thành công!!";
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
           
            include "view/taikhoan/quenmk.php";
            break;
            case 'addtocart':
                //add thông tin từ cái form add to cart đến session
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['image'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $ttien = $soluong * $price;
                    $spadd = [$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){ 
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1); 
                }else{
                    $_SESSION['mycart'] = []; 
                }
                header('location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'billcomfirm':
                
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                    if(isset($_SESSION['ten'])) {$iduser = $_SESSION['ten']['id'];}
                    else $id=0;
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $pttt = $_POST['pttt'];
                    $ngaydathang = date('h:i:sa d/m/Y');
                    $tongdonhang = tongdonhang();

                    
                    // Tạo bill
                    $idbill = insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);

                    // Insert into cart: $session['mycart'] $idbill

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['ten']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    } 
                    // Xóa session cart
                    $_SESSION['cart'] = [];
                }
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);
                include "view/cart/billcomfirm.php";
                break;
            case 'mybill':
                $mybill = loadall_bill("",$_SESSION['ten']['id']);
                include "view/cart/mybill.php";
                break;  
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
            
        default:
        include "view/home.php";
        break;
    }
} else {
    include "view/home.php";
}
?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
    function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width")
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
</script>
<?php
include "view/footer.php";

?>
</body>

</html>
<?php
ob_end_flush();
?>