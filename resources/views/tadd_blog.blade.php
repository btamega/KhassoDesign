@extends('welcome')
 @section('title')

     

@endsection

@section('body')  

<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  
<div class="full_reg" style="background: #F4F4F4">
	<br>
 <br>
 <br>
 <br>
 <br>
 
   <br>
 <br>
 <br>
 <br>
 <br>
  <br>
 <br>
 <br>
 <br>
 <br>
 <div class="main_reg">
  <div class="left_reg">
    <h2>Apply Now Your Coureses</h2>

      <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       

     <form action="{{route('vefriy-Customers')}} " method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
       <input type="text" name="code" placeholder="Enter Your Name"  required="" />
       
       
       
       
       <input type="submit" value="SENT" />
     </form>

  </div>
   
 </div>
</div>  



 
@endsection