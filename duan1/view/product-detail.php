
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="mt-3 container">
      
        <h2>Chi tiết sản phẩm</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <style>
            .imgctsp{
              width: 500px !important;
              height: 400px !important;
            }.btn-xanh{
              background-color: #80d0c7 !important;
              color: white !important;
              border-radius: 10px;
            }.btn-xanh:hover{
              background-color: var(--primary-color) !important;
            }
          </style>
        <?php
            extract($onesp);
        ?>
        <?php
        $img = $img_path .$hinhanh;
        $formatNum = number_format($giaban);
        $giamgia = number_format($giamgia);
        echo'
         <div class="col-lg-6">
                          <div id="" class="">
                             
                              <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <img class="imgctsp" src="' .$img. '" class="d-block w-100" alt="...">
                                  </div>
                                 
                              </div>
                             
                              </button>
                             
                              </button>
                          </div>
                  </div>
                  ';
                  echo'
                    <div class="col-lg-6">
                                <div class="portfolio-info">
                                    <h2>' . $ten . '</h2>
                                    <h3><del>'. $formatNum .' đ</del>   '. $giamgia .' đ</h3>
                                  <h3>Thông tin sản phẩm</h3>
                                  <ul>
                                    <li>'. $mota .'</li>
                                  </ul>
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="image" value="'.$img .'">
                                        <input type="hidden" name="name" value="'.$ten .'">
                                        <input type="hidden" name="price" value="'.$giaban .'">
                                        <input type="hidden" name="id" value="'. $id .'">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="submit" name="addtocart" class="btn btn-xanh" value="Thêm vào giỏ hàng">
                                    </form>
                                </div>
                  ';
                  echo'
                    <div class="portfolio-description">
                                    <h2>Đánh giá chi tiết</h2>
                                    <p>
                                        '. $mota .'
                                    </p>
                                   
                                </div>
                              
                               
                           
                            </div>

                          </div>
<br>
                        
                  ';
        ?>
          <iframe src="view/binhluan/binhluanform.php?sanpham_id=<?=$id?>" frameborder="0" width="100%" height="400px"></iframe>
</div>



    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

