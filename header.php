<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content=""/>
			<title><?php echo get_bloginfo('name'); ?></title>
		
			<?php wp_head(); ?>
			
	<!---------- FONTS ---------->	
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet"> 
		
		<!--- Cookie consent notice ---->
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
		<script>
		window.addEventListener("load", function(){
		window.cookieconsent.initialise({
		  "palette": {
			"popup": {
			  "background": "#e3e3e3",
			  "text": "#2d7287"
			},
			"button": {
			  "background": "#2d7287",
			  "text": "#ffffff"
			}
		  },
		  "theme": "edgeless"
		})});
		</script>
		
	</head>

<body <?php body_class(); ?>> 
<div id="fb-root"></div>
		<!-- Facebook Feed Script -->
			<script async>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=185463458900462&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
				
			
<!--- SITE HEADER --->	

	
	<header class="site-header">

	
	<!-- MENU -->


		<a id="logo" href="<?php echo home_url(); ?>">
			<img src="/wp-content/uploads/2018/12/The-Neuro-Muscular-Clinic.png" alt="Neuro-muscular Chiropractor specialised in dizziness" width="100%" height=true>
		</a>
		<!----
		<a id="textlogo" href="<?php echo home_url(); ?>">
			<h1><?php bloginfo('name'); ?></h1>
			<h2>By Jake Cooke</h2>
		</a>
		---->
		<div id="header-menu">
			<?php
				$args = array(
				'theme_location' => 'primary'
				);
			?>
			<?php wp_nav_menu( $args ); ?>	
			
		</div>
	
<!--------- Menu --------->
	<div id="mobilemenuopen">
		<i class="fas fa-bars"></i><p>Menu</p>
	</div>	
	
	<div id="mobilemenuclose">
		<i class="fas fa-times"></i>
	</div>
	
	
	</header>
<!-- /site-header -->

<div class="container">