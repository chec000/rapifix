{!! PageBuilder::section('head') !!}

<div id="page">
    <div class="container">
        <div class="outer-row row">
            <div class="col-md-12">
                <!--===================================
                =            Header            		   =
                =====================================-->

                <header>
                    <!-- header top nav -->
                    <div class="header-top-nav">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3 col-md-6 col-sm-12">
                                    <!-- language and currency changer -->
                                    <div class="language-currency-changer d-flex justify-content-center justify-content-md-start justify-content-lg-center">
                                        <div class="language-changer">
                                            <img src="assets/images/flags/1.jpg" alt="">
                                            <a href="#" id="changeLanguage"><span id="languageName">English <i
                                                            class="fa fa-caret-down"></i></span></a>
                                            <div class="language-currency-list hidden" id="languageList">
                                                <ul>
                                                    <li><a href="#"><img src="assets/images/flags/1.jpg" alt="">
                                                            English</a></li>
                                                    <li><a href="#"><img src="assets/images/flags/2.jpg" alt="">
                                                            Français</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="currency-changer">
                                            <a href="#" id="changeCurrency"><span id="currencyName">USD <i class="fa fa-caret-down"></i></span></a>
                                            <div class="language-currency-list hidden" id="currencyList">
                                                <ul>
                                                    <li><a href="#">USD</a></li>
                                                    <li><a href="#">EURO</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of language and currency changer -->
                                </div>


                                <div class="col-md-6 col-sm-12">
                                    <!-- user information menu -->
                                    <div class="user-information-menu">
                                        <ul>
                                            <li><a href="wishlist.html">My Wishlist</a> <span class="separator">|</span></li>
                                            <li><a href="checkout.html">Check Out</a> <span class="separator">|</span></li>
                                            <li><a href="cart.html">Cart (<span id="cart-status">Empty</span>)</a>
                                                <span class="separator">|</span></li>
                                            <li><a href="login-register.html">Sign In</a></li>
                                        </ul>
                                    </div>
                                    <!-- end of user information menu -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end of header top nav -->

                    <!-- header bottom -->

                    <!-- header content -->
                    <div class="header-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 offset-lg-0 text-md-left text-sm-center">
                                    <!-- logo -->
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/images/logo.png" class="img-fluid"
                                                                  alt="logo"></a>
                                    </div>
                                    <!-- end of logo -->
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <!-- header search bar -->
                                    <div class="header-search-bar">
                                        <div class="input-group">
                                            <select name="categoryName" id="categoryName">
                                                <option value="">Categories</option>
                                                <option value="01">Football</option>
                                                <option value="02">--- Dresses</option>
                                                <option value="03">--- Jursey</option>
                                                <option value="04">--- Boot</option>
                                                <option value="05">Cricket</option>
                                                <option value="06">--- Dresses</option>
                                                <option value="07">--- Jursey</option>
                                                <option value="08">--- Boot</option>
                                            </select>
                                            <div class="input-group-append">
                                                <input type="search" name="search">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of header search bar -->
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <!-- shopping cart -->
                                    <div class="shopping-cart float-lg-right d-flex justify-content-start" id="shopping-cart">
                                        <div class="cart-icon">
                                            <a href="cart.html"><img src="assets/images/icon-topcart.png" class="img-fluid"
                                                                     alt=""></a>
                                        </div>
                                        <div class="cart-content">
                                            <h2><a href="cart.html">Shopping Cart <span><span id="cartStatus">(Empty)</span></span></a></h2>
                                        </div>

                                        <div class="cart-floating-box" id="cart-floating-box">
                                            <div class="cart-items">
                                                <div class="cart-float-single-item d-flex">
                                                    <span class="remove-item"><a href="#"><i class="fa fa-trash"></i></a></span>
                                                    <div class="cart-float-single-item-image">
                                                        <img src="assets/images/products/faded-short-sleeve-tshirts.jpg"
                                                             class="img-fluid" alt="">
                                                    </div>
                                                    <div class="cart-float-single-item-desc">
                                                        <p class="product-title"><span class="count">1x</span> <a
                                                                    href="single-product-variable.html">Printed
                                                                Dress</a></p>
                                                        <p class="size"> <a href="shop-left-sidebar.html">Yellow, S</a></p>
                                                        <p class="price">$20.50</p>
                                                    </div>
                                                </div>
                                                <div class="cart-float-single-item d-flex">
                                                    <span class="remove-item"><a href="#"><i class="fa fa-trash"></i></a></span>
                                                    <div class="cart-float-single-item-image">
                                                        <img src="assets/images/products/faded-short-sleeve-tshirts.jpg"
                                                             class="img-fluid" alt="">
                                                    </div>
                                                    <div class="cart-float-single-item-desc">
                                                        <p class="product-title"><span class="count">1x</span> <a
                                                                    href="single-product-variable.html">Printed
                                                                Dress</a></p>
                                                        <p class="size"> <a href="shop-left-sidebar.html">Yellow, S</a></p>
                                                        <p class="price">$20.50</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-calculation d-flex">
                                                <div class="calculation-details">
                                                    <p class="shipping">Shipping <span>$2</span></p>
                                                    <p class="total">Total <span>$22</span></p>
                                                </div>
                                                <div class="checkout-button">
                                                    <a href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of shopping cart -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of header content -->

                    <!-- header navigation section -->
                    <div class="header-navigation">
                        <div class="container">
                            <div class="navigation-container">
                                <div class="row">
                                    <div class="col-lg-3 d-none d-lg-block">
                                        <!-- ======  Header menu left text  ======= -->
                                        <p class="call-us-text">Call us 24/7: (+66) 123-456-789</p>
                                    </div>
                                    <div class="col-lg-9 col-md-12">

                                        <!-- Header navigation right side-->

                                        <!-- main menu start -->
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li class="active menu-item-has-children"><a href="#">Home</a>

                                                        <!-- ======  Submenu block  ======= -->

                                                        <ul class="sub-menu">
                                                            <li class="active"><a href="index.html">Home One</a></li>
                                                            <li><a href="index-2.html">Home Two</a></li>
                                                            <li><a href="index-3.html">Home Three</a></li>
                                                        </ul>

                                                        <!-- ====  End of Submenu block  ==== -->

                                                    </li>
                                                    <li class="menu-item-has-children"><a href="#">Shop</a>

                                                        <!-- ======  Submenu block  ======= -->

                                                        <ul class="sub-menu">
                                                            <li class="menu-item-has-children"><a href="#">shop
                                                                    grid</a>
                                                                <ul class="sub-menu">
                                                                    <li class="active"><a href="shop-left-sidebar.html">shop
                                                                            left sidebar</a></li>
                                                                    <li><a href="shop-left-sidebar-wide.html">shop
                                                                            left sidebar wide</a></li>
                                                                    <li><a href="shop-right-sidebar.html">shop
                                                                            right sidebar</a></li>
                                                                    <li><a href="shop-right-sidebar-wide.html">shop
                                                                            right sidebar wide</a></li>
                                                                    <li><a href="shop-no-sidebar-3.html">shop no
                                                                            sidebar 3 column</a></li>
                                                                    <li><a href="shop-no-sidebar-3-wide.html">shop
                                                                            no sidebar 3 column wide</a></li>
                                                                    <li><a href="shop-no-sidebar-4.html">shop no
                                                                            sidebar 4 column</a></li>
                                                                    <li><a href="shop-no-sidebar-4-wide.html">shop
                                                                            no sidebar 4 column wide</a></li>
                                                                    <li><a href="shop-no-sidebar-5.html">shop no
                                                                            sidebar 5 column</a></li>
                                                                    <li><a href="shop-no-sidebar-5-wide.html">shop
                                                                            no sidebar 5 column wide</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">shop
                                                                    List</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="shop-list.html">shop list</a></li>
                                                                    <li><a href="shop-list-wide.html">shop list
                                                                            wide</a></li>
                                                                    <li><a href="shop-left-sidebar-list.html">shop
                                                                            left sidebar List</a></li>
                                                                    <li><a href="shop-left-sidebar-list-wide.html">shop
                                                                            left sidebar List wide</a></li>
                                                                    <li><a href="shop-right-sidebar-list.html">shop
                                                                            right sidebar List</a></li>
                                                                    <li><a href="shop-right-sidebar-list-wide.html">shop
                                                                            right sidebar List wide</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">Shop
                                                                    product</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="single-product.html">shop product</a></li>
                                                                    <li><a href="single-product-wide.html">shop
                                                                            product wide</a></li>
                                                                    <li><a href="single-product-external.html">shop
                                                                            product external</a></li>
                                                                    <li><a href="single-product-external-wide.html">shop
                                                                            product external wide</a></li>
                                                                    <li><a href="single-product-variable.html">shop
                                                                            product variable</a></li>
                                                                    <li><a href="single-product-variable-wide.html">shop
                                                                            product variable wide</a></li>
                                                                    <li><a href="single-product-group.html">shop
                                                                            product group</a></li>
                                                                    <li><a href="single-product-group-wide.html">shop
                                                                            product group wide</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <!-- ====  End of Submenu block  ==== -->

                                                    </li>
                                                    <li class="menu-item-has-children"><a href="#">Blog</a>
                                                        <!-- ======  Mega menu block  ======= -->
                                                        <ul class="mega-menu three-column">
                                                            <li><a href="#" class="d-none">Blog Box</a>
                                                                <ul>
                                                                    <li><a href="blog-1-column-left-sidebar.html">Blog
                                                                            1 column left sidebar</a></li>
                                                                    <li><a href="blog-1-column-right-sidebar.html">Blog
                                                                            1 column right sidebar</a></li>
                                                                    <li><a href="blog-2-column-left-sidebar.html">Blog
                                                                            2 column left sidebar</a></li>
                                                                    <li><a href="blog-2-column-right-sidebar.html">Blog
                                                                            2 column right sidebar</a></li>
                                                                    <li><a href="blog-3-column.html">Blog 3 column</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#" class="d-none">Blog Wide</a>
                                                                <ul>
                                                                    <li><a href="blog-1-column-left-sidebar-wide.html">Blog
                                                                            1 column left sidebar wide</a></li>
                                                                    <li><a href="blog-1-column-right-sidebar-wide.html">Blog
                                                                            1 column right sidebar wide</a></li>
                                                                    <li><a href="blog-2-column-left-sidebar-wide.html">Blog
                                                                            2 column left sidebar wide</a></li>
                                                                    <li><a href="blog-2-column-right-sidebar-wide.html">Blog
                                                                            2 column right sidebar wide</a></li>
                                                                    <li><a href="blog-3-column-wide.html">Blog 3
                                                                            column wide</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#" class="d-none">Single Blog</a>
                                                                <ul>
                                                                    <li><a href="single-blog-left-sidebar.html">Single
                                                                            blog left sidebar</a></li>
                                                                    <li><a href="single-blog-left-sidebar-wide.html">Single
                                                                            blog left sidebar wide</a></li>
                                                                    <li><a href="single-blog-right-sidebar.html">Single
                                                                            blog right sidebar</a></li>
                                                                    <li><a href="single-blog-right-sidebar-wide.html">Single
                                                                            blog right sidebar wide</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <!-- ====  End of Mega menu block  ==== -->
                                                    </li>

                                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                                        <!-- ======  Submenu block  ======= -->

                                                        <ul class="sub-menu">
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="cart-wide.html">cart wide</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="checkout-wide.html">checkout wide</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="compare-wide.html">compare wide</a></li>
                                                            <li><a href="store.html">store</a></li>
                                                            <li><a href="store-wide.html">store wide</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                            <li><a href="wishlist-wide.html">wishlist wide</a></li>
                                                            <li><a href="my-account.html">My account</a></li>
                                                            <li><a href="my-account-wide.html">My account wide</a></li>
                                                            <li><a href="login-register.html">Login register</a></li>
                                                            <li><a href="login-register-wide.html">Login register
                                                                    wide</a></li>
                                                        </ul>

                                                        <!-- ====  End of Submenu block  ==== -->
                                                    </li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>

                                            <!-- Mobile Menu -->
                                            <div class="mobile-menu order-12 d-block d-lg-none"></div>

                                        </div>

                                        <!-- end of Header navigation right side-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of header navigation section -->

                    <!-- end of header bottom -->
                </header>

                <!--=====  End of Header  ======-->

                <!--===========================================
                =            homepage content section            =
                ============================================-->

                <section class="homepage-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Hero Slider Start -->
                                <div class="hero-slider hero-slider-one">

                                    <!-- Hero Item Start -->
                                    <div class="hero-item hero-bg-3">
                                        <div class="row align-items-center justify-content-between">

                                            <!-- Hero Content -->
                                            <div class="hero-content col-md-7 offset-md-5 col-sm-12 offset-sm-0">
                                                <h1>THE WINTER</h1>
                                                <h2><span>SPORT WINTER</span></h2>
                                                <p>This is Photoshops version of Lorem Ipsum. Proin gravida nibh
                                                    vel velit auctor aliquet. Aenean
                                                    sollicitudin, lorem quis</p>
                                                <a href="shop-left-sidebar.html">shop now</a>
                                            </div>


                                        </div>
                                    </div><!-- Hero Item End -->

                                    <!-- Hero Item Start -->
                                    <div class="hero-item hero-bg-4">
                                        <div class="row align-items-center justify-content-between">

                                            <!-- Hero Content -->
                                            <div class="hero-content col-md-7 offset-md-5 col-sm-12 offset-sm-0">

                                                <h1>THE WINTER</h1>
                                                <h2><span>SPORT WINTER</span></h2>
                                                <p>This is Photoshops version of Lorem Ipsum. Proin gravida nibh
                                                    vel velit auctor aliquet. Aenean
                                                    sollicitudin, lorem quis</p>
                                                <a href="shop-left-sidebar.html">shop now</a>

                                            </div>
                                        </div>
                                    </div><!-- Hero Item End -->
                                </div><!-- Hero Slider End -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <!-- Header category list -->
                                <div class="hero-side-category">

                                    <!-- Category Toggle Wrap -->
                                    <div class="category-toggle-wrap">
                                        <!-- Category Toggle -->
                                        <button class="category-toggle">Categories <i class="ti-menu"></i></button>
                                    </div>

                                    <!-- Category Menu -->
                                    <nav class="category-menu mb-40">
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Football</a></li>
                                            <li class="menu-item-has-children"><a href="shop-left-sidebar.html">Tennis</a>

                                                <!-- Mega Category Menu Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a class="megamenu-head" href="shop-left-sidebar.html">Dresses</a>
                                                        <ul>
                                                            <li><a href="shop-left-sidebar.html">Coctail</a></li>
                                                            <li><a href="shop-left-sidebar.html">Day</a></li>
                                                            <li><a href="shop-left-sidebar.html">Evening</a></li>
                                                            <li><a href="shop-left-sidebar.html">Sports</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a class="megamenu-head" href="shop-left-sidebar.html">Shoes</a>
                                                        <ul>
                                                            <li><a href="shop-left-sidebar.html">Coctail</a></li>
                                                            <li><a href="shop-left-sidebar.html">Day</a></li>
                                                            <li><a href="shop-left-sidebar.html">Evening</a></li>
                                                            <li><a href="shop-left-sidebar.html">Sports</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a class="megamenu-head" href="shop-left-sidebar.html">Handbags</a>
                                                        <ul>
                                                            <li><a href="shop-left-sidebar.html">Coctail</a></li>
                                                            <li><a href="shop-left-sidebar.html">Day</a></li>
                                                            <li><a href="shop-left-sidebar.html">Evening</a></li>
                                                            <li><a href="shop-left-sidebar.html">Sports</a></li>
                                                        </ul>
                                                    </li>
                                                </ul><!-- Mega Category Menu End -->

                                            </li>
                                            <li class="menu-item-has-children"><a href="shop-left-sidebar.html">Basketball</a>

                                                <!-- Mega Category Menu Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a class="megamenu-head" href="shop-left-sidebar.html">Dresses</a>
                                                        <ul>
                                                            <li><a href="shop-left-sidebar.html">Coctail</a></li>
                                                            <li><a href="shop-left-sidebar.html">Day</a></li>
                                                            <li><a href="shop-left-sidebar.html">Evening</a></li>
                                                            <li><a href="shop-left-sidebar.html">Sports</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a class="megamenu-head" href="shop-left-sidebar.html">Shoes</a>
                                                        <ul>
                                                            <li><a href="shop-left-sidebar.html">Coctail</a></li>
                                                            <li><a href="shop-left-sidebar.html">Day</a></li>
                                                            <li><a href="shop-left-sidebar.html">Evening</a></li>
                                                            <li><a href="shop-left-sidebar.html">Sports</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a class="megamenu-head" href="shop-left-sidebar.html">Handbags</a>
                                                        <ul>
                                                            <li><a href="shop-left-sidebar.html">Coctail</a></li>
                                                            <li><a href="shop-left-sidebar.html">Day</a></li>
                                                            <li><a href="shop-left-sidebar.html">Evening</a></li>
                                                            <li><a href="shop-left-sidebar.html">Sports</a></li>
                                                        </ul>
                                                    </li>
                                                </ul><!-- Mega Category Menu End -->

                                            </li>
                                            <li><a href="shop-left-sidebar.html">Cricket</a></li>
                                            <li><a href="shop-left-sidebar.html">Baseball</a></li>
                                            <li><a href="shop-left-sidebar.html">Skateboarding</a></li>
                                            <li><a href="shop-left-sidebar.html">Accessories</a></li>
                                            <li><a href="shop-left-sidebar.html">Footwear</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end of Header category list -->
                            </div>
                            <div class="col-lg-9 col-md-">
                                <!-- homepage double banner section -->
                                <div class="homepage-banners mb-50">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 mb-20 mb-lg-0">
                                            <!-- ======  Homepage single split banner  ======= -->

                                            <div class="single-banner-container">
                                                <a href="shop-left-sidebar.html">
                                                    <img src="assets/images/banners/banner3.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>

                                            <!-- ====  End of Homepage single split banner  ==== -->

                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <!-- ======  Homepage single split banner  ======= -->

                                            <div class="single-banner-container">
                                                <a href="shop-left-sidebar.html">
                                                    <img src="assets/images/banners/banner4.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>

                                            <!-- ====  End of Homepage single split banner  ==== -->

                                        </div>

                                    </div>
                                </div>
                                <!-- end of homepage double banner section -->

                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Block title -->
                                            <div class="block-title">
                                                <h2><a href="#">TENNIS</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html">
                                                                <img src="assets/images/products/3.jpg" class="img-fluid"
                                                                     alt="">
                                                                <img src="assets/images/products/4.jpg" class="img-fluid"
                                                                     alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                            class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>$ 12.00</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                           data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                            Add to cart</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html">
                                                                <img src="assets/images/products/1.jpg" class="img-fluid"
                                                                     alt="">
                                                                <img src="assets/images/products/2.jpg" class="img-fluid"
                                                                     alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                            class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>$ 12.00</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                           data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                            Add to cart</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html">
                                                                <img src="assets/images/products/5.jpg" class="img-fluid"
                                                                     alt="">
                                                                <img src="assets/images/products/6.jpg" class="img-fluid"
                                                                     alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                            class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>$ 12.00</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                           data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                            Add to cart</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html">
                                                                <img src="assets/images/products/7.jpg" class="img-fluid"
                                                                     alt="">
                                                                <img src="assets/images/products/8.jpg" class="img-fluid"
                                                                     alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                            class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                Short Sleeve</a></h5>
                                                        <div class="price-box">
                                                            <h4>$ 12.00</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                           data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                            Add to cart</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html">
                                                                <img src="assets/images/products/9.jpg" class="img-fluid"
                                                                     alt="">
                                                                <img src="assets/images/products/10.jpg" class="img-fluid"
                                                                     alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                            class="fa fa-search"></i></a>
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                Dress</a></h5>
                                                        <div class="price-box">
                                                            <h4>$ 12.00</h4>
                                                        </div>

                                                        <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                           data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                            Add to cart</a>
                                                    </div>
                                                </div>
                                                <!-- end of single product -->


                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="homepage-sidebar">
                                    <!-- vertical auto slider container -->
                                    <div class="sidebar">
                                        <h2 class="block-title">BESTSELLER</h2>
                                        <div class="vertical-product-slider-container">
                                            <div class="single-vertical-slider">

                                                <div class="vertical-auto-slider-product-list">
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/1.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/2.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/3.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/4.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/5.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/6.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/7.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of vertical auto slider container -->

                                    <!-- homepage sidebar banner -->
                                    <div class="sidebar">
                                        <div class="homepage-sidebar-banner-container">
                                            <a href="shop-left-sidebar.html">
                                                <img src="assets/images/banners/banner-left.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end of homepage sidebar banner -->

                                    <!-- vertical auto slider container -->
                                    <div class="sidebar">
                                        <h2 class="block-title">LATEST PRODUCTS</h2>
                                        <div class="vertical-product-slider-container">
                                            <div class="single-vertical-slider">
                                                <div class="vertical-auto-slider-product-list">
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/1.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/2.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/3.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/4.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/5.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/6.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->
                                                    <!-- single vertical product -->
                                                    <div class="single-auto-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="single-product-variable.html"><img src="assets/images/products/7.jpg"
                                                                                                        class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of single vertical product -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of vertical auto slider container -->


                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <section class="homepage-main-content">
                                    <!-- homepage text banner section -->
                                    <section class="home-text-banner-container text-center mb-50">
                                        <div class="text-banner-content">
                                            <h2>This is Photoshops version of Lorem</h2>
                                            <p>This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel
                                                velit auctor aliquet. Aenean sollicitudin</p>
                                        </div>
                                    </section>

                                    <!-- end of homepage text banner section -->

                                    <!-- horizontal product slider -->
                                    <div class="horizontal-product-slider">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Block title -->
                                                <div class="block-title">
                                                    <h2><a href="#">BASKETBALL</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- horizontal product slider container -->
                                                <div class="horizontal-product-list">
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/1.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/2.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/3.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/4.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/5.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/6.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/7.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/8.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/9.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/10.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->


                                                </div>
                                                <!-- end of horizontal product slider container -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of horizontal product slider -->

                                    <!-- horizontal product slider -->
                                    <div class="horizontal-product-slider">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Block title -->
                                                <div class="block-title">
                                                    <h2><a href="#">FOOTBALL</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- horizontal product slider container -->
                                                <div class="horizontal-product-list">
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/9.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/10.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/1.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/2.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/3.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/4.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/5.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/6.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/7.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/8.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->



                                                </div>
                                                <!-- end of horizontal product slider container -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of horizontal product slider -->

                                    <!-- horizontal product slider -->
                                    <div class="horizontal-product-slider">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Block title -->
                                                <div class="block-title">
                                                    <h2><a href="#">CRICKET</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- horizontal product slider container -->
                                                <div class="horizontal-product-list">
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/1.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/2.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/3.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/4.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/5.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/6.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/7.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/8.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Faded
                                                                    Short Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/9.jpg" class="img-fluid"
                                                                         alt="">
                                                                    <img src="assets/images/products/10.jpg" class="img-fluid"
                                                                         alt="">
                                                                </a>
                                                                <div class="image-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#quick-view-modal-container"><i
                                                                                class="fa fa-search"></i></a>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">Printed
                                                                    Dress</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>

                                                            <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                                               data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single product -->


                                                </div>
                                                <!-- end of horizontal product slider container -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of horizontal product slider -->
                                </section>
                            </div>
                        </div>
                    </div>
                </section>

                <!--====  End of homepage content section  ====-->


                <!-- New and featured product section -->

                <section class="new-featured-product-section mb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="block-title">
                                                <h2><a href="#">NEW PRODUCTS</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-double-row-product-list">
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/1.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/2.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/3.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/4.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/5.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/6.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/7.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/8.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->



                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                            <div class="col-lg-6">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="block-title">
                                                <h2><a href="#">FEATURED PRODUCTS</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-double-row-product-list">
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/9.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/8.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/7.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/6.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/5.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/4.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/3.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                    <div class="single-vertical-product d-flex">
                                                        <div class="product-image">
                                                            <a href="#"><img src="assets/images/products/2.jpg"
                                                                             class="img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5 class="product-name"><a href="#">Faded Short
                                                                    Sleeve</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 12.00</h4>
                                                            </div>
                                                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                                                Add to cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end of single product -->
                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                        </div>
                    </div>
                </section>

                <!-- end of new and featured product section -->


                <!--=======================================
                =            brand logo slider            =
                ========================================-->

                <div class="brand-logo-slider mb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="brand-logo-list">
                                    <!-- ======  single brand logo block  ====== -->

                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img src="assets/images/brand-logos/1.jpg" alt="">
                                        </a>
                                    </div>

                                    <!-- ====  End of single brand logo block  ==== -->
                                    <!-- ======  single brand logo block  ====== -->

                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img src="assets/images/brand-logos/2.jpg" alt="">
                                        </a>
                                    </div>

                                    <!-- ====  End of single brand logo block  ==== -->
                                    <!-- ======  single brand logo block  ====== -->

                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img src="assets/images/brand-logos/3.jpg" alt="">
                                        </a>
                                    </div>

                                    <!-- ====  End of single brand logo block  ==== -->
                                    <!-- ======  single brand logo block  ====== -->

                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img src="assets/images/brand-logos/4.jpg" alt="">
                                        </a>
                                    </div>

                                    <!-- ====  End of single brand logo block  ==== -->
                                    <!-- ======  single brand logo block  ====== -->

                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img src="assets/images/brand-logos/5.jpg" alt="">
                                        </a>
                                    </div>

                                    <!-- ====  End of single brand logo block  ==== -->
                                    <!-- ======  single brand logo block  ====== -->

                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img src="assets/images/brand-logos/6.jpg" alt="">
                                        </a>
                                    </div>

                                    <!-- ====  End of single brand logo block  ==== -->
                                    <!-- ======  single brand logo block  ====== -->

                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img src="assets/images/brand-logos/7.jpg" alt="">
                                        </a>
                                    </div>

                                    <!-- ====  End of single brand logo block  ==== -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--====  End of brand logo slider  ====-->

                <!--========================================
                =            newsletter section            =
                =========================================-->

                <section class="newsletter-section">
                    <div class="container">
                        <div class="newsletter-container dark-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-sm-12">

                                        <!-- ======  Newsletter input box  ======= -->

                                        <div class="newsletter-wrapper d-md-flex">
                                            <!-- newsletter text -->
                                            <div class="newsletter-text">
                                                <h2>newsletter <span>Sign up for our newsletter</span></h2>
                                            </div>
                                            <!-- end of newsletter text -->

                                            <!-- newsletter input -->
                                            <div class="newsletter-input">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <form id="mc-form" class="mc-form subscribe-form">
                                                            <input type="email" id="mc-email" type="email"
                                                                   autocomplete="off" placeholder="Enter your e-mail"
                                                                   required>
                                                            <button id="mc-submit" type="submit">Subscribe</button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <!-- mailchimp-alerts Start -->
                                                <div class="mailchimp-alerts">
                                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                                </div><!-- mailchimp-alerts end -->
                                            </div>
                                            <!-- end of newsletter input -->
                                        </div>

                                        <!-- ====  End of Newsletter input box  ==== -->

                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <!-- ======  Social icon list  ======= -->

                                        <div class="social-icons text-right mt-5">
                                            <ul>
                                                <li><a class="facebook-link" href="//www.facebook.com"><i class="fa fa-facebook"></i></a>
                                                    <span class="popup">facebook</span>
                                                </li>
                                                <li><a class="rss-link" href="//rss.com"><i class="fa fa-rss"></i></a>
                                                    <span class="popup">rss</span>
                                                </li>
                                                <li><a class="twitter-link" href="//www.twitter.com"><i class="fa fa-twitter"></i></a>
                                                    <span class="popup">twitter</span>
                                                </li>
                                                <li><a class="skype-link" href="//www.skype.com"><i class="fa fa-skype"></i></a>
                                                    <span class="popup">Skype</span>
                                                </li>
                                                <li><a class="dribbble-link" href="//www.dribbble.com"><i class="fa fa-dribbble"></i></a>
                                                    <span class="popup">Dribbble</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- ====  End of Social icon list  ==== -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--====  End of newsletter section  ====-->

                <!--============================
                =            footer            =
                =============================-->

                <footer>
                    <div class="container">
                        <!-- footer navigation -->
                        <div class="footer-navigation section-padding">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <!-- footer description -->
                                    <div class="footer-description">
                                        <div class="footer-logo">
                                            <img src="assets/images/logo.png" alt="">
                                        </div>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean
                                            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec sagittis sem nibh id elit...</p>
                                    </div>
                                    <!-- end of footer description -->
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <!-- footer nav links -->
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <!-- single footer nav block -->
                                            <div class="single-footer-nav-block">
                                                <h2 class="block-title">INFORMATION</h2>
                                                <ul class="footer-nav-links">
                                                    <li><a href="shop-left-sidebar.html">Specials</a></li>
                                                    <li><a href="shop-left-sidebar.html">New Products</a></li>
                                                    <li><a href="shop-left-sidebar.html">Best Sellers</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                </ul>
                                            </div>
                                            <!-- end of single footer nav block -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <!-- single footer nav block -->
                                            <div class="single-footer-nav-block">
                                                <h2 class="block-title"><a href="my-account.html">MY ACCOUNT</a></h2>
                                                <ul class="footer-nav-links">
                                                    <li><a href="#">My Orders</a></li>
                                                    <li><a href="#">My Credit Slips</a></li>
                                                    <li><a href="my-account.html">My Addresses</a></li>
                                                    <li><a href="my-account.html">My Personal Info</a></li>
                                                </ul>
                                            </div>
                                            <!-- end of single footer nav block -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <!-- single footer nav block -->
                                            <div class="single-footer-nav-block">
                                                <h2 class="block-title">CATEGORIES</h2>
                                                <ul class="footer-nav-links">
                                                    <li><a href="shop-left-sidebar.html">Football</a></li>
                                                    <li><a href="shop-left-sidebar.html">Tennis</a></li>
                                                    <li><a href="shop-left-sidebar.html">Formula</a></li>
                                                    <li><a href="shop-left-sidebar.html">Cricket</a></li>
                                                    <li><a href="shop-left-sidebar.html">Baseball</a></li>
                                                </ul>
                                            </div>
                                            <!-- end of single footer nav block -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <!-- single footer nav block -->
                                            <div class="single-footer-nav-block">
                                                <h2 class="block-title">OUR SERVICES</h2>
                                                <ul class="footer-nav-links">
                                                    <li><a href="store.html">Our Stores</a></li>
                                                    <li><a href="about.html">Information</a></li>
                                                    <li><a href="#">Privacy Policy</a></li>
                                                    <li><a href="#">Terms & Condition</a></li>
                                                </ul>
                                            </div>
                                            <!-- end of single footer nav block -->
                                        </div>
                                    </div>
                                    <!-- end of footer nav links -->

                                </div>
                            </div>
                        </div>
                        <!-- end of footer navigation -->

                        <!-- copyright section -->
                        <div class="copyright-section">
                            <div class="copyright-container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p class="copyright-text text-center text-md-left">Copyright © 2018 <a href="#">Rossi</a>.
                                            All Rights Reserved</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="payment-logos text-md-right text-center">
                                            <img src="assets/images/payment.png" alt="payment logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of copyright section -->
                        </div>
                    </div>
                </footer>

                <!--====  End of footer  ====-->
            </div>
        </div>
    </div>
</div>


{!! PageBuilder::section('modal') !!}

{!! PageBuilder::section('footer') !!}
