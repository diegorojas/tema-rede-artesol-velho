<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		wp_title( '-', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?></title>
		
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- default stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/normalize.css">		
		
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.6.2.min.js"%3E%3C/script%3E'))</script>
		
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
		<!-- modernizr -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
        
        <script src="<?php echo get_template_directory_uri(); ?>/slidemenu/slidemenu.js"></script>
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
        <script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-29766242-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		
	</head>
	
	<body <?php body_class(); ?>  onload="slideMenu.build('sm',300,10,10,1)">
			
	<header role="banner">
			
				<div id="inner-header" class="clearfix">
                	<a href="http://www.artesol.org.br/rede/" target="_self" class="back-artesol">← VOLTAR PARA PÁGINA DA REDE ARTESOL</a>
					<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo"></a>	
        			<div class="realizacao">
  <a href="http://artesol.org.br" target="_blank" style="display:block;height: 79px;"></a>
</div>
        		</div> <!-- end #inner-header -->
				
                <nav role="navigation">
					<?php wp_nav_menu( array('top' => 'Project Nav' )); ?>
				</nav>
	</header> 
    <!-- end header -->
