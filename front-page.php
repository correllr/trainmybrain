<?php get_header(); ?>

<!-- HOME ---->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div id="frontpage-pitch" class="itemcont">
	<h1 id="frontpage-pitch-text">
		<?php the_content(); ?>
	</h1>
	<a id="frontpage-cta" class="btn" href="/pain-dizziness-balance-posture/">
	Learn More
	</a>
	<a id="frontpage-cta" class="btn" href="/online-booking/">
	<nobr>Book Online</nobr>
	</a>
	
	<!----
	<a id="frontpage-phone" href="callto:+441483382449">
		Call us on 01483 382449
	</a>
	---->
</div>

<?php endwhile; else: ?>
	<h3>Read about <?php bloginfo('name'); ?></h3>
<?php endif; ?>
<!----------------- THE CONTENT --------------->

<div id="frontteam" class="itemcont">
	<h1 id="frontteam-title">
		<?php the_field('about_title'); ?>
	</h1>
	<div id="frontteam-block">
		<img class="frontteam-img" src="<?php the_field('about_photo'); ?>" alt="Name" width=250 height=true />
		<span id="frontteam-text">
			<h2 class="frontteam-name"><?php the_field('about_subtitle_1'); ?>
			</h2>
			<h3 class="frontteam-info">
			<?php the_field('about_subtitle_2'); ?>
			</h3>
			<p class="frontteam-description">
			<?php the_field('about_text'); ?>
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