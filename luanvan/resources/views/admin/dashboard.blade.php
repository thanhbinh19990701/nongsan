@extends('admin_layout')
@section('title')
<title>Quản Lý</title>
@endsection
@section('admin_content')
    <h3 style="text-align: center;margin-bottom: 10px"> Chào mừng bạn đến với <span style="color: #0b7818">NÔNG SẢN VIỆT</span> </h3>

<div class="item active">
    <div style="position: absolute;margin-top: 94px;margin-left: -36px;" class="col-sm-6">

{{--        <h1 style="color: #659111;font-family:unset;">NÔNG SẢN VIỆT</h1>--}}
{{--        <h4 style="color: black">Chuyên cung cấp sản phẩm sạch Ogranic</h4>--}}
{{--        <h4 style="color: black">An toàn, không sử dụng hóa chất, tốt cho sức khỏe</h4>--}}
{{--        <button type="button" class="btn btn-default get">Mua Ngay</button>--}}
    </div>
    <img style="display: block;
                                height: 100%;
                                max-width: 1287px;
                                width: 1287px;
                                height: 585px;
                                padding-left: -6px;
                                margin-left: -15px;" src="{{asset('public/frontend/images/banner8.jpg')}}" alt="">

</div>
@endsection
