<div class=" ">
    <div class=" ">
        <div class=" container ">
        <h3 class="text-center mt-4 boxtitle">GIỎ HÀNG</h3><br>
            <div class=" row formcontent">
                <table>
                    <?php 
                    
                        viewcart(1);
                    ?>
                </table>
            </div>
        </div>
            <br>
        <div class=" container bill">
                    <?php 
                            if(isset($_SESSION['ten'])){
                        ?>
                            <a class="mt-4" href="index.php?act=bill">
                            <input class="btn btn-secondary" type="button" value="TIẾP TỤC ĐẶT HÀNG">
                            </a>
                            <a href="index.php?act=delcart">
                                <input class="btn btn-secondary" type="button" value="XÓA GIỎ HÀNG">
                            </a>
                        </form>
                        <?php
                            }else{ 
                        ?>
                            <h1 style="color: black; text-align: center;">Vui lòng đăng nhập để tiếp tục đặt hàng!</h1>         
                        <?php } ?>                   
        </div>
        <br>
    </div>
   
</div>




