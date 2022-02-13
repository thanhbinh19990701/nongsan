<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="">
    <meta name="author" content="">
    <link rel="canonical"  href="http://localhost/luanvan/">

     @yield('title')
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/binh.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
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

<body style="background-color:white">
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="{{URL::to('/dashboard')}}"><i class="fa fa-phone"></i> Đi đến cửa hàng </a></li>
                            <li><a href="{{URL::to('ca-nhan')}}"><i class="fa fa-envelope"></i> thanhbinh@gmail.com</a></li>
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
                        <a href="#">
                            <img style="width:150px; height: 150px; margin-left: 17px" src="{{asset('/public/frontend/images/logo7.jpg')}}" alt="" />
{{--                            <h6>NÔNG SẢN VIỆT</h6>--}}
                        </a>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
{{--                             <?php--}}
{{--                                $customer_id = Session::get('customer_id');--}}
{{--                                if ($customer_id!=NULL) {--}}

{{--                            ?>--}}
{{--                                <li><a href="{{URL::to('/store')}}"><i class="fa fa-lock">Cửa hàng của bạn</i></a></li>--}}
{{--                                <?php--}}
{{--                            }else{--}}
{{--                                ?>--}}
{{--                                <li><a href="{{URL::to('/store')}}"><i class="fa fa-lock"></i> Đăng ký cửa hàng</a></li>--}}
{{--                                <?php--}}
{{--                            }--}}
{{--                                ?>--}}
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

                            <?php
                                $content = Cart::content();

                                ?> 
                            <?php
                            $count = Cart::content()->count(); 
                            if($count !=0){
                            ?>
                            <li>
                                <a href="{{URL::to('/show-cart')}}">
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
                                </a>
                            </li>
                            <?php
                            }else{
                            ?>
                            <li>
                                <a href="{{URL::to('/show-cart')}}">
                                    <i class="fa fa-shopping-cart"></i> Giỏ hàng 
                                </a>
                            </li>
                            <?php
                            }
                            ?>

                            {{-- <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li> --}}
                            <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id!=NULL) {

                            ?>
                                <pan></pan>
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
                                        <li><a href="{{URL::to('/thong-tin')}}"><i class=" fa fa-suitcase"></i>Thông Tin</a></li>
                                       {{--  <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> --}}
                                        <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>
                                    <select>
                                        <option value="value01">Đăng Xuất</option>
                                        <option value="value02">Thông Tin cá nhân</option>
                                    </select>
                                    </a></li> --}}
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
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{ csrf_field() }}
                            <div style="width: auto;" class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                                 <input style="margin-top: 0; color: #000;" type="submit" name="search_item"
                                 class="btn btn-primary btn btn-sm" value="Tìm"/>
                            </div>
                        </form>
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


                                    <li><div class="" id="accordian"><!--category-productsr-->
                                            @foreach($cate as $key => $cates)
                                                <div class="">

                                                        <h4 style="width: 100%" class=""><a href="{{URL::to('/danh-muc-san-pham/'.$cates->category_id)}}">{{$cates->category_name}}</a></h4>

                                                </div>
                                            @endforeach
                                        </div><!--/category-products-->
                                    </li>
                                </ul>
                            </li>
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="#">Tin Tức<i class="fa fa-angle-down"></i></a>--}}

{{--                            </li>--}}
{{--                            <li><a href="{{URL::to('/cart-ajax')}}">Giỏ Hàng</a></li>--}}
{{--                            <li><a ><div class="panel-group category-products" id="accordian"><!--category-productsr-->--}}
{{--                                        @foreach($cate as $key => $cates)--}}
{{--                                            <div class="">--}}
{{--                                                <div class="">--}}
{{--                                                    <h4 style="width: 50px; background-color: #6a9ed1" class=""><a href="{{URL::to('/danh-muc-san-pham/'.$cates->category_id)}}">{{$cates->category_name}}</a></h4>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
{{--                                    </div></a></li>--}}
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

@include('pages.lider')

<section>
    <div class="container">
        <div class="row">
          @include('pages.category_brand')

        </div>
    </div>
        <div>
            @yield('content')
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
                <p class="pull-left">Chi tiết xin liên hệ ĐHCT.</p>
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
<script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
<script type="text/javascript">
    $(document).ready(function(){
        $('.add-to-cart').click(function(){
            var id = $(this).data('id');
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_user = $('.cart_product_user_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_price= $('.cart_product_price_' + id).val();
            var cart_product_qty = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:'{{URL::to('/show-cart')}}',
                method: 'POST',
                data:{cart_product_id:cart_product_id,cart_product_user:cart_product_user,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                success:function(data){
                    // swal("day la message");
                    swal({
                          title: "Good job!",
                          text: "You clicked the button!",
                          icon: "success",
                          button: "Aww yiss!",
                        });
                    // swal({
                    //     title: "Đã thêm sản phẩm vào giỏ hàng",
                    //     text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                    //     showCancelButton: true,
                    //     cancelButtonText: "Xem tiếp";,
                    //     confirmButtonClass: "btn-success",
                    //     confirmButtonText: "Đi đến giỏ hàng",
                    //     closeOnConfirm: false
                    //     },
                    //     function() {
                    //     window.location.href = "{{url('/cart-ajax')}}";
                    // });


                }
            });

        });

    });
</script>

</body>
</html>
