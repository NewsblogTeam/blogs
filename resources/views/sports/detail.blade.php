@extends('layout.mainlayout')
@section('content')
<div class="container">
	<div class="row">
	  <!-- News Detail -->     
		<div class="col-md-8 col-sm-12">  
		    <!--Detail  -->         
			  <div class="title-head">
				<h4>LATEST POSTS</h4>
				<span>Lorem ipsum dolor sit amet, consectetur adipiscing</span>
				<div style="clear: both"></div>
			</div>
			
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

					<blockquote>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia fugit, voluptas sit aspernatur aut odit aut sed quia. </blockquote>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus.</p>
					<p> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.</p>
					
				</div>
				<ul class="post-images row">
						<li class="col-md-3"><img src="http://html.crunchpress.com/materialmag/images/singlepost-1.jpg" alt=""> <strong>Girl Studying</strong> </li>
						<li class="col-md-3"><img src="http://html.crunchpress.com/materialmag/images/singlepost-2.jpg" alt=""> <strong>Fashion</strong> </li>
						<li class="col-md-3"><img src="http://html.crunchpress.com/materialmag/images/singlepost-3.jpg" alt=""> <strong>On the Beach</strong> </li>
						<li class="col-md-3"><img src="http://html.crunchpress.com/materialmag/images/singlepost-4.jpg" alt=""> <strong>Fitness</strong> </li>
				</ul>
				<div class="row thumb-icon">
					<div class="col-md-6">
						<ul class="cp-post-share">
							<li><span><i class="fa fa-share-alt"></i></span></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
						<div class="col-md-6">
						<ul class="cp-post-tags">
							<li><span><i class="fa fa-tags"></i></span></li>
							<li><a href="#">Technology</a><a href="#">Fashion</a><a href="#">Sports</a><a href="#">Business</a></li>
						</ul>
						</div>
						<div class="cp-author m50">
							<div class="cp-author-thumb"><img src="http://html.crunchpress.com/materialmag/images/user.jpg" alt=""></div>
							<div class="cp-author-details">
									<h3><a href="#">Mandela Denim</a></h3>
									<p>At vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
							</div> <!-- End author -->
							<div style="clear: both;"></div>
							<div class="section-title blue-border">
								<h4>7 Comments</h4>
							</div>
							<!-- Comment -->
							<ul class="cp-comments">
								<li>
									<div class="comments">
										<div class="cp-comment-author"><img src="http://html.crunchpress.com/materialmag/images/user2.jpg" alt=""></div>
										<div class="cp-comment">
											<h4><a href="#">John Doe</a></h4>
											<div class="date-time"><i class="glyphicon glyphicon-time"></i> May 10, 2016</div>
											<p>At vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
										</div>
									</div>
									<ul class="cp-comments">
										<li>
											<div class="comments"> <span class="pull-right replay-comment"><a href="#"><i class="fa fa-reply"></i></a></span>
												<div class="cp-comment-author"><img src="http://html.crunchpress.com/materialmag/images/user3.jpg" alt=""></div>
												<div class="cp-comment">
													<h4><a href="#">Eddie Forbes</a></h4>
													<div class="date-time">Posted: 05 April, 2016</div>
													<p>Et harum quidem rerum facilis est et expedita distinctio. corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
												</div>
											</div>
											<ul class="cp-comments">
												<li>
													<div class="comments"> <span class="pull-right replay-comment"><a href="#"><i class="fa fa-reply"></i></a></span>
														<div class="cp-comment-author"><img src="http://html.crunchpress.com/materialmag/images/user4.jpg" alt=""></div>
														<div class="cp-comment">
															<h4><a href="#">Nelson Johny</a></h4>
															<div class="date-time">Posted: 05 April, 2016</div>
															<p>Deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</li>
						</ul> <!-- end comment --> 
                       </div>
                       <!-- Comment Form  -->

                       <div class="cp-comments-form">
                       	<div class="section-title blue-border">
                       		<h4>Leave A comment</h4>
                       	</div>
                       	<div class="row">
                       		<form class="material">
                       			<div class="col-md-6">
                       				<div class="input-group">
                       					<div class="material-input input">
                       						<div class="material-input input"><input type="text" required="" placeholder="Your Name" name="name" id="name"><span class="material-bar"></span></div>
                       						<span class="material-bar"></span></div>
                       						<div class="material-input input">
                       							<div class="material-input input"><input type="email" required="" placeholder="Email Address" name="email" id="email"><span class="material-bar"></span></div>
                       							<span class="material-bar"></span></div>
                       							<div class="material-input input">
                       								<div class="material-input input"><input type="text" placeholder="Subject" name="subject" id="subject"><span class="material-bar"></span></div>
                       								<span class="material-bar"></span></div>
                       							</div>
                       						</div>
                       						<div class="col-md-6">
                       							<div class="input-group">
                       								<div class="material-input textarea">
                       									<div class="material-input textarea"><textarea placeholder="Comments" name="comments" id="comments"></textarea><span class="material-bar"></span></div>
                       									<span class="material-bar"></span></div>
                       								</div>
                       								<button type="submit" class="btn btn-submit waves-effect waves-button">Submit <i class="fa fa-angle-right"></i></button>
                       							</div>
                       						</form>
                       					</div>
						</div>
						<!-- End Comment Form -->
				</div> <!-- End class row -->
			</div>
			

			
		</div> <!-- End News Detail -->

		<div class="col-md-4 col-sm-8">
			@include('home.slide_right')
		</div>
	</div>
</div>
@endsection