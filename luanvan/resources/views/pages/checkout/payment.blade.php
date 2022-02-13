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
				  <li class="active">Thanh Toán giỏ hàng</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">

					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							{{-- <p>Thông tin đơn hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout')}}" method="POST">
									{{ csrf_field() }}
									<input type="text" name="shipping_name" placeholder=" Tên *">
									<input type="text"name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_address" placeholder="Địa chỉ nhận hàng *">
									<input type="text" name="shipping_phone" placeholder="Số điện thoại nhận hàng *">
									{{-- <p>Ghi chú đơn hàng</p> --}}
									{{-- <textarea name="shipping_note" placeholder="Ghi chú chi đơn hàng của bạn" rows="16"></textarea>
									<button type="submit" value="Gửi" name="send_order" class="btn btn-primary">Đăng ký</button>
								</form>
							</div>  --}}
						</div>
					</div>
				</div>
			</div>
			<div class="review-payment">
				<h2>Giỏ Hàng</h2>
			</div>

			<div class="table-responsive cart_info">
				<?php
				$content = Cart::content();

				?>
				@php
					$total = 0;
				@endphp
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							{{-- <td class="image">Hình ảnh</td> --}}
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $key => $v_content)

						<tr>
							{{-- <td class="cart_product">
								<a href="">
									<img width="150" height="150"
									 src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt=""></a>
							</td> --}}
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>Mã: 1023{{$v_content->id}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price)}}vnđ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<p>{{$v_content->qty}}</p>
										<input class="cart_quantity_input" type="text" name="cart_quantity"
										value="{{$v_content->qty}}" size="2">
										
									
								</div>
							</td>
							<td>
								<p class="cart_total_price">
									<?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).''.'vnđ';
									?>

							</td>
							
							
						</tr>
						@endforeach
						
					</tbody>
					<thead style="background-color: #daf7af;">
						<tr>
							<td style="color:black; font-size: 25px;" class="total">Tổng tiền</td>
							
							<td>
								<p class="cart_total_price">
									{{Cart::subtotal()}} vnđ
									
							</td>
						</tr>
					</thead>
				</table>
			</div>
			<h4 style="margin: 40px 0; font-size:20px">Chọn hình thức thanh toán</h4>
			<form action="{{URL::to('/order-place')}}" method="POST">
				{{ csrf_field() }}
				<div style="background-color: #daf7af" class="payment-options">
					<span>
						<label><input name="payment_option" value="1" type="checkbox"> Thanh toán qua thẻ</label>
					</span>
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Thanh toán khi nhận hàng</label>
					</span>
{{--					<span>--}}
{{--						<label><input name="payment_option" value="3" type="checkbox"> Thanh toán qua thẻ ghi nợ</label>--}}
{{--					</span>--}}
					<input type="submit" value="Đặt Hàng" name="send_order_place" class="btn btn-primary">
				</div>
			</form>
			
		</div>
	</section> <!--/#cart_items-->

@endsection
