
	<?php
	/**
	 * Template Name: Strona główna
	 */
	 ?>
	
	<?php get_header(); ?>
		
	
<!-- INTRO BLOCK -->
	<div class="fixed-bg" style="background-image:url(images/intro-bg2.jpg)">
	<header id="intro" class="intro-blog-block bg-color1-overlay dark-bg archive-bcg" >
		<div class="container">
			<h1 class="slogan"><?php echo __('[:pl]Archiwum[:en]Archive'); ?></h1>
		</div>
	</header>
	</div>
	
	<!-- POST LIST BEGIN -->
	<section class="inner-page index-listing">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<ul class="post-list">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							    
									<li>
										<div class="post">
											<div class="post-media index-post-image">
												<a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('blog-listing'); ?></a>
											</div>
											<div class="post-content">
												<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<div class="post-desc"><?php the_excerpt(__('(more…)')); ?></div>
												<div class="post-info">
													<div class="date"><i class="icon icon-clock"></i><?php the_date(); ?></div>
													<div class="author"><i class="icon icon-user"></i><?php the_author(); ?> </div>
													<div class="comments"><i class="icon icon-bubble"></i><?php comments_number( 'Brak komentarzy', 'Jeden komentarz', '% komentarze' ); ?></div>
												</div>
											</div>
										</div>
									</li>

						<?php endwhile; ?>

						<?php else: ?>
						  <article>
						    <h1>Sorry...</h1>
						    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						  </article>
						<?php endif; ?>

					</ul>
					
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

