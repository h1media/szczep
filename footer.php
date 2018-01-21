	<!-- FOOTER -->
	<footer id="footer" class="<!--bg-color3-->" >
		<div class="container"> 
			<div class="row">
				<div class="col-md-5 col-md-push-7 text-right">
					<ul class="soc-list">
						<li><a href="https://www.facebook.com/87thDublinPolishGroup/" target="_blank"><i class="icon icon-facebook2"  style="color:white;"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCzpuYhTaxius0JcIpiIiXmQ" target="_blank"><i class="icon icon-youtube" aria-hidden="true"></i></a></li>
						<li><a href="#" data-toggle="modal" data-target="#modalContact"><i class="icon icon-envelope-open"></i></a></li>
					</ul>
				</div>
				<div class="col-md-5 col-md-pull-5">
					<?php the_field('copyright', 'option'); ?>
				</div>
				<div class="col-md-2 col-md-pull-5 text-center">
					<a class="goto" href="#intro"></a>
				</div>
			</div>
		</div>
	</footer>
	
</div>

<!-- MODALS BEGIN-->

<!-- message modal-->
<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3 class="modal-title">&nbsp;</h3>
		</div>
	</div>
</div>

<!-- contact modal-->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3 class="modal-title"><?php echo __('[:pl]Formularz kontaktowy[:en]Contact form'); ?></h3>
			<?php echo do_shortcode('[contact-form-7 id="202" title="Kontakt"]'); ?>
		</div>
	</div>
</div>
<!-- MODALS END--> 

<!--[if lte IE 9]>
	<script src="scripts/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
	jQuery(document).ready(function($){
	    $(".menu-item-has-children").append("<div class='open-menu-link open'>+</div>");
	    $(".menu-item-has-children").append("<div class='open-menu-link close'>-</div>");
	
	    $(".open").addClass("visible");
	
	    $(".open-menu-link").click(function(e){
	        var childMenu =  e.currentTarget.parentNode.children[1];
	        if($(childMenu).hasClass("visible")){
	            $(childMenu).removeClass("visible");
	
	            $(e.currentTarget.parentNode.children[3]).removeClass("visible");
	            $(e.currentTarget.parentNode.children[2]).addClass("visible");
	        } else {
	            $(childMenu).addClass("visible");
	
	            $(e.currentTarget.parentNode.children[2]).removeClass("visible");
	            $(e.currentTarget.parentNode.children[3]).addClass("visible");
	        }
	    });
	});
</script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".navbar-toggle.collapsed").on("click", function() {

				jQuery(".navbar-brand img").toggleClass("logo-large");


		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-1.8.2.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/smoothscroll.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.smooth-scroll.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/placeholders.jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.backstretch.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/map.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/custom.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/scripts/video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/bigvideo.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.bxslider.min.js"></script>  
<script type="text/javascript">
	var slider = jQuery('.bxslider').bxSlider({
	  infiniteLoop: false,
	  hideControlOnEnd: true,
	  controls: true,
	  auto: true
	});
	var slider2 = jQuery('.bxslider2').bxSlider({
	  infiniteLoop: false,
	  hideControlOnEnd: true,
	  controls: true,
	  auto: true
	});
	var slider3 = jQuery('.bxslider3').bxSlider({
	  infiniteLoop: false,
	  hideControlOnEnd: true,
	  controls: true,
	  auto: true
	});
	var slider4 = jQuery('.bxslider4').bxSlider({
	  infiniteLoop: false,
	  hideControlOnEnd: true,
	  controls: true,
	  auto: true
	});
	var slider5 = jQuery('.bxslider5').bxSlider({
	  infiniteLoop: false,
	  hideControlOnEnd: true,
	  controls: true,
	  auto: true
	});
	jQuery('[href=#tab1]').on('shown.bs.tab', function (e) {
		slider.reloadSlider();
	});
	jQuery('[href=#tab2]').on('shown.bs.tab', function (e) {
		slider2.reloadSlider();
	});
	jQuery('[href=#tab3]').on('shown.bs.tab', function (e) {
		slider3.reloadSlider();
	});
	jQuery('[href=#tab4]').on('shown.bs.tab', function (e) {
		slider4.reloadSlider();
	});
	jQuery('[href=#tab5]').on('shown.bs.tab', function (e) {
		slider5.reloadSlider();
	});
</script>

<script type="text/javascript">
	var highestBox = 0;
	 
	$('.team-member').each(function() {
	 
	    // znajdź najwyższy element
	    if ($(this).height() > highestBox) {
	        highestBox = $(this).height();
	    }
	 
	});
	 
	// ustaw wysokość elementów
	$('.team-member').css("min-height", highestBox + "px");
</script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZnLd3zWzUHTBwclSaQXYdMW6hcjRDTUE&callback=initMap"
  type="text/javascript"></script>

<?php wp_footer(); // Crucial core hook! ?>

</body>
</html>