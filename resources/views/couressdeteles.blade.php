@extends('welcome')
 @section('title')

         <?php
     $title = DB::table('titleandtags')->first(); ?>
      <title> {{$service->service_name}} </title>
    <meta  name="keywords" content="{{$title->tags}} ">
    <meta name="description" content="{{$service->service_detels}} ">
  

@endsection

@section('body')  

<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <br>
 <br>
 <br>
 <br>
 <br>
 
 <div class="main_detels">
 	
 	<div class="full_deteles">
 		<img class="deteles_img" src="{{url('fontpage/img/logo/mit background.png')}} " width="100%" height="300px;" alt="">
 		<h2 class="deteles_h2"><a href="{{route('home')}}">HOME</a> -> DETELES -> {{$service->service_name}} -> <a href=""> Apply Now</a>
    
 		</h2>

 	</div>
 </div>

  

<div class="mai_sexcen">
	<div class="mai_deteles">
		<div class="delete_left">
			<img class="image_deteles" src="{{url($service->service_photo)}}" alt="">
			<h2 class="deteles_title" >{{$service->service_name}}</h2>
			<hr>
			<p> {!! $service->service_detels !!} </p>  
		</div>
		<div class="detele_right">
			 <h2 class="deteles_title" >Reletive Coureses</h2>
			 <hr>
			  <ul>
 <?php
   $service_re = DB::table('services')->get();
   foreach ($service_re as $service_re) {
    
  ?>
			  	<li class="detels_li">
			  		 <a href="{{url('deteles/Page/mitfarm/'.$service_re->service_id)}} "> <p class="deteles_de1">{{$service_re->service_name}}</p> 
                    <img class="service_detels_img" src="{{url($service_re->service_photo)}}" alt=""></a>
			  	</li>

<?php } ?>
			  </ul>
		</div>
	</div>
</div>




 
@endsection