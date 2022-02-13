@extends('layout')
@section('content')

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            @foreach($categoryname as $key => $catename)
            <h2 class="title text-center" style="padding-top: 2px;">{{$catename->category_name}}</h2>
            @endforeach
            @foreach($categoryid as $key => $cateid)
            <a href="{{URL::to('/chi-tiet-san-pham/'.$cateid->product_id)}}">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('public/uploads/product/'.$cateid->product_image)}}" alt="" />
                                <h2>{{number_format($cateid->product_price)}}vnđ</h2>
                                <p>{{$cateid->product_name}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="#"><i class="fa fa-heart"></i>Yêu thích</a></li>
                                <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach


        </div><!--features_items-->
{{--@include('pages.recomment')--}}


    </div>

@endsection
