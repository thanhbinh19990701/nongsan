 <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.min.css')}}">

@extends('admin_layout')
@section('title')
<title>Thống kê</title>
@endsection
@section('admin_content')
 <div class="content">
      <div class="container-fluid">
      	<div class="row">
          <div  class="col-lg-6 col-9">
            <!-- small box -->
            <div style="height: 200px;" class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align:center;">Đơn hàng <sup style="font-size: 20px"></sup></h3> <br>
               <h3 style="text-align:center;">{{$order_count}}<sup style="font-size: 20px"></sup></h3> <br>

                <p style="text-align:center;">Đơn hàng đã được đặt</p>
              </div>
              <div style="margin-top: 30px;" class="icon">
                <i style="    margin-top: 35px;" class="ion ion-bag"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-9">
            <!-- small box -->
             @php
            $total = 0;
            $subtotal = 0;
            @endphp
            <div style="height: 200px;" class="small-box bg-success">
               @foreach($price_count as $key => $price_count)
              @php
                $total += $price_count->product_sale_quantity * $price_count->product_price;
                $subtotal += $price_count->product_sale_quantity ;
              @endphp
              @endforeach
              <div class="inner">
                 <h3 style="text-align:center;">Sản phẩm <sup style="font-size: 20px"></sup></h3> <br>
                 <h3 style="text-align:center;">{{$subtotal}}</h3>
                
              
                <p style="text-align:center;" >Sản phẩm đã được bán ra</p>
              </div>
              <div class="icon">
                <i style="    margin-top: 35px;" class="ion ion-stats-bars"></i>
              </div>
             {{--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>

          <!-- ./col -->
        {{--   <div class="col-lg-6 col-9">
            <!-- small box -->
            <div style="height: 200px;" class="small-box bg-warning">
              
              <div class="inner">
                <h3 style="text-align:center;">Người dùng <sup style="font-size: 20px"></sup></h3><br>
                <h3 style="text-align:center;">{{$user_count}}</h3>

                <p></p>
              </div>
              <div class="icon">
                <i style="    margin-top: 35px;" class="ion ion-person-add"></i>
              </div>
             {{--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
           {{--  </div>
          </div>  --}}--}}
          <!-- ./col -->
          <div class="col-lg-6 col-9">
            {{-- @php
            $total = 0;
            $subtotal = 0;
            @endphp --}}
            <!-- small box -->
            <div style="height: 200px;" class="small-box bg-danger">
              
              {{-- @foreach($price_count as $key => $price_count)
              @php
               $subtotal += $price_count->product_sale_quantity ;
                $total += $price_count->product_sale_quantity * $price_count->product_price;
               
              @endphp
              @endforeach --}}
              <div class="inner">
              <h3 style="text-align:center;">Doanh thu <sup style="font-size: 20px"></sup></h3><br>
                <h3 style="text-align:center;">{{number_format($total,0,',','.')}}vnđ</h3>
               

                <p style="text-align:center;"></p>
              </div>
              <div class="icon">
                <p>{{$total}}</p>
                <i style="    margin-top: 35px;" class="ion ion-pie-graph"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
        </div>
        {{-- <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div> --}}
          <!-- /.col-md-6 -->
      {{--     <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Sales</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$18,230.00</span>
                    <span>Sales Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div> --}}
      <!-- /.container-fluid -->
    </div>
@endsection


<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>