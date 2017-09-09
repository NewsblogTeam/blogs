<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Feature</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">

	 <!-- Syntax Highlighter -->
  <link href="css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>

  

</head>


<div class="widget sidebar-featured-post">
<h3 class="side-title">Featured Posts Widget</h3>  
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
           <!-- Item image -->
            <li class="item">
  	    	    <img src="http://image.24h.com.vn/upload/3-2017/images/2017-09-09/1504940999-150485881614820-anh-2.jpg" />
		             <div class="cp-post-content">
						<div class="catname"><a href="#" class="catname-btn btn-orange">Sports</a></div>
						<h3><a href="single-post.html">Nữ thợ xăm bốc lửa thế này thì mày râu nào chẳng muốn "họa bì"</a></h3>
					 </div>
  	    	</li> 
  	    	<!-- End item -->
  	    	  <!-- Item image -->
            <li class="item">
  	    	    <img src="http://sohanews.sohacdn.com/thumb_w/660/2017/14237733-1178239712250016-2279621181201698327-n-1504658453867-109-0-704-960-crop-1504659554525.jpg" />
		             <div class="cp-post-content">
						<div class="catname"><a href="#" class="catname-btn btn-orange">Sports</a></div>
						<h3><a href="single-post.html">Morbi iaculis eros eget urna blandit</a></h3>
					 </div>
  	    	</li> 
  	    	<!-- End item -->
  	    	  <!-- Item image -->
            <li class="item">
  	    	    <img src="http://image.24h.com.vn/upload/3-2017/images/2017-08-10/1502337337-150233458561674-anh-1.jpg" />
		             <div class="cp-post-content">
						<div class="catname"><a href="#" class="catname-btn btn-orange">Sports</a></div>
						<h3><a href="single-post.html">Nữ sinh Việt "ăn đứt gái Hàn" khiến anh em điêu đứng</a></h3>
					 </div>
  	    	</li> 
  	    	<!-- End item -->

  	    	 <li class="item">
  	    	    <img src="http://sohanews.sohacdn.com/zoom/260_162/2017/photo1503275315105-1503275315780-0-55-314-561-crop-1503275393838.jpg" />
             <div class="cp-post-content">
				<div class="catname"><a href="#" class="catname-btn btn-orange">Sports</a></div>
				<h3><a href="single-post.html">Morbi iaculis eros eget urna blandit</a></h3>
				</div>
  	    	</li>
  	    		
          </ul>
        </div>

<!--          Next and Prev Buton--> 
       <div class="custom-navigation">
		    <div class="cus">
		<a href="#" class="owl-prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
		  	<a href="#" class="flex-next"><i class="glyphicon glyphicon-chevron-right"></i></a>		    	
		    </div>   		 
		</div>
      </section> 

  </div> <!--  End div -->
   <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="jquery.flexslider.js"></script>

  <script type="text/javascript">

    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){

      $('.flexslider').flexslider({
        animation: "slide",
        controlsContainer: $(".custom-controls-container"),
         customDirectionNav: $(".custom-navigation a")
      
      });
    });    
  </script>
  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>
  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>


</html>