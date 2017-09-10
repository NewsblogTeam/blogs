@extends('layout.mainlayout')
@section('content')
<div class="container">
	<div class="header" >
		<div class="content-banner">
			<div class="col-md-3 col-sm-6 child-top ">
				@for($j=0; $j<2; $j++)
				<div class="news-log">
					<img class="bg-news-blog img-responsive" src="{{asset('public/image/img1.jpg')}}">
					<span class="content-blog">
						<h4 class="title-blog">Proin id diam in nulla sagittis</h4>
						<span class="lock">
							<i class="fa fa-clock-o" aria-hidden="true"> May 7, 2016</i>
						</span>
						<span class="comment">
							<i class="fa fa-commenting" aria-hidden="true"> 57 Comments</i>
						</span>
						<span class="rating">
							@for($i=0; $i<5; $i++)
							<i class="fa fa-star star" aria-hidden="true"></i>
							@endfor
						</span>
					</span>
				</div>
				@endfor
			</div>
			<div class="col-md-6 col-sm-6 main-top">
				<div class="news-log">
					<img class="bg-news-blog img-responsive" src="{{asset('public/image/img2.jpg')}}">
					<span class="content-blog">
						<h4 class="title-blog">Proin id diam in nulla sagittis</h4>
						<span class="lock">
							<i class="fa fa-clock-o" aria-hidden="true"> May 7, 2016</i>
						</span>
						<span class="profile"><i class="fa fa-user" aria-hidden="true"> Roy Miller</i></span>
						<span class="comment">
							<i class="fa fa-commenting" aria-hidden="true"> 57 Comments</i>
						</span>
						<span class="rating">
							@for($i=0; $i<5; $i++)
							<i class="fa fa-star star" aria-hidden="true"></i>
							@endfor
						</span>
					</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 child-top">
				@for($j=0; $j<2; $j++)
				<div class="news-log">
					<img class="bg-news-blog img-responsive" src="{{asset('public/image/img1.jpg')}}">
					<span class="content-blog">
						<h4 class="title-blog">Proin id diam in nulla sagittis</h4>
						<span class="lock">
							<i class="fa fa-clock-o" aria-hidden="true"> May 7, 2016</i>
						</span>
						<span class="comment">
							<i class="fa fa-commenting" aria-hidden="true"> 57 Comments</i>
						</span>
						<span class="rating">
							@for($i=0; $i<5; $i++)
							<i class="fa fa-star star" aria-hidden="true"></i>
							@endfor
						</span>
					</span>
				</div>
				@endfor
			</div>
		</div>
	</div>
	<div class="main-blog-contaner">
		<div class="col-md-8">
			<div class="title-head">
				<h4>LATEST POSTS</h4>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing</span>
				<div style="clear: both"></div>
			</div>
			@for($i=0; $i<2; $i++)
			<div class="content-blog">
				<div class="img-bg-blog">
					<img class="img-responsive" src="{{asset('public/image/img-bg-blog.jpg')}}">
				</div>
				<div class="title">
					<h4 class="title-blogs"><a href="#">AN EMOTIONS BEHIND THE BEAUTIFUL & PRETTY SMILE</a></h4>
					<span class="icon lock">
						<i class="fa fa-clock-o" aria-hidden="true"> May 7, 2016</i>
					</span>
					<span class="icon profile">
						<i class="fa fa-user" aria-hidden="true"> Roy Miller</i>
					</span>
					<span class="icon comment">
						<i class="fa fa-commenting" aria-hidden="true"> 57 Comments</i>
					</span>
				</div>
				<div class="abtract">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus pellentesque ipsum erat...</p>
				</div>
			</div>
			@endfor
			<div class="load-more">
				<button class="btn-load" id="">LOAD MOER <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
			</div>
			<div class="list-news-sport">
				<div class="title">
					<h4>SPORTS</h4>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing</span>
					<div style="clear: both"></div>
				</div>
				@for($i=0; $i<4; $i++)
				<div class="content-blog-sports">
					<div class="row content" >
						<div class="img-bg col-md-6">
							<img class="img-sports img-responsive" src="{{asset('public/image/sports2.jpg')}}">
						</div>
						<div class="col-md-6 abtract">
							<h3><a href="">CURABITUR VEL MAGNA VARIUS, FRINGILLA ANTE AT FRINGILLA LEO.</a></h3>
							<span>
								<span class="icon lock">
									<i class="fa fa-clock-o" aria-hidden="true"> May 7, 2016</i>
								</span>
								<span class="icon profile">
									<i class="fa fa-user" aria-hidden="true"> Roy Miller</i>
								</span>
								<span class="icon comment">
									<i class="fa fa-commenting" aria-hidden="true"> 57 Comments</i>
								</span>
								<span class="rating">
									@for($j=0; $j<5; $j++)
									<i class="fa fa-star star" aria-hidden="true"></i>
									@endfor
								</span>
							</span>
							<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non.</p>
						</div>
					</div>
				</div>
				@endfor
			</div>
			<div class="list-news-sport">
				<div class="title">
					<h4>SPORTS</h4>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing</span>
					<div style="clear: both"></div>
				</div>
				<div class="content-style-list">
					<div class="row">
						@for($i=1; $i<4; $i++)
						<div class="col-md-4">
							<div class="img-bg">
								<img class="img-responsive img-ls" src="{{asset('public/image/ls1.jpg')}}"></img>
							</div>
							<div class="abtract">
								<a href="">Proin id diam in nulla sagittis tempor nec eu ipsum.</a>
							</div>
						</div>
						@endfor
					</div>
					<div class="btn-load-more">
						<a class="load-more" href="">LOAD MORE <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<!-- <div class="slider-reco">
				<div class="title-reco">
					<h2><a href="">POPULAR POSTS</a></h2>
				</div>
				<div class="slider">
					<ul class="bxslider">
						<li>
							<img class="img-responsive" src="{{asset('public/image/img2.jpg')}}" />
						</li>
						<li>
							<img class="img-responsive" src="{{asset('public/image/img2.jpg')}}" />
						</li>
						<li>
							<img class="img-responsive" src="{{asset('public/image/img2.jpg')}}" />
						</li>
					</ul>
				</div>
			</div> -->
			<div class="carousel-item">
				<img src="http://via.placeholder.com/350x150" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h3>.dcfdfsdfsd.</h3>
					<p>...fsdfsdfsdf</p>
				</div>
			</div>
			@for($k=0; $k<2; $k++)
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
			@endfor
		</div>
	</div>
</div>
@endsection
