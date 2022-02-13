@extends('layout')
@section('title')
<title>Chi tiết sản phẩm</title>
@endsection
@section('content')

<link href="{{asset('public/ff/tt.css')}}" rel="stylesheet">
<link href="{{asset('public/ff/jquery-1.9.1.min.js')}}" rel="stylesheet">
<link href="{{asset('public/ff/nicepae.css')}}" rel="stylesheet">
<link href="{{asset('public/ff/nicepage.js')}}" rel="stylesheet">

<div class="col-sm-9 padding-right">
				@foreach($detail_product as $key => $detail)
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/uploads/product/'.$detail->product_image)}}" alt="" />
								<!-- <h3>ZOOM</h3> -->
							</div>
							<div id="similar-product" class="" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										   <a href=""><img width="60" height="60" src="{{URL::to('public/uploads/product/'.$detail->product_image)}}"></a>
										   <a href=""><img width="60" height="60" src="{{URL::to('public/uploads/product/'.$detail->product_image)}}"></a>
										  <a href=""><img width="60" height="60" src="{{URL::to('public/uploads/product/'.$detail->product_image)}}"></a>

										</div>



									</div>

								  <!-- Controls -->
								 <!--  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a> -->
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$detail->product_name}}</h2>
								<p>Mã Sản Phẩm: 1203{{$detail->product_id}}</p>
								<img src="images/product-details/rating.png" alt="" />
								<form action="{{URL::to('/save-cart')}}" method="post">
									{{ csrf_field() }}
									<span>
										<span>{{number_format($detail->product_price)}}nvđ</span>
										<label>Số lượng:</label>
										<input name="qty" type="number" min="1" value="1" />
										<input name="productid_hidden" type="hidden" value="{{$detail->product_id}}" />

									</span>
									<p><b>Tình trạng:</b> Còn hàng</p>
									<p><b>Điều kiện:</b>  Mới</p>
									<p><b>Danh mục:</b> <a href="{{URL::to('/danh-muc-san-pham/'.$detail->category_id)}}">{{$detail->category_name}}</a></p>
									<p><b>Thương hiệu:</b> <a href="{{URL::to('/thuong-hieu-san-pham/'.$detail->brand_id)}}">{{$detail->brand_name}}</a></p>
									{{-- <div style="width:100px; background-color:#b0efb5" class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a style="color: black; font-size:16px;" href="{{URL::to('/yeu-thich/'.$detail->product_id)}}"><i class="fa fa-heart"></i>Yêu thích</a></li>
                       
                    </ul>
                </div> --}}
{{--                                    <p><b>admin:</b> <a href="{{URL::to('/cua-hang/'.$detail->admin_id)}}">{{$detail->admin_name}}</a></p>--}}
                                    <br>
									<br>
									<button style="width: 275px;" type="submit" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Thêm vào giỏ hàng
									</button>
								</form>
								<a href=""><img src="#" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->


					<div style=" width: 831px;margin-left: 15px;background-color: #b0efb5;" class="col-md-12 icon_ms">

						<div  class="col-sm-5 icon_2">
			                    <div class="col-sm-12 icon3">
			                          	<div class="col-sm-6 icon4">
						            		<img style="border: 1px #d4d4d4 solid;
                                                padding: 7px;
                                                border-radius:50%;
                                                -moz-border-radius:50%;
                                                -webkit-border-radius:50%; display: block ;width:165px; height: 110px"
                                                 src="{{asset('/public/uploads/product/ca-rot6.jpg')}}">
						            	</div>

						            	

			                    </div>
			                    <button style=" margin-left: 65px" ><a href="{{URL::to('/cua-hang/'.$detail->user_id)}}"> <i style="color:red" class="fa fa-heart"></i> Xem Cửa  Hàng</a></button>
{{--			                    <button> <i style="color:blue" class="fa fa-comments"></i> Trò chuyện</button>--}}
			            </div>
			            <div style="margin-left:;" class="col-sm-7">
						            		 <h1 style="color: #0015aa;font-family: auto;font-weight: bolder;">{{$detail->store}}<br>&nbsp; &nbsp;
			                          		</h1>
						            	</div>
			            {{-- <div class="col-sm-4">
			            	<div class="u-container" >
				                <div class="u-container-layout-6" style="padding-top: 16px;">
				                    <p class="fa fa-heart" > Sản phẩm: 13k</p>
				                    <p >  Đánh Giá: 4.7 ( 14k đánh giá ) </p>
				                    <p > Người Theo Dõi: 2.3k</p>
				                    <p > Tham gia: 28-08-2021 </p>
				                </div>
				            </div>
				        </div> --}}
			        </div>

				<p></p>


					<div style="margin-top: 200px;" class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
								<li ><a href="#reviews" data-toggle="tab">Đánh Giá (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
                            <div class="tab-pane fade  active in" id="details" >
                                <div class="col-sm-12">
                                    <form action="#">
                                           <br>
                                        <ul style="background: #e4dcb6;margin-top: -50px;padding-left: 15px;
                                            color: black;
                                            "> <br>{!!$detail->product_desc!!}</ul>
                                    </form>
                                </div>
							</div>

							<div class="tab-pane fade" id="companyprofile" >
                                <div class="col-sm-12">
                                    <form action="#">
                                        <br>
                                        <ul style="background: #e4dcb6;margin-top: -50px;padding-left: 15px;
                                            color: black;
                                            "> <br>{!!$detail->product_content!!}
                                        </ul>

                                    </form>
                                </div>

							</div>


							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									@foreach($comment as $key => $comment)
									<ul style="background-color: #e3f4cf54;"> 
										<li><p><i class="fa fa-user" aria-hiden="true">&nbsp;</i>  {{$comment->comment_name}}</p></li>&emsp;
										{{-- <li><a href=""><i class="fa fa-clock-o"></i>{{$comment['created_at']}}</a></li> --}} <br>
										<li><p><i class="fa fa-comment-o">&ensp;</i>{{$comment->comment_desc}}</p></li>
									</ul>
										

									@endforeach
									


									<p><b>Để lại đánh giá của bạn</b></p>

									<form action="{{URL::to('/binh-luan/'.$detail->product_id)}}" method="post">
										{{ csrf_field() }}
										<span>
											<input style="color: black;" type="text" name="comment_name" placeholder="Tên của bạn"/>
											<input style="color: black;" type="email" name="comment_email" placeholder="Địa chỉ mail"/>
										</span>
										<span>
											<input type="hidden" name="product_id" value="{{$detail->product_id}}" />
										</span>
										<textarea style="color: black;" name="comment_desc" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="submit" name="add-comment" class="btn btn-default pull-right">
											Đánh giá
										</button>
									</form>
								</div>
							</div>

						</div>
					</div>
					<!--/category-tab-->
						@endforeach
						<div class="recommended_items"><!--recommended_items-->
						<h2 style="padding-top: 5px" class="title text-center">Sản phẩm liên quan</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								@foreach($related_product as $key => $related )
								<div class="item active">

									<div class="col-sm-4">

										<div class="product-image-wrapper">

											<div class="single-products">

												<div class="productinfo text-center">
													<a href="{{URL::to('/chi-tiet-san-pham/'.$related->product_id)}}">
														<img  src="{{URL::to('/public/uploads/product/'.$related->product_image)}}" alt="" />
														<h2>{{number_format($related->product_price)}}vnđ</h2>
														<p>{{$related->product_name}}</p>
														{{-- <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button> --}}
													</a>
												</div>
											</div>

										</div>

									</div>

								</div>
                                @endforeach
							</div>

							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>
						</div>
					</div><!--/recommended_items-->
@endsection
