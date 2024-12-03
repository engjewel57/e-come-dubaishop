<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 03:41:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>BitCrypto</title>

    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/bootstrap1.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendors/font_awesome/css/all.min.css" />
    <!-- datatable CSS -->
    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendors/scroll/scrollable.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/style1.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">


<section class="main_content dashboard_part large_header_bg">

    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">

                            <div class="col-lg-6">
                                <!-- sign_in  -->
                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Log in</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('login')}}" method="post">
                                            @csrf
                                            <div class="">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Enter your email">
                                            </div>
                                            <div class="">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <button href="#" class="btn_1 full_width text-center" type="submit">Log in</button>
                                            <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal"  href="#"> Sign Up</a></p>
                                            <div class="text-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>





<!-- jquery slim -->
<script src="{{asset('/')}}admin/assets/js/jquery1-3.4.1.min.js"></script>
<!-- popper js -->
<script src="{{asset('/')}}admin/assets/js/popper1.min.js"></script>
<!-- bootstarp js -->
<script src="{{asset('/')}}admin/assets/js/bootstrap1.min.js"></script>
<!-- sidebar menu  -->
<script src="{{asset('/')}}admin/assets/js/metisMenu.js"></script>

<!-- scrollabe  -->
<script src="{{asset('/')}}admin/assets/vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendors/scroll/scrollable-custom.js"></script>

<!-- custom js -->
<script src="{{asset('/')}}admin/assets/js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 03:41:57 GMT -->
</html>
