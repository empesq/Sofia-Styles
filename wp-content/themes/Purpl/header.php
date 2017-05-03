<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="Indulge in fashion collections that range from staples to statement pieces. Wardrobe essentials every man and woman needs.">
	<title><?php bloginfo('name'); ?> </title>
	<?php wp_head(); ?>
	<link href="http://sofiastyles.cyancreatives.com/" rel="canonical" />
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/instafeed.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/owl.carousel.js'; ?>"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora|Lato|Rock+Salt|Fira+Sans+Extra+Condensed|Archivo+Black" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() . '/assets/bootstrap.min.css'; ?>" rel="stylesheet">

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-9458619483134817",
	    enable_page_level_ads: true
	  });
	</script>
</head>

<body <?php body_class(); ?> >
<!-- <div class="container"> -->
	
	<header class="site-header">
		<div class="wrapper">
			<!--<div class="site-logo col-md-4 col-sm-2"> -->
			<div class="site-logo">
			 	 <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri() . '/assets/images/sofialogo.png'; ?>"/></a> 
			</div>
		
			<!--<nav class="site-nav col-md-8 col-xs-10 text-center">-->
			<nav class="site-nav text-center">
				<?php
					/*$args = array(
						'theme_location' => 'primary',
						'link_before' => '<a class="main-menu-item">',
						'link_after'  => '</a>',
					);
					
					wp_nav_menu($args); */
					
					wp_nav_menu( array( 'theme_location' => 'primary' ) );
				?>				
			</nav>
			<!-- <nav class="site-nav text-center">  <?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?>  </nav> -->
			<nav class="site-nav account-nav text-center">
								<div class="menu-top-container">
					<ul class="menu">
						<li><a href="<?php echo get_site_url() . "/my-account/"; ?>" data-toggle="tooltip" title="Account"><i class="fa fa-user" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo get_site_url() . "/wishlist/"; ?>" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo get_site_url() . "/shopping-bag/"; ?>" data-toggle="tooltip" title="Shopping Bag"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
						<li><a data-toggle="tooltip" title="Search"><i class="fa fa-search" aria-hidden="true"></i></a></li>			
					</ul>
				</div>
			</nav>
			
		</div>
	</header>
	
			
	<div class="main" >
	
	
