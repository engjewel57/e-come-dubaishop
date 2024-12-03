@extends('website.master')
@section('body')
    <div id="page-content">
        <!-- Bredcrumbs -->
        <div class="bredcrumbWrap bredcrumb-style2">
            <div class="container breadcrumbs">
                <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">|</span><span class="title-bold">Product Accordion</span>
            </div>
        </div>
        <!-- End Bredcrumbs -->

        <div class="container">
            <!-- Main Content -->
            <div id="ProductSection-product-template" class="product-template__container prstyle2">
                <!-- #ProductSection product template -->
                <div class="product-single product-single-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-sticky-style">
                                <div class="product-details-img product-single__photos bottom">
                                    <!-- Product Images -->
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" data-zoom-image="{{asset($product->subImages[0]->image)}}" alt="" src="{{asset($product->subImages[0]->image)}}" />
                                        </div>
                                        <div class="product-labels"><span class="lbl pr-label2">Best Seller</span></div>
                                        <div class="product-buttons">
                                            <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" data-bs-toggle="tooltip" data-bs-placement="left" title="Watch Video"><i class="icon an an-play" aria-hidden="true"></i></a>
                                            <a href="#" class="btn prlightbox" data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom Image"><i class="icon an an-expand-arrows-alt" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-thumb product-thumb-1">
                                        @if(count($product->subImages)>0)
                                        <div id="gallery" class="product-dec-slider-1 product-tab-left">
                                            @foreach($product->subImages as $key=> $subImage)
                                            <a data-image="{{asset($subImage->image)}}" @if($key== 0) data-zoom-image="{{asset($subImage->image)}}"  @endif height="80" class="slick-slide slick-cloned active" data-slick-index="-4" aria-hidden="true" tabindex="-1" >
                                                <img class="blur-up lazyload"  src="{{asset($subImage->image)}}" alt="" height="80" />
                                            </a>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                    <div class="lightboximages">
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-1.jpg" data-size="1462x2048"></a>
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-2.jpg" data-size="1462x2048"></a>
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-3.jpg" data-size="1462x2048"></a>
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-4.jpg" data-size="1462x2048"></a>
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-5.jpg" data-size="1462x2048"></a>
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-6.jpg" data-size="1462x2048"></a>
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-7.jpg" data-size="731x1024"></a>
                                        <a href="{{asset('/')}}website/assets/images/product-detail-page/men-1-8.jpg" data-size="731x1024"></a>
                                    </div>
                                    <!-- End Product Images -->
                                    <!-- Wishlist - Share -->
                                    <div class="display-table shareRow pt-3 pb-0 d-table">
                                        <div class="display-table-cell text-center align-top">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook">
                                                    <i class="icon an an-facebook" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Facebook</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter">
                                                    <i class="icon an an-twitter" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-google" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on google+">
                                                    <i class="icon an an-google-plus" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest">
                                                    <i class="icon an an-pinterest-p" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email">
                                                    <i class="icon an an-envelope" aria-hidden="true"></i><span class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Wishlist - Share -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- Product Info -->
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{$product->name}}</h1>
                                <div class="product-nav clearfix">

                                    <a href="product-layout2.html" class="next" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><i class="rte icon an an-angle-right"></i></a>
                                    <a href="product-layout1.html" class="prev" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous" ><i class="rte icon an an-angle-left"></i></a>

                                </div>
                                <p  class="category">
                                    <i class="lin line-tag"></i>Product Category:
                                    <a href="">{{$product->category->name}}</a>
                                </p>
                                <p  class="category">
                                    <i class="lin line-tag"></i>Product Brand;
                                    <a href="">{{$product->brand->name}}</a>
                                </p>
                                <!-- Product Info -->
                                <div class="prInfoRow">
                                    <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                    <div class="product-review">
                                        <a class="reviewLink d-flex flex-wrap align-items-center" href="#tab2">
                                            <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i>
                                            <i class="an an-star-half-alt"></i>

                                            <span class="spr-badge-caption">6 reviews</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Product Info -->
                                <!-- Product Price -->
                                <div class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">TK.{{$product->selling_price}}</span></s>
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">&#2547;{{$product->regular_price}}</span></span>
                                            </span>
                                    <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                                <span>You Save</span>
                                                <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                    <span class="money">$100.00</span>
                                                </span>
                                                <span class="off">(<span>16</span>%)</span>
                                            </span>
                                </div>

                                <!-- End Product Quantity -->
                                <!-- Product Description -->
                                <div class="product-single__description rte">
                                    <p class="mb-2">{{$product->short_description}}</p>
                                </div>
                                <!-- End Product Description -->

                                <!-- Form -->
                                <form action="{{route('add-to-card',['id'=>$product->id])}}"  method="post" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Size Swatch -->
                                    <div class="swatch clearfix swatch-1 option2 w-100" data-option-index="1">
                                        <div class="product-form__item">
                                            <label>Size: <span class="slVariant">XL</span><a href="#sizechart" class="sizelink">Size Guide <i class="icon an an-question"></i></a></label>
                                            <div data-value="XL" class="swatch-element xl available">
                                                <input class="swatchInput" id="swatch-1-xl-1" type="radio" name="option-1" value="XL">
                                                <label class="swatchLbl medium" for="swatch-1-xl-1" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</label>
                                            </div>
                                            <div data-value="L" class="swatch-element l available">
                                                <input class="swatchInput" id="swatch-1-l-1" type="radio" name="option-1" value="L">
                                                <label class="swatchLbl medium" for="swatch-1-l-1" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</label>
                                            </div>
                                            <div data-value="M" class="swatch-element m available">
                                                <input class="swatchInput" id="swatch-1-m-1" type="radio" name="option-1" value="M">
                                                <label class="swatchLbl medium" for="swatch-1-m-1" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</label>
                                            </div>
                                            <div data-value="S" class="swatch-element s available">
                                                <input class="swatchInput" id="swatch-1-s-1" type="radio" name="option-1" value="S">
                                                <label class="swatchLbl medium" for="swatch-1-s-1" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</label>
                                            </div>
                                            <div data-value="XS" class="swatch-element xs available">
                                                <input class="swatchInput" id="swatch-1-xs-1" type="radio" name="option-1" value="XS">
                                                <label class="swatchLbl medium" for="swatch-1-xs-1" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Size Swatch -->
                                    <!-- Image Swatch -->

                                    <div class="swatch clearfix swatch-0 option1 w-100" data-option-index="0">
                                        <div class="product-form__item">
                                            <label class="header">Color: <span class="slVariant">Red</span></label>
                                            <div data-value="Black" class="swatch-element color black available">
                                                <input class="swatchInput" id="swatch-0-black1" type="radio" name="option-0" value="Black"><label class="swatchLbl color small" for="swatch-0-black1" style="background-color:black;" data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></label>
                                            </div>
                                            <div data-value="Maroon" class="swatch-element color maroon available">
                                                <input class="swatchInput" id="swatch-0-maroon1" type="radio" name="option-0" value="Maroon"><label class="swatchLbl color small" for="swatch-0-maroon1" style="background-color:maroon;" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon"></label>
                                            </div>
                                            <div data-value="Blue" class="swatch-element color blue available">
                                                <input class="swatchInput" id="swatch-0-blue1" type="radio" name="option-0" value="Blue"><label class="swatchLbl color small" for="swatch-0-blue1" style="background-color:blue;" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></label>
                                            </div>
                                            <div data-value="Dark Green" class="swatch-element color dark-green available">
                                                <input class="swatchInput" id="swatch-0-dark-green1" type="radio" name="option-0" value="Dark Green"><label class="swatchLbl color small" for="swatch-0-dark-green1" style="background-color:darkgreen;" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Green"></label>
                                            </div>
                                            <div data-value="aqua" class="swatch-element color aqua available">
                                                <input class="swatchInput" id="swatch-0-aqua1" type="radio" name="option-0" value="aqua"><label class="swatchLbl color small flat" for="swatch-0-aqua1" style="background-color:aqua;" data-bs-toggle="tooltip" data-bs-placement="top" title="aqua"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Image Swatch -->
                                    <!-- Product Action -->
{{--                                    <div class="col-lg-8 col-md-8 col-12 product-form__item--quantity">--}}
{{--                                        <div class="wrapQtyBtn">--}}
{{--                                            <div class="qtyField">--}}
{{--                                                <label for="color">Quantity</label>--}}
{{--                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus" aria-hidden="true"></i></a>--}}
{{--                                                <input type="text" name="quantity" value="1" class="product-form__input qty" />--}}
{{--                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus" aria-hidden="true"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


                                    <div class="col-lg-8 col-md-8 col-12">
                                        <div class="form-group quantity">
                                            <label for="color">Quantity</label>
                                            <input type="number" name="qty" class="form-control" value="1" min="1"/>
                                        </div>

                                    </div>
                                    <div class="product-action clearfix">

                                        <div class="product-form__item--submit">
                                            <button type="submit" name="add" class="btn product-form__cart-submit"><span>Add to cart</span></button>
                                        </div>
                                        <div class="payment-button" data-shopify="payment-button">
                                            <button type="submit" class="payment-button__button payment-button__button--unbranded">Buy it now</button>
                                        </div>
                                    </div>

                                    <!-- End Product Action -->
                                    <!-- Wishlist - Compare -->
                                    <div class="infolinks d-flex flex-wrap align-items-center mb-2">
                                        <a class="wishlist add-to-wishlist d-flex align-items-center" href="wishlist.html"><i class="icon an an-heart me-1" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        <a class="wishlist add-to-wishlist d-flex align-items-center" href="compare-style1.html"><i class="icon an an-sync me-1" aria-hidden="true"></i> <span>Add to Compare</span></a>
                                        <a class="wishlist emaillink d-flex align-items-center" href="#productInquiry"><i class="icon an an-envelope me-1" style="margin-top:-1px;"></i> <span>Enquiry</span></a>
                                    </div>
                                    <!-- End Wishlist - Compare -->
                                </form>

                            </div>
                            <!-- End Product Info -->

                            <!-- Product Tabs -->
                            <div class="tabs-listing tab-details product-tabs-bg mt-0 mt-md-4">
                                <!-- Tabs Container -->
                                <div class="tab-container py-0 my-0">
                                    <!-- Tabs Content One -->
                                    <h3 class="acor-ttl active" rel="tab1">Product Details</h3>
                                   {!! $product->long_description !!}
                                    <div id="tab1" class="tab-content py-3" style="display:block;">

                                    </div>
                                    <!-- End Tabs Content One -->
                                    <!-- Tabs Content Two -->
                                    <h3 class="acor-ttl" rel="tab2">Product Reviews</h3>
                                    <div id="tab2" class="tab-content py-3">
                                        <div id="shopify-product-reviews">
                                            <div class="spr-container">
                                                <div class="spr-header clearfix">
                                                    <div class="spr-summary text-center d-flex justify-content-start justify-content-sm-between flex-column flex-sm-row">
                                                        <span class="product-review justify-content-center"><a class="reviewLink"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-half-alt"></i></a><span class="spr-summary-actions-togglereviews ms-2">Based on 6 reviews 456</span></span>
                                                        <span class="spr-summary-actions mt-3 mt-sm-0">
                                                                    <a href="#" class="spr-summary-actions-newreview write-review-btn btn"><i class="an-1x an an-pencil-alt me-1"></i> Write a review</a>
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="spr-content">
                                                    <div class="product-review-form spr-form clearfix" style="display:none;">
                                                        <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                            <h3 class="spr-form-title">Write a review</h3>
                                                            <fieldset class="spr-form-contact">
                                                                <div class="spr-form-contact-name">
                                                                    <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                                    <input class="spr-form-input spr-form-input-text" id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                                </div>
                                                                <div class="spr-form-contact-email">
                                                                    <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                                    <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-review">
                                                                <div class="spr-form-review-rating">
                                                                    <label class="spr-form-label">Rating</label>
                                                                    <div class="spr-form-input spr-starrating">
                                                                        <div class="product-review justify-content-start">
                                                                            <a class="reviewLink" href="#"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-half-alt"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="spr-form-review-title">
                                                                    <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                                    <input class="spr-form-input spr-form-input-text" id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                                </div>
                                                                <div class="spr-form-review-body">
                                                                    <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                    <div class="spr-form-input">
                                                                        <textarea class="spr-form-input spr-form-input-textarea" id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="5" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-actions">
                                                                <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    <div class="spr-reviews">
                                                        <div class="spr-review">
                                                            <div class="spr-review-header">
                                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i></span></span>
                                                                <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                                <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                                            </div>
                                                            <div class="spr-review-content">
                                                                <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            </div>
                                                        </div>
                                                        <div class="spr-review">
                                                            <div class="spr-review-header">
                                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i class="an an-star-half-alt"></i></span></span>
                                                                <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                                <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                                            </div>
                                                            <div class="spr-review-content">
                                                                <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tabs Content Two -->
                                    <!-- Tabs Content Three -->
                                    <h3 class="acor-ttl" rel="tab3">Size Chart</h3>
                                    <div id="tab3" class="tab-content py-3">
                                        <div class="product-description rte">
                                            <h4>WOMEN'S BODY SIZING CHART</h4>
                                            <div class="table-responsive">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>XS</th>
                                                        <th>S</th>
                                                        <th>M</th>
                                                        <th>L</th>
                                                        <th>XL</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Chest</td>
                                                        <td>31" - 33"</td>
                                                        <td>33" - 35"</td>
                                                        <td>35" - 37"</td>
                                                        <td>37" - 39"</td>
                                                        <td>39" - 42"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waist</td>
                                                        <td>24" - 26"</td>
                                                        <td>26" - 28"</td>
                                                        <td>28" - 30"</td>
                                                        <td>30" - 32"</td>
                                                        <td>32" - 35"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hip</td>
                                                        <td>34" - 36"</td>
                                                        <td>36" - 38"</td>
                                                        <td>38" - 40"</td>
                                                        <td>40" - 42"</td>
                                                        <td>42" - 44"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Regular inseam</td>
                                                        <td>30"</td>
                                                        <td>30½"</td>
                                                        <td>31"</td>
                                                        <td>31½"</td>
                                                        <td>32"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Long (Tall) Inseam</td>
                                                        <td>31½"</td>
                                                        <td>32"</td>
                                                        <td>32½"</td>
                                                        <td>33"</td>
                                                        <td>33½"</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h4 class="mt-0 pt-1">MEN'S BODY SIZING CHART</h4>
                                            <div class="table-responsive">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>XS</th>
                                                        <th>S</th>
                                                        <th>M</th>
                                                        <th>L</th>
                                                        <th>XL</th>
                                                        <th>XXL</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Chest</td>
                                                        <td>33" - 36"</td>
                                                        <td>36" - 39"</td>
                                                        <td>39" - 41"</td>
                                                        <td>41" - 43"</td>
                                                        <td>43" - 46"</td>
                                                        <td>46" - 49"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waist</td>
                                                        <td>27" - 30"</td>
                                                        <td>30" - 33"</td>
                                                        <td>33" - 35"</td>
                                                        <td>36" - 38"</td>
                                                        <td>38" - 42"</td>
                                                        <td>42" - 45"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hip</td>
                                                        <td>33" - 36"</td>
                                                        <td>36" - 39"</td>
                                                        <td>39" - 41"</td>
                                                        <td>41" - 43"</td>
                                                        <td>43" - 46"</td>
                                                        <td>46" - 49"</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-center mt-3">
                                                <img src="{{asset('/')}}website/assets/images/size.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tabs Content Three -->
                                    <!-- Tabs Content Four -->
                                    <h3 class="acor-ttl" rel="tab4">Shipping &amp; Returns</h3>
                                    <div id="tab4" class="tab-content py-3">
                                        <h4>Returns Policy</h4>
                                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                                        <h4>Shipping</h4>
                                        <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                                    </div>
                                    <!-- End Tabs Content Four -->
                                </div>
                                <!-- End Tabs Container -->
                            </div>
                            <!-- End Product Tabs -->
                        </div>
                    </div>
                    <!-- End Product single -->

                    <!-- Related Product Slider -->
                    <div class="related-product grid-products">
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                            <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                        </header>
                        <div class="productPageSlider">
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image1.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image1-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image1-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                        <!-- Product Label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">Exclusive</span></div>
                                        <!-- End Product Label -->
                                    </a>
                                    <!-- End Product Image -->

                                    <!-- Countdown -->
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!-- End Countdown -->

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
                                        <a href="product-layout1.html">Edna Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
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
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End Product Details -->
                                <!-- Countdown -->
                                <div class="timermobile"><div class="saleTime desktop" data-countdown="2022/03/01"></div></div>
                                <!-- End Countdown -->
                            </div>
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image2.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image2.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image2-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image2-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                        <!-- Product Label -->
                                        <div class="product-labels rectangular"><span class="lbl pr-label1">New</span></div>
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
                                    <!-- End product button -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Elastic Waist Dress</a>
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
                                    <!-- Variant -->
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
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image3.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image4.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image3-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image4-1.jpg" alt="image" title="product" />
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
                                    <!-- End product button -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">3/4 Sleeve Kimono Dress</a>
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
                                        <i class="an an-star-half-alt"></i>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant3.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant3-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant3-3.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant3-4.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
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
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image4.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image4.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image4-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image4-1.jpg" alt="image" title="product" />
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
                                    <!-- End product button -->
                                </div>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Cape Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="old-price">$900.00</span>
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
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image5.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image5.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image5-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image5-1.jpg" alt="image" title="product" />
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
                                    <!-- End product button -->
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
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant5.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant5-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                        <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant5-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
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
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image6.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image6.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image6-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image6-1.jpg" alt="image" title="product" />
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
                                    <!-- End product button -->
                                </div>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Buttercup Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$420.00</span>
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
                                <!-- Variant -->
                                <ul class="swatches">
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant6.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant6-1.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                    <li class="swatch large radius"><img src="{{asset('/')}}website/assets/images/product-images/variant6-2.jpg" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                </ul>
                                <!-- End Variant -->
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
                                    <!-- End product button -->
                                </div>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Lima Shirt</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$698.00</span>
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
                    <!-- End Related Product Slider -->

                    <!-- Recently Product Slider -->
                    <div class="related-product recently-product grid-products">
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                            <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                        </header>
                        <div class="productPageSlider">
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image8.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image8.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image8-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image8-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Romary Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$348.60</span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image9.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image9.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image9-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image9-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                        <!-- Product Label -->
                                        <div class="product-labels"><span class="lbl pr-label3">Popular</span></div>
                                        <!-- End Product Label -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Floral Sleeveless Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$380.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image10.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image10.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image10-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image10-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Button Up Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$400.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image11.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image11.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image11-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image11-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Lexie Shirt</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$200.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image12.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image12.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image12-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image12-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">One Shoulder Dress in Navy</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$1,048.60</span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image13.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image13.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image13-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image13-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Triangle Sleeveless Dress in Multi</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$684.60</span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="product-layout1.html">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image14.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image14.jpg" alt="image" title="product" />
                                        <!-- End Image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{asset('/')}}website/assets/images/product-images/product-image14-1.jpg" src="{{asset('/')}}website/assets/images/product-images/product-image14-1.jpg" alt="image" title="product" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->
                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">ACB Top</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$280.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                    <!-- End Recently Product Slider -->
                </div>
                <!-- #ProductSection product template -->
            </div>
            <!-- End Main Content -->
        </div>

@endsection
