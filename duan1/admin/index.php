

    <?php
    include "./model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
    include "./model/taikhoan.php";
    include "./model/binhluan.php";
    include "./model/cart.php";
    include "header.php";
    $countcate = countcate();
    $countpro = countpro();
    $countuser = countuser();
    $countbill = countbill();
    $listthongke = loadall_thongke();
    ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php

        //controller
        


        if(isset($_GET['act'])) {
            $act = $_GET['act'];
            switch($act) {
                case 'thongke':
                    $listthongke = loadall_thongke();
                    include "thongke/list.php";
                    break;

                case 'bieudo':
                    $listthongke = loadall_thongke();
                    include "thongke/bieudo.php";
                    break;

                case 'adddm':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $ten = $_POST['ten'];
                        //function
                        insert_danhmuc($ten);
                        $thongbao = "Thêm thành công";
                    }

                    include "danhmuc/add.php";
                    break;

                case 'listdm':
                    //function
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;



                case 'xoadm':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_danhmuc($_GET['id']);

                        try {
                            delete_danhmuc($_GET['id']);
                        } catch (\Throwable $th) {
                            echo "Không thể xóa danh mục này!!!";
                        }
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;

                case 'suadm';
                    if(isset($_GET['id']) && ($_GET['id'] > 0)) {

                        $dm = loadone_danhmuc($_GET['id']);
                    }

                    include "danhmuc/update.php";
                    break;

                case 'updatedm':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $ten = $_POST['ten'];
                        $id = $_POST['id'];
                        update_danhmuc($id, $ten);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;



                //Sản phẩm
                case 'addsp':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $danhmuc_id = $_POST['danhmuc_id'];
                        $ten = $_POST['ten'];
                        $giaban = $_POST['giaban'];
                        $giamgia = $_POST['giamgia'];
                        $mota = $_POST['mota'];
                        $hinhanh = $_FILES['hinhanh']['name'];
                        // $soluong = $_POST['soluong'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir.basename($_FILES["hinhanh"]["name"]);
                        if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                            //echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }

                        //function
                        insert_sanpham($ten, $hinhanh, $giaban, $giamgia, $mota, $danhmuc_id);
                        $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();

                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    if(isset($_POST['listok']) && ($_POST['listok'])) {
                        $kyw = $_POST['kyw'];
                        $danhmuc_id = $_POST['danhmuc_id'];
                    } else {
                        $kyw = '';
                        $danhmuc_id = 0;
                    }
                    //function
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham($kyw, $danhmuc_id);
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_sanpham($_GET['id']);

                        try {
                            delete_sanpham($_GET['id']);
                        } catch (\Throwable $th) {
                            echo "Không thể xóa sản phẩm này!!!";
                        }
                    }
                    $listsanpham = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                case 'suasp';
                    if(isset($_GET['id']) && ($_GET['id'] > 0)) {

                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                case 'updatesp':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $danhmuc_id = $_POST['danhmuc_id'];
                        $ten = $_POST['ten'];
                        $giaban = $_POST['giaban'];
                        $giamgia = $_POST['giamgia'];
                        $mota = $_POST['mota'];
                        $hinhanh = $_FILES['hinhanh']['name'];

                        $target_dir = "../upload/";
                        $target_file = $target_dir.basename($_FILES["hinhanh"]["name"]);
                        if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                            //echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        update_sanpham($id, $danhmuc_id, $ten, $hinhanh, $giaban, $giamgia, $mota);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                case 'listbill':
                    if(isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                        $kyw = $_POST['kyw'];
                    } else {
                        $kyw = "";
                    }
                    $listbill = loadall_bill($kyw, 0);
                    include "bill/listbill.php";
                    break;

                case 'suabill':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $bill = loadone_bill($_GET['id']);
                    }
                    include "bill/update.php";
                    break;


                case 'updatebill':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $bill_status = $_POST['bill_status'];
                        $id = $_POST['id'];
                        update_bill($id, $bill_status);
                        $thongbao = "Cập nhật đơn hàng thành công";
                    }   if(isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                        $kyw = $_POST['kyw'];
                    } else {
                        $kyw = "";
                    }
                    $listbill = loadall_bill($kyw, 0);
                    include "bill/listbill.php";
                    break;
                    case 'addtk':
                        // Kiểm tra xem người dùng có click vào nút add hay không
                        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                            $tentk=$_POST['ten'];
                            $mktk=md5($_POST['pass']);
                            $emailtk=$_POST['email'];
                            $addresstk=$_POST['diachi'];
                            $phonetk=$_POST['sodienthoai'];
                            $role=$_POST['role'];
                            insert_taikhoan($tentk,$mktk,$emailtk,$addresstk,$phonetk,$role);
                            $thongbao="Thêm thành công";
                            
                        }
                        $listtaikhoan = loadall_taikhoan();
                        include "taikhoan/add.php";
                        break;

                case 'dskh':

                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                    case 'suatk':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            $taikhoan = loadone_taikhoan($_GET['id']);
                        }
                        include "taikhoan/update.php";
                        break;
                    case 'updatetk':
                        // Kiểm tra xem người dùng có click vào nút add hay không
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            $id = $_POST['id'];
                            $user = $_POST['ten'];
                            $pass = md5($_POST['pass']);
                            $email = $_POST['email'];
                            $address = $_POST['diachi'];
                            $tel = $_POST['sodienthoai'];
                            $role = $_POST['role'];
                            update_taikhoan_admin($id,$user,$pass, $email,$address, $tel, $role);
                            $thongbao = "Cập nhật thành công thành công";
                        }
                        $listtaikhoan = loadall_taikhoan();
                        include "taikhoan/list.php";
                        break;
                case 'dsbl':

                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoatk':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        try {
                            delete_taikhoan($id);
                        } catch (\Throwable $th) {
                            echo "Không thể xóa tài khoản này!!!";
                        }
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;



                default:
                    include "home.php";
                    break;

            }
        } else {
            include "home.php";
        }

        include "footer.php";
        ?>
    </main>

</body>