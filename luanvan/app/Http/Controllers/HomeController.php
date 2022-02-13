<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use Illuminate\Support\Facades\Auth;
use DB;
use Mail;
use App\User;
use App\Store;
use App\Admin;
class HomeController extends Controller
{
    function _construct(){
        if (Auth::check()){
            view()->share('admin',Auth::user());
        }
    } 
    public function index(Request $request){
        
        $meta_desc = " Chuyên phân phối, cung cấp nông sản ";
        $meta_keywords = " Nông sản được trồng organic";
        $meta_title = " Nông sản sạch cần thơ";
        $url_canonical = $request->url();

        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $product = DB::table('product')->where('product_status','0')->orderby('product_id','desc')->paginate(40);
        return view('pages.home',compact('cate','brand','product','meta_desc','meta_title','meta_keywords','url_canonical'));
    }

    public function timkiem(Request $request){
        $keywords = $request->keywords_submit;
        $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $search_product = DB::table('product')->where('product_name','like','%'.$keywords.'%')->get();
        return view('pages.sanpham.timkiem',compact('cate','brand','search_product'));
    }


    public function send_mail(){
        $to_name = 'thanh binh';
        $to_email = 'thanhbinh@gmai;.com';
        $data = array("name"=>"mail từ tài khoản khách hàng","body"=>"Mail gửi về vaasan đề hàng hóa");
        Mail::send('pages.sendmail',$data,function($message) use($to_name,$to_email){
            // $message = to($to_email)->subject('Quên mật khẩu admin binh.com');
            // $message = from($to_email, $to_name);
        });
        return Redirect('/');
    }

    //Trang ca nhan
    public function ca_nhan(){
        
        return view('user.ca_nhan');
    }
     public function ca_nhan1(){
         if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        $ad = DB::table('customer')->where('customer_id',$admin_id)->orderby('customer.customer_id')->first();
         $cate = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
         $brand = DB::table('brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('user.ca_nhan1',compact('brand','cate','ad'));
    }

    // store
    public function store(){
        if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        $ad = DB::table('customer')->where('customer_id',$admin_id)->orderby('customer.customer_id')->first();
        return view('store.dangkicuahang', compact('ad'));
    }

    public function save_store(Request $request){
        $admin = DB::table('admin')->orderby('admin_id', 'desc' )->get();
        $cus = DB::table('customer')->where('customer_id', 'desc' )->get();
        $data = array();
        $data ['store_name'] = $request->store_name;

        $data ['store_email'] = $request->store_email;
        $data ['store_phone'] = $request->store_phone;
        $data ['store_address'] = $request->store_address;
        

         $get_image = $request->file('store_img');
         $get_name = $get_image->getClientOriginalName();
         $get_image->move('public/uploads/product',$get_name);
         $data['store_img'] = $get_name;
        
        if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        $data['customer_id'] =$admin_id;

        $data1 = array();
        $data1 ['store'] = $request->store_name;


        $store_id = DB::table('store')->insertGetId($data);

        $name = DB::table('customer')->where('customer_id',$admin_id)->update($data1);
        // Session::put('store_id',$store_id);
        Session::put('message','Đăng ký cửa hàng thành công');
        return Redirect::to('/thong-tin');
    }
    public function theo_doi(){
         if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
         $all_order = DB::table('order')
           ->where('customer_id',$admin_id)
           
            ->orderby('order.customer_id','desc')->get();
        $ad = DB::table('customer')->where('customer_id',$admin_id)->orderby('customer.customer_id')->first();
        $manager_order = view('user.theo_doi_don_hang')->with('all_order', $all_order)->with('ad',$ad);
        return view('user.ca_nhan1')->with('user.theo_doi_don_hang', $manager_order)->with('ad',$ad);
        
    }
    public function theo_doi_co_so(){
        return view('user.theo_doi_co_so');
    }
    public function yeu_thich(){

        return view('user.sp_yeu_thich');
    }
    public function thong_tin(){
        // if (auth()->check()){
        // }
        // $admin_id = Session::get('customer_name');
        // dd($admin_id);
         // $id = Auth::user('customer');
         // dd($id);

        
       

         if (auth()->check()){
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
        }
        $ad = DB::table('customer')->where('customer_id',$admin_id)->orderby('customer.customer_id')->first();
        return view('user.thong_tin', compact('ad'));

    }
    public function dang_tin(){ 
        return view('user.dang_tin');
    }
    public function dang_ky(){
        return view('user.dang_ky_cua_hang');
    }
    public function xem_shop(){
        return view('user.xem_shop');
    }
}
