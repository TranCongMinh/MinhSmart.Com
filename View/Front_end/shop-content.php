
<!-- Shop Page Start -->
<li><a href="index.php?action=xoahetsession">SESSION DETROY</a></li>
<div class="main-shop-page pt-100 pb-100 ptb-sm-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <!-- Sidebar Shopping Option Start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar">
                    <!-- Sidebar Electronics Categorie Start -->
                    <div class="electronics mb-40">
                        <h3 class="sidebar-title">Electronics</h3>
                        <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                            <ul>
                                <li class="has-sub"><a href="#">Camera</a>
                                <ul class="category-sub">
                                    <li><a href="shop.html">Cords and Cables</a></li>
                                    <li><a href="shop.html">gps accessories</a></li>
                                    <li><a href="shop.html">Microphones</a></li>
                                    <li><a href="shop.html">Wireless Transmitters</a></li>
                                </ul>
                                <!-- category submenu end-->
                            </li>
                        </ul>
                    </div>
                    <!-- category-menu-end -->
                </div>
                <!-- Sidebar Electronics Categorie End -->
                <!-- Price Filter Options Start -->
                <div class="search-filter mb-40">
                    <h3 class="sidebar-title">Tìm kiếm theo giá</h3>
                    <form action="#" class="sidbar-style">
                        <div id="slider-range"></div>
                        <input type="text" id="amount" class="amount-range" readonly>
                    </form>
                </div>
                <!-- Price Filter Options End -->
                <!-- Sidebar Categorie Start -->
                
                <!-- Sidebar Categorie Start -->
                <!-- Product Size Start -->
                <!-- Product Size End -->
                <!-- Product Color Start -->
                <!-- Product Color End -->
                <!-- Product Top Start -->
                <div class="top-new mb-40">
                    <h3 class="sidebar-title">Sản phẩm mới</h3>
                    <div class="side-product-active owl-carousel">
                        <!-- Side Item Start -->
                        <div class="side-pro-item">
                            <!-- Single Product Start -->
                            <?php while ($row = mysqli_fetch_array($getDienThoaiSlide)) {
                                
                             ?>
                            <div class="single-product single-product-sidebar">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="img/product/<?php echo $row['images']; ?>">
                                        
                                    </a>
                                    
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product.html"><?php echo $row['Ten_DT']; ?></a></h4>
                                    <p><span class="price"><?php echo $row['Gia']; ?></span><!-- <del class="prev-price">180.50</del> --></p>
                                </div>
                                <!-- Product Content End -->
                            </div>
                        <?php } ?>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            
                            <!-- Single Product End -->
                        </div>
                        <!-- Side Item End -->
                        <!-- Side Item Start -->
                        <div class="side-pro-item">
                            <!-- Single Product Start -->
                            <div class="single-product single-product-sidebar">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="img/products/41.jpg" alt="single-product">
                                    </a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product.html">Silver Work Lamp  Proin</a></h4>
                                    <p><span class="price">$80.45</span><del class="prev-price">$100.50</del></p>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product single-product-sidebar">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="img/products/36.jpg" alt="single-product">
                                        
                                    </a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product.html">Silver Work Lamp  Proin</a></h4>
                                    <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product single-product-sidebar">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="img/products/33.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/products/34.jpg" alt="single-product">
                                    </a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product.html">Lamp Proin Work  Silver </a></h4>
                                    <p><span class="price">$120.45</span><del class="prev-price">130.50</del></p>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product single-product-sidebar">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product.html">
                                        <img class="primary-img" src="img/products/31.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/products/32.jpg" alt="single-product">
                                    </a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                    <p><span class="price">$140.45</span><del class="prev-price">$150.50</del></p>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Side Item End -->
                        <!-- Side Item Start -->
                       
                        <!-- Side Item End -->
                    </div>
                </div>
                <!-- Product Top End -->
                <!-- Single Banner Start -->
                <div class="col-img">
                    <a href="shop.html"><img src="img/banner/banner-sidebar.jpg" alt="slider-banner"></a>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
        <!-- Sidebar Shopping Option End -->
        <!-- Product Categorie List Start -->
        <div class="col-lg-9 order-1 order-lg-2">
            <!-- Grid & List View Start -->
            <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                <div class="grid-list-view  mb-sm-15">
                    <ul class="nav tabs-area d-flex align-items-center">
                        <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                        <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                    </ul>
                </div>
                <!-- Toolbar Short Area Start -->
                <div class="main-toolbar-sorter clearfix">
                    <div class="toolbar-sorter d-flex align-items-center">
                        <label>Sort By:</label>
                        <select class="sorter wide">
                            <option value="Position">Relevance</option>
                            <option value="Product Name">Neme, A to Z</option>
                            <option value="Product Name">Neme, Z to A</option>
                            <option value="Price">Price low to heigh</option>
                            <option value="Price" selected>Price heigh to low</option>
                        </select>
                    </div>
                </div>
                <!-- Toolbar Short Area End -->
                <!-- Toolbar Short Area Start -->
                <div class="main-toolbar-sorter clearfix">
                    <div class="toolbar-sorter d-flex align-items-center">
                        <label>Show:</label>
                        <select class="sorter wide">
                            <option value="12">12</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <!-- Toolbar Short Area End -->
            </div>
            <!-- Grid & List View End -->
            <div class="main-categorie mb-all-40">
                <!-- Grid & List Main Area End -->
                <div class="tab-content fix">
                    <div id="grid-view" class="tab-pane fade show active">
                        
                        <div class="row">
                            <?php while ($row = mysqli_fetch_array($getDienThoai)) {
                            
                            ?>
                            <!-- Single Product Start -->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-4">
                                
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    
                                    <div class="pro-img">
                                        <a href="index.php?action=xemdienthoai&id_DT=<?php echo $row['id_DT']; ?>">
                                            <img class="primary-img" src="img/product/<?php echo $row['images']; ?>" alt="single-product">
                                            
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html"><?php echo $row['Ten_DT'] ?></a></h4>
                                            <p><span class="price"><?php echo $row['Gia']; ?> đ</span></p>
                                            
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index.php?action=add_cart&id_DT=<?php echo $row['id_DT']; ?>" title="Add to Cart"> Mua sản phẩm</a>
                                            </div>
                                            <div class="actions-secondary">
                                                
                                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Yêu thích</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Product Content End -->
                                </div>
                                
                            </div>
                            <?php } ?>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            
                        </div>
                        
                        <!-- Row End -->
                    </div>
                    <!-- #grid view End -->
                    <div id="list-view" class="tab-pane fade">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <?php while($row = mysqli_fetch_array($getDienThoaiView)) {
                            
                            ?>
                            <div class="row">
                                
                                <!-- Product Image Start -->
                                <div class="col-lg-4 col-md-5 col-sm-12">
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="img/product/<?php echo $row['images']; ?>" alt="single-product">
                                            
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        <!-- <span class="sticker-new">new</span> -->
                                    </div>
                                </div>
                                
                                <div class="col-lg-8 col-md-7 col-sm-12">
                                    <div class="pro-content hot-product2">
                                        <h4><a href="product.html"><?php echo $row['Ten_DT']; ?></a></h4>
                                        <p><span class="price">Giá <?php echo $row['Gia']; ?> $</span></p>
                                        <p><?php echo $row['information']; ?></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.html" title="" data-original-title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <!-- <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <!-- Product Content End -->
                            </div>
                             <?php } ?>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                       
                        <!-- Single Product End -->
                    </div>
                    <!-- #list view End -->
                    <!-- Phân Trang -->
                    <div class="pro-pagination">
                        <ul class="blog-pagination">
                            <?php for($i=1; $i <= $chiaTrang; $i++) {
                            
                            ?>
                            <li class="active"><a href="index.php?action=home&page=<?php echo $i;?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        <div class="product-pagination">
                            <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                        </div>
                    </div>
                    <!-- Product Pagination Info -->
                </div>
                <!-- Grid & List Main Area End -->
            </div>
        </div>
        <!-- product Categorie List End -->
    </div>
    <!-- Row End -->
</div>
<!-- Container End -->
</div>
<!-- Shop Page End -->