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



class StaticController extends Controller
{
    public function static(){
        $product_count = DB::table('product')->orderby('product_id')->count();
        $order_count = DB::table('order')->count();
        $user_count = DB::table('customer')->count();
        $user_count1 = DB::table('order')->get();
        $price_count = DB::table('order_detail')->get();
        return view('admin.statictical',compact('product_count','order_count','user_count','price_count','user_count1'));
    }
}

