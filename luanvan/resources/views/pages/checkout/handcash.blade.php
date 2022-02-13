@extends('layout')
@section('title')
<title>Cám ơn</title>
@endsection
@section('content')

<section id="cart_items">
		<div style="background-color: ; height:700px" class="col-sm-9 container">
			<img style="height:300px; width: 300px; margin-left: 256px;
    			margin-top: -90px
    		" src="{{asset('/public/frontend/images/logo7.jpg')}}">

			
			<div style="margin-left:250px;" class="review-payment">
				<h2 style="color:black; margin-left:50px;">Cám ơn bạn đã đặt hàng</h2>
				{{-- <h2 style="color:black">Chúc quý khách có trải nghiệm tuyệt vời với <p style="color:blue;">NÔNG SẢN SẠCH</p></h2> --}}
				<h2 style="color:black">Quay  <a href="{{URL::to('/trang-chu')}}">về cửa hàng</a> chọn tiếp nào !!</h2>
			</div>

			
			
		</div>
	</section> <!--/#cart_items-->

@endsection