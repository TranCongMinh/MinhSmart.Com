<?php 
   
 ?>

<!-- Cart Main Area Start -->
        <?php 
                //$id_DT = isset($_GET['id_DT'])?$_GET['id_DT']:'';
                //echo $id_DT;
        ?>  
        <?php 
                    // if (isset($_SESSION['add_cart'])) {
                    //     echo "Đã có hàng";
                    //     var_dump($_SESSION['add_cart']);
                    //     //unset($_SESSION['add_cart']);
                        

                    // }else {
                    //     echo "Chưa có hàng";
                    //     if ($id_DT!='') {
                    //         $_SESSION['add_cart'][$id_DT]['soluong']=1;
                    //     }
                        
                    // }
                    
                    // if ($id_DT == '') {
                    //    if (isset($_SESSION['add_cart'])) {
                    //         echo "Đã có hàng";
                    //         var_dump($_SESSION['add_cart']);
                    //     }else{
                    //         echo "Chưa có hàng";
                    //     }
                    // }else{
                    //     if (isset($_SESSION['add_cart'][$id_DT])) {
                    //         $_SESSION['add_cart'][$id_DT]['soluong'] += 1; 
                    //     }else{
                    //         $_SESSION['add_cart'][$id_DT]['soluong']=1;
                    //     }
                    //     //$_SESSION['add_cart'][$id_DT]['soluong']=1;
                    //     echo "Đã có hàng";
                    //     var_dump($_SESSION['add_cart']);

                    // }

         ?>
        
        <?php //var_dump($giohang) ?>
       <!--  ------------------------------ -->
        <?php 
                //foreach ($_SESSION['cart'] as $k => $v) {
                   // $data = $v['id_DT'];
                //}
                //var_dump($data);
                //var_dump($_SESSION['cart'])
         ?>
       <!--  ---------------------------------------------- -->
        <?php //var_dump($giohang) ?>
        <!-- --------------------------------------------- -->
        <?php //var_dump($id) ?>
        
        
        <div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Form Start -->
                        <form  action="index.php?action=update-cart" method="post">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-45">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Hình ảnh</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Thành tiền</th>
                                            <th class="product-remove">Xóa khỏi giỏ hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $tongdonhang = 0; ?>
                                        <?php 
                                            //$soluong_cartDetail = isset($_POST['SoLuong'])?$_POST['SoLuong']:0; 
                                            //$_SESSION['cart']['id_DT']['SoLuong'] = $soluong_cartDetail;
                                            //var_dump($soluong_cartDetail);
                                            if (!isset($_SESSION['cart'])) {
                                                echo "Bạn chưa mua hàng";
                                            }else{
                                            foreach ($_SESSION['cart'] as $k => $v) {
                                                $gia = $v['Gia'];
                                                $soluong = $v['soluongmua'];
                                                $thanhtien = $gia * $soluong;
                                                $tongdonhang += $thanhtien;   
                                                $_SESSION['tongdonhang'] = $tongdonhang;
                                            
                                               
                                            
                                          
                                         ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="img/product/<?php echo $v['images']; ?>" alt="cart-image" /></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?php echo $v['tenDienThoai']; ?></a></td>
                                            <td class="product-price"><span class="amount"><?php echo $gia; ?></span></td>
                                            <td class="product-quantity"><input name="soluongtang" type="number" value="<?php echo $soluong ?>" /></td>
                                            <td class="product-subtotal"><?php echo $thanhtien; ?></td>
                                            <td class="product-remove"> <a href="index.php?action=remove-cart&id_DT=<?php echo $v['id_product']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>
                                       
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                        <input type="submit" name="update-cart" value="Cập nhật" />
                                        <a href="index.php">Continue Shopping</a>
                                    </div>
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="cart_totals float-md-right text-md-right">
                                        <h2>Thanh toán</h2>
                                        <br />
                                        <table class="float-md-right">
                                            <tbody>
                                                <!-- <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">$215.00</span></td>
                                                </tr> -->
                                                <tr class="order-total">
                                                    <th>Tổng tiền</th>
                                                    <td>
                                                        <strong><span class="amount"><?php echo $tongdonhang; ?></span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="index.php?action=checkLoginCart">Tiến hành thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->