<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KhassoDesign | Registration</title>
    <link rel="icon" type="image/png" href="{{asset("test/KhassoDesign/logo1.jpeg")}}">
    <link href="{{asset('test/css/signUp.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}
</style>
	<script src="{{asset('test/js/signUp.js')}}"></script>
	{{-- <script type='text/javascript'>
	$(function() {
		//calendar call function
		$('.datepicker').dcalendar();
		$('.datepicker').dcalendarpicker();

		    var max_fields = 10; //maximum input boxes allowed
		    var x = 1; //initlal text box count
		
		$('#add').click(function () {		   
			if(x < max_fields){ //max input box allowed
			    x++; //text box increment
			    $("#addblock").before('<div class="col-md-12 col-sm-12" id="deceased">	<a href="#" class="remove_field" title="Remove">X</a>	<div class="form-group col-md-3 col-sm-3">            <label for="name">Name*</label>            <input type="text" class="form-control input-sm" id="name" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="gender">Gender*</label>            <input type="text" class="form-control input-sm" id="gender" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="age">Age*</label>            <input type="text" class="form-control input-sm" id="age" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOB">Date of Birth or Exact Birth Year*</label>            <input type="text" class="form-control input-sm datepicker" id="DOB'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOD">Date of Death or Exact Death Year*</label>             <input type="text" class="form-control input-sm datepicker" id="DOD'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="mother">Deceased Person\'s Mother Name*</label>            <input type="text" class="form-control input-sm" id="mother" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="father">Deceased Person\'s Father Name*</label>            <input type="text" class="form-control input-sm" id="father" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">	    <label for="photo">Upload Photo*</label>	    <input type="file" id="photo">	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>	</div></div>');

				$('.datepicker').dcalendarpicker();
			}  else{
				alert("Only 10 Names Allowed");
			}  
		});
		$(document).on('click', '.remove_field', function(e){
		        e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});

		
	});
	</script> --}}
  </head>
<body>
    <div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">Registration Form</h3>
	</div>
    <div class="panel-body">
        <form method="post" action="register">
            @csrf
            <div class="col-md-12 col-sm-12">
                <div class="form-group col-md-6 col-sm-6">
                        <label for="name">Nom*	</label>
                        <input type="text" class="form-control input-sm" name="name" id="name" required placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">Prénom*	</label>
                        <input type="text" class="form-control input-sm" name="prenom" id="prenom" required placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control input-sm"  name="email" id="email" required placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="email">Password*</label>
                        <input type="password" class="form-control input-sm" name="password" id="password" required placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="email">Confirm password*</label>
                        <input type="password" class="form-control input-sm" name="Confirmpassword" id="Confirmpassword" required placeholder="">
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label for="mobile">Téléphone*</label>
                        <input type="text" class="form-control input-sm" name="mobile" id="mobile" required placeholder="">
                    </div>

                <div class="form-group col-md-6 col-sm-6">
                    <label for="address">Addresse*</label>
                    <textarea class="form-control input-sm" name="address" id="address" rows="3"></textarea>
                </div>
                
                <div class="form-group col-md-6 col-sm-6">
                        <label for="city">Ville*</label>
                        <input type="text" class="form-control input-sm" name="city" id="city" required placeholder="">
                    </div>
                <div class="form-group col-md-6 col-sm-6">
                        <label for="country">Pays*</label>
                        <input type="text" class="form-control input-sm" name="country" id="country" required placeholder="">
                    </div>

                <div class="form-group col-md-6 col-sm-6">
                        <label for="pincode">Code Postal</label>
                        <input type="text" class="form-control input-sm" name="pincode" id="pincode" required placeholder="">
                    </div>
                <div class="col-md-12 col-sm-12">
                <div class="form-group col-md-3 col-sm-3 pull-right" >
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>