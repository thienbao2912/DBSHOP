
<div class="container mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <h3 class="text-center mt-2">ĐƠN HÀNG CỦA BẠN</h3>
            <div class="row mt-2 boxcontent cart">
                <table>
                    <tr class="bg-body-secondary">
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    <?php 
                        if(is_array($mybill)){
                            
                            foreach ($mybill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '  
                                    <tr>
                                        <td>'.$bill['id'].'</td>
                                        <td>'.$bill['ngaydathang'].'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$bill['total'].'</td>
                                        <td>'.$ttdh.'</td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
  
    
</div>




