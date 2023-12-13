<style>
  h5 {
    color: red !important;
  }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
  rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
  rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="css/templatemo-topic-listing.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">
<link href="./assets/admin/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="./assets/admin/dist/css/bootstrap-icons.css" rel="stylesheet">

<link href="./assets/admin/dist/css/templatemo-topic-listing.css" rel="stylesheet">
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

  <div class="container">
    <div class="row">

      <div class="col-lg-8 col-12 mx-auto">
        <h1 class="text-white text-center">ĐBSHOP Thú Cưng</h1>

        <h6 class="text-center">Luôn luôn phục vụ tận tình</h6>
        <form action="index.php?act=sanpham" method="post" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
          <div class="input-group input-group-lg">
            <span class="input-group-text bi-search" id="basic-addon1">

            </span>

            <input name="kyw" type="search" class="form-control" id="keyword" placeholder="Hãy nhập thứ cần tìm..."
              aria-label="Search" required type="search">

            <button name="timkiem" type="submit" class="form-control">
              <div style="margin-top:-4px">Tìm kiếm</div>
            </button>
          </div>
        </form>

      </div>

    </div>
  </div>
  <div class="boxphai">
    <?php
    include "boxright.php";
    ?>
  </div>
</section>


<section class="featured-section">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-4 col-12 mb-4 mb-lg-0">
        <div class="custom-block bg-white shadow-lg">
          <a href="index.php?act=sanpham">
            <div class="d-flex">
              <div>
                <h5 class="text-black mb-2">Chó</h5>

                <p class="mb-0">Shop có rất nhiều loại chó như: Poddle, Corgi, Pug, Cỏ, Xúc
                  Xích...</p>
              </div>

              <span class="badge bg-design rounded-pill ms-auto">14</span>
            </div>

            <img src="images/corgi.jpg" class="custom-block-image img-fluid" alt="">
          </a>
        </div>
      </div>

      <div class="col-lg-6 col-12">
        <div class="custom-block custom-block-overlay">
          <div class="d-flex flex-column h-100">
            <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

            <div class="custom-block-overlay-text d-flex">
              <div>
                <h5 class="text-white mb-2">Thú Cưng</h5>

                <p class="text-white">Nuôi một bé thú cưng (thú kiểng) sẽ giúp bạn thêm yêu đời,
                  giảm stress, thêm yêu đời. BShop chuyên cung cấp các loại Nhím kiểng,
                  hamster, thỏ kiểng, bọ ú, chim cảnh, chó cảnh các loại uy tín chất lượng.
                </p>

                <a href="https://vpet.vn/blog/thu-cung-de-nuoi-33670" class="text-white btn custom-btn mt-2 mt-lg-3">Đọc
                  Thêm</a>
              </div>

              <span class="badge bg-finance rounded-pill ms-auto">25</span>
            </div>

            <div class="social-share d-flex">
              <p class="text-white me-4">Trang:</p>

              <ul class="social-icon">
                <li class="social-icon-item">
                  <a href="#" class="text-white social-icon-link bi-twitter"></a>
                </li>

                <li class="social-icon-item">
                  <a href="https://www.facebook.com/profile.php?id=100027707234001"
                    class="text-white social-icon-link bi-facebook"></a>
                </li></a>
            </div>

            <div class="section-overlay"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- end slider section -->
</div>

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container">
    <div class="detail-box">
      <div class="heading_containe">

        <div class="btn-box">
          <a href="">
            <h2>
              Những Sản Phẩm
            </h2>

          </a>
        </div>
        <style>
          .khung {
            display: block;
            padding: 0 9.8px 19.6px !important;

          }

          .img-product {
            width: 200px !important;
            height: 200px !important;
            border-radius: 20px !important;
          }
        </style>
        <div class="container text-center">
          <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
            <?php

            $i = 0;
            foreach($spnew as $sp) {
              extract($sp);
              $formatNum = number_format($giaban);
              $giamgia = number_format($giamgia);

              $linksp = "index.php?act=sanphamct&idsp=".$id;
              $hinhanh = $img_path.$hinhanh;
              if(($i == 2) || ($i == 5) || ($i == 8)) {
                $mr = "";
              } else {
                $mr = "mr";
              }
              echo ' 
            
            <div class="khung">
             <div class="col">
              <div class="p-">

                                <div class="mt-4 img"><a href="'.$linksp.'">
                                <img class="img-product" src="'.$hinhanh.'" alt=""></a>
                                </div>
                                <h6><a class="mt-2" href="'.$linksp.'">'.$ten.'</a></h6>
                                <p><del>'.$formatNum.'đ</del></p>
                                <p>'.$giamgia.'đ</p>
                                <div class="">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type ="hidden" name="id" value="'.$id.'">
                                    <input type ="hidden" name="name" value="'.$ten.'">
                                    <input class="img-box" type ="hidden" name="img" value="'.$hinhanh.'">
                                    <input class="money" type ="hidden" name="price" value="'.$giaban.'">
                                 
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                ';

              $i += 1;
            }
            ?>
            <!-- <input class="btn btn-secondary" type ="submit" name="addtocart" value="Thêm vào giỏ hàng"> -->
          </div>
        </div>
      </div>
    </div>
</section>

<!-- end about section -->

<!-- animal section -->

<section class="animal_section layout_padding">
  <div class="container">
    <div class="animal_container">
      <div class="box b1">
        <div class="img-box">
          <img src="images/dog.jpg" alt="">
        </div>
        <div class="detail-box">
          <h5 class="text-white">
            Chó
          </h5>
          <p style="color: rgb(221, 221, 221)">
            Là người luôn bên bạn và đồng hành bạn đến trọn hơi thở cuối cùng
          </p>
        </div>
      </div>
      <div class="box b2">
        <div class="img-box">
          <img src="images/bird.jpg" alt="">
        </div>
        <div class="detail-box">
          <h5 class="text-white">
            Chim
          </h5>
          <p style="color: rgb(221, 221, 221)">
            Là một thú cưng thiên nhiên đẹp tuyệt vời của rừng xanh
          </p>
        </div>
      </div>
      <div class="box b1">
        <div class="img-box">
          <img src="images/fish.jpg" alt="">
        </div>
        <div class="detail-box">
          <h5 class="text-white">
            Cá
          </h5>
          <p style="color: rgb(221, 221, 221)">
            Là một động vật dưới nước rất đẹp về đại dương
          </p>
        </div>
      </div>
      <div class="box b2">
        <div class="img-box">
          <img src="images/cat.jpg" alt="">
        </div>
        <div class="detail-box">
          <h5 class="text-white">
            Mèo
          </h5>
          <p style="color: rgb(221, 221, 221)">
            Là một thú cưng thiên về hướng nội rất dễ thương
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end animal section -->

<!-- pet section -->

<section class="pet_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/pet-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
              Chăm sóc thú cưng
            </h2>
          </div>
          <p>
            Chăm sóc thú cưng và “làm đẹp” lại cho thú cưng thông qua các
            công việc như: cắt tỉa, cạo lông, nhuộm, tắm và vệ sinh cho chó mèo. Ngoài ra còn có thêm các hoạt
            động như: dịch vụ khách sạn cho thú cưng, tư vấn dinh dưỡng, cứu hộ thú cưng….
          </p>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- end pet section -->

<!-- us section -->

<section class="us_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container">
      <img src="images/heading-img.png" alt="">
      <h2>
        Tại sao chọn chúng tôi
      </h2>
      <p>
        Chúng tôi cam kết sẽ phục vụ nhiệt tình và chất lượng nhất sẽ không để có vấn đề về thú cưng
      </p>
    </div>
    <div class="us_container">
      <div class="box">
        <div class="img1-box">
          <img src="images/pet2.png" alt="">
        </div>
        <div class="img2-box">
          <img src="images/omega.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            CHUYÊN GIA DINH DƯỠNG THÚ CƯNG
          </h6>
        </div>
      </div>
      <div class="box">
        <div class="img1-box">
          <img src="images/pet1.png" alt="">
        </div>
        <div class="img2-box">
          <img src="images/dog.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            TIÊU CHUẨN THÚ CƯNG
          </h6>
        </div>
      </div>
      <div class="box">
        <div class="img1-box">
          <img src="images/pet2.png" alt="">
        </div>
        <div class="img2-box">
          <img src="images/shield.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            Chất lượng và an toàn
          </h6>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- end us section -->

<!-- food section -->

<section class="food_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <img src="images/heading-img.png" alt="">
      <h2 class="text-white">
        Thức ăn thú cưng
      </h2>
      <p style="color: rgb(221, 221, 221)">
        Được nhập khẩu chính hãng tại nhật bản và có giấy tờ chứng nhiệm của nhà nước
      </p>
    </div>
    <div class="food_container">
      <div class="box">
        <div class="img-box">
          <img src="images/f1.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            Loại Thường
          </h6>
          <h3>
            <span>100.000đ</span>
          </h3>
          <a class="text-white" href=""> Mua Ngay
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/f2.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            Loại Tốt
          </h6>
          <h3>
            <span>200.000đ</span>
          </h3>
          <a class="text-white" href=""> Mua Ngay
          </a>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/f3.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            Loại thượng hạng
          </h6>
          <h3>
            <span>300.000đ</span>
          </h3>
          <a class="text-white" href="">
            Mua Ngay
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- end food section -->

<!-- client section -->

<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <img src="images/heading-img.png" alt="">
      <h2>
        Bình luận của khách hàng
      </h2>
      <p>
        Shop luôn đọc những bình luận của khách hàng
      </p>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="box">
            <div class="img-box">
              <img src="images/bao.jpg" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Lý Bảo
              </h4>
              <p>
                Shop rất tận tình tư vấn khách hàng, mình đã mua được chú cún rất dễ thương mà khi tính tiền vẫn còn hơi
                lu bu chắc do shop mới khai trương mong shop sẽ tối ưu
              </p>
              <img src="images/quote.png" alt="">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box">
            <div class="img-box">
              <img src="images/khuongnhi.jpg" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Khương Nhi
              </h4>
              <p>
                Shop decor rất đẹp mình đi ngang qua thấy khai trương nên muốn vào xem thì được tận tình
                rất nhiều mình muôn chuột hamster rất đẹp hihi!
              </p>
              <img src="images/quote.png" alt="">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box">
            <div class="img-box">
              <img src="images/70a3648f4828a776fe39.jpg" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Hữu Đạt
              </h4>
              <p>
                Shop mới khai trương rất nhiều khuyến mãi mình mua đồ ăn cho pet vẫn có phần quà mang về,
                nhân viên vui vẻ tận tình
              </p>
              <img src="images/quote.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding-top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 offset-md-1">
        <div class="form_container">
          <div class="heading_container">
            <img src="images/heading-img.png" alt="">
            <h2>
              Nhập thông tin liên lạc cho shop
            </h2>
            <p>
              khách hàng đừng ngần ngại shop sẽ lưu liên lạc và sẽ tư vấn tận tình nhất có thể
            </p>
          </div>
          <form action="">
            <div>
              <input type="text" placeholder="Họ và Tên " />
            </div>
            <div>
              <input type="text" placeholder="Số điện thoại" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Tin nhắn" />
            </div>
            <div class="d-flex">
              <button style="margin-top:10px">
                Gửi
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div class="map_container">
          <div class="map-responsive">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7309.845077189653!2d105.79114575578038!3d10.04163464943831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0635a37eab467%3A0xc04e495eb1dc26d!2zTmjDoCBWxINuIEjDs2EgTGFvIMSR4buZbmcgVFAuIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1700096681208!5m2!1svi!2s"
              width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->


<!-- info section -->