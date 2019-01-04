<!-- Product Thumbnail Start -->
<div class="main-product-thumbnail ptb-100 ptb-sm-60">
    <div class="container">
        <div class="thumb-bg">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-lg-5 mb-all-40">
                    <!-- Thumbnail Large Image start -->
                    <?php 
                        while ($row = mysqli_fetch_array($getDienThoaiByid)) {
                            
                        

                     ?>
                    <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade show active">
                            <a data-fancybox="images" href="img/product/<?php echo $row['images'] ?>"><img src="img/product/<?php echo $row['images'] ?>" alt="product-view"></a>
                        </div>
                    </div>

                    <!-- Thumbnail Large Image End -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->
                <div class="col-lg-7">
                    <div class="thubnail-desc fix">
                        <h3 class="product-header"><?php echo $row['Ten_DT']; ?></h3>
                        
                        <table class="table text-center compare-content" >
                            <tr>
                                <td class="product-title" >Hệ điều hành</td>
                                <td class="product-description"><?php echo $row['OS']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title" >Màn hình</td>
                                <td class="product-description"><?php echo $row['Display']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">CPU</td>
                                <td class="product-description"><?php echo $row['CPU']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">Camera Sau</td>
                                <td class="product-description"><?php echo $row['CameraSau']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">Camera Trước</td>
                                <td class="product-description"><?php echo $row['CameraTruoc']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">Bộ nhớ trong</td>
                                <td class="product-description"><?php echo $row['ROM']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">Ram</td>
                                <td class="product-description"><?php echo $row['RAM']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">Dung lượng pin</td>
                                <td class="product-description"><?php echo $row['Battery']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">Mạng</td>
                                <td class="product-description"><?php echo $row['Network']; ?></td>
                            </tr>
                            <tr>
                                <td class="product-title">Số lượng còn</td>
                                <td class="product-description"><?php echo $row['SoLuong']; ?> sản phẩm</td>
                            </tr>
                        </table>
                        <div class="rating-summary fix mtb-10">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="rating-feedback">
                                <a href="#">(1 review)</a>
                                <a href="#">add to your review</a>
                            </div>
                        </div>
                        <div class="pro-price mtb-30">
                            <p class="d-flex align-items-center"><span class="price"><?php echo $row['Gia']." đ"; ?></span>
                        </div>
                        <div class="box-quantity d-flex hot-product2">
                            <form action="index.php?action=add_cart&id_DT=<?php echo $row['id_DT']; ?>" method="post">
                                <input name="SoLuong" class="quantity mr-15" type="number" min="1" value="1">
                                <div class="wc-proceed-to-checkout">
                                <button name="GetSoLuong" type="submit" class="submit">Cho vào giỏ hàng</button>
                                </div>
                                
                                
                                
                            
                            </form>
                        </div>
                        <div class="pro-ref mt-20">
                            <p><span class="in-stock"><i class="ion-checkmark-round"></i> Còn hàng</span></p>
                        </div>
                        <div class="socila-sharing mt-25">
                            <ul class="d-flex">
                                <li>share</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Product Thumbnail Description Start -->
                <div class="thumnail-desc pb-100 pb-sm-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="main-thumb-desc nav tabs-area" role="tablist">
                                    <li><a class="active" data-toggle="tab" href="#dtail">Mô tả sản phẩm</a></li>
                                    <li><a data-toggle="tab" href="#review">Đánh giá</a></li>
                                </ul>
                                <!-- Product Thumbnail Tab Content Start -->
                                <div class="tab-content thumb-content border-default">
                                    <div id="dtail" class="tab-pane fade show active">
                                        <p><?php echo $row['information']; ?></p>
                                    </div>
                                    <div id="review" class="tab-pane fade">
                                        <!-- Reviews Start -->
                                        <div class="review border-default universal-padding">
                                            <div class="group-title">
                                                <h2>customer review</h2>
                                            </div>
                                            <h4 class="review-mini-title">Truemart</h4>
                                            <ul class="review-list">
                                                <!-- Single Review List Start -->
                                                <li>
                                                    <span>Quality</span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <label>Truemart</label>
                                                </li>
                                                <!-- Single Review List End -->
                                                <!-- Single Review List Start -->
                                                <li>
                                                    <span>price</span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <label>Review by <a href="https://themeforest.net/user/hastech">Truemart</a></label>
                                                </li>
                                                <!-- Single Review List End -->
                                                <!-- Single Review List Start -->
                                                <li>
                                                    <span>value</span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <label>Posted on 7/20/18</label>
                                                </li>
                                                <!-- Single Review List End -->
                                            </ul>
                                        </div>
                                        <!-- Reviews End -->
                                        <!-- Reviews Start -->
                                        <div class="review border-default universal-padding mt-30">
                                            <h2 class="review-title mb-30">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                                            <p class="review-mini-title">your rating</p>
                                            <ul class="review-list">
                                                <!-- Single Review List Start -->
                                                <li>
                                                    <span>Quality</span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <!-- Single Review List End -->
                                                <!-- Single Review List Start -->
                                                <li>
                                                    <span>price</span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <!-- Single Review List End -->
                                                <!-- Single Review List Start -->
                                                <li>
                                                    <span>value</span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <!-- Single Review List End -->
                                            </ul>
                                            <!-- Reviews Field Start -->
                                            <div class="riview-field mt-40">
                                                <form autocomplete="off" action="#">
                                                    <div class="form-group">
                                                        <label class="req" for="sure-name">Nickname</label>
                                                        <input type="text" class="form-control" id="sure-name" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="req" for="subject">Summary</label>
                                                        <input type="text" class="form-control" id="subject" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="req" for="comments">Review</label>
                                                        <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                                    </div>
                                                    <button type="submit" class="customer-btn">Submit Review</button>
                                                </form>
                                            </div>
                                            <!-- Reviews Field Start -->
                                        </div>
                                        <!-- Reviews End -->
                                    </div>
                                </div>
                                <!-- Product Thumbnail Tab Content End -->
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Container End -->
                </div>
                <!-- Product Thumbnail Description End -->
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
         <?php } ?>
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail End -->