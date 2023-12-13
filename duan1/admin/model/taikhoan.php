<?php
function insert_taikhoan($ten,$pass,$email,$diachi,$sodienthoai,$role){
    $sql="insert into khachhang(ten,pass,email,diachi,sodienthoai,role) values('$ten','$pass','$email','$diachi','$sodienthoai','$role')";
    pdo_execute($sql);
}
function checkuser($ten,$pass){
    $sql="select * from khachhang where ten = '".$ten."' AND pass = '".$pass."' ";
    $sp=pdo_query_one($sql);
    return $sp;

}
function checkemail($email){
    $sql="select * from khachhang where email = '".$email."' ";
    $sp=pdo_query_one($sql);
    return $sp;

}
function update_taikhoan($id, $ten, $pass, $email, $diachi, $sodienthoai){
     
    $sql ="UPDATE khachhang SET ten = '".$ten."', pass='".$pass."', email='".$email."',diachi='".$diachi."',sodienthoai='".$sodienthoai."' WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="SELECT * FROM khachhang order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}function loadone_taikhoan($id)
{
    $sql = "select * from khachhang where id =" . $id;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function delete_taikhoan($id){
    $sql = "DELETE FROM khachhang WHERE id=".$_GET['id'];
    pdo_execute($sql); 
}

function update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role){
    $sql="update khachhang set ten = '".$user."', pass = '".$pass."',email = '".$email."', diachi = '".$address."', sodienthoai = '".$tel."', role = '".$role."' where id =".$id; 
    pdo_execute($sql);
}
?>