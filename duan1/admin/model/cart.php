<?php

function viewcart($del) {
    global $hinhanh_path;
    $tong = 0;
    $i = 0;
    if($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = "";
        $xoasp_td2 = '';
    }
    echo '   <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                '.$xoasp_th.'
        </tr>';
    foreach($_SESSION['mycart'] as $cart) {
        $hinh = $hinhanh_path.$cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if($del == 1) {

            $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
        } else {

            $xoasp_td = "";

        }

        echo '
            <tr>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                <td>'.$cart[1].'</td>
                <td>'.$cart[3].'</td>
                <td>'.$cart[4].'</td>
                <td>'.$ttien.'</td>
                '.$xoasp_td.'
            </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>'.$tong.'</td>
            '.$xoasp_td2.'
            </tr>';
}


function bill_chi_tiet($listbill) {
    global $hinhanh_path;
    $tong = 0;
    $i = 0;

    echo '   <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
        </tr>';

    foreach($listbill as $cart) {
        $hinh = $hinhanh_path.$cart['hinhanh'];
        $tong += $cart['thanhtien'];

        echo '
            <tr>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                <td>'.$cart['name'].'</td>
                <td>'.$cart['price'].'</td>
                <td>'.$cart['soluong'].'</td>
                <td>'.$cart['thanhtien'].'</td>
            </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>'.$tong.'</td>
            </tr>';
}
function tongdonhang() {
    $tong = 0;


    foreach($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;


    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang) {
    $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $price, $soluong, $thanhtien, $idbill) {
    $sql = "insert into cart(iduser,idpro,img,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id) {
    $sql = "select * from bill where id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function update_bill($id, $bill_status) {
    $sql = "UPDATE bill SET bill_status='".$bill_status."' WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_cart($idbill) {
    $sql = "select * from cart where idbill=".$idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill) {
    $sql = "select * from cart where idbill=".$idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_billl($iduser) {
    $sql = "select * from bill where iduser=".$iduser;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_bill($kyw = "", $iduser = 0) {

    $sql = "select * from bill where 1";
    if($iduser > 0)
        $sql .= " AND iduser=".$iduser;
    if($kyw != "")
        $sql .= " AND id like '%".$kyw."%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n) {
    switch($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function countcate(){
    $sql = "SELECT COUNT(*) as count FROM danhmuc";
    $countcate=pdo_query($sql);
    return $countcate;
}
function countpro(){
    $sql = "SELECT COUNT(*) as count FROM sanpham";
    $countpro=pdo_query($sql);
    return $countpro;
}
function countuser(){
    $sql = "SELECT COUNT(*) as count FROM khachhang";
    $countuser=pdo_query($sql);
    return $countuser;
}
function countbill(){
    $sql = "SELECT COUNT(*) as count FROM bill";
    $countbill=pdo_query($sql);
    return $countbill;
}
function loadall_thongke() {
    $sql = "select danhmuc.id as madm, danhmuc.ten as tendm, count(sanpham.id) as countsp, min(sanpham.giaban) as minprice, max(sanpham.giaban) as maxprice, avg(sanpham.giaban) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.danhmuc_id";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
?>