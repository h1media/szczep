	
	<?php
	/**
	 * Template Name: Galeria
	 */
	 ?>
	
	<?php get_header(); ?>
		
	
	<!-- POST BEGIN -->
	<section class="inner-page galleries">
		<div class="container">

			<?php
			    $query = new WP_Query( array(
			        'post_type' => 'gallery',
			        'posts_per_page' => 100,
			    ) );
			?>

			<?php if ( $query->have_posts() ) : ?>

			<!-- begin loop -->
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>


			<div class="row gallery-row">

				<div class="col-md-4 single-post">

						<div class="post-desc">
							<a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('gallery-thumbs'); ?></a>
						</div>
				</div>

				<div class="col-md-8 single-post">

						<div class="post-desc">

								<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
								<?php the_content(); ?><br />
								<a href="<?php the_permalink() ?>" class="btn btn-primary btn-md btn-gallery-ar"><?php echo __('[:pl]Zobacz więcej[:en]See more'); ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
				</div>

				</div>

			<?php endwhile; ?>
			<!-- end loop -->


			<?php wp_reset_postdata(); ?>

			<?php else : ?>
			    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			</div>
	</section>
	<!-- BLOG END --> 
	

	<?php get_footer(); ?>
