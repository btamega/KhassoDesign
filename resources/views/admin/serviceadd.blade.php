 @extends('admin.index')
 

@section('body') 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

  <div class="inner-block">
 
     <div class="market-updates text-center"> 

<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="{{route('save_service')}} "  enctype="multipart/form-data" >
            {{csrf_field()}}
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Add Service</h3>
       <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       
        <label style="text-align:left;width:100%;">Service Title</label>
        <div class="form-group">
           <input type="text" class="form-control" id="name" name="service_name" placeholder="Enter Service Title" required>
        </div>

        
  

        <label style="text-align:left;width:100%;">Service Price</label>
        <div class="form-group">
           <input type="text" class="form-control" id="name" name="service_price" placeholder="Enter Service Price" required>
        </div>

         <label style="text-align:left;width:100%;">Service Image</label>
        <div class="form-group">
           <input type="file" class="form-control" id="name" name="service_photo" required>
        </div>
        
         <label style="text-align:left;width:100%;">Service Description</label> 
        <div class="form-group">
       
        <textarea id="summernote" name="service_detels"></textarea>
          
                               
        </div>

       <label style="text-align:left;width:100%;">Service Type</label> 
        <div class="form-group">
         <select class="form-control" name="service_type" id="">
           <option value="1">Best Service</option>
           <option value="2">Couress</option>
         </select>

        </div>

         





        
         
       <input type="submit"  name="submit" value="Add Service" class="btn btn-primary pull-right" />
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