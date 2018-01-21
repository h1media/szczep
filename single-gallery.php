	
	<?php get_header(); ?>
		
	<!-- INTRO BLOCK -->
						
	<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="fixed-bg" style="background-image: url('<?php echo $thumb['0'];?>')">
	<header id="intro" class="intro-blog-block bg-color1-overlay dark-bg" >
		<div class="container">
			<h1 class="slogan"><?php the_title(); ?></h1>
			<p class="desc-text"><?php the_field('secondary_title'); ?></p>
		</div>
	</header>
	</div>

	<!-- PORTFOLIO BLOCK -->
	<section id="portfolio-grid" class="portfolio-block">
		<div class="container">
			<div class="post-desc">
				<?php the_content(); ?><br /><br />
			</div>

			<div class="item-grid">

				<?php if( get_field('custom_gallery') ): ?>

				<?php $images = get_field('custom_gallery');

				if( $images ): ?>

			 	<div class="grid-sizer"></div>
  				<div class="gutter-sizer"></div>
  				<?php foreach( $images as $image ): ?>

						<div class="item_container"><a href="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a></div>

				<?php endforeach; ?>

				<?php endif; ?>
				
				<?php endif; ?>


			</div>
										<?php
							} // end while
						} // end if
						?>
		</div>
	</section>
	
	<?php get_footer(); ?>
