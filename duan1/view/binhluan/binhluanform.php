<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.btn-xanh{
              background-color: #80d0c7 !important;
              color: white !important;
              border-radius: 10px;
            }.btn-xanh:hover{
              background-color: #13547a !important;
            }
            </style>
<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $sanpham_id=$_REQUEST['sanpham_id'];

    $dsbl=loadall_binhluan($sanpham_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
    body{
        margin: 0;
    }
    *{
        font-size: 1.4vw;
        color: #333;
    }
    .binhluan table{
        width: 90%;
        margin-left= 5%;
    }
    .binhluan table td:nth-child(1){
            width: 50%;
    }
    .binhluan table td:nth-child(2){
            width: 20%;
    }
    .binhluan table td:nth-child(3){
            width: 30%;
    }.width-nho{
        width: 500px;
        margin-right: 20px;
    }.flex{
        display: flex !important;
        border-radius: 10px !important;
    }
    </style>
</head>
<body>
    <div class=" mb">
        <div class="boxtitle">BÌNH LUẬN</div>
            <div class="boxcontent2 binhluan">
                <ul>
                <table>
                    <?php
                    echo "Nội dung bình luận ở đây: ";
                     "Nội dung bình luận ở đây: ".$sanpham_id;
                        foreach ($dsbl as $bl) {
                            extract($bl);
                            echo '<tr><td>'.$noidung.'</td>';
                            echo '<td>'.$khachhang_id.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';
                        }
                    ?> 
                </table>    
                </ul>
            </div>
        <div class="boxfooter binhluanform">

            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="sanpham_id" value="<?=$sanpham_id?>">
                <div class="flex mt-3">
                <input class="form-control width-nho" type="text" name="noidung">
                <input class="btn btn-xanh" type="submit" name="guibinhluan" value="Gửi bình luận">
                </div>
            </form>
        </div>

        <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung=$_POST['noidung'];
            $sanpham_id=$_POST['sanpham_id'];
            $khachhang_id=$_SESSION['ten']['id'];
            $ngaybinhluan=date('h:i:sa d/m/Y');
            insert_binhluan($noidung,$sanpham_id,$khachhang_id,$ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
        
        
        ?>

    </div>
</body>
</html>