<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<?php if ( defined('WPSEO_VERSION') ) : ?>
		<title><?php wp_title(''); ?></title>
	<?php else : ?>
		<?php if(is_front_page() || is_home()) : ?>
			<title><?php bloginfo('name'); ?></title>
		<?php else : ?>
			<title><?php wp_title(''); ?> - <?php bloginfo('name'); ?></title>
		<?php endif; ?>
<?php endif; ?>
		
			<?php wp_head(); ?>
			
	<!---------- FONTS ---------->	
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">

		<!--- Cookie consent notice ---->
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
		
			<!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136266800-1"></script>
				<script>
				  window.dataLayer = window.dataLayer || [];
				  function gtag(){dataLayer.push(arguments);}
				  gtag('js', new Date());

				  gtag('config', 'UA-136266800-1');
				</script>
			<!-- End Google Analytics tag -->
			
			<!-- Facebook Pixel Code -->
				<script>
				!function(f,b,e,v,n,t,s)
				{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};
				if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
				n.queue=[];t=b.createElement(e);t.async=!0;
				t.src=v;s=b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t,s)}(window,document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
				 fbq('init', '451815365361941'); 
				fbq('track', 'PageView');
				</script>
				<noscript>
				 <img height="1" width="1" 
				src="https://www.facebook.com/tr?id=451815365361941&ev=PageView
				&noscript=1"/>
				</noscript>
			<!-- End Facebook Pixel Code -->

		<!--- Cookie Consent --->
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
			<img src="/wp-content/uploads/2018/12/The-Neuro-Muscular-Clinic.png" alt="Neuro-muscular Chiropractor specialised in dizziness, chiropractic in Woking" width="100%" height=true>
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