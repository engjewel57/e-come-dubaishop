<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Diva - Minimal and Modern Multipurpose Bootstrap 5 Html Template</title>
    <meta name="description" content="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}website/assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/responsive.css" />
</head>

<body class="template-index diva template-index-diva ">
<!-- Page Loader -->
<div id="pre-loader"><img src="{{asset('/')}}website/assets/images/loader.gif" alt="Loading..." /></div>
<!-- End Page Loader -->

<!-- Page Wrapper -->
<div class="pageWrapper">
    <!-- Promotion Bar -->
    <div class="notification-bar mobilehide d-none">
        <a href="#" class="notification-bar__message">20% off your very first purchase, use promo code: diva fashion</a>
        <span class="close-announcement icon an an-times"></span>
    </div>
    <!-- End Promotion Bar -->

    <!-- Search Form Drawer -->
    <div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon an an-search"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off" />
            </form>
            <button type="button" class="search-trigger close-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"><i class="icon an an-times"></i></button>
        </div>
    </div>
    <!-- End Search Form Drawer -->

    <!-- Main Header -->
        <!-- Desktop Header -->
        <div class="header-1 classic-style">
            <!-- Top Header -->
            <div class="top-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 col-sm-8 col-md-7 col-lg-4">
                            <div class="currency picker float-start">
                                <select class="nice-select" name="currency">
                                    <option value="USD">USD</option>
                                    <option value="AUD">AUD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GBP">GBP</option>
                                    <option value="INR">INR</option>
                                    <option value="JPY">JPY</option>
                                </select>
                            </div>
                            <div class="language picker float-start">
                                <select class="nice-select" name="language">
                                    <option value="EN">English</option>
                                    <option value="AR">Arabic</option>
                                    <option value="FR">French</option>
                                    <option value="DE">German</option>
                                    <option value="JA">Japanese</option>
                                    <option value="ES">Spanish</option>
                                </select>
                            </div>
                            <p class="phone-no float-start"><i class="icon an an-phone me-1"></i><a href="tel:+4400(111)044833">+880 1732577482</a></p>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 d-none d-md-none d-lg-block">
                            <div class="text-center">
                                <p class="top-header_middle-text">FREE INTERNATIONAL SHIPPING FOR ORDERS ABOVE $100 USD</p>
                            </div>
                        </div>
                        <div class="col-2 col-sm-4 col-md-5 col-lg-4 text-end d-none d-sm-block d-md-block d-lg-block">
                            <div class="header-social">
                                <ul class="justify-content-end list--inline social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i class="icon an an-facebook"></i> <span class="icon__fallback-text">Facebook</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter"><i class="icon an an-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pinterest"><i class="icon an an-pinterest-p"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i class="icon an an-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="YouTube"><i class="icon icon an an-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header -->

            <!-- Header -->
            <div class="header-wrap d-flex btn-primary">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-8 d-block d-lg-none">
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"><i class="icon an an-times"></i><i class="icon an an-bars"></i></button>
                            <!-- Mobile Search -->
                            <div class="site-header__search d-block d-lg-none mobile-search-icon">
                                <button type="button" class="search-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"><i class="icon an an-search"></i></button>
                            </div>
                            <!-- End Mobile Search -->
                        </div>
                        <!-- Desktop Logo -->
                        <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                            <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/images/logo.png" alt="Diva Multipurpose Html Template" title="Diva Multipurpose Html Template" /></a>
                        </div>
                        <!-- End Desktop Logo -->
                        <!-- Desktop Navigation -->
                        <div class="col-2 col-sm-3 col-md-3 col-lg-8 d-none d-lg-block">
                            <!-- Desktop Menu -->
                            <nav class="grid__item" id="AccessibleNav">
                                <ul id="siteNav" class="d-flex flex-wrap site-nav medium center hidearrow">

                                    <li class="lvl1 parent dropdown">
                                        <a href="#">Layout <i class="an an-angle-down"></i></a>
                                        <ul class="dropdown">
                                            @foreach($categories as $category)
                                            <li><a href="{{route('category', ['id'=>$category->id ])}}">{{$category->name}}</a>
                                                <ul class="inner-sub-category">
                                                    @foreach($category->subCategories as $subCategory)
                                                    <li><a href="">{{$subCategory->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="lvl1 parent megamenu">
                                        <a href="#">Shop <i class="an an-angle-down"></i></a>
                                        <div class="megamenu style1">
                                            <div class="row">
                                                <div class="lvl-1 col-12 col-md-9 col-lg-9">
                                                    <ul class="row grid--uniform mmWrapper">
                                                        <li class="lvl-1 col-12 col-md-4 col-lg-4">
                                                            <a href="#" class="site-nav lvl-1">Shop Pages</a>
                                                            <ul class="subLinks">
                                                                <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                                                <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                                                <li class="lvl-2"><a href="shop-fullwidth.html" class="site-nav">No Sidebar</a></li>
                                                                <li class="lvl-2"><a href="shop-sidebar-drawer.html" class="site-nav">Sidebar Drawer</a></li>
                                                                <li class="lvl-2"><a href="shop-listview-sidebar.html" class="site-nav">Sidebar Products List</a></li>
                                                                <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav">Sidebar Products Slider</a></li>
                                                                <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav">Pagination - Infinite Scroll</a></li>
                                                                <li class="lvl-2"><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                                                                <li class="lvl-2"><a href="product-swatches-style.html" class="site-nav">Diffrent Swatches Style</a></li>
                                                                <li class="lvl-2"><a href="product-labels.html" class="site-nav">Product Labels</a></li>
                                                                <li class="lvl-2"><a href="collection-3columns.html" class="site-nav last">Collection 3 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="lvl-1 col-12 col-md-4 col-lg-4">
                                                            <a href="#" class="site-nav lvl-1">Shop Pages</a>
                                                            <ul class="subLinks">
                                                                <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav">Category Slideshow</a></li>
                                                                <li class="lvl-2"><a href="shop-grid-2.html" class="site-nav">2 Products Per Row</a></li>
                                                                <li class="lvl-2"><a href="shop-grid-3.html" class="site-nav">3 Products Per Row</a></li>
                                                                <li class="lvl-2"><a href="shop-grid-4.html" class="site-nav">4 Products Per Row</a></li>
                                                                <li class="lvl-2"><a href="shop-grid-5.html" class="site-nav">5 Products Per Row</a></li>
                                                                <li class="lvl-2"><a href="shop-grid-6.html" class="site-nav">6 Products Per Row</a></li>
                                                                <li class="lvl-2"><a href="shop-listview.html" class="site-nav">List View</a></li>
                                                                <li class="lvl-2"><a href="shop-listview-sidebar.html" class="site-nav">List View Sidebar</a></li>
                                                                <li class="lvl-2"><a href="shop-grid-3.html" class="site-nav">Pagination - Number</a></li>
                                                                <li class="lvl-2"><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                                                                <li class="lvl-2"><a href="collection-4columns.html" class="site-nav last">Collection 4 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="lvl-1 col-12 col-md-4 col-lg-4">
                                                            <a href="#" class="site-nav lvl-1 menu-title">Shop Other Page</a>
                                                            <ul class="subLinks">
                                                                <li class="lvl-2"><a href="wishlist.html" class="site-nav">My Wishlist Page Style1</a></li>
                                                                <li class="lvl-2"><a href="wishlist-style2.html" class="site-nav">My Wishlist Page Style2</a></li>
                                                                <li class="lvl-2"><a href="compare.html" class="site-nav">Compare Page Style1</a></li>
                                                                <li class="lvl-2"><a href="compare-style2.html" class="site-nav last">Compare Page Style2</a></li>
                                                                <li class="lvl-2"><a href="cart.html" class="site-nav">Cart Page Style1</a></li>
                                                                <li class="lvl-2"><a href="cart-style2.html" class="site-nav">Cart Page Style2</a></li>
                                                                <li class="lvl-2"><a href="checkout.html" class="site-nav">Checkout Page Style1</a></li>
                                                                <li class="lvl-2"><a href="checkout-style2.html" class="site-nav">Checkout Page Style2</a></li>
                                                                <li class="lvl-2"><a href="checkout-success.html" class="site-nav">Checkout Success</a></li>
                                                                <li class="lvl-2"><a href="shop-search-results.html" class="site-nav">Search Results</a></li>
                                                                <li class="lvl-2"><a href="collection-5columns.html" class="site-nav last">Collection 5 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="lvl-1 col-12 col-md-3 col-lg-3 product-menu">
                                                    <a href="#" class="site-nav lvl-1 text-center">Best Seller</a>
                                                    <div class="grid-products text-center">
                                                        <div class="product-image">
                                                            <a href="product-layout1.html" class="grid-view-item__link"><img src="{{asset('/')}}website/assets/images/megamenu/megamenu-product.jpg" alt="image" title="" /></a>
                                                        </div>
                                                        <div class="product-details text-center">
                                                            <div class="product-name">
                                                                <a href="product-layout1.html">J B Crepe multi Color Top</a>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="price">$800.00</span>
                                                            </div>
                                                            <div class="product-review mt-1">
                                                                <i class="an an-star"></i>
                                                                <i class="an an-star"></i>
                                                                <i class="an an-star"></i>
                                                                <i class="an an-star"></i>
                                                                <i class="an an-star-half-alt"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 imageCol">
                                                    <div class="row mm2-banner">
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <a href="shop-left-sidebar.html"><img src="{{asset('/')}}website/assets/images/megamenu/megamenu-bg2.jpg" alt="image" /></a>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <a href="shop-listview-sidebar.html"><img src="{{asset('/')}}website/assets/images/megamenu/megamenu-bg3.jpg" alt="image" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent megamenu">
                                        <a href="#">Features <i class="an an-angle-down"></i> <span class="navLbl">Hot</span></a>
                                        <div class="megamenu style2 megabgfull">
                                            <ul class="row mmWrapper">
                                                <li class="lvl-1 col-md-4 col-lg-4">
                                                    <a href="#" class="site-nav lvl-1 menu-title">Product Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                                                        <li class="lvl-2"><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                                                        <li class="lvl-2"><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                                                        <li class="lvl-2"><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                                                        <li class="lvl-2"><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                                                        <li class="lvl-2"><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                                                        <li class="lvl-2"><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                                                        <li class="lvl-2"><a href="product-layout8.html" class="site-nav last">Product Layout8</a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl-1 col-md-4 col-lg-4">
                                                    <a href="#" class="site-nav lvl-1 menu-title">Product Types</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-accordian.html" class="site-nav">Product Accordian</a></li>
                                                        <li class="lvl-2"><a href="product-layout3.html" class="site-nav">Product Tabs Left</a></li>
                                                        <li class="lvl-2"><a href="product-layout6.html" class="site-nav">Product Tabs Center</a></li>
                                                        <li class="lvl-2"><a href="product-standard.html" class="site-nav">Standard Product</a></li>
                                                        <li class="lvl-2"><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                                                        <li class="lvl-2"><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                                                        <li class="lvl-2"><a href="product-pre-orders.html" class="site-nav">Product Pre-orders</a></li>
                                                        <li class="lvl-2"><a href="product-call-for-price.html" class="site-nav last">Product Call for Price</a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl-1 col-md-4 col-lg-4">
                                                    <a href="#" class="site-nav lvl-1 menu-title">Product Types</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-layout6.html" class="site-nav">Products Coundown</a></li>
                                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav">New Product</a></li>
                                                        <li class="lvl-2"><a href="product-layout2.html" class="site-nav">Sale Product</a></li>
                                                        <li class="lvl-2"><a href="product-outofstock.html" class="site-nav">Out Of Stock Product</a></li>
                                                        <li class="lvl-2"><a href="product-external-affiliate.html" class="site-nav">External / Affiliate Product</a></li>
                                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav">Variable Image</a></li>
                                                        <li class="lvl-2"><a href="product-layout3.html" class="site-nav">Variable Select</a></li>
                                                        <li class="lvl-2"><a href="product-360-degree-view.html" class="site-nav last">360 Degree view</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent megamenu">
                                        <a href="#">Pages <i class="an an-angle-down"></i><span class="navLbl new">New</span></a>
                                        <div class="megamenu style2">
                                            <ul class="row mmWrapper">
                                                <li class="col-12 menuCol">
                                                    <ul class="row">
                                                        <li class="lvl-1 col">
                                                            <a href="#" class="site-nav lvl-1">My Account</a>
                                                            <ul class="subLinks">
                                                                <li><a href="login.html" class="site-nav">Login</a></li>
                                                                <li><a href="my-account.html" class="site-nav">My Account</a></li>
                                                                <li><a href="register.html" class="site-nav">Register</a></li>
                                                                <li><a href="forgot-your-password.html" class="site-nav">Forgot Password</a></li>
                                                                <li><a href="empty-cart.html" class="site-nav last">Empty cart</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="lvl-1 col">
                                                            <a href="#" class="site-nav lvl-1">About Us</a>
                                                            <ul class="subLinks">
                                                                <li><a href="about-us-style1.html" class="site-nav">About Us 01</a></li>
                                                                <li><a href="about-us-style2.html" class="site-nav">About Us 02</a></li>
                                                                <li><a href="about-us-style3.html" class="site-nav">About Us 03</a></li>
                                                                <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                                                                <li><a href="empty-category.html" class="site-nav last">Empty category</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="lvl-1 col">
                                                            <a href="#" class="site-nav lvl-1">Others Pages</a>
                                                            <ul class="subLinks">
                                                                <li><a href="contactus-style1.html" class="site-nav">Contact Us 01</a></li>
                                                                <li><a href="contactus-style2.html" class="site-nav">Contact Us 02</a></li>
                                                                <li><a href="faqs-style1.html" class="site-nav">FAQs 01</a></li>
                                                                <li><a href="faqs-style2.html" class="site-nav">FAQs 02</a></li>
                                                                <li><a href="empty-compare.html" class="site-nav last">Empty compare</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="lvl-1 col">
                                                            <a href="#" class="site-nav lvl-1">Others Pages</a>
                                                            <ul class="subLinks">
                                                                <li><a href="404.html" class="site-nav">404 Error</a></li>
                                                                <li><a href="size-guide.html" class="site-nav">Size Guide</a></li>
                                                                <li><a href="privacy-policy.html" class="site-nav">Privacy Policy</a></li>
                                                                <li><a href="brands-page.html" class="site-nav">Brands Page</a></li>
                                                                <li><a href="empty-search.html" class="site-nav last">Empty search</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="lvl-1 col">
                                                            <a href="#" class="site-nav  lvl-1">Others Pages</a>
                                                            <ul>
                                                                <li><a href="coming-soon-style1.html" class="site-nav">Coming soon 01</a></li>
                                                                <li><a href="coming-soon-style2.html" class="site-nav">Coming soon 02</a></li>
                                                                <li><a href="coming-soon-style3.html" class="site-nav">Coming soon 03</a></li>
                                                                <li><a href="coming-soon-style4.html" class="site-nav">Coming soon 04</a></li>
                                                                <li><a href="empty-wishlist.html" class="site-nav last">Empty wishlist</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="col-12 imageCol">
                                                    <a href="#"><img src="{{asset('/')}}website/assets/images/megamenu/megamenu-bg4.jpg" alt="image" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent dropdown">
                                        <a href="#">Lookbook <i class="an an-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>
                                            <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>
                                            <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>
                                            <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a></li>
                                            <li><a href="lookbook-shop.html" class="site-nav last">Lookbook Shop</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl1 parent dropdown">
                                        <a href="#">Blog <i class="an an-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                            <li><a href="blog-grid-view.html" class="site-nav">Grid View</a></li>
                                            <li><a href="blog-list-view.html" class="site-nav">List View</a></li>
                                            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                            <li><a href="blog-masonry.html" class="site-nav">Masonry</a></li>
                                            <li><a href="blog-single-post.html" class="site-nav last">Single Post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End Desktop Menu -->
                        </div>
                        <!-- End Desktop Navigation -->
                        <!-- Right Side -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                            <div class="right-action d-flex-align-center justify-content-end">
                                <!-- Search -->
                                <div class="item site-header__search d-none d-lg-block">
                                    <button type="button" class="search-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"><i class="icon an an-search"></i></button>
                                </div>
                                <!-- End Search -->
                                <!-- User Links -->
                                <div class="item user-menu-dropdown d-none d-sm-block d-md-block d-lg-block">
{{--                                    @if(Session::get('customer_id'))--}}
                                    <span class="user-menu" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Account"><i class="icon an an-user-alt"></i></span>

                                    <ul class="customer-links list-inline" style="display:none;">
                                        <li class="item"><a href="{{route('customer.dashboard')}}">Dashboard</a></li>
                                        <li class="item"><a href="{{route('customer.login')}}">Login</a></li>
                                        <li class="item"><a href="{{route('customer.register')}}">Register</a></li>
                                        <li class="item"><a href="my-account.html">Orders</a></li>
                                        <li class="item"><a href="compare.html">Compare</a></li>
                                    </ul>
{{--                                    @else--}}
{{--                                    @endif--}}
                                </div>
{{--                                <div class="item user-menu-dropdown d-none d-sm-block d-md-block d-lg-block">--}}

{{--                                        <span class="user-menu" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Account"><i class="icon an an-user-alt"></i></span>--}}

{{--                                        <ul class="customer-links list-inline" style="display:none;">--}}
{{--                                            <li class="item"><a href="">Dashboard</a></li>--}}
{{--                                            <li class="item"><a href="">Login</a></li>--}}
{{--                                            <li class="item"><a href="">Register</a></li>--}}
{{--                                            <li class="item"><a href="my-account.html">Orders</a></li>--}}
{{--                                            <li class="item"><a href="compare.html">Compare</a></li>--}}
{{--                                        </ul>--}}

{{--                                </div>--}}

                                <!-- End User Links -->
                                <!-- Wishlist -->
                                <div class="item site-header-wishlist">
                                    <a href="wishlist.html" class="wishlist-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wishlist">
                                        <i class="icon an an-heart"></i><span id="WishCount" class="site-header-wish-count">2</span>
                                    </a>
                                </div>
                                <!-- End Wishlist -->
                                <!-- Minicart -->
                                <div class="item site-cart" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cart">
                                    <a href="#" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                                        <i class="icon an an-shopping-bag"></i><span id="CartCount" class="site-header__cart-count">{{$totalCartProduct}}</span>
                                    </a>
                                </div>
                                <!-- End Minicart -->
                            </div>
                        </div>
                        <!-- End Right Side -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
        </div>
        <!-- End Desktop Header -->
    </div>
    <!-- End Main Header -->

    <!-- Mobile Menu -->
    <div class="mobile-nav-wrapper" role="navigation">
        <div class="closemobileMenu"><i class="icon an an-times-circle closemenu"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
            <li class="lvl1 parent megamenu">
                <a href="index.html">Layout <i class="an an-plus"></i></a>
                <ul>
                    <li><a href="index.html" class="site-nav">Layout 1 - Classic 01</a></li>
                    <li><a href="home2-default.html" class="site-nav">Layout 2 - Default</a></li>
                    <li><a href="home3-classic.html" class="site-nav">Layout 3 - Classic 02</a></li>
                    <li><a href="home4-fullwidth.html" class="site-nav">Layout 4 - Full Width</a></li>
                    <li><a href="home5-boxed.html" class="site-nav">Layout 5 - Boxed</a></li>
                    <li><a href="home6-parallax.html" class="site-nav">Layout 6 - Parallax  Banner</a></li>
                    <li><a href="home7-creative.html" class="site-nav">Layout 7 - Creative</a></li>
                    <li><a href="home8-simple.html" class="site-nav">Layout 8 - Simple</a></li>
                    <li><a href="home9-simple2.html" class="site-nav">Layout 9 - Simple 2</a></li>
                    <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                    <li><a href="home11-modern.html" class="site-nav">Layout 11 - Modern</a></li>
                    <li><a href="home12-category.html" class="site-nav">Layout 12 - Category</a></li>
                    <li><a href="home13-dark.html" class="site-nav">Layout 13 - Dark</a></li>
                    <li><a href="home14.html" class="site-nav last">Layout 14 <span class="lbl nm_label1">New</span></a></li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu">
                <a href="shop-left-sidebar.html">Shop <i class="an an-plus"></i></a>
                <ul>
                    <li>
                        <a href="#" class="site-nav">Shop Pages<i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="shop-fullwidth.html" class="site-nav">No Sidebar</a></li>
                            <li><a href="shop-sidebar-drawer.html" class="site-nav">Sidebar Drawer</a></li>
                            <li><a href="shop-listview-sidebar.html" class="site-nav">Sidebar Products List</a></li>
                            <li><a href="shop-left-sidebar.html" class="site-nav">Sidebar Products Slider</a></li>
                            <li><a href="shop-right-sidebar.html" class="site-nav">Pagination - Infinite Scroll</a></li>
                            <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                            <li><a href="product-swatches-style.html" class="site-nav">Diffrent Swatches Style</a></li>
                            <li><a href="product-labels.html" class="site-nav">Product Labels</a></li>
                            <li><a href="collection-3columns.html" class="site-nav last">Collection 3 Columns</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="site-nav">Shop Pages<i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="shop-right-sidebar.html" class="site-nav">Category Slideshow</a></li>
                            <li><a href="shop-grid-2.html" class="site-nav">2 Products Per Row</a></li>
                            <li><a href="shop-grid-3.html" class="site-nav">3 Products Per Row</a></li>
                            <li><a href="shop-grid-4.html" class="site-nav">4 Products Per Row</a></li>
                            <li><a href="shop-grid-5.html" class="site-nav">5 Products Per Row</a></li>
                            <li><a href="shop-grid-6.html" class="site-nav">6 Products Per Row</a></li>
                            <li><a href="shop-listview.html" class="site-nav">List View</a></li>
                            <li><a href="shop-listview-sidebar.html" class="site-nav">List View Sidebar</a></li>
                            <li><a href="shop-grid-3.html" class="site-nav">Pagination - Number</a></li>
                            <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                            <li><a href="collection-4columns.html" class="site-nav last">Collection 4 Columns</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="site-nav">Shop Other Page<i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="wishlist.html" class="site-nav">My Wishlist Page Style1</a></li>
                            <li><a href="wishlist-style2.html" class="site-nav">My Wishlist Page Style2</a></li>
                            <li><a href="compare.html" class="site-nav">Compare Page Style1</a></li>
                            <li><a href="compare-style2.html" class="site-nav last">Compare Page Style2</a></li>
                            <li><a href="cart.html" class="site-nav">Cart Page Style1</a></li>
                            <li><a href="cart-style2.html" class="site-nav">Cart Page Style2</a></li>
                            <li><a href="checkout.html" class="site-nav">Checkout Page Style1</a></li>
                            <li><a href="checkout-style2.html" class="site-nav">Checkout Page Style2</a></li>
                            <li><a href="checkout-success.html" class="site-nav">Checkout Success</a></li>
                            <li><a href="shop-search-results.html" class="site-nav">Search Results</a></li>
                            <li><a href="collection-5columns.html" class="site-nav last">Collection 5 Columns</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu">
                <a href="product-layout1.html">Features <i class="an an-plus"></i></a>
                <ul>
                    <li>
                        <a href="#" class="site-nav">Product Page<i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                            <li><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                            <li><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                            <li><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                            <li><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                            <li><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                            <li><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                            <li><a href="product-layout8.html" class="site-nav last">Product Layout8</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="site-nav">Product Types <i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="product-accordian.html" class="site-nav">Product Accordian</a></li>
                            <li><a href="product-layout3.html" class="site-nav">Product Tabs Left</a></li>
                            <li><a href="product-layout6.html" class="site-nav">Product Tabs Center</a></li>
                            <li><a href="product-standard.html" class="site-nav">Standard Product</a></li>
                            <li><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                            <li><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                            <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders</a></li>
                            <li><a href="product-call-for-price.html" class="site-nav last">Product Call for Price</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="site-nav">Product Types <i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="product-layout6.html" class="site-nav">Products Coundown</a></li>
                            <li><a href="product-layout1.html" class="site-nav">New Product</a></li>
                            <li><a href="product-layout2.html" class="site-nav">Sale Product</a></li>
                            <li><a href="product-outofstock.html" class="site-nav">Out Of Stock Product</a></li>
                            <li><a href="product-external-affiliate.html" class="site-nav">External / Affiliate Product</a></li>
                            <li><a href="product-layout1.html" class="site-nav">Variable Image</a></li>
                            <li><a href="product-layout3.html" class="site-nav">Variable Select</a></li>
                            <li><a href="product-360-degree-view.html" class="site-nav last">360 Degree view</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu">
                <a href="#">Pages <i class="an an-plus"></i></a>
                <ul>
                    <li>
                        <a href="my-account.html" class="site-nav">My Account <i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="login.html" class="site-nav">Login</a></li>
                            <li><a href="my-account.html" class="site-nav">My Account</a></li>
                            <li><a href="register.html" class="site-nav">Register</a></li>
                            <li><a href="forgot-your-password.html" class="site-nav">Forgot Password</a></li>
                            <li><a href="empty-cart.html" class="site-nav last">Empty cart</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about-us-style1.html" class="site-nav">About Us <i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="about-us-style1.html" class="site-nav">About Us 01</a></li>
                            <li><a href="about-us-style2.html" class="site-nav">About Us 02</a></li>
                            <li><a href="about-us-style3.html" class="site-nav">About Us 03</a></li>
                            <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                            <li><a href="empty-category.html" class="site-nav last">Empty category</a></li>
                        </ul>
                    </li>
                    <li class="grid__item lvl-1 col">
                        <a href="#" class="site-nav  lvl-1">Others Pages <i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="contactus-style1.html" class="site-nav">Contact Us 01</a></li>
                            <li><a href="contactus-style2.html" class="site-nav">Contact Us 02</a></li>
                            <li><a href="faqs-style1.html" class="site-nav">FAQs 01</a></li>
                            <li><a href="faqs-style2.html" class="site-nav">FAQs 02</a></li>
                            <li><a href="empty-compare.html" class="site-nav last">Empty compare</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="site-nav">Others Pages <i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="404.html" class="site-nav">404 Error</a></li>
                            <li><a href="size-guide.html" class="site-nav">Size Guide</a></li>
                            <li><a href="privacy-policy.html" class="site-nav">Privacy Policy</a></li>
                            <li><a href="brands-page.html" class="site-nav">Brands Page</a></li>
                            <li><a href="empty-search.html" class="site-nav last">Empty search</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="site-nav">Others Pages <i class="an an-plus"></i></a>
                        <ul>
                            <li><a href="coming-soon-style1.html" class="site-nav">Coming soon 01</a></li>
                            <li><a href="coming-soon-style2.html" class="site-nav">Coming soon 02</a></li>
                            <li><a href="coming-soon-style3.html" class="site-nav">Coming soon 03</a></li>
                            <li><a href="coming-soon-style4.html" class="site-nav">Coming soon 04</a></li>
                            <li><a href="empty-wishlist.html" class="site-nav last">Empty wishlist</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu">
                <a href="lookbook-2columns.html">Lookbook <i class="an an-plus"></i></a>
                <ul>
                    <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>
                    <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>
                    <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>
                    <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a></li>
                    <li><a href="lookbook-shop.html" class="site-nav last">Lookbook Shop</a></li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu">
                <a href="blog-left-sidebar.html">Blog <i class="an an-plus"></i></a>
                <ul>
                    <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                    <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                    <li><a href="blog-grid-view.html" class="site-nav">Grid View</a></li>
                    <li><a href="blog-list-view.html" class="site-nav">List View</a></li>
                    <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                    <li><a href="blog-masonry.html" class="site-nav">Masonry</a></li>
                    <li><a href="blog-single-post.html" class="site-nav last">Single Post</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- End Mobile Menu -->

    <!-- Body Content -->
    @yield('body')
    <!-- End Body Content -->

    <!-- Footer -->
    <footer id="footer">
        <div class="site-footer">
            <div class="footer-top">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Quick Links</h4>
                            <ul>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Deals</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">New In</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Help</h4>
                            <ul>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Terms And Conditions</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Returns &amp; Exchange</a></li>
                                <li><a href="#">Ordering &amp; Payment</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                            <h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                                <li>
                                    <i class="icon an an-map-marker"></i>
                                    <p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p>
                                </li>
                                <li class="phone">
                                    <i class="icon an an-phone-volume"></i>
                                    <p><a href="tel:(440)0000000000">(440) 000 000 0000</a></p>
                                </li>
                                <li class="email">
                                    <i class="icon an an-envelope"></i>
                                    <p><a href="mailto:sales@yousite.com">sales@yousite.com</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 newsletter">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <form action="#" method="post">
                                        <label class="h4">Newsletter</label>
                                        <p>sign up for newsletter to know our latest news and offers.</p>
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required />
                                            <span class="input-group__btn">
                                                        <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Sign Up</span></button>
                                                    </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer Links -->
            </div>

            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-Start align-items-center">
                            <div class="footer-social w-100 text-start d-flex align-items-center">
                                <h3 class="h4">Stay Connected</h3>
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link d-inline-block" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon an an-facebook"></i></a></li>
                                    <li><a class="social-icons__link d-inline-block" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon an an-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link d-inline-block" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon an an-pinterest-p"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link d-inline-block" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon an an-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link d-inline-block" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="YouTube"><i class="icon an an-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Footer Payment Icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-end align-items-center">
                            <ul class="payment-icons list--inline w-100 justify-content-end text-end">
                                <li><i class="icon an an-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon an an-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon an an-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon an an-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon an an-cc-discover" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <!-- End Footer Payment Icon-->
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Footer Copyright -->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 copyright text-center"><span>&copy; 2021 DIVA.</span> All Rights Reserved.</div>
                        <!-- End Footer Copyright -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scoll Top -->
    <div id="site-scroll"><i class="icon an an-angle-up"></i>
    </div>
    <!-- End Scoll Top -->
    <!-- Minicart Drawer -->
    <div class="minicart-right-drawer right modal fade" id="minicart-drawer" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="minicart-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                    <h4 class="modal-title" id="myModalLabel2">Shopping Cart <strong> <span> {{$totalCartProduct}}</span></strong> items</h4>
                </div>
                <div class="minicart-body">
                    <div class="empty-cart">
                        <p>You have no items in your shopping cart.</p>
                    </div>
                    <div id="drawer-minicart" class="block block-cart">
                        <ul class="mini-products-list">
                            @foreach($cartProducts as $cartProduct)
                            <li class="item">

                                <a class="product-image" href="cart.html"><img src="{{asset($cartProduct->attributes->image)}}" alt="Frayed Layered Sleeve" title=""></a>
                                <div class="product-details">
                                    <a href="#" class="remove" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="an an-times" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="an an-edit" aria-hidden="true"></i></a>
                                    <a class="Name" href="{{route('show-cart')}}">{{$cartProduct->name}}</a>
                                    <div class="variant-cart">Red / XL</div>
                                    <div class="wrapQtyBtn clearfix">
                                        <span class="label">Qty:</span>
                                        <div class="qtyField clearfix">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="an an-minus" aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="{{$cartProduct->quantity}}" class="product-form__input qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="an an-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="priceRow clearfix">
                                        <div class="product-price">
                                            <span class="money">TK.{{$cartProduct->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="minicart-footer minicart-action">

                    <div class="total-in">
                        <p class="label"><b>Subtotal:</b><span class="item product-price"><span class="money">TK.</span></span></p>
                        <p class="label"><b>Shipping:</b><span class="item product-price"><span class="shipping">TK.</span></span></p>
                        <p class="label"><b>Tax:</b><span class="item product-price"><span class="tax">TK.</span></span></p>
                        <p class="label"><b>Total:</b><span class="item product-price"><span class="totals">TK.</span></span></p>
                    </div>

                    <div class="buttonSet d-flex flex-row align-items-center text-center">
                        <a href="cart.html" class="btn btn-secondary w-50 me-3">View Cart</a>
                        <a href="checkout.html" class="btn btn-secondary w-50">Checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Minicart Drawer -->

    <!-- Addtocart Added Popup -->
    <div id="open-addtocart-popup" class="addtocart-popup magnific-popup mfp-hide">
        <div class="addtocart-inner text-center clearfix">
            <h4>Added to your shopping cart.</h4>
            <div class="pro-img">
                <img class="img-fluid blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/addtocart-popup.jpg" data-src="{{asset('/')}}website/assets/images/product-images/addtocart-popup.jpg" alt="image" title="image" />
            </div>
            <div class="pro-details">
                <p class="pro-name mb-0">Floral Lined Jacket</p>
                <p class="pro-cz mb-0">Gray / XL</p>
                <p class="mb-0 qty-tol">1 X $113.88</p>
                <div class="addcart-total">
                    Total: <b class="price">$113.88</b>
                </div>
                <div class="button-action">
                    <button class="btn btn-secondary continue-shopping close-popup">Continue Shopping</button>
                    <a href="cart.html" class="btn btn-primary view-cart">View Cart</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Addtocart Added Popup -->

    <!-- Quick View popup -->
    <div id="open-quickview-popup" class="quickview-popup magnific-popup mfp-hide">
        <div id="ProductSection-product-template" class="product-template__container prstyle1">
            <div class="product-singles">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="quickview-details mb-3 mb-md-0">
                            <!-- Thumbnails Single -->
                            <div class="quickview-details-img quickview-thumbnails-single">
                                <div class="item">
                                    <img src="{{asset('/')}}website/assets/images/product-images/product-quickview1.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview1.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img src="{{asset('/')}}website/assets/images/product-images/product-quickview2.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview2.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img src="{{asset('/')}}website/assets/images/product-images/product-quickview3.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview3.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img src="{{asset('/')}}website/assets/images/product-images/product-quickview4.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview4.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img src="{{asset('/')}}website/assets/images/product-images/product-quickview5.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview5.jpg" alt="image" />
                                </div>
                            </div>
                            <!-- End Thumbnails Single -->
                            <!-- Thumbnail Lists -->
                            <div class="product-thumb-lists quickview-thumbnail-items">
                                <div class="item">
                                    <img class="blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/product-quickview1.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview1.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img class="blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/product-quickview2.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview2.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img class="blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/product-quickview3.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview3.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img class="blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/product-quickview4.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview4.jpg" alt="image" />
                                </div>
                                <div class="item">
                                    <img class="blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/product-quickview5.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-quickview5.jpg" alt="image" />
                                </div>
                            </div>
                            <!-- End Thumbnail Lists -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-single__meta">
                            <h2 class="product-single__title">Product Quick View Popup</h2>
                            <div class="prInfoRow">
                                <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                            </div>
                            <p class="product-single__price product-single__price-product-template">
                                <span class="visually-hidden">Regular price</span>
                                <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                        </span>
                            </p>
                            <div class="product-single__description rte">
                                Diva is a minimalist modern shopify theme that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                            </div>
                            <form method="post" action="https://template.annimexweb.com/cart/add" id="product_form_1" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                    <div class="product-form__item">
                                        <label class="header">Size: <span class="slVariant">XS</span></label>
                                        <div data-value="XS" class="swatch-element xs available" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">
                                            <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS" />
                                            <label class="swatchLbl medium" for="swatch-1-xs">XS</label>
                                        </div>
                                        <div data-value="S" class="swatch-element s available" data-bs-toggle="tooltip" data-bs-placement="top" title="S">
                                            <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S" />
                                            <label class="swatchLbl medium" for="swatch-1-s">S</label>
                                        </div>
                                        <div data-value="M" class="swatch-element m available" data-bs-toggle="tooltip" data-bs-placement="top" title="M">
                                            <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M" />
                                            <label class="swatchLbl medium" for="swatch-1-m">M</label>
                                        </div>
                                        <div data-value="L" class="swatch-element l available" data-bs-toggle="tooltip" data-bs-placement="top" title="L">
                                            <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L" />
                                            <label class="swatchLbl medium" for="swatch-1-l">L</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                    <div class="product-form__item">
                                        <label class="header">Color: <span class="slVariant">Red</span></label>
                                        <div data-value="Red" class="swatch-element color red available" data-bs-toggle="tooltip" data-bs-placement="top" title="Red">
                                            <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red" />
                                            <label class="swatchLbl color medium" for="swatch-0-red" style="background-image:url('{{asset('/')}}website/assets/images/product-images/product-quickview1.jpg');"></label>
                                        </div>
                                        <div data-value="Blue" class="swatch-element color blue available" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue">
                                            <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue" />
                                            <label class="swatchLbl color medium" for="swatch-0-blue" style="background-image:url('{{asset('/')}}website/assets/images/product-images/product-quickview2.jpg');"></label>
                                        </div>
                                        <div data-value="Green" class="swatch-element color green available" data-bs-toggle="tooltip" data-bs-placement="top" title="Green">
                                            <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green" />
                                            <label class="swatchLbl color medium" for="swatch-0-green" style="background-image:url('{{asset('/')}}website/assets/images/product-images/product-quickview3.jpg');"></label>
                                        </div>
                                        <div data-value="Gray" class="swatch-element color gray available" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray">
                                            <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray" />
                                            <label class="swatchLbl color medium" for="swatch-0-gray" style="background-image:url('{{asset('/')}}website/assets/images/product-images/product-quickview4.jpg');"></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Minus"><i class="an an-minus" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty" />
                                                <a class="qtyBtn plus" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus"><i class="an an-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-form__item--submit">
                                        <button type="button" name="add" class="btn product-form__cart-submit">
                                            <span>Add to cart</span>
                                        </button>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><i class="icon an an-heart" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                            <div class="display-table shareRow">
                                <div class="display-table-cell">
                                    <div class="social-sharing">
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook">
                                            <i class="an an-facebook" aria-hidden="true"></i><span class="share-title align-middle" aria-hidden="true">Share</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter">
                                            <i class="an an-twitter" aria-hidden="true"></i><span class="share-title align-middle" aria-hidden="true">Tweet</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-google" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on google+">
                                            <i class="an an-google-plus-g" aria-hidden="true"></i><span class="share-title align-middle" aria-hidden="true">Google+</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest">
                                            <i class="an an-pinterest-p" aria-hidden="true"></i><span class="share-title align-middle" aria-hidden="true">Pin it</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email">
                                            <i class="an an-envelope" aria-hidden="true"></i><span class="share-title align-middle" aria-hidden="true">Email</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End-product-single-->
            </div>
        </div>
    </div>
    <!-- End Quick View Popup -->

    <!-- Wishlist Added Popup -->
    <div id="open-wishlist-popup" class="wishlist-popup magnific-popup mfp-hide">
        <div class="wishlist-inner text-center clearfix">
            <h4>Successfully added in wishlist</h4>
            <div class="pro-img">
                <img class="img-fluid blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/addwishlist-popup.jpg" data-src="{{asset('/')}}website/assets/images/product-images/addwishlist-popup.jpg" alt="image" title="image" />
            </div>
            <div class="pro-details">
                <p class="pro-name mb-2">Frayed Layered Sleeve</p>
                <div class="button-action">
                    <button class="btn btn-secondary mb-2 continue-shopping close-popup">Continue Shopping</button>
                    <a href="wishlist.html" class="btn btn-primary view-wishlist">View Wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist Added Popup -->

    <!-- Product Suggestion -->
    <div class="product-suggestion-content clearfix border-0 rounded-0 alert fade show" role="alert">
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><i class="an an-times" aria-hidden="true"></i></button>
        <div class="product-suggestion">
            <div class="suggestion-item">
                <div class="d-table suggestion-product">
                    <div class="d-table-cell align-middle">
                        <img class="img-fluid blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/product-suggestion1.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-suggestion1.jpg" width="85" alt="image" title="image" />
                    </div>
                    <div class="d-table-cell align-middle ps-3">
                        <span class="s-some d-block">Someone liked and Bought</span>
                        <a class="s-name d-block" href="product-layout1.html"><b>Fit & Flare Trim Dress</b></a>
                        <span class="s-minutes d-block">26 minutes ago</span>
                        <span class="s-form d-block">From <b>New York, USA</b></span>
                    </div>
                </div>
            </div>
            <div class="suggestion-item">
                <div class="d-table suggestion-product">
                    <div class="d-table-cell align-middle">
                        <img class="img-fluid blur-up lazyload" src="{{asset('/')}}website/assets/images/product-images/product-suggestion2.jpg" data-src="{{asset('/')}}website/assets/images/product-images/product-suggestion2.jpg" width="85" alt="image" title="image" />
                    </div>
                    <div class="d-table-cell align-middle ps-3">
                        <span class="s-some d-block">Someone liked and Bought</span>
                        <a class="s-name d-block" href="product-layout1.html"><b>Floral Lined Jacket</b></a>
                        <span class="s-minutes d-block">18 minutes ago</span>
                        <span class="s-form d-block">From <b>London</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Suggestion -->

    <!-- Newsletter Popup -->
    <div class="newsletter-wrap" id="popup-container">
        <div id="popup-window">
            <a class="btn closepopup"><i class="icon icon an an-times"></i></a>
            <!-- Modal content-->
            <div class="display-table splash-bg">
                <div class="display-table-cell width40"><img src="{{asset('/')}}website/assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /></div>
                <div class="display-table-cell width60 text-center">
                    <div class="newsletter-left">
                        <h1>Get Updates from Diva</h1>
                        <p>Be the first to know about our new arrivals, exclusive offers and the latest fashion updates.</p>
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required />
                                <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit w-100" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Sign Up</span> </button>
                                        </span>
                            </div>
                        </form>
                        <ul class="list--inline justify-content-center site-footer__social-icons social-icons">
                            <li><a class="social-icons__link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon an an-facebook" aria-hidden="true"></i></a></li>
                            <li><a class="social-icons__link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon an an-twitter" aria-hidden="true"></i></a></li>
                            <li><a class="social-icons__link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon an an-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a class="social-icons__link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon an an-instagram" aria-hidden="true"></i></a></li>
                            <li><a class="social-icons__link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="YouTube"><i class="icon an an-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS -->
    <script src="{{asset('/')}}website/assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{asset('/')}}website/assets/js/main.js"></script>
    <!-- For Newsletter Popup -->
    <script>
        jQuery(document).ready(function () {
            jQuery('.closepopup').click(function () {
                jQuery('#popup-container').fadeOut();
                jQuery('#modalOverly').fadeOut();
            });

            var visits = jQuery.cookie('visits') || 0;
            visits++;
            jQuery.cookie('visits', visits, {expires: 1, path: '/'});
            console.debug(jQuery.cookie('visits'));
            if (jQuery.cookie('visits') > 1) {
                jQuery('#modalOverly').hide();
                jQuery('#popup-container').hide();
            } else {
                var pageHeight = jQuery(document).height();
                jQuery('<div id="modalOverly"></div>').insertBefore('body');
                jQuery('#modalOverly').css("height", pageHeight);
                jQuery('#popup-container').show();
            }
            if (jQuery.cookie('noShowWelcome')) {
                jQuery('#popup-container').hide();
                jQuery('#active-popup').hide();
            }
        });

        jQuery(document).mouseup(function (e) {
            var container = jQuery('#popup-container');
            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                container.fadeOut();
                jQuery('#modalOverly').fadeIn(200);
                jQuery('#modalOverly').hide();
            }
        });
    </script>

</div>
</body>
</html>


