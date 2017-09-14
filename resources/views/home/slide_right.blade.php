<div class="contect-email">
	<p>Join the Material Magazine theme Newsletter Subscription for all updates and news.</p>
	<div class="email">
		<input class="email-conect" id="email-contect" type="email" name="email">
		<button class="btn-contact">submit</button>
	</div>
</div>
<div class="carousel-item">
	<div class="flexslider">
		<ul class="slides">
			@for($slide=0; $slide<4; $slide++)
			<li>
				<img class="img-responsive" src="{{asset('public/image/sports4.jpg')}}" />
			</li>
			@endfor
		</ul>
	</div>
	<div class="custom-navigation">
		<a href="#" class="owl-prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
		<a href="#" class="flex-next"><i class="glyphicon glyphicon-chevron-right"></i></a>
	</div>
</div>
<div>
	<div class="reco">
		<div class="title-reco">
			<h2><a href="">POPULAR POSTS</a></h2>
		</div>
	</div>
	@for($i=1; $i<5; $i++)
	<div class="row list-news-old">
		<div class="img col-md-3">
			<img class="img-news-old img-responsive" src="{{asset('public/image/thumb')}}<?=$i.'.jpg'?>">
		</div>
		<div class="col-md-9">
			<h2 class="title-news-old">
				<a href="">Morbi iaculis eros eget urna blandit</a>
			</h2>
			<span class="span-icon">
				<span class="icon lock">
					<i class="fa fa-clock-o" aria-hidden="true"> May 7, 2016</i>
				</span>
				<span class="icon profile">
					<i class="fa fa-user" aria-hidden="true"> Roy Miller</i>
				</span>
				<span class="icon comment">
					<i class="fa fa-commenting" aria-hidden="true"> 57 Comments</i>
				</span>
				
			</span>
		</div>
	</div>
	<hr class="style-border-bottom">
	@endfor
	<div class="load-more-news-old">
		<button class="btn-load" id="">LOAD MORE <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
	</div>
</div>
<div class="list-new-top">
	<div class="title-new-top">
		<h4><a href="">TOP NEWS HOT</a></h4>
	</div>
	<div class="content-new-top">
		<ul>
			@for($k=0; $k<5; $k++)
			<li>
				<a href="">
					<i class="fa fa-angle-right" aria-hidden="true"> Magazine</i>
					<span class="count-news">80</span>
				</a>
			</li>
			@endfor
		</ul>
	</div>
</div>
<div>
	<div class="reco">
		<div class="title-reco">
			<h2><a href="">POPULAR POSTS</a></h2>
		</div>
	</div>
	@for($i=1; $i<5; $i++)
	<div class="row list-news-old">
		<div class="img col-md-3">
			<img class="img-news-old img-responsive" src="{{asset('public/image/thumb')}}<?=$i.'.jpg'?>">
		</div>
		<div class="col-md-9">
			<h2 class="title-news-old">
				<a href="">Morbi iaculis eros eget urna blandit</a>
			</h2>
			<span class="span-icon">
				<span class="icon lock">
					<i class="fa fa-clock-o" aria-hidden="true"> May 7, 2016</i>
				</span>
				<span class="icon profile">
					<i class="fa fa-user" aria-hidden="true"> Roy Miller</i>
				</span>
				<span class="icon comment">
					<i class="fa fa-commenting" aria-hidden="true"> 57 Comments</i>
				</span>
				
			</span>
		</div>
	</div>
	<hr class="style-border-bottom">
	@endfor
	<div class="load-more-news-old">
		<button class="btn-load" id="">LOAD MORE <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
	</div>
</div>
<div class="list-rating-top">
	<div class="title-rating-top">
		<h4><a href="">TOP NEWS HOT</a></h4>
	</div>
	<div class="content-rating-top">
		<ul>
			@for($k=0; $k<5; $k++)
			<li>
				<a href="">
					<i class="fa fa-angle-right" aria-hidden="true"> Magazine</i>
					<span class="count-news">
						@for($l=0;$l<5; $l++)
						<i class="fa fa-star star" aria-hidden="true"></i>
						@endfor
					</span>
				</a>
			</li>
			@endfor
		</ul>
	</div>
</div>
<div class="list-author">
	<div class="title-author">
		<h4><a href="">TOP AUTHOR HOT</a></h4>
	</div>
	<div class="content-author">
		@for($m=0; $m<8; $m++)
		<div class="bg-img col-md-3">
			<a href=""><img class="img-responsive" src="{{asset('public/image/author1.jpg')}}"></a>
		</div>
		@endfor
	</div>
</div>
<script type="text/javascript">
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		controlsContainer: $(".custom-controls-container"),
		customDirectionNav: $(".custom-navigation a")
	});
</script>