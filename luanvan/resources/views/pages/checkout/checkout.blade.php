@extends('layout_page')
@section('title')
<title>Thanh toán</title>
@endsection
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
				  <li class="active">Thanh Toán</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<h2 style="color: black; text-align: center;">Thông tin đơn hàng</h2>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout')}}" method="POST">
									{{ csrf_field() }}
									<input type="text" name="shipping_name" value="{{$ad->customer_name}}" placeholder=" Tên người nhận hàng *"> 
									<input type="text"name="shipping_email" value="{{$ad->customer_email}}" placeholder=" *">
									<input type="text" name="shipping_address" placeholder="Địa chỉ nhận hàng *">
									<input type="text" name="shipping_phone" value="{{$ad->customer_phone}}" placeholder="Số điện thoại nhận hàng *">
									{{-- <p>Ghi chú đơn hàng</p> --}}
									<textarea name="shipping_note" placeholder="Ghi chú chi đơn hàng của bạn" rows="16"></textarea>
									<button style="margin-left: 520px; width:165px; font-size: 20px;" type="submit" value="Gửi" name="send_order" class="btn btn-primary">Xác nhận</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="review-payment">
				<h2></h2>
			</div>


		</div>
	</section> 

@endsection
