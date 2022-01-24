 @extends('admin.index')
 

@section('body')  
 

 
  <div class="inner-block">
 
     <div class="market-updates text-center"> 

<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="{{route('save_title')}} "  enctype="multipart/form-data" >
            {{csrf_field()}}
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Add Title</h3>
       <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       
        <label style="text-align:left;width:100%;">Website Title</label>
        <div class="form-group">
           <input type="text" class="form-control" id="name" name="title"  value="{{$title->title}} " required>
        </div>
 


         <label style="text-align:left;width:100%;">Tags</label> 
        <div class="form-group">
        <textarea class="form-control" name="tags" type="textarea" id="message" placeholder="Enter title Description"   rows="7" required> {{$title->tags}} </textarea>
                               
        </div>

         <label style="text-align:left;width:100%;">  Description</label> 
        <div class="form-group">
        <textarea class="form-control" name="deteles" type="textarea" id="message" placeholder="Enter title Description"   rows="7" required>{{$title->deteles}} </textarea>
                               
        </div>
      
         





        
         
       <input type="submit"  name="submit" value="Save Title" class="btn btn-primary pull-right" />
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