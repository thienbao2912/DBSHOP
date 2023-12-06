<?php

function loadall_taikhoan(){
    $sql="select * from khachhang order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($ten,$email,$pass){
    $sql="insert into khachhang(ten,email,pass) values('$ten','$email','$pass')";
    pdo_execute($sql);
}

function checkuser($ten,$pass){
    $sql ="select * from khachhang where ten='".$ten."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql ="select * from khachhang where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$ten,$pass,$email,$sodienthoai,$diachi){
    $sql="update khachhang set ten='".$ten."',pass='".$pass."',email='".$email."',sodienthoai='".$sodienthoai."',diachi='".$diachi."'  where id =".$id;
    pdo_execute($sql);
}
function delete_user($id){
    $sql = "delete from khachhang where id =".$id;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql = "select * from khachhang where id =".$id;
    $taikhoan=pdo_query_one($sql);
    return $taikhoan;
}
function update_taikhoan_admin($id,$ten,$pass,$email,$diachi,$sodienthoai,$role){
    $sql="update khachhang set ten = '".$ten."', pass = '".$pass."',email = '".$email."', diachi = '".$diachi."',sodienthoai='".$sodienthoai."', role = '".$role."' where id =".$id; 
    pdo_execute($sql);
}
?>