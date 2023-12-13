<style>
  .flex{
    display: flex !important;
  }.khung-control{
    border: 1px solid !important;
  }
</style>

<div class="main-panel">



  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">

    <div class="">
      <br><br>
      <div class="row">
        <div class="container pt-5">

          <div class="card">
            <div class="card-body">
              <div class="form-group row">
                <h5 class="text-center mb-5">Danh sách sản phẩm</h5>
                <div class="table-responsive">
                  
                    <form  action="index.php?act=listsp" method="post">
                    <div class=" row mb10 frmdsloai">
                      <input class="form-control khung-control " style="width:200px;height:40px;" type="text" name="kyw">
                      <select class="form-select " style="width:100px;height:40px;margin-left:15px" name="danhmuc_id">
                        <option  value="0" selected>Tất cả</option>

                        <?php
                        foreach($listdanhmuc as $danhmuc) {
                          extract($danhmuc);
                          echo '<option value="'.$id.'">'.$ten.'</option>';
                        }
                        ?>

                      </select>
                      <input class="btn btn-secondary" style="width:100px;height:35px;margin-left:15px" type="submit" name="listok" value="Tìm">
                      </div>
                    </form>




                 
                  <table class="table table-striped table-bordered">
                    <tr>
                      <th></th>
                      <th>Mã sản phẩm</th>
                      <th>Tên sản phẩm</th>
                      <th>Hình ảnh</th>
                      <th>Giá</th>
                      <th>Giá được giảm</th>
                      <th>Mô tả</th>
                      <th>Thao tác</th>
                      <th></th>
                    </tr>
                    <?php
                    foreach($listsanpham as $sanpham) {
                      extract($sanpham);
                      $suasp = "index.php?act=suasp&id=".$id;
                      $xoasp = "index.php?act=xoasp&id=".$id;
                      $hinhpath = "../upload/".$hinhanh;
                      if(is_file($hinhpath)) {
                        $hinhanh = "<img src ='".$hinhpath."' height = '80'>";
                      } else {
                        $hinhanh = "no photo";
                      }

                      $formatgiaban = number_format($giaban);
                      $formatgiamgia = number_format($giamgia);
                      echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$ten.'</td>
                                <td>'.$hinhanh.'</td>
                                <td>'.$formatgiaban.' đ</td>
                                <td>'.$formatgiamgia.' đ</td>
                                <td>'.$mota.'</td>
                                
                                
                               
                                <td><a href="'.$suasp.'"><input type="button" class="btn btn-outline-success" value="Sửa"></a> 
                                <a href="'.$xoasp.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                            </tr>';
                    }
                    ?>
                  </table>
                </div>
              </div>
              <td colspan="5">

                <a href="index.php?act=addsp"><input type="button" class="btn btn-outline-success"
                    value="Nhập thêm"></a>
              </td>


            </div>
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

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>