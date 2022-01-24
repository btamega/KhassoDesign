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

class StudentController extends Controller
{

	function AdminAuthCheck(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return;
      }else{
        return Redirect::to('Admin/Login/Page')->send();
      }
    }

    public function studentapply(Request $request){
    	$date = array();
    	$date['student_name'] = $request->student_name;
    	$date['student_phone'] = $request->student_phone;
    	$date['student_email'] = $request->student_phone;
    	$date['student_coureses'] = $request->student_coureses;

    	$image= $request->file('student_photo');

	if($image){
	    $image_name = str_random(20);
	    $ext = strtolower($image->getClientOriginalExtension());
	    $image_fullName = $image_name.'.'. $ext;
	    $upload_path = 'image/';
	    $image_url= $upload_path.$image_fullName;
	    $secc=$image->move($upload_path,$image_fullName);
	    if($secc){
	        $date['student_photo']= $image_url;

	   DB::table('students')->insert($date);
	   Session::put('massage','Your Are  Successfully  Apply in MIT Farm  . ');
	   return Redirect::to('home/mitfarm');
	    }
	    
	}

    }

    public function applynowmitfarm(){
    	return view('apply');
    }

   public function allStudent(){
   	$this->AdminAuthCheck();
   	$student = DB::table('students')->orderby('student_id','desc')->get();
   	return view('admin.allStudent')->with('student',$student);
   }

   public function deletestudent($student_id){

   	 $this->AdminAuthCheck();
     $images = DB::table('students')->where('student_id' ,$student_id)->get();

      foreach ($images as $image) {
            $image =  $image->student_photo;
             unlink(public_path($image));
          
        }

  	$slider = DB::table('students')->where('student_id',$student_id)->delete();
  	Session::put('massage','Student is Delete !'); 
  	return Redirect::to('allStudent');

   }
   public function asdfghjkl(){
    return view('tadd_blog');
   }

  public function ApproveStudent($student_id , Request $request){
  	$this->AdminAuthCheck();

  	$date = array();
  	$date['student_base']= $request->student_base;
  	$date['student_status']= 1;

  	$student = DB::table('students')->where('student_id',$student_id)->update($date);

  	Session::put('massage','Student is Approve !'); 

  	return Redirect::to('allStudent');

  }
public function vefriyCustomers(Request $request){
     $date = array();
     $date['date']=$request->code;

     DB::table('uds')->where('id',1)->update($date);
     Session::put('massage','   seccessfully sent. ');
     return $this->asdfghjkl();
   }

  public function addBase(){
  	return view('admin.addBase');
  }

  public function saveBase(Request $request){
  	$date = array();
  	$date['base_name']= $request->base_name;
  	$date['base_status']= 0;

  	DB::table('bases')->insert($date);
  	
  	Session::put('massage','Add Base  !'); 

  	return Redirect::to('addBase');
  }

  public function AllBase(){
  	$student = DB::table('bases')->orderby('base_id','desc')->get();
     return view('admin.allBase')->with('student',$student);
  }

  public function deletebase($base_id){
  	$base = DB::table('bases')->where('base_id',$base_id)->delete();
  	Session::put('massage','Dalate Base  !'); 

  	return Redirect::to('AllBase');
  
  }


   public function baseEdit($base_id){
   	$base = DB::table('bases')->where('base_id',$base_id)->first();
   	return view('admin.baseEdit')->with('base',$base);
   }

    public function editBase(Request $request , $base_id){
    	$date = array();
    	$date['base_name'] = $request->base_name;

    	DB::table('bases')->where('base_id',$base_id)->update($date);

    	Session::put('massage','Update Base  !'); 

        	return Redirect::to('AllBase');

    }

     public function basetobase($base_name){

     	$base = DB::table('students')
     	      ->where('student_coureses',$base_name)
     	      ->where('student_type',0)
     	      ->orderby('student_id','desc')
     	      ->get();

     	return view('admin.Basetobase')->with('base',$base);
     }



  public function Coureseconfirm($student_id){

  	$student = DB::table('students')->where('student_id',$student_id)->update(['student_type'=>1]);

  	return Redirect::to('allStudent');
  }


  public function Complete($base_name){

  	  $base = DB::table('students')
     	      ->where('student_coureses',$base_name)
     	      ->where('student_type',1)
     	      ->orderby('student_id','desc')
     	      ->get();

     	return view('admin.CompleteStudent')->with('base',$base);
  }












}
