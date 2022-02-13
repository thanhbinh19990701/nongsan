@extends('user.ca_nhan1')

@section('title')
    <title>Trang Chủ</title>
@endsection

@section('content')

    <div class="content-wrapper" style="min-height: 399px;">
        <section class="modul-name main-header">

            <p style="color: black;text-align: center; height: 40px; font-size: 25px"> Đăng Tin</p>
        </section>
        <div style="color: black;" class="position-center">
            <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1"> Tiêu đề </label>
                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung </label>
                    <textarea style="resize: none" rows="8"
                              class="form-control" name="category_product_desc" id="ckediter4" placeholder="Mô tả danh mục" >
                                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Hiển thị</label>
                    <select name="category_product_status" class="form-control input-sm m-bot15">
                        <option value="0">Ẩn </option>
                        <option value="1">Hiện</option>

                    </select>
                </div>

                <button type="submit" name="add_category_product" class="btn btn-info">Thêm Tin Tức</button>
            </form>
        </div>

    </div>



@endsection














