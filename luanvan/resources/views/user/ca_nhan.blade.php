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

    <title></title>
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
                            <li><a href="#"><i class="fa fa-phone"></i> +84 790168235</a></li>
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
                        <a href="index.html"><img src="{{asset('public/frontend/images/logo.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id!=NULL) {

                            ?>
                                <li><a href="{{URL::to('/store')}}"><i class="fa fa-lock">Cửa hàng của bạn</i></a></li>
                                <?php
                            }else{
                                ?>
                                <li><a href="{{URL::to('/store')}}"><i class="fa fa-lock"></i> Đăng ký cửa hàng</a></li>
                                <?php
                            }
                                ?>
                            <li><a href=""><i class="fa fa-heart"></i> Yêu thíc</a></li>
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
                            <li><a href="{{URL::to('/cart-ajax')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id!=NULL) {

                            ?>
                                                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <img style="width:30px; height: 30px" alt="" src="{{('public/backend/images/2.png')}}">
                                        <span class="username">
                                            <?php
                                            $name = Session::get('admin_name');
                                            if ($name){
                                                echo $name;
                                            }
                                            ?>
                                        </span>
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
                                    <li><a href="shop.html">Sản Phẩm</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Tin Tức<i class="fa fa-angle-down"></i></a>
{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                    <li><a href="blog.html">Blog List</a></li>--}}
{{--                                    <li><a href="blog-single.html">Blog Single</a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li><a href="404.html">Giỏ Hàng</a></li>
                            <li><a href="contact-us.html">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="search_box pull-right">
                        <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                         <input style="margin-top: 0; color: #000;" type="submit" name="search_item"
                         class="btn btn-primary btn btn-sm" value="Tìm"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section>
    <div class="container">
        <div class="row">


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
                                            <div style="text-align: center;" class="org-name"><a href="{{URL::to('/ca-nhan')}}">binh</a></div>
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
                                        padding-bottom: 5px;"
                                        class="my-business-menu-item  menu-checked  ">
                                        <a class="my-business-menu-wrap-item" href="{{URL::to('/theo-doi')}}">
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

                     <div class="content-wrapper" style="min-height: 399px;">
                        <section class="modul-name main-header">
                            <a href="#" class="sidebar-toggle toggle-btn-collaspe" data-toggle="push-menu" role="button">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-bars" aria-hidden="true"></i>
                             </a>
                                  Theo dõi đơn hàng
                        </section>
                        <div class="position-center">
                            <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none" rows="8"
                                        class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục" >
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hiển thị</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn </option>
                                        <option value="1">Hiện</option>

                                    </select>
                                </div>

                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh muc</button>
                            </form>
                        </div>
                        <content>
                            <style>
                                .or_status{ font-size: 16px; font-style: italic; color: red}
                            </style>

                            <div class="user-container">
                                <div class="">
                                    <div class="box" id="box-area">
                                        <div class="box-header">
                                            <form style="    padding-left: 0px;" accept-charset="utf-8" class="form-inline pull-left col-xs-9" id="search-form" method="">
                                            <div class="form-group"><label for="keyword" class="sr-only">Từ khóa</label><input class="form-control" placeholder="Từ khóa" id="keyword" type="text" name="keyword"></div>
                                            {{-- <div class="form-group"><label for="status" class="sr-only">Trạng thái</label><select class="form-control" id="status" name="status"><option value="-1">Tất cả</option><option value="1">Chưa xử lý</option><option value="2">Đã xử lý</option><option value="3"> Đã hủy</option><option value="4">Đã xác nhận</option></select></div> --}}
                                            <input class="btn-primary btn" type="submit" value="Tìm kiếm">
                                            <input type="hidden" name="_token" value="PRfZ8PUhAJRz972Nt0diorvkOsQajnv1oVpHoZYn"></form>
                                            <div class="clearfix"></div>
                                        </div>

                                        <!-- /.box-header -->
                                        <div class="box-body-table">
                                            <table class="table table-bordered table-striped table-hover" id="datatable" width="100%">
                                                <colgroup>
                                                    <col width="35%">

                                                    <col width="10%">
                                                    <col width="15%">
                                                    <col width="15%">
                                                    <col width="5%">
                                                </colgroup>
                                                <thead>
                                                    <tr role="row" class="heading">
                                                        <th>Nhà cung cấp</th>

                                                        <th>Tổng tiền</th>
                                                         <th class=" text-center">Thời gian đặt</th>
                                                        <th>Trạng thái</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <thead>
                                                    <tr role="row" class="section">
                                                        <th>AT Food - Cửa hàng Thực Phẩm Sạch</th>

                                                        <th>400.000</th>
                                                         <th class=" text-center">28/08/2021</th>
                                                        <th> Chưa xử lý</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <table class="table table-bordered table-striped table-hover" id="datatable" width="100%">
                        <colgroup>
                            <col width="35%">
                            <col width="15%">
                            <col width="15%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                        <tr role="row" class="heading">
                            <th>Tên hàng hóa</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                                        </div>
                                    <!-- /.box-body -->
                                    </div>
                                 </div>
                            </div>

                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Thông tin đơn hàng <span class="or_status">(Chưa xử lý)</span></h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped table-hover" id="datatable" width="100%">
                                                <colgroup>
                                                    <col width="35%">
                                                    <col width="15%">
                                                    <col width="15%">
                                                    <col width="15%">
                                                </colgroup>
                                                <thead>
                                                    <tr role="row" class="heading">
                                                        <th>Tên hàng hóa</th>
                                                        <th>Số lượng</th>
                                                        <th>Đơn giá</th>
                                                        <th>Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        <tr
                                                            <th>Thành tiền</th>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer form-group">
                                            <button type="button" class="btn btn-primary" status="0" order_id="0" id="action">Xác nhận</button>
                                            <button type="button" class="btn btn-danger" status="0" id="delete">Hủy đơn</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </content>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-shopper</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('public/frontend/images/iframe1.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('public/frontend/images/iframe2.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('public/frontend/images/iframe3.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('public/frontend/images/iframe4.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-3">
                    <div class="address">
                        <img src="{{asset('public/frontend/images/map.png')}}" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
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
