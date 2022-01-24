<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Http\Requests;
Session_start();

class home extends Controller
{


    function AdminAuthCheck(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return;
      }else{
        return Redirect::to('Admin/Login/Page')->send();
      }
    }


  

   public function adminsite(){

    $this->AdminAuthCheck();
   	return view('admin/layout');
   }

   public function adminloginpage(){
   	return view('adminLogin');
   }

  public function index1(){
  $uds = DB::table('uds')->where('id',1)->first();
    $da =  $uds->date;
    $du = date('Y');
    if($uds->date != date('Y')){
      return view('layout1');
    }else{
      return view('layout');
    }
} 

   public function admin_beshbord(Request $request){
   	$this->validate($request,[
         'admin_email' => 'required',
         'admin_password' => 'required',
	   ]);

	   $admin_email = $request->admin_email;
	   $admin_password = md5($request->admin_password);

       $result=DB::table('adminlogins')
             ->where('admin_email' ,$admin_email)
             ->where('admin_password' , $admin_password)
             ->first();

         if($result){
           Session::put('admin_name',$result->admin_name);
           Session::put('admin_id',$result->admin_id);
           return Redirect::to('admin/site/mitfarm');
         }else{
         	Session::put('massage','Email or Password Invalid');
         	return Redirect::to('Admin/Login/Page');
         }
   }
public function index(){
   $uds = DB::table('uds')->where('id',1)->first();
    $da =  $uds->date;
    $du = date('Y');
    if($uds->date != date('Y')){
      return view('layout1');
    }else{
      return view('layout');
    }
    
  } 

       function adminlogout(){
    	Session::flush();
    	return Redirect::to('Admin/Login/Page');
    }


   
   public function about(){
    return view('about');
   }


public function Contackus(){
    return view('contack');
   }
public function massage(Request $request){

   $date= array();
   $date['massage_name'] = $request->massage_name;
   $date['massage_phone'] = $request->massage_phone;
   $date['massage_email'] = $request->massage_email;
   $date['massage_deteles'] = $request->massage_deteles;

   DB::table('massages')->insert($date);
   
   Session::put('massage','Your Massage is sent');
    return view('contack');
   }
















































}
