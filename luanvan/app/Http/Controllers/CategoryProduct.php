<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category');
    }
    public function all_category_product(){
        $all_category = DB::table('category')->get();
        $manager_category = view('admin.all_category')->with('all_category', $all_category);
        return view('admin_layout')->with('admin.all_category', $manager_category);
    }
    public function save_category_product(Request $request){

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('category')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-category-product');

    }
    public function unactive_category_product($category_id){
        DB::table('category')->where('category_id', $category_id)->update(['category_status'=>1]);
        Session::put('message','Ẩn danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function active_category_product($category_id){
        DB::table('category')->where('category_id', $category_id)->update(['category_status'=>0]);
        Session::put('message','Hiển thị danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_id){
        $edit_category = DB::table('category')->where('category_id', $category_id)->get();
        $manager_category = view('admin.edit_category')->with('edit_category', $edit_category);
        return view('admin_layout')->with('admin.edit_category', $manager_category);
    }
    public function update_category_product(Request $request, $category_id){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('category')->where('category_id', $category_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_id){
        DB::table('category')->where('category_id', $category_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }


    // DAnh mục trang chủ
    public function danhmuc($category_id){
        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $categoryid = DB::table('product')
        ->join('category','product.category_id','=','category.category_id')
        ->where('product.category_id',$category_id)->get();
        $categoryname = DB::table('category')->where('category.category_id',$category_id)->limit(1)
        ->get();

        return view('pages.category.category',compact('cate','brand','categoryid','categoryname'));
    }


}
