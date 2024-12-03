@extends('website.master')
@section('body')
    <div class="container">
    <div id="page-content">
        <!-- Page Title -->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-title">Cart Page Style1</h1></div>
            </div>
        </div>
        <div>
        <!-- End Page Title -->

        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="wrapper alert alert-dismissible"><h1 class="page-title text-center"></h1></div>
                    <h3 class="text-content text-success">{{Session::get('message')}}</h3>
                    <div class="alert alert-success text-uppercase" role="alert">
                        <i class="icon an an-truck icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
                    </div>
                    <form action="#" method="post" class="cart style2">
                        <table>
                            <thead class="cart__row cart__header">
                            <tr>
                                <th colspan="2" class="text-center">Product</th>
                                <th class="text-center">Price(TK)</th>
                                 <th class="text-center">Quantity</th>
                                <th class="text-center">Total(TK)</th>
                                <th class="action">&nbsp;</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php($sum=0)
                            @foreach($products as $product)
                            <tr class="cart__row border-bottom line1 cart-flex border-top">
                                <td class="cart__image-wrapper cart-flex-item">
                                    <a href="product-layout1.html"><img class="cart__image blur-up lazyload" src="{{asset($product->attributes->image)}}"  alt="Elastic Waist Dress - Navy / Small" /></a>
                                </td>
                                <td class="cart__meta small--text-left cart-flex-item">
                                    <div class="list-view-item__title">
                                        <a href="product-layout1.html">{{$product->name}} </a>
                                    </div>
                                    <div class="cart__meta-text">
                                        Color: Navy<br>Size: Small<br>
                                    </div>
                                </td>
                                <td class="cart__price-wrapper cart-flex-item text-center">
                                    <span class="money">TK.{{$product->price}}</span>
                                </td>
                                <td class="cart__update-wrapper cart-flex-item text-center">
                                    <form action="{{route('product.update-cart',['id'=>$product->id])}}" method="post">
                                        @csrf
                                    <div class="cart__qty text-center">

                                        <div class="input-group mb-3">
                                            <input type="number" name="qty" value="{{$product->quantity}}" min="1"/>
                                            <button class="btn btn-outline-secondary" type="submit" >Update</button>
                                        </div>
                                    </div>
                                    </form>
                                </td>
                                <td class="small--hide cart-price text-center">
                                    <span class="money">{{$product->quantity*$product->price}}</span>
                                </td>
                                <td class="text-center small--hide"><a onclick="return confirm('Are You sure to remove')" href="{{route('remove-cart-product',['id'=>$product->id])}}" methods="post" class="btn btn--secondary cart__remove" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove item"><i class="icon an an-times"></i></a></td>
                            </tr>
                                @php($sum= $sum + ($product->quantity*$product->price))
                            @endforeach

                            </tbody>

                        </table>
                    </form>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 cart-col">
                            <h5>Discount Codes</h5>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <input type="text" name="coupon" />
                                </div>
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Apply Coupon" /></div>
                                </div>
                            </form>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart__footer">
                            <div class="solid-border">
                                <div class="row border-bottom pb-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                    <span class="col-12 col-sm-6 text-right"><span class="money">TK.{{ number_format($sum)}}</span></span>
                                </div>
                                <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Text Amount (15%)</span>
                                    @php($tax = round(($sum*15)/100))
                                    <span class="col-12 col-sm-6 text-right">{{$tax}}</span>
                                </div>
                                <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                                    @php($shipping=500)
                                    <span class="col-12 col-sm-6 text-right"> {{$shipping}}</span>
                                </div>
                                <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total(TK.)</strong></span>
                                    @php($grandTotal = $sum + $tax + $shipping)
                                    <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">{{number_format($grandTotal)}}</span></span>
                                </div>
                            <?php
                            Session::put('order_total',$grandTotal);
                            Session::put('tax_total',$tax);
                            Session::put('shipping_total',$shipping);
                            ?>
                                <a href="{{route('checkout')}}" type="button" id="cartCheckout" class="btn btn--small-wide checkout">Proceed To Checkout</a>
                                <a href="{{route('home')}}" id="cartCheckout" class="btn btn--small-wide checkout">Continue Shopping</a>
                                <div class="paymnet-img"><img src="{{asset('/')}}website/assets/images/payment-img.jpg" alt="Payment" /></div>
                                <p class="mt-2"><a href="#">Checkout with Multiple Addresses</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main Content -->
            </div>
        </div>
    </div>

@endsection
