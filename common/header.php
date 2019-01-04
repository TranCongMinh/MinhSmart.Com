<?php 
    ob_start();
    
    include 'Controller/Frontend_Controller.php';
    $HeaderController = new Frontend_Controller();
    $getThuongHieu = $HeaderController->getHeader();
    $getThuongHieumenu = $HeaderController->getHeader();

 ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Minhmart </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- linearicons css -->
    <link rel="stylesheet" href="css/linearicons.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
   
    
    
    <!-- Main Wrapper Start Here -->
    <div class="wrapper">

     <header>
            <!-- Header Top Start Here -->
            <div class="header-top-area home-4">
                <div class="container">
                    <!-- Header Top Start -->
                    <div class="header-top">
                        <ul>
                            <li><a href="#">Miễn phí ship cho đơn hàng trên 1000k</a></li>
                            <li><a href="#">Trần Công Minh</a></li>
                            <li><a href="checkout.html">Mở cửa 8:00 AM to 10:00 PM</a></li>
                        </ul>
                        <ul>                                          
                            <li><a href="#">Tài khoản<i class="lnr lnr-chevron-down"></i></a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="index.php?action=login">Đăng nhập</a></li>
                                    <li><a href="index.php?action=logout">Đăng xuất</a></li>
                                    <li><a href="index.php?action=register">Đăng kí</a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li> 
                        </ul>
                    </div>
                    <!-- Header Top End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
            <div class="header-middle ptb-15 black-bg2 home-4">
                <div class="container">
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-3 col-md-12">
                            <div class="logo mb-all-30">
                                <a href="index.php">Minh Mart</a>
                            </div>
                        </div>
                        <!-- Categorie Search Box Start Here -->
                        <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                            <div class="categorie-search-box">
                                <form action="#">
                                    <div class="form-group">
                                        
                                        <select class="bootstrap-select" name="poscats">
                                            
                                            
                                            <?php while ($row = mysqli_fetch_array($getThuongHieu)) {
                                                # code...
                                             ?>
                                            <option value="<?php echo $row['id_thuonghieu'] ?>"><?php echo $row['tenthuonghieu']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="text" name="search" placeholder="I’m shopping for...">
                                    <button><i class="lnr lnr-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Categorie Search Box End Here -->
                        <!-- Cart Box Start Here -->
                        <?php 

                                            //$soluong_cartDetail = isset($_POST['SoLuong'])?$_POST['SoLuong']:0; 
                                            //$_SESSION['cart']['id_DT']['SoLuong'] = $soluong_cartDetail;
                                            //var_dump($soluong_cartDetail);
                                            // if (!isset($_SESSION['cart'])) {
                                                
                                            // }else{
                                            
                                            
                                               
                                            
                                          
                                         
                         ?>
                        <div class="col-lg-4 col-md-12">
                            <div class="cart-box mt-all-30">
                                <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                                    <li><a href="index.php?action=add_cart"><i class="lnr lnr-cart"></i><span class="my-cart"><span><?php //var_dump($_SESSION['add_cart']); ?> Giỏ hàng</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                            <li>
                                                <!-- Cart Box Start -->
                                                <?php 
                                                    $tongdonhang = 0;
                                                    
                                                 ?>
                                                <?php 
                                                       if (!isset($_SESSION['cart'])){
                                                            echo "Bạn chưa mua sản phẩm nào";
                                                       }else{
                                                        foreach ($_SESSION['cart'] as $k => $v) {
                                                                $gia = $v['Gia'];
                                                                $soluong = $v['soluongmua'];
                                                                $thanhtien = $gia * $soluong;
                                                                $tongdonhang += $thanhtien;   
                                                         

                                                        ?>

                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/product/<?php echo $v['images']; ?>"></a>
                                                        <span class="pro-quantity"><?php echo $soluong; ?></span>
                                                    </div>
                                                    

                                                    <div class="cart-content">
                                                        <h6><a href="product.html"><?php echo $v['tenDienThoai']; ?></a></h6>
                                                        <span class="cart-price"><?php echo $gia; ?></span>
                                                        
                                                    </div>
                                                    
                                                    
                                                     
                                                    <a class="del-icone" href="index.php?action=remove-cart&id_DT=<?php echo $v['id_product']; ?>"><i class="ion-close"></i></a>
                                                </div>
                                                
                                                <!-- Cart Box End -->
                                                <!-- Cart Box Start -->
                                                <?php }} ?>
                                                <div class="cart-footer">
                                                   <ul class="price-content">
                                                       <li>Tổng đơn hàng <span><?php echo $tongdonhang; ?></span></li>
                                                       <!-- <li>Phí ship <span>$7.00</span></li>
                                                      
                                                       <li>Tổng cộng <span>$64.95</span></li> -->
                                                   </ul>

                                                    <div class="cart-actions text-center">
                                                        <a class="cart-checkout" href="checkout.html">Kiểm tra</a>
                                                    </div>
                                                </div>
                                                
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong><?php if (isset($_SESSION['NguoiDungLogin'])) {
                                        echo $_SESSION['hotenND'];
                                    }else echo "Mời bạn đăng nhập"; ?></strong></span></span></a>



                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            <div class="header-bottom  header-sticky black-bg2 home-4">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                            <span class="categorie-title">Danh  mục  hàng hóa</span>
                        </div>                       
                        <div class="col-xl-9 col-lg-8 col-md-12 ">
                            <nav class="d-none d-lg-block">
                                <ul class="header-bottom-list d-flex">
                                    <li class="active"><a href="index.html">Trang chủ<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="#">Home Version 1</a></li>
                                            <li><a href="#">Home Version 2</a></li>
                                            <li><a href="#">Home Version 3</a></li>
                                            <li><a href="#">Home Version 4</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="#">Điện thoại<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <?php while ($row = mysqli_fetch_array($getThuongHieumenu)) {
                                            
                                                
                                             ?>
                                            <li><a href="#"><?php echo $row['tenthuonghieu']; ?></a></li>
                                        <?php } ?>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <li><a href="single-blog.html">blog details</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="#">Sửa chữa<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <li><a href="contact.html">contact us</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="login.html">sign in</a></li>
                                            <li><a href="forgot-password.html">forgot password</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="about.html">Thông tin</a></li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu d-block d-lg-none">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home</a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul>
                                                <li><a href="index.html">Home Version 1</a></li>
                                                <li><a href="index-2.html">Home Version 2</a></li>
                                                <li><a href="index-3.html">Home Version 3</a></li>
                                                <li><a href="index-4.html">Home Version 4</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="shop.html">shop</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="product.html">product details</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="single-blog.html">blog details</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="#">pages</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="login.html">sign in</a></li>
                                                <li><a href="forgot-password.html">forgot password</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End Here -->
            <!-- Mobile Vertical Menu Start Here -->
            <div class="container d-block d-lg-none">
                <div class="vertical-menu mt-30">
                    <span class="categorie-title mobile-categorei-menu">Shop by Categories </span>
                    <nav>  
                        <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
                            <ul>
                                <li class="has-sub"><a href="#">Automotive & Motorcycle </a>
                                    <ul class="category-sub">
                                        <li class="has-sub"><a href="shop.html">Office chair</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.html">Bibendum Cursus</a></li>
                                                <li><a href="shop.html">Dignissim Turpis</a></li>
                                                <li><a href="shop.html">Dining room</a></li>
                                                <li><a href="shop.html">Dining room</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="shop.html">Purus Lacus</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.html">Magna Pellentesq</a></li>
                                                <li><a href="shop.html">Molestie Tortor</a></li>
                                                <li><a href="shop.html">Vehicula Element</a></li>
                                                <li><a href="shop.html">Sagittis Blandit</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">gps accessories</a></li>
                                        <li><a href="shop.html">Microphones</a></li>
                                        <li><a href="shop.html">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Sports & Outdoors</a>
                                    <ul class="category-sub">
                                        <li class="menu-tile">Cameras</li>
                                        <li><a href="shop.html">Cords and Cables</a></li>
                                        <li><a href="shop.html">gps accessories</a></li>
                                        <li><a href="shop.html">Microphones</a></li>
                                        <li><a href="shop.html">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Home & Kitchen</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">kithen one</a></li>
                                        <li><a href="shop.html">kithen two</a></li>
                                        <li><a href="shop.html">kithen three</a></li>
                                        <li><a href="shop.html">kithen four</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Phones & Tablets</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">phone one</a></li>
                                        <li><a href="shop.html">Tablet two</a></li>
                                        <li><a href="shop.html">Tablet three</a></li>
                                        <li><a href="shop.html">phone four</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">TV & Video</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">smart tv</a></li>
                                        <li><a href="shop.html">real video</a></li>
                                        <li><a href="shop.html">Microphones</a></li>
                                        <li><a href="shop.html">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li><a href="#">Beauty</a> </li>
                                <li><a href="#">Sport & tourisim</a></li>
                                <li><a href="#">Meat & Seafood</a></li>
                            </ul>
                        </div>
                        <!-- category-menu-end -->
                    </nav>
                </div>
            </div>
            <!-- Mobile Vertical Menu Start End -->
        </header>
        <!-- Main Header Area End Here -->
        <!-- Categorie Menu & Slider Area Start Here -->