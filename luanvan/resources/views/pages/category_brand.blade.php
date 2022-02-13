  <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh mục sản phẩm </h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($cate as $key => $cates)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cates->category_id)}}">{{$cates->category_name}}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div><!--/category-products-->

                    {{-- <div class="brands_products"><!--brands_products-->
                        <h2>Thương hiệu</h2>
                        <div class="brands-name">
                            @foreach($brand as $key => $brands)
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brands->brand_id)}}">
                                        <span class="pull-right">(1000 sp)</span>{{$brands->brand_name}}</a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div><!--/brands_products-->
 --}}