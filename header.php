<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php the_field('meta_title', 'option'); ?></title>
<meta name="description" content="87 Polski Szczep w Dublinie">
<meta name="author" content="Multifour | multifour.com">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<!--[if lt IE 9]>
    <script type="text/javascript" src="scripts/html5shiv.js"></script>
<![endif]-->

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/iconfont-style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.min.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

<link href="https://fonts.googleapis.com/css?family=Galindo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Peralta" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chelsea+Market" rel="stylesheet">

<!-- Favicons -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.png">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/fav.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/fav.png">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navMenuCollapse">

<!-- PRELOADER -->
<!--<div id="preloader">
	<div class="loading-data three-bounce">
		<div class="bounce1"></div>
      	<div class="bounce2"></div>
      	<div class="bounce3"></div>
	</div>
</div>-->

<div id="wrap"> 

	<div class="container-fluid languages-container">
	<div class="container">
		<div class="top-details">
			<span>Tel: <?php the_field('phone', 'option'); ?></span>
		</div>
		<div class="languages">
			<ul class="nav-extras2">
				<li class="menu-item social-menu social-menu-yt"><a href="https://www.youtube.com/channel/UCzpuYhTaxius0JcIpiIiXmQ" target="_blank"><i class="icon icon-youtube" style="margin-left:0;" aria-hidden="true"></i></a></li>
				<li class="menu-item social-menu social-menu-fb"><a href="https://www.facebook.com/87thDublinPolishGroup/" target="_blank"><i class="icon icon-facebook2"  style="color:white;margin-right: 0;"></i></a></li>
				<li class="menu-item social-menu social-menu-scouting"><a href="http://scouts.ie" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/scouting-ireland.png""></a></li> 
			</ul>
			<ul class="nav nav-languages">
				<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
			</ul>
			<div class="mobile-languages">
				<?php echo qtranxf_generateLanguageSelectCode('image'); ?>
			</div>
		</div> 
	</div>
	</div>
	
	
	<!-- NAVIGATION -->
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="97">
		<div class="container"> 
			<a class="navbar-brand goto" href="http://szczep.h1media.pl"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-top.png" alt="Your logo" height="110" /></a>
			<button class="navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse" data-target=".navMenuCollapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<div class="collapse navbar-collapse navMenuCollapse">
				<ul class="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</ul>
				<ul class="nav-extras">
					<li class="donate-button"><a href="https://www.idonate.ie/1083_87th-dublin-polish-group.html" target="_blank"><?php echo __('[:pl]Wesprzyj nas[:en]Donate'); ?></a></li>
				</ul>
			</div>
		</div>
	</nav>
	