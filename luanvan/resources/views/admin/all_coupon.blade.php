@extends('admin_layout')
@section('admin_content')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê mã giảm giá
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
{{--                    <select class="input-sm form-control w-sm inline v-middle">--}}
{{--                        <option value="0">Bulk action</option>--}}
{{--                        <option value="1">Delete selected</option>--}}
{{--                        <option value="2">Bulk edit</option>--}}
{{--                        <option value="3">Export</option>--}}
{{--                    </select>--}}
{{--                    <button class="btn btn-sm btn-default">Apply</button>--}}
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    {{-- <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Bạn vần tìm gì?">
                        <span class="input-group-btn">
                        <a href="#add-brand-product"><button class="btn btn-sm btn-default" type="button">Tìm kiếm!</button></a>
                        </span>
                    </div> --}}
                </div>
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
{{--                        <th style="width:20px;">--}}
{{--                            <label class="i-checks m-b-none">--}}
{{--                                <input type="checkbox"><i></i>--}}
{{--                            </label>--}}
{{--                        </th>--}}
                        <th>#</th>
                        <th>Tên mã giảm giá</th>
                        <th>Mã giảm giá</th>
                        <th>Số lượng giảm giá</th>
                        <th>Điều kiện</th>
                        <th>Số giảm</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($coupon as $key => $coupon)
                        <tr>
                            <td>{{$coupon->coupon_id}}</td>
                            <td>{{$coupon->coupon_name}}</td>
                            <td>{{$coupon->coupon_code}}</td>
                            <td>{{$coupon->coupon_time}}</td>
                            <td><span class="text-ellipsis">
                                <?php
                                    if ($coupon->coupon_condition==1){
                                    ?>
                                Giảm theo %
                                <?php
                                    }else{
                                    ?>
                                Giảm theo giá tiền
                                <?php
                                    }
                                    ?>
                            </span></td>
                            <td><span class="text-ellipsis">
                                <?php
                                    if ($coupon->coupon_condition==1){
                                    ?>
                                Giảm {{$coupon->coupon_number}}%
                                <?php
                                    }else{
                                    ?>
                                Giảm {{number_format($coupon->coupon_number)}} vnd
                                <?php
                                    }
                                    ?>
                            </span></td>

                            <td>
                                
                                <a onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-coupon/'.$coupon->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <footer class="panel-footer">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-sm-5 text-center">--}}
{{--                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-7 text-right text-center-xs">--}}
{{--                        <ul class="pagination pagination-sm m-t-none m-b-none">--}}
{{--                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>--}}
{{--                            <li><a href="">1</a></li>--}}
{{--                            <li><a href="">2</a></li>--}}
{{--                            <li><a href="">3</a></li>--}}
{{--                            <li><a href="">4</a></li>--}}
{{--                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </footer>--}}
        </div>
    </div>
@endsection
