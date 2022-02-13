@extends('admin_layout')
@section('title')
<title>Thêm sản phẩm</title>
@endsection
@section('admin_content')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm  sản phẩm
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
                        <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="text" name="product_name"
                                data-validation="required"
                                data-validation-error-msg=" Vui lòng nhập tên sản phẩm "
                                class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="number"
                                    data-validation="number"
                                    data-validation-error-msg=" Vui lòng nhập giá sản phẩm "
                                    name="product_price" class="form-control" id="exampleInputEmail1" placeholder="giá">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="8"
                                          class="form-control" name="product_desc" id="ckediter1" placeholder="Mô tả sản phẩm" >
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="8"
                                          class="form-control" name="product_content" id="ckediter" placeholder="Nội dung sản phẩm" >
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Danh mục sản phẩm</label>
                                <select name="product_cate" class="form-control input-sm m-bot15">
                                    <option value="0">---Chọn danh mục--- </option>
                                    @foreach($cate as $key => $cate)

                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}  </option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Thương hiệu sản phẩm</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                     <option value="0">---Chọn thương hiệu--- </option>
                                    @foreach($brand as $key => $brand)
                                   
                                    <option  value="{{$brand->brand_id}}">{{$brand->brand_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                                <div class="hidden"   class="hiden form-group">
                                    <span name="admin_id"  class="form-control input-sm m-bot15">
                                    </span>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hiển thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn </option>
                                    <option value="1">Hiện</option>

                                </select>
                            </div>

                            <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                        </form>
                    </div>

                </div>
            </section>
        </div>
        
    </div>
@endsection
