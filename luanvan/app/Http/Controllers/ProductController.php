<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
use App\Comment;

class ProductController extends Controller
{

    public function add_product(){

//        $user = Auth::guard();
        $cate = DB::table('category')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->orderby('brand_id','desc')->get();
        $admin = Auth::user();

        return view('admin.add_product')->with('cate', $cate)->with('brand',$brand)->with('admin',$admin);
    }
    public function all_product(){
        if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        

        
        $all_product = DB::table('product')
            ->join('category','category.category_id','=','product.category_id')
            ->join('brand','brand.brand_id','=','product.brand_id')
            ->orderby('product_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }
    public function save_product(Request $request){

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_status'] = $request->product_status;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
//        $data['user_id'] =$request->admin_id;
        if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        $data['user_id'] =$admin_id;

        $get_image = $request->file('product_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-product');
        }
        $data['product_image'] ='';
        DB::table('product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product');

    }

    public function save_product1(Request $request){




                DB::beginTransaction();
                $dataProductCreate = [
                    'name' => $request->name,
                    'price' => $request->price,
                    'content' => $request->contents,
                    'user_id' => auth()->id(),
                    'category_id' => $request->category_id
                ];










                $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_status'] = $request->product_status;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
//        $data['user_id'] =$request->admin_id;
        $data['user_id'] = auth()->id();




        $get_image = $request->file('product_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-product');
        }
        $data['product_image'] ='';
        DB::table('product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product');

    }

    public function unactive_product($product_id){
        DB::table('product')->where('product_id', $product_id)->update(['product_status'=>1]);
        Session::put('message','Ẩn sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function active_product($product_id){
        DB::table('product')->where('product_id', $product_id)->update(['product_status'=>0]);
        Session::put('message','Hiển thị sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function edit_product($product_id){
        $cate = DB::table('category')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->orderby('brand_id','desc')->get();

        $edit_product = DB::table('product')->where('product_id', $product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate',$cate)
        ->with('brand', $brand);
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }
    public function update_product(Request $request, $product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_status'] = $request->product_status;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        $data['user_id'] =$admin_id;

        $get_image = $request->file('product_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('product')->where('product_id',$product_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return Redirect::to('all-product');
        }
        DB::table('product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công ');
        return Redirect::to('all-product');
    }
    public function delete_product($product_id){
        DB::table('product')->where('product_id', $product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }


    //Chi tiet san pham
    public function chitiet($product_id){
        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $admin = DB::table('customer')->where('customer_name','0')->orderby('customer_id','desc')->get();
        // $admin = DB::table('admin')->orderby('admin_id','desc')->get();
        $detail_product = DB::table('product')
            ->join('category','category.category_id','=','product.category_id')
            ->join('brand','brand.brand_id','=','product.brand_id')
            ->join('customer','customer.customer_id','=','product.user_id')
            
            ->where('product.product_id',$product_id)->get();
        $comment = Comment::join('product','product.product_id','=','comment.product_id')->where('product.product_id',$product_id)->get();

        foreach ($detail_product as $key => $detail){
            $category_id = $detail->category_id;
        }

         $related_product = DB::table('product')
            ->join('category','category.category_id','=','product.category_id')
            ->join('brand','brand.brand_id','=','product.brand_id')
            // ->join('admin','admin.admin_id','=','product.user_id')
            ->where('category.category_id',$category_id)->limit(3)->whereNotIn('product.product_id',[$product_id])->get();


        return view('pages.sanpham.chitietsanpham',compact('cate','brand','detail_product','related_product','comment'));
    }

    public function comment(Request $request, $product_id){
        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $detail_product = DB::table('product')
            ->join('category','category.category_id','=','product.category_id')
            ->join('brand','brand.brand_id','=','product.brand_id')
            ->join('customer','customer.customer_id','=','product.user_id')
            
            ->where('product.product_id',$product_id)->get();
        $comment = Comment::join('product','product.product_id','=','comment.product_id')->where('product.product_id',$product_id)->orderby('comment_id','desc')->get();

        foreach ($detail_product as $key => $detail){
            $category_id = $detail->category_id;
        }
         $comment = Comment::join('product','product.product_id','=','comment.product_id')->where('product.product_id',$product_id)->get();

         $related_product = DB::table('product')
            ->join('category','category.category_id','=','product.category_id')
            ->join('brand','brand.brand_id','=','product.brand_id')
            // ->join('admin','admin.admin_id','=','product.user_id')
            ->where('category.category_id',$category_id)->limit(3)->whereNotIn('product.product_id',[$product_id])->get();
         
        $data = $request->all();
        $comment = new Comment;
        $comment->comment_name = $data['comment_name'];
        $comment->comment_email = $data['comment_email'];
        $comment->product_id = $data['product_id'];
        $comment->comment_desc = $data['comment_desc'];
        $comment->save();
        return back()->withInput();
        // return view('pages.sanpham.chitietsanpham', compact('cate','brand','detail_product','related_product','comment'));
        // return Redirect::to('chi-tiet-san-pham');

        
    }
}

