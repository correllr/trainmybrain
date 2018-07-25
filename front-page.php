<?php get_header(); ?>

<!-- HOME ---->

<div id="frontpage-pitch" class="itemcont">
	<h1 id="frontpage-pitch-text">
	Chiropractic and Functional Neurology from Dr Jake Cooke. Treatment of the nervous system and muscles. For relieving back pain, neck pain, hip pain, shoulder pain, headaches ...
	</h1>
	<a id="frontpage-cta" class="btn" href="/trainmybrain/courses-and-prices/">
	Learn More
	</a>
</div>


<!----------------- THE CONTENT --------------->

<div id="frontteam" class="itemcont">
	<h1 id="frontteam-title">
		About Train My Brain
	</h1>
	<div id="frontteam-block">
		<img class="frontteam-img" src="http://bcneuro.co.uk/wp-content/uploads/2018/07/Jake-e1531047202743.jpeg" alt="Name" width=250 height=true />
		<span id="frontteam-text">
			<h2 class="frontteam-name">	Jake Cooke
			</h2>
			<h3 class="frontteam-info">
			MChiro, DACNB
			</h3>
			<p class="frontteam-description">
			Dr Jake Cooke graduated from AECC in 2009. He is a board-certified Functional Neurologist, with a diploma from the American Chiropractic Neurology Board. Jake currently works in a dedicated functional neurology practice in London, as well as a Chiropractic Clinic in Malden, Surrey. He also owns a boat.
			</p>
		</span>
	</div>
	
	<a id="frontteam-more" href="#">Read more about Jake here</a>
</div>

<div id="frontspecial-background">
	<div id="frontspecial" class="itemcont">
		<?php echo do_shortcode("[pt_view id=a4a08e44di]"); ?>
		<!--
		<h1 id="frontspecial-title">
		Social media links and info
		</h1>
		<h3 id="frontspecial-text">
		Plus blog extracts
		</h3>
		-->
	</div>
</div>

<div id="fronttestimonial-background">
	<div id="fronttestimonial" class="itemcont">
		<h1 id="fronttestimonial-title">
		What people say about trainmybrain
		</h1>
		<div id="fronttestimonial-slider">
			<div id="fronttestimonial-slider-text">
					<?php get_template_part('slidebox'); ?>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>