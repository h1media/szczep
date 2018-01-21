
	<?php
	/**
	 * Template Name: Strona główna
	 */
	 ?>
	
	<?php get_header(); ?>
		
	
	<!-- INTRO BLOCK -->
	<!--<header id="intro" class="intro-block" >
	<div class="bg-color1-overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-12 dark-bg"> 
					<h1 class="slogan">87 Polski Szczep <br />w Dublinie</h1>-->
					<!--<h2 class="sep-bottom alt-title"><i class="icon icon-tag"></i> $250,000</h2><a class="btn btn-lg goto" href="#features">More info...</a>-->
				<!--</div>
			</div>
		</div>
		</div>
	</header>-->

		<!-- INTRO BLOCK -->
	<header id="intro" class="intro-block layout2 bg-color-grad text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 video-holder"> 
					<div class="logo">
						<!--<img class="screen" src="<?php echo get_template_directory_uri(); ?>/images/logomin.png" />-->
						<!--<span class="logo-name"><?php the_field('secondary_title', 'option'); ?></span>-->
						<span class="logo-name"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Your logo" /></span>
					</div>
					<h1 class="slogan"><?php the_field('primary_title', 'option'); ?></h1>
					<!--<a class="download-btn ios-btn" href="#"> <i class="icon icon-facebook2"></i>Polub nas na<b>Facebooku</b></a>-->
					<a class="btn btn-default btn-lg goto" href="#features">Dołącz do nas <i class="fa fa-check-square-o" aria-hidden="true"></i></a>

					<br /><br /><br /><br /><br />


				</div>
			</div>
		</div>
		<div class="video-bg"></div>
	</header>


	<section id="latest-posts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="news-title"><?php echo __('[:pl]Aktualności[:en]News'); ?><span class="all-news"><a href="/blog/"><?php echo __('[:pl]Wszystkie aktualności[:en]All news'); ?> <i class="fa fa-link" aria-hidden="true"></i></a></span></h2>
				</div>
			</div>
			<div class="row">

				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
				 
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<div class="col-md-4 latest-posts-article">
				<div class="grid">
					<figure class="effect-lily">
						<a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('blog-thumbs'); ?></a>		
					</figure>
				</div>
					<h4 class="sub-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<p><?php the_excerpt(__('(more…)')); ?></p><br />
					<a href="<?php the_permalink() ?>" class="btn btn-primary btn-md"><?php echo __('[:pl]Czytaj dalej[:en]More'); ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
				</div>

				<?php 
				endwhile;
				wp_reset_postdata();
				?>

			</div>
		</div>
	</section>

	
	<div class="fixed-bg" style="background-image:url(images/intro-bg.jpg)">
	<section id="first-block">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2><?php the_field('home_section_up_title'); ?></h2>
					<h4 class="sub-title"><?php the_field('home_section_up_subtitle'); ?></h4>
					<p class="sep-bottom"><?php the_field('home_section_up'); ?></p>
				</div>
			</div>	
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/screen-42.png" alt="" class="full-height-screen2 wow fadeInRightBig">
	</section>
	</div>


	
	<!-- PLAN BLOCK -->
	<section id="plan" class="tab-block">

		<nav>
			<ul class="container">
				<li class="tabs-heading-parent"><h4 class="tabs-heading"><?php echo __('[:pl]Nasze drużyny[:en]Our groups'); ?></h4></li>
				<li class="active"><a href="#tab1" data-toggle="tab"><?php the_field('group_1'); ?></a></li>
				<li><a href="#tab2" data-toggle="tab"><?php the_field('group_2'); ?></a></li>
				<li><a href="#tab3" data-toggle="tab"><?php the_field('group_3'); ?></a></li>
				<li><a href="#tab4" data-toggle="tab"><?php the_field('group_4'); ?></a></li>
				<li><a href="#tab5" data-toggle="tab"><?php the_field('group_5'); ?></a></li>
			</ul>
		</nav>

		<div class="container">
			<div class="tab-content">
				<div class="row tab-pane active in" id="tab1">
					<div class="col-sm-6">

						<?php if( get_field('group_1_gallery') ): ?>

						<?php $images = get_field('group_1_gallery');

						if( $images ): ?>

							<ul class="bxslider">
									<?php foreach( $images as $image ): ?>
										<li>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<p><?php echo $image['caption']; ?></p>
										</li>
									<?php endforeach; ?>
								</ul>

						<?php endif; ?>
						
						<?php endif; ?>

					</div>
					<div class="col-sm-5 col-sm-offset-1">
						<h4 class="sub-title"><?php the_field('group_1_title'); ?></h4>
						<h5 class="group-age"><span>Przedział wiekowy: </span><?php the_field('group_1_age'); ?></h5>
						<?php the_field('group_1_description'); ?>
					</div>
				</div>
				<div class="tab-pane row tabtest2" id="tab2">
					<div class="col-sm-6">

						<?php if( get_field('group_2_gallery') ): ?>

						<?php $images = get_field('group_2_gallery');

						if( $images ): ?>

							<ul class="bxslider2">
									<?php foreach( $images as $image ): ?>
										<li>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<p><?php echo $image['caption']; ?></p>
										</li>
									<?php endforeach; ?>
								</ul>

						<?php endif; ?>
						
						<?php endif; ?>
						
					</div>
					<div class="col-sm-5 col-sm-offset-1">
						<h4 class="sub-title"><?php the_field('group_2_title'); ?></h4>
						<h5 class="group-age"><span>Przedział wiekowy: </span><?php the_field('group_2_age'); ?></h5>
						<?php the_field('group_2_description'); ?>
					</div>
				</div>
				<div class="row tab-pane" id="tab3">
					<div class="col-sm-6">

						<?php if( get_field('group_3_gallery') ): ?>

						<?php $images = get_field('group_3_gallery');

						if( $images ): ?>

							<ul class="bxslider3">
									<?php foreach( $images as $image ): ?>
										<li>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<p><?php echo $image['caption']; ?></p>
										</li>
									<?php endforeach; ?>
								</ul>

						<?php endif; ?>
						
						<?php endif; ?>
						
					</div>
					<div class="col-sm-5 col-sm-offset-1">
						<h4 class="sub-title"><?php the_field('group_3_title'); ?></h4>
						<h5 class="group-age"><span>Przedział wiekowy: </span><?php the_field('group_3_age'); ?></h5>
						<?php the_field('group_3_description'); ?>
					</div>
				</div>
				<div class="row tab-pane" id="tab4">
					<div class="col-sm-6">

						<?php if( get_field('group_4_gallery') ): ?>

						<?php $images = get_field('group_4_gallery');

						if( $images ): ?>

							<ul class="bxslider4">
									<?php foreach( $images as $image ): ?>
										<li>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<p><?php echo $image['caption']; ?></p>
										</li>
									<?php endforeach; ?>
								</ul>

						<?php endif; ?>
						
						<?php endif; ?>
						
					</div>
					<div class="col-sm-5 col-sm-offset-1">
						<h4 class="sub-title"><?php the_field('group_4_title'); ?></h4>
						<h5 class="group-age"><span>Przedział wiekowy: </span><?php the_field('group_4_age'); ?></h5>
						<?php the_field('group_4_description'); ?>
					</div>
				</div>
				<div class="row tab-pane" id="tab5">
					<div class="col-sm-6">

						<?php if( get_field('group_5_gallery') ): ?>

						<?php $images = get_field('group_5_gallery');

						if( $images ): ?>

							<ul class="bxslider5">
									<?php foreach( $images as $image ): ?>
										<li>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<p><?php echo $image['caption']; ?></p>
										</li>
									<?php endforeach; ?>
								</ul>

						<?php endif; ?>
						
						<?php endif; ?>
						
					</div>
					<div class="col-sm-5 col-sm-offset-1">
						<h4 class="sub-title"><?php the_field('group_5_title'); ?></h4>
						<h5 class="group-age"><span>Przedział wiekowy: </span><?php the_field('group_5_age'); ?></h5>
						<?php the_field('group_5_description'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>	

	
	<!-- AGENT BLOCK -->
	<div class="fixed-bg" style="background-image:url(images/intro-bg.jpg)">
	<section id="agent" class="bg-color1-overlay dark-bg dark-bg2">
		<img src="<?php echo get_template_directory_uri(); ?>/images/screen-4.png" alt="" class="full-height-screen wow fadeInLeftBig">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-7">
					<h2><?php the_field('home_section_down_title'); ?></h2>
					<h4 class="sub-title"><?php the_field('home_section_down_subtitle'); ?></h4>
					<p class="sep-bottom"><?php the_field('home_section_down'); ?></p><br />
					<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#modalContact">Dołącz do nas <i class="fa fa-check-square-o" aria-hidden="true"></i></a>
				</div>
			</div>	
		</div>
	</section>
	</div>

	
	
	<!-- CONTACT BLOCK -->
	<section id="contact" class="text-center">
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