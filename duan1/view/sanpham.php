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
  <link href="../assets/admin/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="../assets/admin/dist/css/bootstrap-icons.css" rel="stylesheet">

  <link href="../assets/admin/dist/css/templatemo-topic-listing.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
<style>
    .img-product {
            width: 200px !important;
            height: 200px !important;
            border-radius: 20px;
          }
    a{
        text-decoration: none;
        color:black;
    }   
    
    .themhang{
        background-color:#80d0c7;
        border: none !important;
        border-radius: 5px;
        width: 160px;
        height: 30px;
        color: whitesmoke;
        font-style: bold;
    }.text-dark{
        color: black !important;
    }.card{
        border-radius: 15px !important;
    }
</style>


                
            <h3 class="mt-3 text-center">SẢN PHẨM <strong><?=$tendm?></strong></h3>
            <div class="container text-center">
             <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
  
                    <?php
                        $i=0;
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $formatNum = number_format($giaban);

                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh = $img_path.$hinhanh;
                            if(($i==2)||($i==5)||($i==8)||($i==11)){
                                $mr ="";
                            }else{
                                $mr ="mr";
                            }
                            echo '
                        
                            <div class="col">
                            <div class="card">
                            <div class="p-3">
                            <div class="boxsp '.$mr.'">
                           
                                    <div class="row img"><a href="'.$linksp.'"><img class="img-product" src="'.$hinh.'" alt=""></a></div>
                                    <a style="text-uppercase " href="'.$linksp.'"><h6 class="text-dark">'.$ten.'</h6></a>
                                    <p>'.$formatNum.'đ</p>
                                    <form action="index.php?act=addtocart" method="post">
                                    <input type ="hidden" name="id" value="' . $id . '">
                                    <input type ="hidden" name="name" value="' . $ten . '">
                                    <input class="img-box" type ="hidden" name="img" value="' . $hinhanh . '">
                                    <input class="money" type ="hidden" name="price" value="' . $giaban . '">                                    
                                    </form>
                                </div>
                                </div>
                                </div>
                                </div>
                                ';

                                $i+=1; 
                        }
                    ?>        
            </div>
        </div>

<br>
            <!-- <div class="boxphai"> -->
                <?php
                    // include "boxright.php";
                ?>
            <!-- </div> -->
        </div>