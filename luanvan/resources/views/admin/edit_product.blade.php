@extends('admin_layout')
@section('title')
<title>Sản Phẩm</title>
@endsection
@section('admin_content')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm
                </header>
                <div class="panel-body">
                    <?php
                    $message = Session::get('message');
                    if ($message){
                        echo '<span style=" color: red;font-size: 16px;width: 100%;text-align: center;font-weight: bold;" class="text-alert">
                        ',$message,'
                   </span>';
                        Session::put('message',null);
                    }
                    ?>
                    <div class="position-center">
                        @foreach($edit_product as $key=>$product)
                        <form role="form" action="{{URL::to('/update-product/'.$product->product_id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1"
                                       value="{{$product->product_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="number" name="product_price" class="form-control" id="exampleInputEmail1"
                                       value="{{$product->product_price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh</label>
                                <input type="file" name="product_image" class="form-control"
                                       id="exampleInputEmail1" >
                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="100px" width="100px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="8"
                                          class="form-control" name="product_desc" id="ckediter3"
                                          value="" >{{$product->product_desc}}
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="8"
                                          class="form-control" name="product_content" id="ckediter2"
                                          value="" >{{$product->product_content}}
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Danh mục sản phẩm</label>
                                <select name="product_cate"  class="form-control input-sm m-bot15">
                                    @foreach($cate as $key => $cate)
                                        @if($cate->category_id==$product->category_id)
                                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}  </option>
                                        @else
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}  </option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Thương hiệu sản phẩm</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach($brand as $key => $brand)
                                        @if($brand->brand_id==$product->brand_id)
                                            <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}} </option>
                                        @else
                                            <option  value="{{$brand->brand_id}}">{{$brand->brand_name}} </option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputFile">User</label>--}}
{{--                                <select name="admin_id" class="form-control input-sm m-bot15">--}}
{{--                                    @foreach($admin as $key => $admin)--}}
{{--                                        <option value="{{$admin->admin_id}}" >{{$admin->admin_name}}</option>--}}
{{--                                    @endforeach--}}

{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="exampleInputFile">Hiển thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn </option>
                                    <option value="1">Hiện</option>

                                </select>
                            </div>

                            <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
