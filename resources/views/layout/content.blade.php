<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('public/css/rateit.css')}}">


<script src="{{ asset('public/js/wow.js') }}"></script>

<div class="row">

<div class="col-md-8 post-news">

 
  @for($i = 1 ; $i<4 ; $i++)

  <div class="row">

	<div class="col-md-6 thumb">	
	
	    <div class="cp-thumb">
	    		<img src="{{asset('public/image/pgthumb-6.jpg')}}"> 			
	    </div>
		<div class="cp-post-content">
			<h4><a href="">Morbi iaculis eros eget urna blandit</a></h4>
			<ul>
				<li><i class="glyphicon glyphicon-dashboard"></i> May 10, 2016</li>
				<li><i class="glyphicon glyphicon-user"></i> Roy Miller</li>
				<li><i class="glyphicon glyphicon-comment"></i> 57 Comment</li>		
			</ul>
		</div>
		
	</div>

	<div class="col-md-6 thumb">	
	
	    <div class="cp-thumb">
	    		<img src="{{asset('public/image/pgthumb-6.jpg')}}"> 			
	    </div>
		<div class="cp-post-content">
			<h4><a href="">Morbi iaculis eros eget urna blandit</a></h4>
			<ul>
					<li><i class="glyphicon glyphicon-dashboard"></i> May 10, 2016</li>
				<li><i class="glyphicon glyphicon-user"></i> Roy Miller</li>
				<li><i class="glyphicon glyphicon-comment"></i> 57 Comment</li>		
			</ul>
		</div>
		
	</div>
	
	
  </div> {{-- row --}}
@endfor



</div>

<div class="col-md-4">
<div class="review">
	<h3>Last Review</h3>
	<ul class="reviews">
		<li>
		<h4><a href="#">Donec consequat diam ut pharetra auctor</a></h4>
		<div class="cp-rating"><a href="#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
		<i class="tag">8.2</i> </li>
		<li>
		<h4><a href="#">Morbi vel metus vitae nunc fermentum </a></h4>
		<div class="cp-rating"><a href="#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
		<i class="tag">9.2</i> </li>
		<li>
		<h4><a href="#">Proin ut sapien tempor laoreet mauris</a></h4>
		<div class="cp-rating"><a href="#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
		<i class="tag">7.2</i> </li>
		<li>
		<h4><a href="#">Vivamus feugiat lacus vitae aliquet</a></h4>
		<div class="cp-rating"><a href="#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
		<i class="tag">5.2</i> </li>
		</ul>	
</div>
<div class="category">
	<h3>Category</h3>
	<div class="rateit" data-rateit-value="2.5"  data-rateit-readonly="true"></div>
		<ul>

			<li><a href="">Magazine</a></li>
			<li><a href="">Lifestyle</a></li>
			<li><a href="">Fashion</a></li>
			<li><a href="">Photography</a></li>
			<li><a href="">Sports</a></li>
			<li><a href="">Technology</a></li>
			<li><a href="">Business</a></li>
		</ul>
 </div>

</div>
</div>