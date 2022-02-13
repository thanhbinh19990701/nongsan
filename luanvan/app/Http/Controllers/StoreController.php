<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
use Cart;
use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;


class StoreController extends Controller
{
    public function cua_hang($adminId){


        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        // $admin = DB::table('customer')->where('customer_email','0')->orderby('customer_id','desc')->get();
        // $admin = DB::table('admin')->orderby('admin_id','desc')->get();
        $detail_product = DB::table('product')
            ->join('customer','customer.customer_id','=','product.user_id')
            ->where('customer.customer_id',$adminId)->paginate(12);

        $admin = DB::table('product')
        ->join('customer','customer.customer_id','=','product.user_id')
        ->where('customer.customer_id',$adminId)->limit(1)->get();

        foreach ($detail_product as $key => $detail){
            $customer_id = $detail->customer_id;
        }


         // $related_product = DB::table('product')
         //    ->join('customer','customer.customer_id','=','product.user_id')
            
         //    // ->join('admin','admin.admin_id','=','product.user_id')
         //    ->where('customer.customer_id',$customer_id)->limit(3)->whereNotIn('product.product_id',[$adminId])->get();


        return view('store.san_pham_store',compact('cate','brand','detail_product','admin'));
    


        // $admin = DB::table('product')
        // ->join('customer','customer.customer_id','product.product_id')
        // ->where('customer_id',$adminId)->select('product.*','customer.*')->get();
        // // dd($admin);
        // return view('store.san_pham_store',compact('admin'));


        // $cate = DB::table('category')->orderby('category_id','desc')->get();
        // $brand = DB::table('brand')->orderby('brand_id','desc')->get();
        // $ad = DB::table('product')->orderby('product_id','desc')->get();


        // $edit = DB::table('customer')->where('customer_id', $adminId)->get();
        // $manager_product = view('store.san_pham_store')->with('edit', $edit)->with('cate',$cate)
        // ->with('brand', $brand)->with('ad',$ad);
        // return view('store.san_pham_store')->with('store.san_pham_store', $manager_product);

        // $admin = DB::table('customer')

        // $admin_by_id = DB::table('customer')->orderby('customer_id','desc')->get();
        // // $brand = DB::table('product')->orderby('product_id','desc')->get();

        // $admin = DB::table('product')->where('product_id', $product_id)->get();
        // // $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate',$cate)
        // // ->with('brand', $brand);
        // return view('store.san_pham_store',compact('name','edit_product'));


        // $admin_by_id = DB::table('customer')
        //     ->join('product','customer.customer_id','=','product.user_id')
        //     ->select('customer.customer_id','product.*')->paginate(12);
        // $admin = DB::table('customer')
        //     ->join('product','customer.customer_id','=','product.user_id')
        //     ->select('customer.*','product.*')->paginate(1);

        // return view('store.san_pham_store',compact('admin_by_id','admin'));


    }
}
