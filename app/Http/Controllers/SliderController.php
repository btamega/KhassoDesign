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

class SliderController extends Controller
{   

  function AdminAuthCheck(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return;
      }else{
        return Redirect::to('Admin/Login/Page')->send();
      }
    }


   public function slideradd(){
     $this->AdminAuthCheck();
   	return view('admin.slideradd');
   }


  public function slider_save(Request $request){

 $this->AdminAuthCheck();
  	$date = array();

  	$date['slider_title'] = $request->slider_title;
  	$date['slider_deteles'] = $request->slider_deteles;

  	$image= $request->file('slider_photo');

	if($image){
	    $image_name = str_random(20);
	    $ext = strtolower($image->getClientOriginalExtension());
	    $image_fullName = $image_name.'.'. $ext;
	    $upload_path = 'image/';
	    $image_url= $upload_path.$image_fullName;
	    $secc=$image->move($upload_path,$image_fullName);
	    if($secc){
	        $date['slider_photo']= $image_url;

	   DB::table('sliders')->insert($date);
	   Session::put('massage','Slider Inserted Successfully ! . ');
	   return Redirect::to('slider/add');
	    }
	    
	}
  }



 public function sliderall(){
   $this->AdminAuthCheck();
 	$all_slider = DB::table('sliders')->get();
 	return view('admin.sliderAll')->with('all_slider', $all_slider);
 }


  public function activeslider($slider_id){
     $this->AdminAuthCheck();
  	$slider = DB::table('sliders')->where('slider_id',$slider_id)->update(['slider_status'=>1]);
  	Session::put('massage','Slider is UnActive !'); 
  	return Redirect::to('slider/All');
  }
  public function unactiveslider($slider_id){
     $this->AdminAuthCheck();
       $slider = DB::table('sliders')->where('slider_id',$slider_id)->update(['slider_status'=>0]);
    Session::put('massage','Slider is Active !');   
  	return Redirect::to('slider/All');
  }
  public function deleteslider($slider_id){
      $this->AdminAuthCheck();
     $images = DB::table('sliders')->where('slider_id' ,$slider_id)->get();

      foreach ($images as $image) {
            $image =  $image->slider_photo;
             unlink(public_path($image));
          
        }

  	$slider = DB::table('sliders')->where('slider_id',$slider_id)->delete();
  	Session::put('massage','Slider is Delete !'); 
  	return Redirect::to('slider/All');
  }


   public function sliderEdit($slider_id){
     $this->AdminAuthCheck();
   	 $slider = DB::table('sliders')->where('slider_id',$slider_id)->first();
   	 return view('admin.sliderEdit')->with('slider',$slider);
   }



    public function slider_update($slider_id, Request $request){

 $this->AdminAuthCheck();
        $date = array();

        $date['slider_title'] = $request->slider_title;
     	$date['slider_deteles'] = $request->slider_deteles;

    	 $image= $request->file('slider_photo');
        
        if($image){
      
       $images = DB::table('sliders')->where('slider_id' ,$slider_id)->get();
           foreach ($images as $images) {
            $images =  $images->slider_photo;
             unlink(public_path($images));
          
        }

            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name.'.'. $ext;
            $upload_path = 'image/';
            $image_url= $upload_path.$image_fullName;
            $secc=$image->move($upload_path,$image_fullName);
            if($secc){
                $date['slider_photo']= $image_url;

           DB::table('sliders')->where('slider_id',$slider_id)->update($date);
		           Session::put('massage','Slider Update Successfully ! . ');
		           return Redirect::to('slider/All'); 
            }
            
        }else{
         DB::table('sliders')->where('slider_id',$slider_id)->update($date);
		           Session::put('massage','Slider Update Successfully ! . ');
		           return Redirect::to('slider/All');
        }

    }















}
