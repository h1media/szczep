	
	<?php
	/**
	 * Template Name: Kadra
	 */
	 ?>
	
	<?php get_header(); ?>
		
	
	<!-- INTRO BLOCK -->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

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
	<section class="inner-page inner-members">
		<div class="container">
			<div class="row">
				<div class="col-md-12 single-post">
				
					<!--<div class="post-media">
						<img src="images/post-img-1.jpg" alt="Resolving the issue with synchronization in old version" class="img-responsive"/>
					</div>-->
					
					<div class="post-content">
								<!--<h2 class="title"></h2>-->
								<div class="post-desc">
									<?php the_content(); ?>
								</div>
					</div>
				</div>

				</div>
			</div>
	</section>
	<!-- BLOG END --> 


	<!-- TEAM BLOCK -->
	<section id="team" class="text-center features-block">
		<div class="container">
			<div class="row">
			<?php

			global $post;

			if( have_rows('members', $post->ID ) ):

		    while ( have_rows('members', $post->ID ) ) : the_row(); ?>

				<div class="col-sm-4 team-member">
					<?php $image = get_sub_field('member_image'); ?>
						<img src="<?php echo $image['url']; ?>" class="img-circle screen" alt="Team 1" width="250"/>
					<?php   ?>
 					<h4 class="name"><?php the_sub_field('member_name'); ?></h4>
					<h5 class="occupation"><?php the_sub_field('member_occupation'); ?></h5>
					<p><?php the_sub_field('member_description'); ?></p>
					<ul class="soc-list">
						<?php if( get_sub_field('member_twitter') ): ?>
							<li><a href="<?php the_sub_field('member_twitter'); ?>" target="_blank"><i class="icon icon-twitter2"></i></a></li>
						<?php endif; ?>
						<?php if( get_sub_field('member_facebook') ): ?>
							<li><a href="<?php the_sub_field('member_facebook'); ?>" target="_blank"><i class="icon icon-facebook2"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>
			    <?php endwhile;

else :

    // no rows found

endif;

?>
			</div>
		</div>
	</section>
	

<?php endwhile; ?>
	

	<?php get_footer(); ?>
