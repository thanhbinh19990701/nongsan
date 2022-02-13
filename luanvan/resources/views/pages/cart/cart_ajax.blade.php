@extends('layout_page')
@section('content')


	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
				  <li class="active">Giỏ hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@php
							$total = 0;
						@endphp

						@foreach(Session::get('cart') as $key => $cart)
							@php
								$subtotal = $cart['product_price'] * $cart['product_qty'];
								$total = $subtotal;
							@endphp
						<tr>
							<td class="cart_product">
								<a href="#">
									<img width="150" height="150"
									 src="{{asset('public/uploads/product/'.$cart['product_image'])}}" alt="{{$cart['product_name']}}"></a>
							</td>
							<td class="cart_description">
								<h4>{{$cart['product_name']}}<a href=""></a></h4>
								<p>Mã: 1023</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($cart['product_price'],0,',','.')}}vnđ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="" method="POST">
										{{-- {{csrf_field()}} --}}
										<input class="cart_quantity_input" type="text" min="1" name="cart_quantity"
										value="{{$cart['product_qty']}}" size="2">
										<input type="hidden" value="" name="rowId_cart" class="form-control">
										<input style="padding: 3px;" type="submit"
										value="Cập nhật" name="update_qty"
										class="btn btn-default btn-XS">
									</form>
								</div>
							</td>
							<td>
								<p class="cart_total_price">
									{{-- {{number_format($cart['product_price']*$cart['product_qty'])}} --}}

									{{number_format($subtotal,0,',','.')}}vnđ

							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	 <section id="do_action">
		<div class="container">
{{--			<div class="heading">--}}
{{--				<h3>What would you like to do next? </h3>--}}
{{--				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>--}}
{{--			</div>--}}
			<div class="row">
				{{-- <div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div> --}}
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng tiền <span>{{number_format($total,0,',','.')}}vnđ</span></li>
							<li>Thuế <span>vnđ</span></li>
							<li>Phí vận chuyển <span>Miễn phí</span></li>
							<li>Thành tiền <span>vnđ</span></li>
						</ul>
							{{-- <a class="btn btn-default update" href="">Update</a> --}}


                                <a class="btn btn-default check_out" href="">Thanh Toán </a>

                                <a class="btn btn-default check_out" href="">Thanh Toán </a>


					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action
 -->
@endsection
