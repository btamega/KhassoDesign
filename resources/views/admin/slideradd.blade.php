 @extends('admin.index')
 

@section('body')  
 

 
  <div class="inner-block">
 
     <div class="market-updates text-center"> 

<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="{{route('slider_save')}}  "  enctype="multipart/form-data" >
            {{csrf_field()}}
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Add Slider</h3>
       <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       
        <label style="text-align:left;width:100%;">Slider Title</label>
        <div class="form-group">
           <input type="text" class="form-control" id="name" name="slider_title" placeholder="Enter Slider Title" required>
        </div>

        
    <label style="text-align:left;width:100%;">Slider Image</label>
        <div class="form-group">
           <input type="file" class="form-control" id="name" name="slider_photo" required>
        </div>
        
         <label style="text-align:left;width:100%;">Slider Description</label> 
        <div class="form-group">
        <textarea class="form-control" name="slider_deteles" type="textarea" id="message" placeholder="Enter Slider Description"   rows="7" required></textarea>
                               
        </div>
 

         





        
         
       <input type="submit"  name="submit" value="Add Slider" class="btn btn-primary pull-right" />
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