@extends('layout_page')
@section('title')
<title>Đăng Nhập-Đăng ký</title>
@endsection
@section('content')

	<div style="display: block;
			    margin-bottom: 100px;
			    margin-top: 60px;
			    overflow: hidden; background-color: ##2a520a;
    			" id="form"><!--form-->
		<div style="background-color:#aee780;" class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2> Tài Khoản đăng nhập</h2>
						<form  action="{{URL::to('/login-customer')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="email_account" placeholder="Tài khoản" />
							<input type="password" name="password_account" placeholder="Mật khẩu" />
							<span>
								<input type="checkbox" class="checkbox">
								Ghi nhớ
							</span>
							<button type="submit" class="btn btn-default">Đăng Nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng Ký Tài Khoản</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Tên"/>
							<input type="emalis" name="customer_email" placeholder="Email "/>
							<input type="password" name="customer_password" placeholder="Mật khẩu"/>
							<input type="number" name="customer_phone" placeholder="Số điện thoại"/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</div><!--/form-->

@endsection
