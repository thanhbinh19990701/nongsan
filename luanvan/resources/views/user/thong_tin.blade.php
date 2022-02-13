@extends('user.ca_nhan1')

@section('title')
    <title>Thông tin</title>
@endsection

@section('content')
    <p style="color: black;text-align: center; height: 40px; font-size: 25px"> Thông Tin</p>

{{--    @foreach($name as $key => $name)--}}

        <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2> Tài Khoản đăng nhập:</h2>
            </div><!--/login form-->
        </div>
    {{-- <?php
        $id = Session::get('customer_name');
    ?> --}}
    
    {{-- @foreach($id as $key => $v_content) --}}
        <div style="margin-left: -15px; " class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2 style="color: black">
                   {{$ad->customer_name}}
                </h2>
            </div><!--/login form-->
        </div>
   {{--  @endforeach --}}
        <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2> Số điện thoại:</h2>
            </div><!--/login form-->
        </div>
        <div style="margin-left: -15px; " class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2 style="color: black"> {{$ad->customer_phone}}</h2>
            </div><!--/login form-->
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2> Email:</h2>
            </div><!--/login form-->
        </div>
        <div style="margin-left: -15px; " class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2 style="color: black">{{$ad->customer_email}}</h2>
            </div><!--/login form-->
        </div>








@endsection
