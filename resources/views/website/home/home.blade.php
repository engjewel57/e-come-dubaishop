@extends('website.master')
@section('body')

    <div id="page-content">
        <!-- Home Banner slider -->
        <div class="slideshow slideshow-wrapper pb-section sliderFull">
            <div class="home-slideshow">
                <div class="slide slide1 d-block">
                    <div class="slideimg blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{asset('/')}}website/assets/images/slideshow-banners/diva-banner1.jpg" src="{{asset('/')}}website/assets/images/slideshow-banners/diva-banner1.jpg" alt="Welcome to Diva New Fashion style" title="Welcome to Diva New Fashion style" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content mt-0 text-shadow center">
                                <div class="container">
                                    <div class="wrap-caption left">
                                        <p class="mega-small-title">Welcome to</p>
                                        <h2 class="h1 mega-title slideshow__title">Diva New Fashion style</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Made with love and passion</span>
                                        <a href="" class="btn btn--large">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slide2 d-block">
                    <div class="slideimg blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{asset('/')}}website/assets/images/slideshow-banners/diva-banner2.jpg" src="{{asset('/')}}website/assets/images/slideshow-banners/diva-banner2.jpg" alt="Happy Customers" title="Happy Customers" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content mt-0 center">
                                <div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">Happy Customers</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend only</span>
                                        <a href="collection-4columns.html" class="btn btn--large">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slide3 d-block">
                    <div class="slideimg blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{asset('/')}}website/assets/images/slideshow-banners/diva-banner3.jpg" src="{{asset('/')}}website/assets/images/slideshow-banners/diva-banner3.jpg" alt="Unique Styles" title="Unique Styles" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content mt-0 text-shadow center">
                                <div class="container">
                                    <div class="wrap-caption left">
                                        <h2 class="h1 mega-title slideshow__title">Unique Styles</h2>
                                        <span class="mega-subtitle slideshow__subtitle">We design and developed theme that are amazingly Unique</span>
                                        <a class="btn btn--large">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Home Banner slider -->

        <!-- Collection Tab slider -->
        <div class="tab-slider-product section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">best selling products</h2>
                            <p>Here you can set up to 8 tabs for your store collection.<br/>This will look perfect on all device.</p>
                        </div>

                        <div class="tabs-listing">
                            <ul class="tabs clearfix">
                                <li class="active" rel="women">Women</li>
                                <li rel="men">Men</li>
                                <li rel="sale">Sale</li>
                            </ul>
                            <div class="tab_container">
                                <!-- Tab 1 -->
                                <div id="women" class="tab_content grid-products grid-products-hover-btn">
                                    <div class="productSlider">
                                        @foreach($products as $product)
                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset($product->image)}}" src="{{asset($product->image)}}" alt="image" title="product" height="150" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset($product->image)}}" src="{{asset($product->image)}}" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                    <!-- Product Label -->
                                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                    <!-- End Product Label -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Countdown -->
                                                <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                                <!-- End Countdown -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <form action="{{route('add-to-card',['id'=>$product->id])}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name='qty' value="1">
                                                        <button type="submit" class="btn"><i class="lin lin-cart">Add to cart</i></button>
                                                    </form>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <span class="category">{{$product->category->name}}</span>
                                                <div class="product-name">
                                                    <a href="{{route('detail',['id'=>$product->id])}}">{{$product->name}}</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="old-price">TK.{{$product->selling_price}}</span>
                                                    <span class="price">&#2547;{{$product->selling_price }}</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-half-alt"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large radius"><img src="{{asset($product->image)}}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large radius"><img src="{{asset($product->image)}}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                    <li class="swatch large radius"><img src="{{asset($product->image)}}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                    <li class="swatch large radius"><img src="{{asset($product->image)}}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End Tab 1 -->

                                <!-- Tab 2 -->
                                <div id="men" class="tab_content grid-products grid-products-hover-btn">
                                    <div class="productSlider">
                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image6.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image6.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image6-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image6-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                    <!-- Product Label -->
                                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                    <!-- End Product Label -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Zipper Jacket</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$788.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-half-alt"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant6.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant6-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant6-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image7.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image7.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image7-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image7-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Zipper Jacket</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$748.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image8.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image8.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image8-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image8-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                    <!-- Product label -->
                                                    <div class="sold-out"><span class="lbl">Sold out</span></div>
                                                    <!-- Product label -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="Sold Out">
                                                        <form class="addtocart" action="#" method="post">
                                                            <button class="btn cartIcon btn-addto-cart soldout" type="button"><i class="icon an an-ban"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Workers Shirt Jacket</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$238.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-half-alt"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches"></ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image9.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image9.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image9-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image9-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Watercolor Sport Jacket in Brown/Blue</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$348.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-half-alt"></i>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image10.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image10.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image10-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image10-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Washed Wool Blazer</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$1,078.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches"></ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab 2 -->

                                <!-- Tab 3 -->
                                <div id="sale" class="tab_content grid-products grid-products-hover-btn">
                                    <div class="productSlider">
                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image11.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image11.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image11-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image11-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product label -->
                                                <div class="product-labels rectangular"><span class="lbl pr-label3">Best Seller</span></div>
                                                <!-- End Product label -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Azur Bracelet in Blue Azurite</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$168.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-half-alt"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant11.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant11-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant11-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant11-3.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant11-4.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image12.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image12.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image12-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image12-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Bi-Goutte Earrings</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$58.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image13.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image13.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image13-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image13-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Ashton Necklace</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$228.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant13.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant13-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant13-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image14.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image14.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image14-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image14-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Ara Ring</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$198.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star-half-alt"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant14.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant14-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant14-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant14-3.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>

                                        <div class="col-12 item">
                                            <!-- Product Image -->
                                            <div class="product-image">
                                                <!-- Product Image -->
                                                <a href="product-layout1.html">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image15.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image15.jpg" alt="image" title="product" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image15-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image15-1.jpg" alt="image" title="product" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product Button -->
                                                <div class="button-set">
                                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                    </div>
                                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                        <form class="addtocart" action="#" method="post">
                                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                    </div>
                                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Product Button -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Product Details -->
                                            <div class="product-details text-center">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Ara Ring</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$198.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                    <i class="an an-star"></i>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant14.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant14-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End Product Details -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab 3 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Collection Tab slider -->

        <!-- Custom Content -->
        <div class="section custom-content-section">
            <div class="container">
                <div class="row custom-content">
                    <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                        <div class="custom-item-inner custom-item-inner-image">
                            <img class="custom-image blur-up ls-is-cached lazyloaded" data-src="{{asset('/')}}website/assets/images/collection/cool-tshirts.jpg" src="{{asset('/')}}website/assets/images/collection/cool-tshirts.jpg" alt="Cool T-shirts Closet" title="Cool T-shirts Closet" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                        <div class="custom-item-inner custom-item-inner-text text-md-left">
                            <h2 class="h3">Cool T-shirts Closet</h2>
                            <p>It’s time for a SS18 wardrobe update! We’ve got the<br> latest arrivals and all the hottest trends.<br> Shop our newest clothing, footwear &amp; accessories.</p>
                            <a href="collection-3columns.html" class="btn border-btn-2">Discover More</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                        <div class="custom-item-inner custom-item-inner-text text-md-left">
                            <h2 class="h3">All Fresh Picks</h2>
                            <p>Discover your new SS18 wardrobe favourites from<br> our latest collection of clothing, footwear &amp; accessories. <br>Treat yourself to some new staple pieces to see you through<br> the new season and beyond.</p>
                            <a href="collection-4columns.html" class="btn border-btn-2">Find Blouses Here</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                        <div class="custom-item-inner custom-item-inner-image">
                            <img class="custom-image blur-up ls-is-cached lazyloaded" data-src="{{asset('/')}}website/assets/images/collection/fresh-picks.jpg" src="{{asset('/')}}website/assets/images/collection/fresh-picks.jpg" alt="All Fresh Picks" title="All Fresh Picks" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Custom Content -->

        <!-- Collection Box slider -->
        <div class="collection-box section">
            <div class="container-fluid">
                <div class="collection-grid-4item">
                    <div class="collection-grid-item">
                        <img data-src="{{asset('/')}}website/assets/images/collection/shoes.jpg" src="{{asset('/')}}website/assets/images/collection/shoes.jpg" alt="Shoes" class="blur-up lazyload" />
                        <a href="collection-3columns.html" class="collection-grid-item__title-wrapper">
                            <div class="title-wrapper">
                                <h3 class="collection-grid-item__title">Shoes</h3>
                                <span class="btn btn--secondary border-btn-1">Shop Shoes</span>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <img data-src="{{asset('/')}}website/assets/images/collection/sunglasses.jpg" src="{{asset('/')}}website/assets/images/collection/sunglasses.jpg" alt="sunglasses" class="blur-up lazyload" />
                        <a href="collection-3columns.html" class="collection-grid-item__title-wrapper">
                            <div class="title-wrapper">
                                <h3 class="collection-grid-item__title">Sunglasses</h3>
                                <span class="btn btn--secondary border-btn-1">View Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <img data-src="{{asset('/')}}website/assets/images/collection/bags-accessories.jpg" src="{{asset('/')}}website/assets/images/collection/bags-accessories.jpg" alt="Shop Accessories" class="blur-up lazyload" />
                        <a href="collection-3columns.html" class="collection-grid-item__title-wrapper">
                            <div class="title-wrapper">
                                <h3 class="collection-grid-item__title">Bags & Accessories</h3>
                                <span class="btn btn--secondary border-btn-1">Shop Accessories</span>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <img data-src="{{asset('/')}}website/assets/images/collection/women-dress.jpg" src="{{asset('/')}}website/assets/images/collection/women-dress.jpg" alt="Women Dress" class="blur-up lazyload" />
                        <a href="collection-3columns.html" class="collection-grid-item__title-wrapper">
                            <div class="title-wrapper">
                                <h3 class="collection-grid-item__title">Women Dress</h3>
                                <span class="btn btn--secondary border-btn-1">Shop Dresses</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Collection Box slider -->

        <!-- Featured Product -->
        <div class="product-rows section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Diva's Picks</h2>
                            <p>Shop Diva's favourite pieces from the Spring Summer '18 collections</p>
                        </div>
                    </div>
                </div>
                <div class="grid-products grid-products-hover-btn">
                    <div class="productSlider-style1">
                        <div class="col-12 item">
                            <!-- Product Image -->
                            <div class="product-image">
                                <!-- Product Image -->
                                <a href="product-layout1.html">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image16.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image16.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image16-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image16-1.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->
                                <!-- countdown -->
                                <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                <!-- countdown End -->
                                <!-- Product Button -->
                                <div class="button-set">
                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                    </div>
                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                        </form>
                                    </div>
                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                    </div>
                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!-- End Product Image -->
                            <!-- Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Square Cardigan Casual Top</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="old-price">$800.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star-half-alt"></i>
                                </div>
                                <!-- End Product Review -->
                                <!-- Variant -->
                                <ul class="swatches">
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant16.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant16-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant16-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant16-3.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End Product Details -->
                        </div>

                        <div class="col-12 item">
                            <!-- Product Image -->
                            <div class="product-image">
                                <!-- Product Image -->
                                <a href="product-layout1.html">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image17.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image17.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image17-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image17-1.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">Exclusive</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product Button -->
                                <div class="button-set">
                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                    </div>
                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                        </form>
                                    </div>
                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                    </div>
                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!-- End Product Image -->
                            <!-- Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Fit & Flare Trim Dress</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price">$30.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                </div>
                                <!-- End Product Review -->
                                <!-- Variant -->
                                <ul class="swatches">
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant17.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant17-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant17-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant17-3.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End Product Details -->
                        </div>

                        <div class="col-12 item">
                            <!-- Product Image -->
                            <div class="product-image">
                                <!-- Product Image -->
                                <a href="product-layout1.html">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image18.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image18.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image18-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image18-1.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product Button -->
                                <div class="button-set">
                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                    </div>
                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                        </form>
                                    </div>
                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                    </div>
                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!-- End Product Image -->
                            <!-- Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Pau Jacket in all colors</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star-half-alt"></i>
                                </div>
                                <!-- End Product Review -->
                                <!-- Variant -->
                                <ul class="swatches">
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End Product Details -->
                        </div>

                        <div class="col-12 item">
                            <!-- Product Image -->
                            <div class="product-image">
                                <!-- Product Image -->
                                <a href="product-layout1.html">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image19.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image19.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image19-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image19-1.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product Button -->
                                <div class="button-set">
                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                    </div>
                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                        </form>
                                    </div>
                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                    </div>
                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!-- End Product Image -->
                            <!-- Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Frayed Layered Sleeve Top</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="old-price">$160.00</span>
                                    <span class="price">$146.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star-half-alt"></i>
                                </div>
                                <!-- End Product Review -->
                                <!-- Variant -->
                                <ul class="swatches">
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End Product Details -->
                        </div>

                        <div class="col-12 item">
                            <!-- Product Image -->
                            <div class="product-image">
                                <!-- Product Image -->
                                <a href="product-layout1.html">
                                    <!-- Image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image20.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image20.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image20-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image20-1.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product Button -->
                                <div class="button-set">
                                    <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                        <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                    </div>
                                    <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                        <form class="addtocart" action="#" method="post">
                                            <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                        </form>
                                    </div>
                                    <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                        <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                    </div>
                                    <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                        <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!-- End Product Image -->
                            <!-- Product Details -->
                            <div class="product-details text-center">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Paper Dress</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                    <i class="an an-star"></i>
                                </div>
                                <!-- End Product Review -->
                                <!-- Variant -->
                                <ul class="swatches">
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End Product Details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Featured Product -->

        <!-- Latest Blog -->
        <div class="latest-blog section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Fresh From our blog</h2>
                            <p>If you like shopify you are going to love this amazing theme.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Item-->
                    <div class="blog-item col-12 col-sm-6 col-md-4 col-lg-4 text-start">
                        <a href="blog-single-post.html" class="article__grid-image">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}website/assets/images/blog/post-img1.jpg" src="{{asset('/')}}website/assets/images/blog/post-img1.jpg" alt="blog image" />
                        </a>
                        <div class="wrap-blog-inner">
                            <h3 class="h5 article__title"><a href="#">It's all about how you wear</a></h3>
                            <span class="article__date">
                                        <time datetime="2018-02-12T09:22:00Z">February 12, 2018</time>
                                    </span>
                            <div class="rte-setting">
                                <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou ...</p>
                            </div>
                            <a href="blog-single-post.html" class="btn btn--small border-btn-2">Read More</a>
                            <a href="blog-single-post.html" class="btn border-btn-2 btn--small btn--link">1 comment</a>
                        </div>
                    </div>
                    <!--End Item-->

                    <!-- Item-->
                    <div class="blog-item col-12 col-sm-6 col-md-4 col-lg-4 text-start">
                        <a href="blog-single-post.html" class="article__grid-image">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}website/assets/images/blog/post-img2.jpg" src="{{asset('/')}}website/assets/images/blog/post-img2.jpg" alt="blog image" />
                        </a>
                        <div class="wrap-blog-inner">
                            <h3 class="h5 article__title"><a href="#">27 Days of Spring Fashion Recap</a></h3>
                            <span class="article__date">
                                        <time datetime="2018-02-12T09:22:00Z">February 12, 2018</time>
                                    </span>
                            <div class="rte-setting">
                                <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la m...</p>
                            </div>
                            <a href="blog-single-post.html" class="btn btn--small border-btn-2">Read More</a>
                        </div>
                    </div>
                    <!--End Item-->

                    <!-- Item-->
                    <div class="blog-item col-12 col-sm-6 col-md-4 col-lg-4 text-start">
                        <a href="blog-single-post.html" class="article__grid-image">
                            <img class="blur-up lazyload" data-src="{{asset('/')}}website/assets/images/blog/post-img3.jpg" src="{{asset('/')}}website/assets/images/blog/post-img2.jpg" alt="blog image" />
                        </a>
                        <div class="wrap-blog-inner">
                            <h3 class="h5 article__title"><a href="#">Great stores. Great choices.</a></h3>
                            <span class="article__date">
                                        <time datetime="2018-02-12T09:22:00Z">February 12, 2018</time>
                                    </span>
                            <div class="rte-setting">
                                <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la m...</p>
                            </div>
                            <a href="blog-single-post.html" class="btn btn--small border-btn-2">Read More</a>
                        </div>
                    </div>
                    <!--End Item-->
                </div>
            </div>
        </div>
        <!-- End Latest Blog -->

        <!-- Store Feature -->
        <div class="store-feature section no-pb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="display-table store-info">
                            <li class="display-table-cell">
                                <i class="icon an an-truck"></i>
                                <div class="store-info-text">
                                    <h5>Free Worldwide Shipping</h5>
                                    <span class="sub-text">Free shipping on all US orders</span>
                                </div>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon an an-money-bill-alt"></i>
                                <div class="store-info-text">
                                    <h5>Money Guarantee</h5>
                                    <span class="sub-text">30 days money back guarantee</span>
                                </div>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon an an-question-circle"></i>
                                <div class="store-info-text">
                                    <h5>Top Notch Support</h5>
                                    <span class="sub-text">We support online 24/7 on day</span>
                                </div>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon an an-lock"></i>
                                <div class="store-info-text">
                                    <h5>Secure Payments</h5>
                                    <span class="sub-text">All payment are Secured and trusted.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Store Feature -->
    </div>
@endsection
