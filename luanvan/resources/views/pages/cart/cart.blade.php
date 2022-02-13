@extends('layout_page')
@section('title')
 <title>Gio hang</title>
@endsection
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
				 <?php
                    $message = Session::get('message');
                    if ($message){
                        echo '<span style=" color: red;font-size: 16px;width: 100%;text-align: center;font-weight: bold;" class="text-alert">
                        ',$message,'
                   </span>';
                        Session::put('message',null);
                    }
                    ?>
				{{-- <?php
				$content = Cart::content();

				?> --}}
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
					@php
						$total = 0;
					@endphp
					<tbody>
						@foreach($content as $key => $v_content)
							{{-- @php
								$total += $v_content->price * $v_content->qty;
								
							@endphp  --}}
						<tr>
							<td class="cart_product">
								<a href="">
									<img width="150" height="150"
									 src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>Mã: 1023{{$v_content->id}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price)}}vnđ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update-quantity')}}" method="POST">
										{{csrf_field()}}
										<input class="cart_quantity_input" type="text" name="cart_quantity"
										value="{{$v_content->qty}}" size="2">
										<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
										<input style="padding: 3px;" type="submit"
										value="Cập nhật" name="update_qty"
										class="btn btn-default btn-XS">
									</form>
								</div>
							</td>
							<td>
								<p class="cart_total_price">
									
							{{-- 	{{number_format($total,0,',','.')}}vnđ --}}
									 <?php
									 $subtotal = $v_content->price * $v_content->qty;
									 echo number_format($subtotal).''.'vnđ';
									 ?>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
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
			{{-- <div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div> --}}
			<div class="row">
				{{-- <form action="{{url::to('/check-coupon')}}" method="POST">
					@csrf
					<div class="col-sm-6">
						<div class="chose_area">
							<ul class="user_info">
								<li class="single_field zip-field">
									<label>Mã giảm giá:</label>
									<input type="text" name="coupon" class="form-control" >
								</li>
							</ul>
							<input type="submit" name="check_coupon" class="btn btn-default check_coupon" value="Tính mã giảm giá">
						</div>
					</div>
				</form> --}}
				{{-- @php
									$total = Cart::subtotal();
								@endphp --}}
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng tiền <span>{{Cart::subtotal()}}vnđ</span>
								
							
						
								
							{{-- <li>
								@if(Session::get('coupon'))
									@foreach(Session::get('coupon') as $key => $cou)
										@if($cou['coupon_condition']==1)
											Mã giảm: {{$cou['coupon_number']}}
											<p>
												@php
													// $total_coupon = $total;
													// echo '<p>Tong giam:'{{number_format($total,0,',','.')}}'</p>';
												@endphp
											</p>
												{{-- <p>giarm: --}} {{-- {{$total_coupon}} --}}
											{{-- <p>{{number_format($total_coupon,0,',','.')}}d</p>
										@endif
									@endforeach 
								@elseif($cou['coupon_condition']==2)
									Mã giảm: {{number_format($cou['coupon_number'],0,',','.')}}k
											<p>
												@php
												$total_coupon = (Cart::subtotal()-$cou['coupon_number']);
												
												@endphp
											</p>
											<p>{{number_format($total_coupon,0,',','.')}}d</p>
								@endif
							</li>
							</li> --}} 
							{{-- <li>Thuế <span>{{Cart::tax()}}vnđ</span></li> --}}
							<li>Phí vận chuyển <span> Miễn phí
								











							</span></li>
							<li>Tổng Tiền Thanh Toán <span> {{Cart::subtotal()}}vnđ</span></li>
							
							
						</ul>
							{{-- <a class="btn btn-default update" href="">Update</a> --}}
							<?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id!=NULL) {

                            ?>
                                <a style="margin-left: 200px;" class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh Toán </a>
                                <?php
                            }else{
                                ?>
                                <a style="margin-left: 200px;"  class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh Toán </a>
                                <?php
                            }
                                ?>

					</div>
				</div>
				
			</div>
		</div>
	</section><!--/#do_action
 -->
@endsection
