<?php
    include_once("vSanpham.php");
    $p = new cSanpham();
    $masp = $_REQUEST['idSP'];
    $kq = $p->xuatchitietsp($masp);
    $r=mysqli_fetch_assoc($kq);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    
    <!--header area start-->
    <header class="header_area header_product">
        <!--header top start-->
        <div class="header_top">
        <div class="header_top">
                <div class="container-fluid">
                    <div class="top_right text-right">
                        <ul>
                            <li class="top_links">
                                <a href="#">
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        // Hiển thị tên tài khoản nếu đã đăng nhập
                                        echo $_SESSION['user'];
                                    } else {
                                        // Hiển thị "My Account" nếu chưa đăng nhập
                                        echo 'My Account';
                                    }
                                    ?>
                                    <i class="ion-chevron-down"></i>
                                </a>
                                <ul class="dropdown_links">
                                    <li><a href="">My Wish List</a></li>
                                    <li><a href="">My Account</a></li>

                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        // Hiển thị "Sign Out" nếu đã đăng nhập
                                        echo '<li><a href="?dangxuat">Sign Out</a></li>';
                                    } else {
                                        // Hiển thị "Sign In" nếu chưa đăng nhập
                                        echo '<li><a href="?dathang">Sign In</a></li>';
                                    }
                                    ?>

                                    <?php
                                    // Xử lý đăng xuất
                                    if (isset($_REQUEST['dangxuat'])) {
                                        session_destroy();

                                        echo "<script>window.location.href = '/baikhanh1/index.php';</script>";
                                    }
                                    ?>
                                    <li><a href="admin">Admin Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>

            
        </div>
        <!--header top start-->

       <!--header middel start-->
       <div class="header_middel">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-5">
                        <div class="logo">
                            <a href="index.php"><h3>Shop phụ kiện điện thoại</h3></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="search_bar">
                            <form action="#">
                                <select class="select_option" name="select" id="categori">
                                    <option selected value="1">All Categories</option>
                                    <option  value="2">Accessories</option>
                                    <option  value="3">Bridge</option>
                                    <option  value="4">Hub</option>
                                    <option  value="5">Repeater</option>
                                    <option  value="6">Switch</option>
                                    <option  value="7">Video Games</option>
                                    <option  value="8">PlayStation 3</option>
                                    <option  value="9">PlayStation 4</option>
                                    <option  value="10">Xbox 360</option>
                                    <option  value="11">Xbox One</option>
                                </select>
                                <input placeholder="Search entire store here..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 offset-md-6 offset-lg-0">
                        <div class="cart_area">
                            <div class="middel_links">
                               <ul>
                                   <li><a href="login.html">Login</a></li>
                                   <li>/</li>
                                   <li><a href="login.html">Register</a></li>
                               </ul>

                            </div>
                            <div class="cart_link">
                                <a href="#"><i class="fa fa-shopping-basket"></i>2 item(s)</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="../index.php">Home </a></li>
                                            <!-- <li><a href="">shop </a></li> -->
                                            <li><a href="./View/about.php">About Us</a></li>
                                            <!-- <li><a href="">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="">About Us</a></li>
                                                    <li><a href="">services</a></li>
                                                    <li><a href="">Frequently Questions</a></li>
                                                    <li><a href="">login</a></li>
                                                    <li><a href="">my account</a></li>
                                                    <li><a href="">Wishlist</a></li>
                                                    <li><a href="">Error 404</a></li>
                                                    <li><a href="">compare</a></li>
                                                    <li><a href="">privacy policy</a></li>
                                                    <li><a href="">coming soon</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="#">blog</a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="./View/blog-sp.php">Blog sản phẩm</a></li>
                                                    <li><a href="./View/blog-meovat.php">blog mẹo vặt</a></li>

                                                </ul>
                                            </li>
                                            <!-- <li><a href="./View/about.php">Contact Us</a></li> -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->
    
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area product_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>/</li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--product details start-->
    <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                   <div class="product-details-tab">

                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="assets/image/<?php echo $r['image'];?>" data-zoom-image="assets/image/<?php echo $r['image'];?>" alt="big-1">
                            </a>
                        </div>

                        
                    </div>
                </div>
                
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1><?php echo $r['name'];?></h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> 1 review </a></li>
                                    <li class="review"><a href="#"> Write a review </a></li>
                                </ul>
                            </div>
                            <div class="product_price">
                                <del class="current_price"><?php echo $r['price'];?>VND</del>
                                <span class="current_price"><?php echo $r['cost'];?>VND</span>
                            </div>
                            <div class="product_desc">
                                <p><?php echo $r['mota'];?></p>
                            </div>

                            
                            <div class="product_variant quantity">
                                <label>Số lượng</label>
                                <input min="1" max="100" value="1" type="number">
                                <input type="submit" name="nut" id="nut" value="Đặt hàng" > 
                            </div>
                            
                            
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--product details end-->
    
    <!--footer area start-->
    <footer class="footer_widgets product_page">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="widgets_container">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Delivery Information</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="">Terms & Conditions</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="widgets_container">
                            <h3>Extras</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Certificates</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="contact.html">Site Map</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container contact_us">
                            <h3>Contact Us</h3>
                            <div class="footer_contact">
                                <p>Address: 6688 Princess Road, London, Greater London BAS 23JK, UK</p>
                                <p>Phone: <a href="tel:+(+012)800456789-987">(+012) 800 456 789 - 987</a> </p>
                                <p>Email: demo@example.com</p>
                                <ul>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container newsletter">
                            <h3>Join Our Newsletter Now</h3>
                            <div class="newleter-content">
                                <p>Exceptional quality. Ethical factories. Sign up to enjoy free U.S. shipping and returns on your first order.</p>
                                <div class="subscribe_form">
                                    <form id="mc-form" class="mc-form footer-newsletter" >
                                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                        <button id="mc-submit">Subscribe !</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div><!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <!--footer area end-->
   
    

<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>

</html>


