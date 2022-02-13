
@extends('layout')
@section('title')
<title>Trang Chủ</title>
@endsection
@section('content')

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach($product as $key => $products)

                <div class="col-sm-3">
                    <span style="color:black;" class="sale"><i></i></span>
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <form action="{{URL::to('/save-cart')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" class="cart_product_id_{{$products->product_id}}" value="{{$products->product_id}}">
                                    <input type="hidden" class="cart_product_user_{{$products->product_id}}" value="user{{$products->user_id}}">
                                    <input type="hidden" class="cart_product_name_{{$products->product_id}}" value="{{$products->product_name}}">
                                    <input type="hidden" class="cart_product_image_{{$products->product_id}}" value="{{$products->product_image}}">
                                    <input type="hidden" class="cart_product_price_{{$products->product_id}}" value="{{$products->product_price}}">
                                    <input name="qty" type="hidden" min="1" value="1" />
                                        <input name="productid_hidden" type="hidden" value="{{$products->product_id}}" />
                                    <input type="hidden" class="cart_product_qty_{{$products->product_id}}" value="1">
                                       <span class="label-product label-sale"> 20%</span>
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$products->product_id)}}">
                                      
                                        <img src="{{URL::to('public/uploads/product/'.$products->product_image)}}" alt="" />
                                       
                                        <h2>{{number_format($products->product_price)}}vnđ</h2>
                                        <p>{{$products->product_name}}</p>
                                    </a>
                                    <button style="background: #77b33ffa; margin-left: 0px;" type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Thêm vào giỏ
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="choose">
{{--                            <ul class="nav nav-pills nav-justified">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i>Yêu thích</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
        @endforeach

        <div class="col-md-12">
                            {{ $product->links() }}
                        </div>
    </div>
  {{--  @include('pages.recomment')
 --}}
</div>

@endsection
