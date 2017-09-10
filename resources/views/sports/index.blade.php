@extends('layout.mainlayout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
		@for($j=0; $j<6; $j++)
			<div class="col-md-6 list-blogs-cl1">
				<div class="container-list-sports">
					<div class="content">
						<div class="img-bg">
							<img src="{{asset('public/image/sports4.jpg')}}" class="img-responsive img-blogs">
						</div>
						<div class="abtract">
							<h3><a href="">This is my Sticky Post</a></h3>
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
								<span class="icon rating">
									@for($i=0; $i<5; $i++)
									<i class="fa fa-star star" aria-hidden="true"></i>
									@endfor
								</span>
							</span>
							<p class="clear">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem ipsum is that it has a more-or-less.
							</p>
						</div>
					</div>
				</div>
			</div>
			@endfor
		</div>
		<div class="col-md-4 col-sm-8">
			
		</div>
	</div>
</div>
@endsection