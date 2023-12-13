<?php

function insert_sanpham($ten, $hinhanh, $giaban, $giamgia, $mota, $danhmuc_id){
    $sql ="INSERT INTO sanpham(ten, hinhanh, giaban, giamgia, mota, danhmuc_id) values('$ten', '$hinhanh','$giaban','$giamgia','$mota','$danhmuc_id')";
            pdo_execute($sql);
}

function delete_sanpham($id){
    $sql = "DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql); 
}
function loadall_sanpham($kyw, $danhmuc_id){
    $sql="SELECT * FROM sanpham where 1";
    if($kyw!=""){
        $sql.=" and ten like '%".$kyw."%'";
    }
    if($danhmuc_id>0){
        $sql.=" and id = '".$danhmuc_id."'";
    }
    
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql = "select * from sanpham where 1 order by so_luot_xem desc limit 0,10";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham1(){
    $sql = "select * from sanpham where 1 order by id";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql = "select * from sanpham where 1 order by id desc limit 0,8";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($danhmuc_id){
    if($danhmuc_id>0){
    $sql = "SELECT * FROM sanpham WHERE id=".$danhmuc_id;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $ten;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id=".$id;
    $sp=pdo_query_one($sql);
    

    return $sp;
}

function load_sanpham_cungloai($id, $danhmuc_id){
    $sql = "select * from sanpham where danhmuc_id=".$danhmuc_id." AND  id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function  update_sanpham($id, $danhmuc_id, $ten, $hinhanh, $giaban,$giamgia,$mota){
    if($hinhanh!="")
    $sql ="UPDATE sanpham SET danhmuc_id ='".$danhmuc_id."', ten='".$ten."', hinhanh='".$hinhanh."',giaban='".$giaban."', giamgia= '".$giamgia."',mota='".$mota."' WHERE id=".$id;
 else   
    $sql ="UPDATE sanpham SET danhmuc_id ='".$danhmuc_id."', ten='".$ten."',giaban='".$giaban."', giamgia= '".$giamgia."',mota='".$mota."' WHERE id=".$id;
    pdo_execute($sql);
}
?>  