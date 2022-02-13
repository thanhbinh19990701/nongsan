@extends('admin_layout')
@section('title')
<title>Danh Mục Sản Phẩm</title>
@endsection
@section('admin_content')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục sản phẩm
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
                    @foreach($edit_category as $key=>$edit)
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/update-category-product/'.$edit->category_id)}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text"
                                       value="{{$edit->category_name}}"
                                       name="category_product_name"
                                       class="form-control"
                                       id="exampleInputEmail1"
                                       placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="8"
                                          class="form-control"
                                          name="category_product_desc"
                                          id="exampleInputPassword1"
                                          placeholder="Mô tả danh mục" >{{$edit->category_desc}}
                            </textarea>
                            </div>


                            <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh muc</button>
                        </form>
                    </div>
                        @endforeach

                </div>
            </section>
        </div>
    </div>
@endsection
