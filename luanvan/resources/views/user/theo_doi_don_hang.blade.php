@extends('user.ca_nhan1')

@section('title')
    <title>Theo Dõi Đơn hàng</title>
@endsection

@section('content')

    <div class="content-wrapper" style="min-height: 399px;">
        <section class="modul-name main-header">

            <p style="color: black;text-align: center; height: 40px; font-size: 25px"> Theo Dõi Đơn Hàng</p>
        </section>
        <content>
            <style>
                .or_status{ font-size: 16px; font-style: italic; color: red}
            </style>

            <div class="user-container">
                <div class="">
                    <div class="box" id="box-area">

                        <div style="color: black; margin-top: 55px;" class="box-body-table"> 
                            @foreach($all_order as $key => $order) 
                            <table class="table table-bordered table-striped table-hover" id="datatable" width="100%">
                                <colgroup>
                                    <col width="35%">

                                    <col width="10%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="5%">
                                </colgroup>
                                <thead>
                                <tr role="row" class="heading">
                                    <th>Tên khách hàng</th>

                                    <th>Tổng tiền</th>
                                    <th class=" text-center">Số điện thoại</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                                </thead>

                               
                                <thead>
                                <tr role="row" class="section">
                                    <td>{{$ad->customer_name}}</td>

                                    <td>{{$order->order_total}}</td>
                                    <td class=" text-center">{{$ad->customer_phone}}</td>
                                    <td> <?php
                                    if ($order->order_status==0){
                                    ?>
                                
                                    <span >Đang xử lý</span>
                                
                                <?php
                                    }else{
                                    ?>
                                <span >Đang giao hàng</span>
                                <?php
                                    }
                                    ?></td>
                                    <th></th>
                                </tr>
                                </thead>
                                
                            </table>
                                 @endforeach
                           
                           {{--  --}}
                            
                        </div>
                          
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

           
        </content>
    
    </div>

@endsection
