@extends('user.ca_nhan1')

@section('title')
    <title>Sản Phẩm Yêu Thích</title>
@endsection

@section('content')

    <div class="content-wrapper" style="min-height: 399px;">
        <section class="modul-name main-header">
{{--            <a href="#" class="sidebar-toggle toggle-btn-collaspe" data-toggle="push-menu" role="button">--}}
{{--                <span class="sr-only">Toggle navigation</span>--}}
{{--                <i class="fa fa-bars" aria-hidden="true"></i>--}}
{{--            </a>--}}
                <p style=" color: black; text-align: center; height: 40px; font-size: 25px"> Sản Phẩm Yêu Thích</p>
        </section>

        
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">

                            <a href="#">
                                <img src="{{('public/frontend/images/cam-canh.jpg')}}" alt="" />
                                <h2>10 vnđ</h2>
                                <p>Trai Cay</p>
                            </a>
                            <button type="button" class="btn btn-default add-to-cart" data-id="" name="add-to-cart">Thêm giỏ hàng</button>


                    </div>
                </div>
                
            </div>
        </div>





@endsection
