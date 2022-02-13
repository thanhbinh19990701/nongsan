<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
use App\Brand;
class BrandProduct extends Controller
{
    public function add_brand_product(){
        return view('admin.add_brand');
    }
    public function all_brand_product(){
        // $all_brand = DB::table('brand')->get();
        $all_brand = Brand::orderby('brand_id','desc')->get();
        $manager_brand = view('admin.all_brand')->with('all_brand', $all_brand);
        return view('admin_layout')->with('admin.all_brand', $manager_brand);
    }
    public function save_brand_product(Request $request){
        $data = $request->all();
        $brand = new Brand();
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_desc = $data['brand_product_desc'];
        $brand->brand_status = $data['brand_product_status'];
        $brand->save();

        // $data = array();
        // $data['brand_name'] = $request->brand_product_name;
        // $data['brand_desc'] = $request->brand_product_desc;
        // $data['brand_status'] = $request->brand_product_status;

        // DB::table('brand')->insert($data);
        Session::put('message','Thêm thương hiệu thành công');
        return Redirect::to('add-brand-product');

    }
    public function unactive_brand_product($brand_id){
        DB::table('brand')->where('brand_id', $brand_id)->update(['brand_status'=>1]);
        Session::put('message','Ẩn thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }
    public function active_brand_product($brand_id){
        DB::table('brand')->where('brand_id', $brand_id)->update(['brand_status'=>0]);
        Session::put('message','Hiển thị thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }
    public function edit_brand_product($brand_id){
        // $edit_brand = DB::table('brand')->where('brand_id', $brand_id)->get();
        $edit_brand = Brand::where('brand_id', $brand_id)->get();
        $manager_brand = view('admin.edit_brand')->with('edit_brand', $edit_brand);
        return view('admin_layout')->with('admin.edit_brand', $manager_brand);
    }
    public function update_brand_product(Request $request, $brand_id){
        $data = $request->all();
        $brand = Brand::find($brand_id);
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_desc = $data['brand_product_desc'];
        // $brand->brand_status = $data['brand_product_status'];
        $brand->save();

        // $data = array();
        // $data['brand_name'] = $request->brand_product_name;
        // $data['brand_desc'] = $request->brand_product_desc;
        // DB::table('brand')->where('brand_id', $brand_id)->update($data);
        Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_id){
        DB::table('brand')->where('brand_id', $brand_id)->delete();
        Session::put('message','Xóa thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }



     // THương hiệu trang chủ
    public function thuonghieu($brand_id){
        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $brandid = DB::table('product')
        ->join('brand','product.brand_id','=','brand.brand_id')
        ->where('product.brand_id',$brand_id)->get();
       $brandname = DB::table('brand')->where('brand.brand_id',$brand_id)->limit(1)
        ->get();

        return view('pages.brand.brand',compact('cate','brand','brandid','brandname'));
    }
}
