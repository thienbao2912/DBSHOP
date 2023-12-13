<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= $CONTENT_LOGIN ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= $CONTENT_LOGIN ?>/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= $CONTENT_LOGIN ?>/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= $CONTENT_LOGIN ?>/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Login #8</title>
</head>
<style>
    .btn-custom:hover {
        color: blue;
    }
</style>
<body>


<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="<?= $CONTENT_LOGIN ?>/images/quenmk.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3><strong>Nhập Gamil Của Bạn</strong></h3>

                        </div>
                        <form action="" method="post">

                            <input type="hidden" name="ma_kh">
                            <div class="form-group last mb-4">
                                <label for="email">Email</label>

                                <input name="email" type="email" class="form-control" id="email">

                            </div>
                            <i class=" text-danger"><?= (isset($thongbao) && (strlen($thongbao) > 0)) ? $thongbao : "" ?></i>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Chấp nhận điều
                                            khoản
                                    </span>
                                    <input type="checkbox" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto "><a href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php"
                                                          class="forgot-pass btn-custom" style="text-decoration: none;">Đăng Nhập</a></span>
                            </div>

                            <input name="btn_forgot_Email" type="submit" value="Gửi"
                                   class="btn text-white btn-block btn-primary">

                            <span class="d-block text-left my-4 text-muted"> <a
                                        href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php"
                                        style="text-decoration: none;" class="btn-custom">Đăng ký</a></span>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="<?= $CONTENT_LOGIN ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= $CONTENT_LOGIN ?>/js/popper.min.js"></script>
<script src="<?= $CONTENT_LOGIN ?>/js/bootstrap.min.js"></script>
<script src="<?= $CONTENT_LOGIN ?>/js/main.js"></script>

