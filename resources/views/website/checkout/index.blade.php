@extends('website.master')
@section('body')
    <!-- Body Content -->
    <div id="page-content">
        <!-- Page Title -->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-title">Checkout Form</h1></div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer">
                        <h3><i class="icon an an-user"></i> Returning customer? <a href="#customer-login" id="customer" class="text-white" data-bs-toggle="collapse">Click here to login</a></h3>
                        <div id="customer-login" class="collapse customer-content">
                            <div class="customer-info">
                                <p class="coupon-text mb-3">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form method="post" action="#">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">Email address <span class="required-f">*</span></label>
                                            <input type="email" class="no-margin" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Password <span class="required-f">*</span></label>
                                            <input type="password" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check d-flex justify-content-between ps-0">
                                                <div class="customCheckbox">
                                                    <input type="checkbox" class="form-check-input" id="remember" value="" />
                                                    <label for="remember"> Remember me!</label>
                                                </div>
                                                <a href="forgot-your-password.html" class="ml-3 float-end">Forgot your password?</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box customer-coupon">
                        <h3 class="font-15 xs-font-13"><i class="icon an an-gift"></i> Have a coupon? <a href="#have-coupon" class="text-white" data-bs-toggle="collapse">Click here to enter your code</a></h3>
                        <div id="have-coupon" class="collapse coupon-checkout-content">
                            <div class="discount-coupon">
                                <div id="coupon" class="coupon-dec tab-pane active">
                                    <p class="mb-3">Enter your coupon code if you have one.</p>
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <label class="required get" for="coupon-code"><span class="required-f">*</span> Coupon</label>
                                            <input id="coupon-code" required type="text" class="mb-3">
                                            <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 mb-md-0">
                    <div class="create-ac-content">
                        <form method="post" action="{{route('new-order')}}" >
                            @csrf
                            <fieldset>
                                <h2 class="login-title mb-3">Billing details</h2>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                        <label for="input-firstname">Full Name <span class="required-f">*</span></label>
                                        @if(isset($customer->name))
                                        <input type="text" name="name" value="{{$customer->name}}" readonly />
                                        @else
                                            <input type="text" name="name" value="" placeholder="Full_Name" >
                                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                        @if(isset($customer->email))
                                            <input type="email" name="email" value="{{$customer->email}}" readonly />
                                        @else
                                        <input name="email" value="" id="input-email" type="email">
                                            <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Phone Number <span class="required-f">*</span></label>
                                        @if(isset($customer->mobile))
                                            <input type="number" name="number" value="{{$customer->mobile}}" readonly />
                                        @else
                                        <input name="number" value="" id="input-number" type="tel">
                                            <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ' '}}</span>

                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                        <label for="input-address-1">Delivery Address <span class="required-f">*</span></label>
                                        <input name="delivery_address"  placeholder="Delivery_Address" >
                                        <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ' '}}</span>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label>Select You Payment Method</label>
                                        <div class="single-checkbox checkbox-style">
                                            <label class="me-4"><input type="radio" name="payment_method" value="1">Cash On Delivery Payment</label>
                                            <label><input type="radio" name="payment_method" value="2">Online Payment</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12 mb-0">
                                        <div class="single-form button">
                                            <button type="submit" class="btn btn-success" >confirm order</button>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Shopping Cart Summary</h2>
                            <div class="table-responsive-sm order-table">
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-start">Product Name</th>
                                        <th>Price</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($sum=0)
                                    @foreach($cartProducts as $cartProduct)
                                    <tr>
                                        <td class="text-start">{{$cartProduct->name }}:({{$cartProduct->price}} * {{$cartProduct->quantity}})</td>
                                        <td class="price">TK.{{$cartProduct->price * $cartProduct->quantity}}</td>

                                    </tr>
                                        @php($sum = $sum + ($cartProduct->quantity*$cartProduct->price))
                                    @endforeach
                                    <tr>
                                        <td class="text-start">SubTotal price</td>
                                        <td>{{number_format($sum)}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">Text Amount</td>
                                        @php($tax=round((($sum*15)/100)))
                                        <td>${{number_format($tax)}}</td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                    <tr>
                                        <td colspan="" class="text-start">Shipping Cost </td>
                                        @php($shipping=500)
                                        <td>{{$shipping}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="" class="text-start">Total Payable</td>
                                        @php($grandTotal = $sum + $tax + $shipping)
                                        <td>{{number_format($grandTotal)}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <hr>

                        <div class="your-payment">
                            <h2 class="payment-title mb-3">payment method</h2>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion" class="payment-section">
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseFour"> Payment Information </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardname">Name on Card <span class="required-f">*</span></label>
                                                                <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-country">Credit Card Type <span class="required-f">*</span></label>
                                                                <select name="country_id" class="form-control">
                                                                    <option value="">Please Select</option>
                                                                    <option value="1">American Express</option>
                                                                    <option value="2">Visa Card</option>
                                                                    <option value="3">Master Card</option>
                                                                    <option value="4">Discover Card</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardno">Credit Card Number  <span class="required-f">*</span></label>
                                                                <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cvv">CVV Code <span class="required-f">*</span></label>
                                                                <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label>Expiration Date <span class="required-f">*</span></label>
                                                                <input type="date" name="exdate" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <img class="padding-25px-top xs-padding-5px-top" src="{{asset('/')}}website/assets/images/payment-img.jpg" alt="card" title="card">
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-button-payment">
                                    <a href="checkout-success.html" class="btn">Place order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Main Content-->
        </div>

    </div>
@endsection

