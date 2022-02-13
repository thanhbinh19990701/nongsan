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

class CheckoutController extends Controller
{
    public function login_checkout(){
        return view('pages.checkout.login-checkout'); 
    }
    public function add_customer(Request $request){
        $data = array();
        $data ['customer_name'] = $request->customer_name;
        $data ['customer_email'] = $request->customer_email;
        $data ['customer_phone'] = $request->customer_phone;
        $data ['customer_password'] = $request->customer_password;

        $customer_id  = DB::table('customer')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);

        return Redirect('/checkout');

    }


    public function checkout(){
          if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        $ad = DB::table('customer')->where('customer_id',$admin_id)->orderby('customer.customer_id')->first();
        return view('pages.checkout.checkout', compact('ad'));
    }

    public function save_checkout(Request $request){
       
        $data ['shipping_name'] = $request->shipping_name;
        $data ['shipping_email'] = $request->shipping_email;
        $data ['shipping_phone'] = $request->shipping_phone;
        $data ['shipping_address'] = $request->shipping_address;
        $data ['shipping_note'] = $request->shipping_note;

        $shipping_id = DB::table('shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);

        return Redirect('/payment');
    }
    public function payment(){
        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.checkout.payment',compact('cate','brand'));

    }

    public function order_place(Request $request){
        //get payment method

        $data = array();
        $data ['payment_method'] = $request->payment_option;
        $data ['payment_status'] = 'Đang chờ xử lí';
        $payment_id = DB::table('payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data ['customer_id'] = Session::get('customer_id');
        $order_data ['shipping_id'] = Session::get('shipping_id');
        $order_data ['payment_id'] = $payment_id;
        $order_data ['order_total'] = Cart::subtotal();
        $order_data ['order_status'] = '0';
        $order_id = DB::table('order')->insertGetId($order_data);


         //insert order_detail
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data ['order_id'] = $order_id;
            $order_d_data ['product_id'] = $v_content->id;
            $order_d_data ['product_name'] = $v_content->name;
            $order_d_data ['product_price'] = $v_content->price;
            $order_d_data ['product_sale_quantity'] = $v_content->qty;
            DB::table('order_detail')->insert($order_d_data);
        }

        if ($data ['payment_method'] == 1) {
            echo 'Thanh toán bằng ATM';
        }elseif($data ['payment_method'] == 2){
            Cart::destroy();
            $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
            $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

            return view('pages.checkout.handcash',compact('cate','brand'));
        }else{
            echo 'Thanh toán bằng thẻ ghi nợ';
        }



        //return Redirect('/payment');
    }

    public function unactive_order($order_id){
        DB::table('order')->where('order_id', $order_id)->update(['order_status'=>1]);
        Session::put('message','Ẩn sản phẩm thành công');
        return Redirect::to('manage-order');
    }
    public function active_order($order_id){
        DB::table('order')->where('order_id', $order_id)->update(['order_status'=>0]);
        Session::put('message','check đơn hàng thành công');
        return Redirect::to('manage-order');
    }


    public function logout_checkout(){
        Session::flush();
        return Redirect('/login-checkout');
    }

    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = $request->password_account;
        $result =DB::table('customer')->where('customer_email',$email)->where('customer_password', $password)->first();
        if ($result) {
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        }
    }
    public function manage_order(){
        $all_order = DB::table('order')
            ->join('customer','order.customer_id','=','customer.customer_id')
            
            ->select('order.*','customer.customer_name')
            ->orderby('order.order_id','desc')->get();
        $manager_order = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manage_order', $manager_order);
    }

    public function view_order($orderId){
        $order_by_id = DB::table('order')
            ->join('customer','order.customer_id','=','customer.customer_id')
            ->join('shipping','order.shipping_id','=','shipping.shipping_id')
            ->join('order_detail','order.order_id','=','order_detail.order_id')
            ->select('order.*','customer.*','shipping.*','order_detail.*')->where('order.order_id',$orderId)->get();
            // foreach($order_by_id as $key=>$order_by_id){

            // }

        $manager_order_by_id = view('admin.view_order')->with('order_by_id', $order_by_id);
        return view('admin_layout')->with('admin.view_order', $manager_order_by_id)->with('order-by-id',$order_by_id);
    }
    public function delete_order($orderId){
         DB::table('order')->where('order_id', $orderId)->delete();
        Session::put('message','Xóa sản đơn hàng thành công');
        return Redirect::to('manage-order');
    }

    public function handcash(){

        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
         return view('pages.checkout.handcash',compact('cate','brand'));
    }

}
