<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
use Auth;


class AdminController extends Controller
{
    public function AuthLogin(){
        if (auth()->check()){
            return redirect()->to('dashboard');
        }
        $admin_id = Session::get('customer_id');
        if ($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('customer')->send();
        }
    }
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){

        $customer_email = $request->customer_email;
        $customer_password = $request->customer_password;

        $result = DB::table('customer')->where('customer_email', $customer_email)->where('customer_password', $customer_password)->first();
        if ($result){
            Session::put('customer_name', $result->customer_name);
            Session::put('customer_id', $result->customer_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu sai. Vui lòng nhập lại');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        $this->AuthLogin();
        Session::put('customer_name', null);
        Session::put('customer_id', null);
        return Redirect::to('/admin');
    }
    public function name(){
       //  Auth::user();

       // $customer_name = $request->customer_name;
       //  return view('admin.name', compact('customer_name'));


        

        $id = Session::get('customer_name');
        $aid = Session::get('customer_id');

        dd($id,$aid);

        // $this->AuthLogin();
        // $this->AuthLogin(function ($request, $next) {
        //     $this->id = Auth::user()->id;
        //     dd($this);

        //     return $next($request);
        // });
    }

    // public function __construct()
    // {
    //     $this->AuthLogin();
        
    //     $this->AuthLogin(function ($request, $next) {
    //         $this->id = Auth::user()->id;
    //         dd($this->id);

            
    //     });
    // }
}
