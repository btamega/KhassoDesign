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

class ServiceController extends Controller
{

   function AdminAuthCheck(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return;
      }else{
        return Redirect::to('Admin/Login/Page')->send();
      }
    }

   public function addservice(){
     $this->AdminAuthCheck();
   	return view('admin.serviceadd');
   }


  public function saveservice(Request $request){
 $this->AdminAuthCheck();
  	 $date= array();

  	  $date['service_name'] = $request->service_name;
  	  $date['service_price'] = $request->service_price;
  	  $date['service_detels'] = $request->service_detels;
  	  $date['service_type'] = $request->service_type;

	 $image= $request->file('service_photo');

	if($image){
	    $image_name = str_random(20);
	    $ext = strtolower($image->getClientOriginalExtension());
	    $image_fullName = $image_name.'.'. $ext;
	    $upload_path = 'image/';
	    $image_url= $upload_path.$image_fullName;
	    $secc=$image->move($upload_path,$image_fullName);
	    if($secc){
	        $date['service_photo']= $image_url;

	   DB::table('services')->insert($date);
	   Session::put('massage','Service Inserted Successfully ! . ');
	   return Redirect::to('addservice');
	    }
	    
	}
  }


  public function allservice(){
 $this->AdminAuthCheck();
  	$all_service = DB::table('services')
     	       ->get();
     	return view('admin.serviceall')->with('all_service',$all_service);

   
  }



    public function activeservice($service_id)
   {
     $this->AdminAuthCheck();
   	  DB::table('services')->where('service_id',$service_id)->update(['service_status'=>1]);
   	  Session::put('massage', 'Service Is UnActive ! .');
   	  return Redirect:: to('allservice');
   }
	public function unactiveservice($service_id)
	   {
       $this->AdminAuthCheck();
	   	  DB::table('services')->where('service_id',$service_id)->update(['service_status'=>0]);
   	  Session::put('massage', 'Service Is Active ! .');
   	  return Redirect:: to('allservice');
	   }

	public function deleteservice($service_id)
		   {
         $this->AdminAuthCheck();
		     $images = DB::table('services')->where('service_id' ,$service_id)->get();

      foreach ($images as $image) {
            $image =  $image->service_photo;
             unlink(public_path($image));
          
        }
		   	  DB::table('services')->where('service_id',$service_id)->delete();
		   	  Session::put('massage', 'Service Is Delete ! .');
		   	  return Redirect:: to('allservice');
		   }


   public function Editservice($service_id){
 $this->AdminAuthCheck();
  $edit_service = DB::table('services')
               ->where('service_id',$service_id)
     	       ->first();
     	return view('admin.serviceEdit')->with('edit_service',$edit_service);

   }
  

  public function update_service(Request $request , $service_id){
        $this->AdminAuthCheck();
       	   $date=array();
		      $date['service_name'] = $request->service_name;
		  	  $date['service_price'] = $request->service_price;
		  	  $date['service_detels'] = $request->service_detels;
		  	  $date['service_type'] = $request->service_type;
 
         $image= $request->file('service_photo');
        
        if($image){
      
       $images = DB::table('services')->where('service_id' ,$service_id)->get();
           foreach ($images as $images) {
            $images =  $images->service_photo;
             unlink(public_path($images));
          
        }

            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullName = $image_name.'.'. $ext;
            $upload_path = 'image/';
            $image_url= $upload_path.$image_fullName;
            $secc=$image->move($upload_path,$image_fullName);
            if($secc){
                $date['service_photo']= $image_url;

           DB::table('services')->where('service_id',$service_id)->update($date);
		           Session::put('massage','Service Update Successfully ! . ');
		           return Redirect::to('allservice'); 
            }
            
        }else{
         DB::table('services')->where('service_id',$service_id)->update($date);
		           Session::put('massage','Service Update Successfully ! . ');
		           return Redirect::to('allservice');
        }

  }

  

  public function detelespage($service_id){
    $service = DB::table('services')->where('service_id',$service_id)->first();
    return view('couressdeteles')->with('service',$service);
  }

}
