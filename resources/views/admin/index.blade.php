 
<!DOCTYPE HTML>
<html>
<head>
<title>MIT Farm Abmin Panal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{asset('admin/js/jquery-2.1.1.min.js')}}"></script> 
<!--icons-css-->
<link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="{{asset('admin/js/Chart.min.js')}}"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="{{asset('admin///cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js')}}" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="{{asset('admin/lib/modernizr/modernizr-custom.js')}}"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="{{asset('admin/js/chartinator.js')}}" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="{{asset('admin/js/skycons.js')}}"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div style="width: 46%;" class="logo-name">
									 <a href="{{route('admin/site/mitfarm')}} "> <h1 style=" color:#EE244C;">MIT FARM</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								 
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">0</span></a>
										 
									</li>
									<li class="dropdown head-dpdn">
										<a href="{{route('allStudent')}} " class="dropdown-toggle"    >
                 <?php 
                $student = DB::table('students')
                        ->where('student_status',0)
                        ->get();
                $i = 0;
                foreach ($student as $student) {
             
              $i++;  } ?> 

					 <i class="fa fa-bell"></i><span class="badge blue">{{$i}}</span></a>
			
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">0</span></a>
										 
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>MIT FARM</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="{{route('adminlogout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->






 @yield('body')




<!--copy rights start here-->
<div class="copyrights">
	 <p> mit farm </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="{{route('admin/site/mitfarm')}} "><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>

		        <li><a href="#"><i class="fa fa-cogs"></i><span>SERVICE</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="{{route('addservice') }} ">Add Service</a></li>
		            <li><a href="{{route('allservice') }}">All Service</a></li>		            
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="{{route('titleandtag')}} "><i class="fa fa-book nav_icon"></i><span>Title and Tag</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          
		        </li>
		         
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Slider</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="{{route('slideradd')}} ">Add Slider</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="{{route('sliderall')}} ">Slider All</a></li>		           
		          </ul>
		        </li>

		        <li><a href="#"><i class="fa fa-cog"></i><span>Base</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="{{route('addBase')}} ">Add Base </a></li>
			            <li id="menu-academico-boletim" ><a href="{{route('AllBase')}}">All Base</a></li>
		             </ul>
		         </li>
		         
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Student All Base</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
           <?php
             $student = DB::table('bases')->get();

             foreach ($student as $student) {
             

            ?>
			   <li id="menu-academico-avaliacoes" ><a href="{{url('basetobase/'. $student->base_name)}}"> {{$student->base_name}} </a></li>
            <?php } ?>
		             </ul>
		        </li>
		         
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Complete Courese
		         </span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >

			           <?php
             $student = DB::table('bases')->get();

             foreach ($student as $student) {
             

            ?>
			   <li id="menu-academico-avaliacoes" ><a href="{{url('Complete/'. $student->base_name)}}"> {{$student->base_name}} </a></li>

            <?php } ?>


		             </ul>
		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('admin/js/scripts.js')}}"></script>
		<!--//scrolling js-->
<script src="{{asset('admin/js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>                     