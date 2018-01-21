
	
	<?php get_header(); ?>
		
	
	<!-- INTRO BLOCK -->
						<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); ?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="fixed-bg" style="background-image: url('<?php echo $thumb['0'];?>')">
	<header id="intro" class="intro-blog-block bg-color1-overlay dark-bg" >
		<div class="container">
			<h1 class="slogan"><?php the_title(); ?></h1>
			<p class="desc-text"><?php the_field('secondary_title'); ?></p>
		</div>
	</header>
	</div>
	
	 
	
	<!-- POST BEGIN -->
	<section class="inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8 single-post">
				
					<!--<div class="post-media">
						<img src="images/post-img-1.jpg" alt="Resolving the issue with synchronization in old version" class="img-responsive"/>
					</div>-->
					
					<div class="post-content">
								<!--<h2 class="title"></h2>-->
								<div class="post-desc">
									<?php the_content(); ?>
								</div>
							<?php
							} // end while
						} // end if
						?>
					</div>
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
