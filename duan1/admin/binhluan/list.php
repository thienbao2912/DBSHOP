<!DOCTYPE html>
<html dir="ltr" lang="en">



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
                <h5 class="text-center mb-5">Danh sách bình luận</h5>
                <div class="table-responsive">
                  <div class="row mb10 frmdsloai">
                    <!-- <form action="index.php?act=listsp" method="post">
                              <input type="text" name="kyw">
                              <select name="maloai">
                                  <option value="0" selected>Tất cả</option>
                               
                              <?php
                              foreach($list as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$ten.'</option>';
                              }
                              ?>
                    
                              </select>
                              <input type="submit" name="listok" value="GO">
                            </form> -->




                  </div>
                  <table class="table table-striped table-bordered">
                    <tr>
                      <th></th>
                      <th>ID</th>
                      <th>Nội dung</th>
                      <!-- <th>Iduser</th> -->
                      <th>Mã sản phẩm</th>
                      <th>Ngày bình luận</th>

                      <th></th>
                    </tr>
                    <?php
                    foreach($listbinhluan as $binhluan) {
                      extract($binhluan);
                      $suabl = "index.php?act=suabl&id=".$id;
                      $xoabl = "index.php?act=xoabl&id=".$id;

                      // <div class="col-sm-9">  
                      echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$sanpham_id.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                
                                
                               
                                <td>
                                <a href="'.$xoabl.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                            </tr>';
                    }
                    ?>
                  </table>
                </div>
              </div>
              <!-- <td colspan="5">
                         <input  type="button" class="btn btn-outline-success" value="Chọn tất cả">
                          <input type="button" class="btn btn-outline-warning" value="Bỏ chọn tất cả">
                          <input type="button" class="btn btn-outline-danger" value="Xóa các mục đã chọn">
                          <a href="index.php?act=addsp"><input type="button" class="btn btn-outline-primary" value="Nhập thêm"></a>
                    </td> -->


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