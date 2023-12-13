<div class="row">
    <div class="page-wrapper">
        <div class="card">
            <div class="row formtitle">


                <div class="main-panel">

                    <!-- Page wrapper  -->
                    <!-- ============================================================== -->
                    <div class="container-fluid py-5">

                        <div class="">
                            <br><br>
                            <div class="row">


                                <style>
                                    h5 {
                                        text-align: center;
                                    }
                                </style>
                                <h5 text-center>THỐNG KÊ SẢN PHẨM THEO LOẠI</h5>
                            </div>
                            <div class="row formcontent">
                                <div class="row mb6 formdanhsachloai">
                                    <table class="table table-success table-striped">
                                        <tr>
                                            <th>Mã danh mục</th>
                                            <th>Tên danh mục</th>
                                            <th>Số lượng</th>
                                            <th>Giá cao nhất</th>
                                            <th>Giá thấp nhất</th>
                                            <th>Giá trung bình</th>
                                        </tr>
                                        <?php
                                        foreach ($listthongke as $thongke) {
                                            extract($thongke);
                                            $formatNumMax = number_format($maxprice);
                                            $formatNumMin = number_format($minprice);
                                            $formatNumAvg = number_format($avgprice);


                                            echo '<tr>
                                    <td>' . $madm . '</td>
                                    <td>' . $tendm . '</td>
                                    <td>' . $countsp . '</td>
                                    <td>' . $formatNumMax . ' đ</td>
                                    <td>' . $formatNumMin . ' đ</td>
                                    <td>' . $formatNumAvg . ' đ</td>
                                </tr>';
                                        }


                                        ?>
                                    </table>
                                </div>
                                <div class="row mb6">
                                    <a href="index.php?act=bieudo"><input type="button" class="btn btn-outline-danger"
                                            value="Xem biểu đồ"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>