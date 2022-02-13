<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="">
    <meta name="author" content="">
    <link rel="canonical"  href="">

    @yield('title')
    <link href="{{asset('public/frontend/css/binh.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/binh.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="frontend/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="frontend/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="background-color: white">
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="{{URL::to('/all-product')}}"><i class="fa fa-phone"></i> Đi đến cửa hàng </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> thanhbinh@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                         <img style="width:135px; height: 120px; margin-left: 17px" src="{{asset('/public/frontend/images/logo7.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                            $customer_id = Session::get('customer_id');
                            if ($customer_id!=NULL) {

                            ?>
{{--                            <li><a href="{{URL::to('/store')}}"><i class="fa fa-lock">Cửa hàng của bạn</i></a></li>--}}
                            <?php
                            }else{
                            ?>
{{--                            <li><a href="{{URL::to('/store')}}"><i class="fa fa-lock"></i> Đăng ký cửa hàng</a></li>--}}
                            <?php
                            }
                            ?>
                            <li><a href=""><i class="fa fa-heart"></i> Yêu thích</a></li>
                            <?php
                            $customer_id = Session::get('customer_id');
                            $shipping_id = Session::get('shipping_id');
                            if ($customer_id!=NULL && $shipping_id!=NULL) {

                            ?>
                            <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php
                            }elseif($customer_id!=NULL ){
                            ?>
                            <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php
                            }else{
                            ?>
                            <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php
                            }
                            ?>
                            <li><a href="{{URL::to('/show-cart')}}">
                                <i class="fa fa-shopping-cart"></i> Giỏ hàng
                                <div style="    background-color: #6fba25;
                                                    float: right;
                                                    border-radius: 64%;
                                                    margin-left: 0px;
                                                    margin-top: -10px;
                                                    width: 20px;
                                                    height: 20px;" class="sidebar-toggle-box">
                                                    <span style="margin-left:5px;">{{Cart::content()->count()}} </span>
                                       {{--  <div class=""></div> --}}
                                    </div>

                            </a></li>
                            <?php
                            $customer_id = Session::get('customer_id');
                            if ($customer_id!=NULL) {

                            ?>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <img style="width:30px; height: 30px" alt="" src="{{asset('/public/frontend/images/logo7.jpg')}}">
                                   <?php
                                            $customer_id = Session::get('customer_name');
                                            if ($customer_id){
                                                echo $customer_id;
                                            }
                                            ?>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <li><a href="{{URL::to('/ca-nhan')}}"><i class=" fa fa-suitcase"></i>Thông Tin</a></li>
                                    {{--  <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> --}}
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
                                </ul>
                            </li>
                            {{-- <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li> --}}
                            <?php
                            }else{
                            ?>
                            <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div style="margin-left: 330px;margin-top: 45px;" class="col-sm-7">
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            <input style="margin-top: 0; color: #000;" type="submit" name="search_item"
                                class="btn btn-primary btn btn-sm" value="Tìm"/>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
                            <li class="dropdown"><a href="#">Cửa Hàng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">Sản Phẩm</a></li>

                                </ul>
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="#">Tin Tức<i class="fa fa-angle-down"></i></a>--}}
{{--                                --}}{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                --}}{{--                                    <li><a href="blog.html">Blog List</a></li>--}}
{{--                                --}}{{--                                    <li><a href="blog-single.html">Blog Single</a></li>--}}
{{--                                --}}{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="404.html">Giỏ Hàng</a></li>--}}
{{--                            <li><a href="contact-us.html">Liên Hệ</a></li>--}}
                        </ul>
                    </div>
                </div>
               {{--  <div class="col-sm-5">
                    <div class="search_box pull-right">
                        <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                        <input style="margin-top: 0; color: #000;" type="submit" name="search_item"
                               class="btn btn-primary btn btn-sm" value="Tìm"/>
                    </div>
                </div> --}}
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section>
    <div class="container">
        <div class="row">


            <div style="height: 410px" class="page-area">
                <div class="container">
                    <div class="col-md-3">
                        <div class="wrapper" >
                            <aside style="padding-top: 0px" class="canhan canhan1">
                                <section class="sidebar">
                                    <div class="user-panel">
                                        <div class="pull-left image">
                                            <div class="image-sidebar"><img src="{{asset('/public/frontend/images/logo7.jpg')}}"
                                                                            height="70" width="70" class="img-circle">
                                            </div>
                                        </div>
                                        <div style="margin-left: 35px;" class="pull-left info">
                                            <p style="color: black" class="name-static">Trang cá nhân </p>
                                            <!--<div class="org-name">Trang cá nhân của</div>-->
                                            <div style="text-align: center;" class="org-name"><a href="{{URL::to('/ca-nhan')}}">{{$ad->customer_name}}</a></div>
                                        </div>
                                    </div>
                                    <section>
                                        <div style="
                                        margin-top: 10px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;" class="fa">
                                            {{-- <a  href="#">
                                                <i class="sdc fa fa-comments"></i>
                                                <span  class="my-business-menu-content">TIn nhawn</span>
                                            </a> --}}
                                        </div>

                                        <div style="
                                        margin-top: 50px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;"  class="my-business-menu-item  ">
                                            <a class="my-business-menu-wrap-item" href="{{URL::to('/thong-tin')}}">
                                                <i class="sdc fa fa-user"></i>
                                                <span class="my-business-menu-content">Thông tin cá nhân</span>
                                            </a>
                                        </div>

                                        <div style="
                                        margin-top: 10px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;"
                                             class="my-business-menu-item  menu-checked  ">
                                            <a class="my-business-menu-wrap-item" href="{{URL::to('/theo-doi')}}">
                                                <i class="sdc fa fa-shopping-cart"></i>
                                                <span class="my-business-menu-content">Theo dõi đơn hàng</span>
                                            </a>
                                        </div>
                                       {{--  <div style="
                                        margin-top: 10px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;"
                                             class="my-business-menu-item  ">
                                            <a class="my-business-menu-wrap-item" href="{{URL::to('/dang-tin')}}">
                                                <i class="sdc fa fa-random"></i>
                                                <span class="my-business-menu-content">Đăng tin cung cầu</span>
                                            </a>
                                        </div> --}}
                                       {{--  <div style="
                                        margin-top: 10px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;"  class="my-business-menu-item  ">
                                            <a class="my-business-menu-wrap-item" href="{{URL::to('/yeu-thich')}}">
                                                <i class="sdc fa fa-heart"></i>
                                                <span class="my-business-menu-content">Sản phẩm yêu thích</span>
                                            </a>
                                        </div> --}}
                                        {{-- <div style="
                                        margin-top: 10px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;"  class="my-business-menu-item  ">
                                            <a class="my-business-menu-wrap-item" href="{{URL::to('/theo-doi-co-so')}}">
                                                <i class="sdc fa fa-heart"></i>
                                                <span class="my-business-menu-content">Theo dõi cơ sở</span>
                                            </a>
                                        </div> --}}


                                        <?php
                                       
                                       

                                        $customer_id = Session::get('store');
                                        
                                        if ($customer_id==NULL ) {

                                        ?>
                                        <div style="
                                        margin-top: 10px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;"  class="my-business-logout">
                                            <a class="my-business-name" href="{{URL::to('/dang-ky-cua-hang')}}">
                                                <i class="sdc fa fa-sign-out fa-building"></i>
                                                <span class="my-business-menu-content">Đăng ký cơ sở của bạn 1</span>
                                            </a>
                                        </div>
                                            <?php
                                            }else{
                                            ?>
                                                                         
                                           <?php
                                            }
                                            ?>

                                    </section>
                                </section>
                            </aside>
                        </div>

                    </div>
                    <div class="col-md-9">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->

{{--    <div class="footer-widget">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Service</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">Online Help</a></li>--}}
{{--                            <li><a href="#">Contact Us</a></li>--}}
{{--                            <li><a href="#">Order Status</a></li>--}}
{{--                            <li><a href="#">Change Location</a></li>--}}
{{--                            <li><a href="#">FAQ’s</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Quock Shop</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">T-Shirt</a></li>--}}
{{--                            <li><a href="#">Mens</a></li>--}}
{{--                            <li><a href="#">Womens</a></li>--}}
{{--                            <li><a href="#">Gift Cards</a></li>--}}
{{--                            <li><a href="#">Shoes</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Policies</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">Terms of Use</a></li>--}}
{{--                            <li><a href="#">Privecy Policy</a></li>--}}
{{--                            <li><a href="#">Refund Policy</a></li>--}}
{{--                            <li><a href="#">Billing System</a></li>--}}
{{--                            <li><a href="#">Ticket System</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>About Shopper</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">Company Information</a></li>--}}
{{--                            <li><a href="#">Careers</a></li>--}}
{{--                            <li><a href="#">Store Location</a></li>--}}
{{--                            <li><a href="#">Affillate Program</a></li>--}}
{{--                            <li><a href="#">Copyright</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3 col-sm-offset-1">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>About Shopper</h2>--}}
{{--                        <form action="#" class="searchform">--}}
{{--                            <input type="text" placeholder="Your email address" />--}}
{{--                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>--}}
{{--                            <p>Get the most recent updates from <br />our site and be updated your self...</p>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Chi tiết xin liên hệ DCHT.</p>
                <p class="pull-right"> <span><a target="_blank" href="http://www.themeum.com">ThanhBinh</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>
<script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ckediter4');

</script>
</body>
</html>






{{-- @extends('layout_page') --}}


{{-- @section('content')
        <div class="page-area">
            <div class="container">
                <div class="col-md-3">
                    <div class="wrapper" style="height: auto; min-height: 100%;">
                        <aside class="canhan canhan1">
                            <section class="sidebar">
                                <div class="user-panel">
                                        <div class="pull-left image">
                                          <div class="image-sidebar"><img src="https://www.nongsanantoanthanhhoa.vn/img/no-avatar.jpg"
                                                height="70" width="70" class="img-circle">
                                          </div>
                                        </div>
                                        <div style="margin-left: 35px;" class="pull-left info">
                                            <p class="name-static">Trang cá nhân của</p>
                                            <!--<div class="org-name">Trang cá nhân của</div>-->
                                            <div style="text-align: center;" class="org-name"><a href="#">binh</a></div>
                                        </div>
                                </div>
                                <section>
                                    <div style="
                                        margin-top: 10px;
                                        font-size: 18px;
                                        background-color: #c1f5b6;
                                        height: 30px;
                                        padding-top: 5px;
                                        padding-bottom: 5px;" class="fa">
                                        {{-- <a  href="#">
                                            <i class="sdc fa fa-comments"></i>
                                            <span  class="my-business-menu-content">TIn nhawn</span>
                                        </a> --}}
{{-- </div>
<div style="
    margin-top: 50px;
    font-size: 18px;
    background-color: #c1f5b6;
    height: 30px;
    padding-top: 5px;
    padding-bottom: 5px;"
    class="my-business-menu-item  menu-checked  ">
    <a class="my-business-menu-wrap-item" href="#">
        <i class="sdc fa fa-shopping-cart"></i>
        <span class="my-business-menu-content">Theo dõi đơn hàng</span>
    </a>
</div>
<div style="
    margin-top: 10px;
    font-size: 18px;
    background-color: #c1f5b6;
    height: 30px;
    padding-top: 5px;
    padding-bottom: 5px;"
 class="my-business-menu-item  ">
    <a class="my-business-menu-wrap-item" href="#">
        <i class="sdc fa fa-random"></i>
        <span class="my-business-menu-content">Đăng tin cung cầu</span>
    </a>
</div>
<div style="
    margin-top: 10px;
    font-size: 18px;
    background-color: #c1f5b6;
    height: 30px;
    padding-top: 5px;
    padding-bottom: 5px;"  class="my-business-menu-item  ">
    <a class="my-business-menu-wrap-item" href="#">
        <i class="sdc fa fa-heart"></i>
        <span class="my-business-menu-content">Sản phẩm yêu thích</span>
    </a>
</div>
<div style="
    margin-top: 10px;
    font-size: 18px;
    background-color: #c1f5b6;
    height: 30px;
    padding-top: 5px;
    padding-bottom: 5px;"  class="my-business-menu-item  ">
    <a class="my-business-menu-wrap-item" href="#">
        <i class="sdc fa fa-heart"></i>
        <span class="my-business-menu-content">Theo dõi cơ sở</span>
    </a>
</div>
<div style="
    margin-top: 10px;
    font-size: 18px;
    background-color: #c1f5b6;
    height: 30px;
    padding-top: 5px;
    padding-bottom: 5px;"  class="my-business-menu-item  ">
    <a class="my-business-menu-wrap-item" href="#">
        <i class="sdc fa fa-user"></i>
        <span class="my-business-menu-content">Thông tin cá nhân</span>
    </a>
</div>
<div style="
    margin-top: 10px;
    font-size: 18px;
    background-color: #c1f5b6;
    height: 30px;
    padding-top: 5px;
    padding-bottom: 5px;"  class="my-business-logout">
    <a class="my-business-name" href="#">
        <i class="sdc fa fa-sign-out fa-building"></i>
        <span class="my-business-menu-content">Đăng ký cơ sở của bạn</span>
    </a>
</div>
</section>
</section>
</aside>
</div>
</div>
<div class="col-md-9">
@yield('content')
</div>
</div>
</div> --}}
{{-- @endsection  --}}
