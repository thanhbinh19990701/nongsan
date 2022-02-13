@extends('user.ca_nhan1')

@section('title')
    <title>Đăng ký cửa hàng</title>
@endsection

@section('content')

    <section style="background-color: white" id="cart_items">
        <div class="container">
            <div class="col-sm-12 ">
                <div class="register-re">
                    <h3 style=" margin-left: 20%; margin-bottom:40px; color:#0e8411">
                        Đăng kí cửa hàng của bạn
                    </h3>
                </div><!--/register-req-->
                <div class="col-md-8">
                    <div style="width: 100%;" class="form-one">
                        <form action="{{URL::to('/save-store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label style="color: black;" for="">Tên cửa hàng</label>
                            <input type="text" name="store_name" placeholder=" Tên Cửa Hàng *">
                            <label  style="color: black;" for="">Ảnh đại diện</label>
                            <input type="file" name="store_img">
                            <label  style="color: black;" for="">Email cửa hàng</label>
                            <input type="text"name="store_email" placeholder="Email Cửa Hàng*">
                            <label  style="color: black;" for="">Địa chỉ cửa hàng</label>
                            <input type="text" name="store_address" placeholder="Địa chỉ Cửa Hàng *">
                            <label  style="color: black;" for="">Loại sản phẩm kinh doanh</label>
                            <input type="text" name="store_type" placeholder=" Loại sản phẩm *">

                            <label  style="color: black;" for="">Số điện thoại cửa hàng</label>
                            <input type="text" name="store_phone" placeholder="Số điện thoại Cửa Hàng *">
                            {{-- <p>Ghi chú đơn hàng</p> --}}
                            {{-- <textarea name="shipping_note" placeholder="Ghi chú chi đơn hàng của bạn" rows="16"></textarea> --}}
                            <button style="margin-left:40%; margin-bottom: 20px" type="submit" value="Gửi" name="send_order" class="btn btn-primary">Đăng ký cửa hàng</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2> </h2>
            </div>
        </div>
    </section> <!--/#cart_items-->



@endsection
