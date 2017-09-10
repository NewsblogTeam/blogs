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

<body >
 
 
  
	<div class="detail-slider">
		 <section class="slider">
        <div class="flexslider">
          <ul class="slides">
         <!--  Item --> 
            <li data-thumb="images/kitchen_adventurer_cheesecake_brownie.jpg">
  	    	    <img class="zoom" src="http://html.crunchpress.com/materialmag/images/lpl-img2.jpg" />
  	    	    <div class="cp-post-content">
					<h3><a href="#">An Emotions Behind the Beautiful &amp; Pretty Smile.</a></h3>
					<ul class="cp-post-tools">
					<li><i class="glyphicon glyphicon-time"></i> May 10, 2016</li>
					<li><i class="glyphicon glyphicon-user"></i> Roy Miller</li>
					<li><i class="glyphicon glyphicon-folder-open"></i> Lifestyle</li>
					<li><i class="glyphicon glyphicon-comment"></i> 57 Comments</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					<a href="#" class="cp-readmore waves-effect waves-button">Read More <i class="fa fa-angle-right"></i></a>
				</div>
  	    		</li>
		<!--End Item -->  	   
		 <!--  Item --> 
            <li data-thumb="images/kitchen_adventurer_cheesecake_brownie.jpg">
  	    	    <img class="zoom" src="http://kenh14cdn.com/2017/2-1486357521628.jpeg" />
  	    	    <div class="cp-post-content">
					<h3><a href="#">An Emotions Behind the Beautiful &amp; Pretty Smile.</a></h3>
					<ul class="cp-post-tools">
					<li><i class="icon-1"></i> May 10, 2016</li>
					<li><i class="icon-2"></i> Roy Miller</li>
					<li><i class="icon-3"></i> Lifestyle</li>
					<li><i class="icon-4"></i> 57 Comments</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					<a href="#" class="cp-readmore waves-effect waves-button">Read More <i class="fa fa-angle-right"> </i></a>
				</div>
  	    		</li>
		<!--End Item -->  		
          </ul>
        </div>
      </section>
	</div>
     
      
    

  

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
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
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