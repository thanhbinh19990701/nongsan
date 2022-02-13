@extends('layout_page')
@section('content')

    <div style="width: 100%;  background-color: #e4e4fd;" >

        <div style="margin-left: 0px; width: 100%;background-color: #8bc34a;" class="col-md-12 icon_ms">
            <div class="col-md-2">
                <img style="border: 1px #d4d4d4 solid;
                                                padding: 2px;
                                                margin-left: 25px;
                                                border-radius:50%;
                                                -moz-border-radius:50%;
                                                -webkit-border-radius:50%; display: block ;width:130px; height: 130px"
                src="{{asset('/public/uploads/product/ca-rot6.jpg')}}">

            </div>
            <div style="margin-top: 30px;" class="col-md-4">
                <button style=" margin-bottom: 20px;margin-left: 20px; width: 100px" ><a href="{{URL::to('/cua-hang')}}"> <i style="color:red" class="fa fa-heart"></i> Theo dõi</a></button>
                <br>
                <button style="margin-left: 20px;"> <i style="color:blue" class="fa fa-comments"></i> Trò chuyện</button>
            </div>
            @foreach($admin as $key => $product)
            <div class="col-md-6">
                <div style="margin-top: 40px; margin-left: -75px; " class="">
                    <h2 class="u-text u-text-default u-text-3">{{$product->store}}</h2>
                </div>
            </div>
           @endforeach



        </div>
        <div style="width: 100%; margin-bottom: 20px ;color: #080808; background-color: #d5e2c8" class="col-md-12">
            <div style=" background-color: #d5e2c8" class="col-md-3">


                <div style="margin-top: -20px;margin-left: -17px" class="u-container" >
                    <div class="u-container-layout-6" style="padding-top: 16px;margin-top: 30px">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Tất cả sản phẩm</a></li>
                                <li style="width: 170px" ><a href="#companyprofile" data-toggle="tab">Thông tin cửa hàng</a></lis>
                                {{-- <li ><a href="#reviews" data-toggle="tab">Đánh Giá (5)</a></li> --}}
                            </ul>
                        </div>
                        {{--                        <p class="fa fa-heart" > Sản phẩm: 13k</p>--}}
                        {{--                        <p >  Đánh Giá: 4.7 ( 14k đánh giá ) </p>--}}
                        {{--                        <p > Người Theo Dõi: 2.3k</p>--}}
                        {{--                        <p > Tham gia: 28-08-2021 </p> --}}
                        {{--
                                                            <p class="u-text u-text-5"><span class="u-icon u-icon-4"></span>&nbsp; Đánh Giá: 4.7&nbsp;&nbsp;<span class="u-icon u-icon-5"></svg><img></span>&nbsp;( 14k đánh giá )
                                                            </p>
                                                            <p class="u-text u-text-6"><span class="u-icon u-icon-6"><svg class="u-svg-content" viewBox="0 0 64 64" style="width: 1em; height: 1em;"></svg><img></span>&nbsp;&nbsp;Người Theo Dõi: 2.3k
                                                            </p>
                                                            <p class="u-text u-text-7"><span class="u-icon u-icon-7"><svg class="u-svg-content" viewBox="0 0 64 64" style="width: 1em; height: 1em;"></svg><img></span>&nbsp; Tham gia: 28-08-2021
                                                            </p> --}}
                    </div>
                </div>
            </div>
            <div style="width: unset; color: #1a1a1a"></div>
            <div style="border-left-style: double; color: black;" class="col-md-9">

                <div class="tab-content">
                    <div class="tab-pane fade active in  " id="details" >
                        <div style="margin-left: 10px;color: black; margin-top: 10px" class="col-md-12">
                          @foreach($detail_product as $key => $product)
                            <div style="margin-left: -16px; width: 27%" class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" /></a>
                                            <p style="margin-top: 15px">{{$product->product_price}}</p>
                                            <p>{{$product->product_name}}</p>
{{--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Thêm vào Giỏ</i></a>--}}
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">

                                                {{--                            <li><a href="#"><i class="fa fa-heart"></i>Yêu thích</a></li>--}}
                                               {{--  <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li> --}}
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            @endforeach

                        </div>
                   
                        <div class="col-md-12">
                            {{ $detail_product->links() }}
                        </div>
                    </div>
                   

                @foreach($detail_product as $key => $product)
                    <div class="tab-pane fade " id="companyprofile" >
                        <div style="margin-left: 10px; margin-top: 10px" class="col-md-12">
                            <div class="col-md-12">
                                <h4 style="text-align: center">Thông Tin Cơ Sở Kinh Doanh</h4>
                            </div>
                            <div style="border-bottom: 1px solid #dc6f6f82;height:35px;margin-top:20px;"
                                 class="col-md-12">
                                <div style="    width: 22.666667%;" class="col-md-5 col-xs-5">Tên cơ sở

                                </div>
                                <div class="col-md-7 col-xs-7">
                                   {{$product->customer_name}}
                                </div>

                            </div>
                            <div style="border-bottom: 1px solid #dc6f6f82;height:35px;margin-top:20px;"
                                 class="col-md-12">
                                <div style="    width: 22.666667%;" class="col-md-5 col-xs-5">Địa chỉ cơ sở

                                </div>
                                <div class="col-md-7 col-xs-7">
                                    {{$product->customer_email}}
                                </div>

                            </div>
                            <div style="border-bottom: 1px solid #dc6f6f82;height:35px;margin-top:20px;"
                                 class="col-md-12">
                                <div style="    width: 22.666667%;" class="col-md-5 col-xs-5">Số điện thoại

                                </div>
                                <div class="col-md-7 col-xs-7">
                                   {{$product->customer_phone}}
                                </div>

                            </div>
                            <div style="border-bottom: 1px solid #dc6f6f82;height:35px;margin-top:20px;"
                                 class="col-md-12">
                                <div style="    width: 22.666667%;" class="col-md-5 col-xs-5">Trạng Thái

                                </div>
                                <div class="col-md-7 col-xs-7">
                                    Đang hoạt động
                                </div>

                            </div>

                        </div>
                    </div>
                    @endforeach
                    <div style="margin-top: 20px" class="tab-pane fade" id="reviews" >
                        <div class="col-sm-12">
                            <ul>
{{--                                <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>--}}
{{--                                <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>--}}
{{--                                <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>--}}
                            </ul>
                            <p style="text-align: center"><b>Để lại đánh giá của bạn</b></p>

                            <form action="#">
										<span>
											<input type="text" placeholder="Tên của bạn"/>
											<input type="email" placeholder="Địa chỉ Mail"/>
										</span>
                                <textarea name="" ></textarea>

                                <button type="button" class="btn btn-default pull-right">
                                   Gửi
                                </button>
                            </form>
                        </div>
                    </div>
                   
                </div>


                </div>
            </div>

        </div>
 







    @endsection()
