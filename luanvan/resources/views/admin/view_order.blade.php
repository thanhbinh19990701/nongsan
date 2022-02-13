@extends('admin_layout')
@section('title')
<title>Thông Tin </title>
@endsection
@section('admin_content')
<div>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin sản phẩm
            </div>

            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message){
                    echo '<span
                            style=" color: red;font-size: 16px;width: 100%;text-align: center;font-weight: bold;" class="text-alert">
                        ',$message,'
                   </span>';
                    Session::put('message',null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>

                        </tr>
                    </thead>
                     @php
                        $total = 0;
                        @endphp
                    <tbody>
                       @foreach($order_by_id as $key=>$order_by_id)
                       @php
                            $total += $order_by_id->product_price * $order_by_id->product_sale_quantity;
                            
                       @endphp
                       @php
                            $subtotal = $order_by_id->product_price * $order_by_id->product_sale_quantity;
                            
                       @endphp
                        <tr>

                           <td>{{$order_by_id->product_name}}</td>
                            <td>{{$order_by_id->product_sale_quantity}}</td>
                            <td>{{number_format($order_by_id->product_price)}} vnđ</td>
                            <td>{{number_format($subtotal,0,',','.')}} vnđ</td>
                            
                        </tr>
                        @endforeach

                    </tbody>

                     <tr>

                        <td style="color:black; font-weight: bold;"><h3>Tổng tiền</h3></td>
                       
                        <td style="color:black;">
                            <h3>{{number_format($total,0,',','.')}}vnđ</h3>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin người nhận
            </div>

            <div class="table-responsive">

                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Tên người nhận</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Ghi chú</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$order_by_id->shipping_name}}</td>
                            <td>{{$order_by_id->shipping_phone}}</td>
                            <td>{{$order_by_id->shipping_address}}</td>
                             <td>{{$order_by_id->shipping_note}}</td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
    {{-- <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê đơn hàng
            </div>

            <div class="table-responsive">

                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td>{{$order_by_id->product_id}}</td>
                                <td>{{$order_by_id->product_name}}</td>
                                <td>{{$order_by_id->product_sale_quantity}}</td> 
                                <td>{{$order_by_id->product_price}}</td>
                                <td>{{$order_by_id->order_total}}</td>
                            </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
</div>

@endsection
