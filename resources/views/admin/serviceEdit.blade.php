 @extends('admin.index')
 

@section('body') 
  <div class="inner-block">
 
     <div class="market-updates text-center"> 

<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="{{url('update_service/'.$edit_service->service_id)}} "  enctype="multipart/form-data" >
            {{csrf_field()}}
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Edit Service</h3>
       <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       
        <label style="text-align:left;width:100%;">Service Title</label>
        <div class="form-group">
           <input type="text" class="form-control" id="name" name="service_name" value="{{$edit_service->service_name}}" required>
        </div>

        
  

        <label style="text-align:left;width:100%;">Service Price</label>
        <div class="form-group">
           <input type="text" class="form-control" id="name" name="service_price" value="{{$edit_service->service_price}}" required>
        </div>

         <label style="text-align:left;width:100%;">Service Image</label>
        <div class="form-group">
        	<img src="{{ url($edit_service->service_photo)}}" height="200px;" width="200px;" alt="">
           <input type="file" class="form-control" id="name" name="service_photo" >
        </div>
        
         <label style="text-align:left;width:100%;">Service Description</label> 
        <div class="form-group">
        <textarea class="form-control" name="service_detels" type="textarea" id="message" placeholder="Enter Service Description"   rows="7" required> {{$edit_service->service_detels}}</textarea>
                               
        </div>

       <label style="text-align:left;width:100%;">Service Type</label> 
        <div class="form-group">
         <select class="form-control" name="service_type" id="">

         	<?php  if($edit_service->service_type==1){  ?>
           <option selected="" value="1">Best Service</option>
            <option value="2">Couress</option>
         <?php   }elseif($edit_service->service_type==2){  ?>
         	<option value="1">Best Service</option>
            <option selected="" value="2">Couress</option>
          <?php } ?>

         </select>

        </div>

         





        
         
       <input type="submit"  name="submit" value="Update Service" class="btn btn-primary pull-right" />
        </form>
    </div>
</div>
</div>
  
  </div>
</div>
 <div class="inner-block">
 <div class="market-updates text-center"> 
    </div>
</div> <div class="inner-block">
 <div class="market-updates text-center"> 
    </div>
</div> 
   @endsection