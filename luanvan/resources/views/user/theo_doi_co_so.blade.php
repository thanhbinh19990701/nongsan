@extends('user.ca_nhan1')

@section('title')
    <title>Trang Chủ</title>
@endsection

@section('content')

    <div class="content-wrapper" style="min-height: 399px;">
        <section class="modul-name main-header">
            <a href="#" class="sidebar-toggle toggle-btn-collaspe" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            Theo dõi cơ sở
        </section>
        {{--                            <div class="position-center">--}}
        {{--                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">--}}
        {{--                                    {{csrf_field()}}--}}
        {{--                                    <div class="form-group">--}}
        {{--                                        <label for="exampleInputEmail1">Tên danh mục</label>--}}
        {{--                                        <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">--}}
        {{--                                    </div>--}}
        {{--                                    <div class="form-group">--}}
        {{--                                        <label for="exampleInputPassword1">Mô tả danh mục</label>--}}
        {{--                                        <textarea style="resize: none" rows="8"--}}
        {{--                                                  class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục" >--}}
        {{--                                    </textarea>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="form-group">--}}
        {{--                                        <label for="exampleInputFile">Hiển thị</label>--}}
        {{--                                        <select name="category_product_status" class="form-control input-sm m-bot15">--}}
        {{--                                            <option value="0">Ẩn </option>--}}
        {{--                                            <option value="1">Hiện</option>--}}

        {{--                                        </select>--}}
        {{--                                    </div>--}}

        {{--                                    <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh muc</button>--}}
        {{--                                </form>--}}
        {{--                            </div>--}}
        <content>
            <style>
                .or_status{ font-size: 16px; font-style: italic; color: red}
            </style>

            <div class="user-container">
                <div class="">
                    <div class="box" id="box-area">
                        <div class="box-header">
                            <form style="    padding-left: 0px;" accept-charset="utf-8" class="form-inline pull-left col-xs-9" id="search-form" method="">
                                <div class="form-group"><label for="keyword" class="sr-only">Từ khóa</label><input class="form-control" placeholder="Từ khóa" id="keyword" type="text" name="keyword"></div>
                                {{-- <div class="form-group"><label for="status" class="sr-only">Trạng thái</label><select class="form-control" id="status" name="status"><option value="-1">Tất cả</option><option value="1">Chưa xử lý</option><option value="2">Đã xử lý</option><option value="3"> Đã hủy</option><option value="4">Đã xác nhận</option></select></div> --}}
                                <input class="btn-primary btn" type="submit" value="Tìm kiếm">
                                <input type="hidden" name="_token" value="PRfZ8PUhAJRz972Nt0diorvkOsQajnv1oVpHoZYn"></form>
                            <div class="clearfix"></div>
                        </div>

                        <!-- /.box-header -->
                        <div style="color: black;" class="box-body-table">
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
                                    <th>Nhà cung cấp</th>

                                    <th>Tổng tiền</th>
                                    <th class=" text-center">Thời gian đặt</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <thead>
                                <tr role="row" class="section">
                                    <th>AT Food - Cửa hàng Thực Phẩm Sạch</th>

                                    <th>400.000</th>
                                    <th class=" text-center">28/08/2021</th>
                                    <th> Chưa xử lý</th>
                                    <th></th>
                                </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered table-striped table-hover" id="datatable" width="100%">
                                <colgroup>
                                    <col width="35%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="15%">
                                </colgroup>
                                <thead>
                                <tr role="row" class="heading">
                                    <th>Tên hàng hóa</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Thông tin đơn hàng <span class="or_status">(Chưa xử lý)</span></h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover" id="datatable" width="100%">
                                <colgroup>
                                    <col width="35%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="15%">
                                </colgroup>
                                <thead>
                                <tr role="row" class="heading">
                                    <th>Tên hàng hóa</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Thành tiền</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer form-group">
                            <button type="button" class="btn btn-primary" status="0" order_id="0" id="action">Xác nhận</button>
                            <button type="button" class="btn btn-danger" status="0" id="delete">Hủy đơn</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </content>
    </div>

@endsection
