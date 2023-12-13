<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../duan1/uploads/".$hinhanh;
    if(is_file($hinhpath)){
      $hinhanh = "<img src ='".$hinhpath."' height = '80'>";
    } else{
      $hinhanh = "no photo";
    }
?>

<div class="main-panel">

<!-- Page wrapper  -->
<!-- ============================================================== -->


  <div class="">
    <br><br>
    <div class="row">
    <div class="container pt-5">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
            
            <h5 class="text-center">Cập nhật sản phẩm</h5>
    <div class="col-sm-7">
            <form class="form-horizontal" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
           
            <div class="form-group row">
                                <label class="col-sm-5 text-end control-label col-form-label">Danh mục</label>
                                <div class="col-sm-6">
            <select class="form-select" name="danhmuc_id"> 
                                  <option value="0" selected>Tất cả</option>
                               
                              <?php
                              foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    if($id==$id) $s="selected"; else $s="";
                                    echo '<option value="'.$id.'" '.$s.' >'.$ten.'</option>';
                                       }
                               ?>
                    
                              </select>
            </div>                                
        </div>
    </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Mã sản phẩm</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" ten="id" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-3 text-end control-label col-form-label">Tên sản phẩm</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Nhập tên....." value="<?=$ten?>" name="ten"required>
                </div>
            <div class="row">
                <label for="hinhanh" class="col-sm-3 text-end control-label col-form-label">Hình ảnh</label>
                <div class="col-sm-6">
                <?=$hinhanh?>
                    <input type="file" class="form-control" name="hinhanh">
                    
                </div>
            </div>
           
            <div class="form-group row">
                <label for="giaban" class="col-sm-3 text-end control-label col-form-label">Giá</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"placeholder="Nhập giá....." name="giaban" value="<?=$giaban?>"required>
                </div>
            </div>
            <div class="form-group row">
                <label for="giaban" class="col-sm-3 text-end control-label col-form-label">Giá Giảm</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"placeholder="Nhập giá....." name="giamgia" value="<?=$giamgia?>"required>
                </div>
            </div>
            <div class="form-group row">
                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control"placeholder="Nhập mô tả....." name="mota" value="<?=$mota?>" required>
                </div>
            </div>
            <br><br>
            <div class="text-center">
                
                <input type="hidden" name="id" value="<?=$id?>">
                <input class="btn btn-outline-success" type="submit" name="capnhat" value="Cập nhật">
                
                
                <input class="btn btn-outline-danger"  type="reset" value="Nhập lại">
                <a href="index.php?act=listsp">
                    <input  class="btn btn-outline-info" type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
          
            ?>

        </form>
                </div>

            </div>

        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    </div>
    
<div class="main-panel">
    </div>
    