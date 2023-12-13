<?php

function insert_danhmuc($ten){
    $sql ="INSERT INTO danhmuc(ten) values('$ten')";
            pdo_execute($sql);
}
function delete_danhmuc($ten){
    $sql = "DELETE FROM danhmuc WHERE id=".$_GET['id'];
    pdo_execute($sql); 
}
function loadall_danhmuc(){
    $sql="SELECT * FROM danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id){
    $sql = "SELECT * FROM danhmuc WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$ten){
    $sql ="UPDATE danhmuc SET ten='".$ten."' WHERE id=".$id;
    pdo_execute($sql);
}
?>