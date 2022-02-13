<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
use Cart;
use App\Coupon;
use Illuminate\Support\Facades\Facade;
class CartController extends Controller
{
    public function save_cart(Request $request){

        $productId = $request->productid_hidden;
        $quantity = $request->qty;
       
        $data_cart = DB::table('product')->where('product_id',$productId)->first();
        
        //Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        //Cart::destroy();
        $data['id'] = $data_cart->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $data_cart->product_name;
        $data['price'] = $data_cart->product_price;
        $data['weight'] = $data_cart->product_id;
        $data['options']['image'] = $data_cart->product_image;
        Cart::add($data);
        $content = Cart::content();
        return back()->withInput();
        // Cart::destroy();
    }
    public function show_cart(){
         $cate = DB::table('category')->where('category_status','0')
        ->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $content = Cart::content();
        return view('pages.cart.cart',compact('cate','brand','content'));
    }
    public function delete_cart($rowId){
        Cart::update($rowId, 0);
        return Redirect::to('/show-cart');
    }
    public function update_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/show-cart');
    }

    public function add_cart_ajax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if ($cart==true) {
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if ($val['product_id']==$data['cart_product_id']) {
                    $is_avaiable++;
                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                'session_id' => $session_id,
                'product_id' => $data['cart_product_id'],
                'product_name' => $data['cart_product_name'],
                'product_price' => $data['cart_product_price'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_id' => $data['cart_product_id'],
                'product_name' => $data['cart_product_name'],
                'product_price' => $data['cart_product_price'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
            );
        }
        Session::put('cart',$cart);
        Session::save();
    }

    public function cart_ajax(Request $request){
         $cate = DB::table('category')->where('category_status','0')
        ->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.cart.cart_ajax',compact('cate','brand'));
    }

    public function check_coupon(Request $request){
        $data = $request->all();

        $coupon = Coupon::where('coupon_code',$data['coupon'])->first();

        if ($coupon) {
            $count_coupon = $coupon->count();
            if ($count_coupon>0) {
                $coupon_session = Session::get('coupon');
                if ($coupon_session==true) {
                    $is_avaiable = 0;
                    if ($is_avaiable==0) {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        Session::put('coupon', $cou);
                    }
                }else{
                     $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        Session::put('coupon', $cou);    
                }
                Session::save();
                return Redirect()->back()->with('message','Them ma giam gia thanh cong');
            }
        }else{
            return Redirect()->back()->with('message','Them ma giam gia khong hop le');
        }
    }


}
