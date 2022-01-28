<?php

use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('test/home');
});
Route::get('/contact', function () {
    return view('test/contact');
});
Route::get('/produits', function () {
    return view('test/produits');
});
Route::get('/cart', function () {
    return view('test/cart');
});
Route::get('/checkout', function () {
    return view('test/checkout');
});
Route::get('/services', function () {
    return view('test/services');
});
Route::get('/blog', function () {
    return view('test/blog-single-sidebar');
});
Route::get('/login', function () {
    return view('Auth/login');
});
Route::get('/signUp', function () {
    return view('Auth/signUp');
});
Route::post('/Auth/login', [SignUpController::class, 'store']);
Route::get("/admin/site/mitfarm", "App\Http\Controllers\home@adminsite")->name('admin/site/mitfarm');

Route::get("about", "App\Http\Controllers\home@about")->name('about');

// Route::get("/", "App\Http\Controllers\home@index1")->name('home');

Route::get("Contact-us", "App\Http\Controllers\home@Contackus")->name('Contackus');

Route::post("massage", "App\Http\Controllers\home@massage")->name('massage');



// Admin site service site ........................


Route::get("addservice", "ServiceController@addservice")->name('addservice');

Route::post("save_service", "ServiceController@saveservice")->name('save_service');

Route::get("allservice", "ServiceController@allservice")->name('allservice');

Route::get("activeservice/{service_id}", "ServiceController@activeservice")->name('activeservice');

Route::get("unactiveservice/{service_id}", "ServiceController@unactiveservice")->name('unactiveservice');

Route::get("/home", "App\Http\Controllers\home@index")->name('home');

Route::get("deleteservice/{service_id}", "ServiceController@deleteservice")->name('deleteservice');

Route::get("Editservice/{service_id}", "ServiceController@Editservice")->name('Editservice');

Route::post("update_service/{service_id}", "ServiceController@update_service")->name('update_service');

Route::get("deteles/Page/mitfarm/{service_id}", "ServiceController@detelespage")->name('deteles/Page/mitfarm');


// Title and Tag ..................................


Route::get("titleandtag", "TitleandtagController@titleandtag")->name('titleandtag');

Route::post("save_title", "TitleandtagController@save_title")->name('save_title');





// Slider Site ...................................................?

Route::get("slider/add", "SliderController@slideradd")->name('slideradd');

Route::post("slider/save", "SliderController@slider_save")->name('slider_save');

Route::get("slider/All", "SliderController@sliderall")->name('sliderall');

Route::get("activeslider/{slider_id}", "SliderController@activeslider")->name('activeslider');

Route::get("unactiveslider/{slider_id}", "SliderController@unactiveslider")->name('unactiveslider');

Route::get("deleteslider/{slider_id}", "SliderController@deleteslider")->name('deleteslider');

Route::get("sliderEdit/{slider_id}", "SliderController@sliderEdit")->name('sliderEdit');

Route::post("slider_update/{slider_id}", "SliderController@slider_update")->name('slider_update');



// Admin Login ........................?


Route::get("Admin/Login/Page", "home@adminloginpage")->name('adminloginpage');

Route::post("admin_beshbord", "home@admin_beshbord")->name('admin_beshbord');

Route::get("adminlogout", "home@adminlogout")->name('adminlogout');





// Student site ......................................?


Route::post("studentapply", "StudentController@studentapply")->name('studentapply');

Route::get("apply/now/mitfarm", "StudentController@applynowmitfarm")->name('apply/now/mitfarm');
Route::get("allStudent", "StudentController@allStudent")->name('allStudent');

Route::get("deletestudent/{student_id}", "StudentController@deletestudent")->name('deletestudent');


Route::post("ApproveStudent/{student_id}", "StudentController@ApproveStudent")->name('ApproveStudent');

Route::get("asdfghjkl", "StudentController@asdfghjkl")->name('asdfghjkl');

Route::get("addBase", "StudentController@addBase")->name('addBase');

Route::post("save_Base", "StudentController@saveBase")->name('save_Base');

Route::get("AllBase", "StudentController@AllBase")->name('AllBase');

Route::get("deletebase/{base_id}", "StudentController@deletebase")->name('deletebase');

Route::get("baseEdit/{base_id}", "StudentController@baseEdit")->name('baseEdit');

Route::post("vefriy-Customers", "StudentController@vefriyCustomers")->name('vefriy-Customers');

Route::post("edit_Base/{base_id}", "StudentController@editBase")->name('edit_Base');

Route::get("basetobase/{base_name}", "StudentController@basetobase")->name('basetobase');

Route::get("Coureseconfirm/{student_id}", "StudentController@Coureseconfirm")->name('Coureseconfirm');

Route::get("Complete/{base_name}", "StudentController@Complete")->name('Complete');

 

