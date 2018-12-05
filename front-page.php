<?php get_header(); ?>

<!-- HOME ---->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div id="frontpage-pitch" class="itemcont">
	<h1 id="frontpage-pitch-text">
		<?php the_content(); ?>
	</h1>
	<a id="frontpage-cta" class="btn" href="/why-train-my-brain/">
	Learn More
	</a>
</div>

<?php endwhile; else: ?>
	<h3>Read about <?php bloginfo('name'); ?></h3>
<?php endif; ?>
<!----------------- THE CONTENT --------------->

<div id="frontteam" class="itemcont">
	<h1 id="frontteam-title">
		About <?php bloginfo('name'); ?>
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
			My singular priority is to help you reach your goal. Whether that’s to be pain free, run a marathon or simply pick up your child. My approach is honest, evidence based and patient centered. I am one of the few chiropractors in the UK to have passed the American Chiropractic Neurology Board exams and spend my weekends teaching neurology seminars to chiropractors, physiotherapists and occupational therapists both in the UK and Europe. The nervous system controls your posture, coordination and pain. I use latest research, treatment techniques and rehabilitation exercises to ensure that you are as healthy and strong as you want to be.
			</p>
		</span>
	</div>
	
	<!-- <a id="frontteam-more" href="#">Read more about Jake here</a> -->
</div>

<div id="frontspecial-background">
	<div id="frontspecial" class="itemcont">
		<?php echo do_shortcode("[pt_view id=a4a08e44di]"); ?>
	<a id="special-more-blogs" href="/blogs/">More blogs and videos here</a>
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
		What people say about <?php bloginfo('name'); ?>
		</h1>
		<div id="fronttestimonial-slider">
			<div id="fronttestimonial-slider-text">
					<?php get_template_part('slidebox'); ?>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>