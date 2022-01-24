<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use DB;
use Mail;
use App\Http\Requests;
use Session;
Session_start();

class TitleandtagController extends Controller
{

   function AdminAuthCheck(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return;
      }else{
        return Redirect::to('Admin/Login/Page')->send();
      }
    }

   public function titleandtag(){
     $this->AdminAuthCheck();
   	$title = DB::table('titleandtags')
   	         ->first();

   	 return view('admin.title')->with('title',$title);         
   }



   public function save_title(Request $request){
 $this->AdminAuthCheck();
   	$date = array();
    $date['title'] = $request->title;
    $date['tags'] = $request->tags;
    $date['deteles'] = $request->deteles;

  DB::table('titleandtags')->update($date); 

  Session::put('massage','Update Website Title And Tags');

  return Redirect::to('titleandtag');



   }
}
