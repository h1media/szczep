	
	<?php
	/**
	 * Template Name: Kontakt
	 */
	 ?>
	
	<?php get_header(); ?>
		
	
	<!-- INTRO BLOCK -->
	<?php if ( have_posts() ) { 
		while ( have_posts() ) { 
			the_post(); ?>


	<!-- MAP BLOCK -->
	<section class="map-block text-center">
		<div class="container">
		<ul class="contact_list">
			<li>117 Parnell Road,</li>
			<li>Dublin, Ireland</li>
		</ul>
		</div>
		<div id="canvas-map"></div>
	</section>
	
	 
	
	<!-- POST BEGIN -->
	<section class="inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-6 single-post">
				
					<!--<div class="post-media">
						<img src="images/post-img-1.jpg" alt="Resolving the issue with synchronization in old version" class="img-responsive"/>
					</div>-->
					
					<div class="post-content content-contact">
								<!--<h2 class="title"></h2>-->
								<div class="post-desc">
									<h2><?php the_field('secondary_title'); ?></h2>
									<?php the_content(); ?>
								</div>
					</div>
				</div>

				<div class="col-md-6 single-post">
				
					<!--<div class="post-media">
						<img src="images/post-img-1.jpg" alt="Resolving the issue with synchronization in old version" class="img-responsive"/>
					</div>-->
					
					<div class="post-content">
								<!--<h2 class="title"></h2>-->
								<div class="post-desc">
									<h2><?php echo __('[:pl]Formularz kontaktowy[:en]Contact form'); ?></h2>
									<?php echo do_shortcode('[contact-form-7 id="202" title="Kontakt"]'); ?>
								</div>
							<?php
							} // end while
						} // end if
						?>
					</div>
				</div>

				</div>
			</div>
	</section>
	<!-- BLOG END --> 


	<!-- CONTACT BLOCK -->
	<section id="contact" class="text-center footer-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<i class="big-icon icon-pointer sep-bottom" style="color:#fcb742;"></i>
					<h3><b><a href="https://www.google.pl/maps/place/87th+Dublin+Polish+Scout+Group/@53.331238,-6.2919787,17z/data=!3m1!4b1!4m5!3m4!1s0x48670c15084ad6e1:0x2d12ddc3707233c3!8m2!3d53.331238!4d-6.28979" target="_blank"><?php the_field('adres', 'option'); ?></a></b></h3>	
				</div>
				<div class="col-sm-4">
					<i class="big-icon icon-call-out sep-bottom" style="color:#fcb742;"></i>
					<h3><b><?php the_field('phone', 'option'); ?></b></h3>
				</div>
				<div class="col-sm-4">
					<i class="big-icon icon-envelope-open sep-bottom" style="color:#fcb742;"></i>
					<h3><b><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></b></h3>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
