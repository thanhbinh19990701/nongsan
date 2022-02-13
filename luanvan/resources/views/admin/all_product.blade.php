@extends('admin_layout')
@section('title')
<title>Sản Phẩm</title>
@endsection
@section('admin_content')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê sản phẩm
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
                {{-- <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
          </span>
                    </div>
                </div> --}}
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
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Danh mục</th>
                        <th>Thương hiệu</th>
                        <th>Hiển thị</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_product as $key => $product)
                        <tr>
{{--                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>--}}
                            <td>{{$product->product_id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{number_format($product->product_price)}} vnd</td>
                            <td><img src="public/uploads/product/{{$product->product_image}}"
                                    style="width: 100px" height="100px" alt=""></td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td><span class="text-ellipsis">
                                <?php
                                    if ($product->product_status==0){
                                    ?>
                                <a href="{{URL::to('/unactive-product/'.$product->product_id)}}">
                                    <span style="font-size: 24px" class="fa-thums-styling fa ">ẩn</span>
                                </a>
                                <?php
                                    }else{
                                    ?>
                                <a href="{{URL::to('/active-product/'.$product->product_id)}}">
                                    <span style="font-size: 24px" class="fa-thums-styling fa ">hiện</span>
                                </a>
                                <?php
                                    }
                                    ?>
                            </span></td>

                            <td>
                                <a href="{{URL::to('/edit-product/'.$product->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-product/'.$product->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>

        </div>

    </div>

@endsection
