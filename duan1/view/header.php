<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Drool</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <?php 
	//	$sql_category = mysqli_query($conn,'SELECT * FROM loaisanpham ORDER BY id_lsp DESC');
	?>
<link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
    rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">


<link href="css/templatemo-topic-listing.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">
 


    <link rel="stylesheet" href="style.css">
</head>
<style>
    .dropdown-menu > li > a{
  color: black !important;
}.header-hover{
opacity: 1;
}
.header-hover:hover{
    opacity: 0.7;

}.account-icon:hover{
    backg
}
</style>
<body>
<nav class="bg-white navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-dark" href="index.php">
                    <i class="bi-back"></i>
                    <span>ĐBSHOP</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="header-hover nav-link click-scroll text-dark" href="index.php">Trang Chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="header-hover nav-link dropdown-toggle text-dark" href="index.php?act=sanpham" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Sản Phẩm</a>

                            <ul class=" dropdown-menu dropdown-menu-light text-dark" aria-labelledby="navbarLightDropdownMenuLink">
                            
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li class="ml-2 header-hover">
                                            <a href="'.$linkdm.'">'.$ten.'</a>
                                        </li>';
                                }
                            ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="header-hover nav-link click-scroll text-dark" href="index.php?act=gioithieu">Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="header-hover nav-link click-scroll text-dark" href="index.php?act=lienhe">Liên Hệ</a>
                        </li>

                        <li class="nav-item">
                            <a class="header-hover nav-link click-scroll text-dark" href="index.php?act=viewcart">Giỏ Hàng</a>
                        </li>

                        <li class="nav-item">
                            <a class="header-hover nav-link click-scroll text-dark" href="index.php?act=dangky">Đăng Ký</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="../admin/dangnhap.php">Admin</a>
                        </li> -->
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="index.php?act=edit_taikhoan" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>