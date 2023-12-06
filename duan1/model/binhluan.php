<?php 
        function insert_binhluan($noidung,  $sanpham_id,$khachhang_id, $ngaybinhluan){
            $sql="insert into binhluan(noidung,sanpham_id,khachhang_id,ngaybinhluan) values('$noidung','$sanpham_id','$khachhang_id','$ngaybinhluan')";
            pdo_execute($sql);
        }

        function loadall_binhluan($sanpham_id){
            $sql = "select * from binhluan where 1";
            if($sanpham_id > 0) $sql.=" and sanpham_id = '".$sanpham_id."'";
            $sql.=" order by sanpham_id";
            $listbl =pdo_query($sql);
            return $listbl;
        }
        function delete_binhluan($id){
            $sql = "delete from binhluan where id =".$id;
            pdo_execute($sql);
        }
?>