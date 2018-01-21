
	
	<?php get_header(); ?>
		
	
	<!-- INTRO BLOCK -->
						<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); ?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>


	<!-- POST BEGIN -->
	<section class="inner-page blog-single">
		<div class="container">
			<div class="row">
				<div class="col-md-8 single-post">
				
					<div class="post-media">
						<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
					</div>
					<div class="post-content">
						<div class="post-info">
							<h1 class="slogan"><?php the_title(); ?></h1>
							<div class="date"><i class="icon icon-clock"></i><?php the_date(); ?></div>
							<div class="author"><i class="icon icon-user"></i><?php the_author(); ?> </div>
						</div>
								<div class="post-desc">
									<?php the_content(); ?>
								</div>
							<?php
							} // end while
						} // end if
						?>
					</div>


					<?php the_tags( '<ul class="tags"><li>', '</li>&nbsp;<li>', '</li></ul>' ); ?>

									
					<!-- COMMENTS -->
					<!--<div id="comments" class="comments">
							<h3 class="title">4 Comments:</h3>
							<ul class="comment-list">
								<li class="comment depth-1">
									<div class="comment-body">
										<div class="photo"><img src="images/customer-photo.jpg" alt=""/></div>
										<p>I am deeply experienced in this sphere (more than 14 years) and I know how should high-quality products look like. Here it is. It’s excellent.</p>
										<div class="comment-data"><span class="author">John Doe</span><span class="date">10 June 2014, 7:14 am</span><a href="#">Reply</a></div>
									</div>
									<ul class="children">
										<li class="comment depth-2">
											<div class="comment-body">
												<div class="photo"><img src="images/customer-photo.jpg" alt=""/></div>
												<p>I don’t like to write reviews. But this time I can’t help from giving proper respect to developers. This is really nice work.</p>
												<div class="comment-data"><span class="author">Sarah Doe</span><span class="date">11 June 2014, 11:08 am</span><a href="#">Reply</a></div>
											</div>
										</li>
									</ul>
								</li>
								<li class="comment depth-1">
									<div class="comment-body">
										<div class="photo"><img src="images/customer-photo.jpg" alt=""/></div>
										<p>Such simple and flexible settings make this product a universal solution for the most of the interested customers. Try it, I am sure for 100% that you will be satisfied.</p>
										<div class="comment-data"><span class="author">Tim Bim</span><span class="date">12 June 2014, 2:48 pm</span><a href="#">Reply</a></div>
									</div>
								</li>
								<li class="comment depth-1">
									<div class="comment-body">
										<div class="photo"><img src="images/customer-photo.jpg" alt=""/></div>
										<p>It’s just five stars. I will certainly come back and bring my friends with me.</p>
										<div class="comment-data"><span class="author">Sam Willis</span><span class="date">13 June 2014, 9:01 pm</span><a href="#">Reply</a></div>
									</div>
								</li>
							</ul>
							<div class="comment-respond">
								<h3 class="title">Leave a comment:</h3>
								<form role="form"  id="comment_form">
									<div class="form-group">
										<input type="text" class="form-control" id="comment_name" placeholder="Full name *" name="name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="comment_email" placeholder="Email Address *" name="email">
									</div>
									<div class="form-group">
										<input type="url" class="form-control" id="comment_site" placeholder="Your site" name="site">
									</div>
									<div class="form-group">
										<textarea class="form-control" rows="6" placeholder="Type your comment *" id="comment_message" name="message"></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn_send" id="comment_submit"><i class="icon icon-bubble"></i>Post</button>
									</div>
								</form>
							</div>
					</div>
				</div>-->

				<div id="comments" class="comments">

				 <?php comments_template( '', true ); ?>

				</div>
	
	 
	
				
					<!--<div class="post-media">
						<img src="images/post-img-1.jpg" alt="Resolving the issue with synchronization in old version" class="img-responsive"/>
					</div>-->
					

				</div>
				
				
				<!-- SIDEBAR -->
				<aside class="col-md-3 col-md-offset-1 blog-sidebar">

					<?php dynamic_sidebar( 'home_right_1' ); ?>
					
				</aside>
			</div>
		</div>
	</section>
	<!-- BLOG END --> 

	
	
	<?php get_footer(); ?>
