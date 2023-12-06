
<style>
            .imgstyle{
                width: : 900px !important;
                
            }
            .about .about-img {
  min-height: 500px;
}

.about h3 {
  font-weight: 700;
  font-size: 36px;
  margin-bottom: 30px;
  font-family: var(--font-secondary);
}

.about .call-us {
  left: 10%;
  right: 10%;
  bottom: 10%;
  background-color: #fff;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.08);
  padding: 20px;
  text-align: center;
}

.about .call-us h4 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 5px;
  font-family: var(--font-default);
}

.about .call-us p {
  font-size: 28px;
  font-weight: 700;
  color: var(--color-primary);
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding: 0 0 8px 26px;
  position: relative;
}

.about .content ul i {
  position: absolute;
  font-size: 20px;
  left: 0;
  top: -3px;
  color: var(--color-primary);
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(var(--color-primary) 50%, rgba(206, 18, 18, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.about .play-btn:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  animation-delay: 0s;
  animation: pulsate-btn 2s;
  animation-direction: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(206, 18, 18, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.about .play-btn:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn:hover:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  animation: none;
  border-radius: 0;
}

.about .play-btn:hover:after {
  border-left: 15px solid var(--color-primary);
  transform: scale(20);
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Why Us Section
--------------------------------------------------------------*/
.why-us .why-box {
  padding: 30px;
  background: var(--color-primary);
  color: #fff;
}

.why-us .why-box h3 {
  font-weight: 700;
  font-size: 34px;
  margin-bottom: 30px;
}

.why-us .why-box p {
  margin-bottom: 30px;
}

.why-us .why-box .more-btn {
  display: inline-block;
  background: rgba(255, 255, 255, 0.3);
  padding: 6px 30px 8px 30px;
  color: #fff;
  border-radius: 50px;
  transition: all ease-in-out 0.4s;
}

.why-us .why-box .more-btn i {
  font-size: 14px;
}

.why-us .why-box .more-btn:hover {
  color: var(--color-primary);
  background: #fff;
}

.why-us .icon-box {
  text-align: center;
  background: #fff;
  padding: 40px 30px;
  width: 100%;
  height: 100%;
  border: 1px solid rgba(55, 55, 63, 0.1);
  transition: 0.3s;
}

.why-us .icon-box i {
  color: var(--color-primary);
  margin-bottom: 30px;
  font-size: 32px;
  margin-bottom: 30px;
  background: rgba(206, 18, 18, 0.1);
  border-radius: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 64px;
  height: 64px;
}

.why-us .icon-box h4 {
  font-size: 20px;
  font-weight: 400;
  margin: 0 0 30px 0;
  font-family: var(--font-secondary);
}

.why-us .icon-box p {
  font-size: 15px;
  color: #6c757d;
}

@media (min-width: 1200px) {
  .why-us .icon-box:hover {
    transform: scale(1.1);
  }
}.section-header {
  text-align: center;
  padding-bottom: 30px;
}

.section-header h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  color: #7f7f90;
  text-transform: uppercase;
  font-family: var(--font-default);
}

.section-header p {
  margin: 0;
  font-size: 48px;
  font-weight: 400;
  font-family: var(--font-primary);
}

.section-header p span {
  color: var(--color-primary);
}
        </style>
<section id="about" class="about">
      <div class=" container" data-aos="fade-up">

        <div class="mt-3 section-header">
          <h3>VỀ CHÚNG TÔI</h3>
          <h4 style="margin-top:-25px; opacity:0.5">Tìm hiểu thêm <span style="color:red; opacity:0.9">về chúng tôi</span></h4>
        </div>
        

        <div class="row gy-4">
          <div class="col-lg-7  position-relative about-img" style="background-image: url(upload/alaska-khonglo.webp) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Đặt hàng online</h4>
              <p>+84 706899951</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              Một trong những điều truyền cảm hứng nhất về DBSHOP là mọi thứ chúng tôi làm để hướng tới sứ mệnh của mình.
              </p>
              <ul>
                <li><i style="color:red" class="bi bi-check2-all"></i> Chúng tôi tin rằng đó là nhiệm vụ của chúng tôi để đảm bảo sức khỏe và hạnh phúc cho thú cưng. Giúp chúng thật sự hiểu rằng chúng đang được yêu thương và an toàn.</li>
                <li><i style="color:red" class="bi bi-check2-all"></i> Chúng tôi tin rằng thú cưng sẽ làm cho con người tốt đẹp hơn. Chúng sẽ làm phong phú thêm cho cuộc sống của chúng ta và xây dựng xã hội văn minh, phát triển.</li>
                <li><i style="color:red" class="bi bi-check2-all"></i> Chúng tôi tin tưởng vào những gì chúng tôi đang làm dựa trên những giá trị tiêu chuẩn trong việc chăm sóc động vật. Chất lượng sản phẩm và chăm sóc khách hàng.</li>
              </ul>
              <p>
              Chúng tôi yêu thú cưng và cam kết cung cấp các sản phẩm, dịch vụ, kết nối và chăm sóc mà khách hàng và thú cưng cần trong mọi giai đoạn của cuộc đời. Niềm đam mê dành cho thú cưng này là một phần lý tưởng đích thực và là động lực trong hoạt động kinh doanh của chúng tôi.
              </p>

              <div class="position-relative mt-4">
                <img src="upload/mrbeast.jpg" class=" img-fluid" alt="">
                <a href="https://youtu.be/YQDDm9HLkV4?si=0ie_RWL5yAxpI1_C" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="mt-5 why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Tại sao chọn DBSHOP?</h3>
              <p>
              Chúng tôi yêu thú cưng và cam kết cung cấp các sản phẩm, dịch vụ, kết nối và chăm sóc mà khách hàng và thú cưng cần trong mọi giai đoạn của cuộc đời. Niềm đam mê dành cho thú cưng này là một phần lý tưởng đích thực và là động lực trong hoạt động kinh doanh của chúng tôi.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>TẦM NHÌN CỦA CHÚNG TÔI</h4>
                  <p>Chúng tôi tin rằng đó là nhiệm vụ của chúng tôi để đảm bảo sức khỏe và hạnh phúc cho thú cưng. Giúp chúng thật sự hiểu rằng chúng đang được yêu thương và an toàn.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>TẦM NHÌN CỦA CHÚNG TÔI</h4>
                  <p>Chúng tôi tin rằng thú cưng sẽ làm cho con người tốt đẹp hơn. Chúng sẽ làm phong phú thêm cho cuộc sống của chúng ta và xây dựng xã hội văn minh, phát triển.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>TẦM NHÌN CỦA CHÚNG TÔI</h4>
                  <p>Chúng tôi tin tưởng vào những gì chúng tôi đang làm dựa trên những giá trị tiêu chuẩn trong việc chăm sóc động vật. Chất lượng sản phẩm và chăm sóc khách hàng.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section>