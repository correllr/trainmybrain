<?php get_header(); ?>

<!--- BASIC PAGES, INCLUDING HOME ---->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!----------------- THE CONTENT --------------->
<h1 id="page-title">
	<?php the_title(); ?>
</h1>
<h3 id="page-description" class="itemcont">
	<?php the_content(); ?>
</h3>
<div id="page-content" class="itemcont">
	<div id="col-neuro" class="two-column">
		<h1 id="neuro-title">
			<?php the_field('fn_title'); ?>
		</h1>
		<h2 id="neuro-subtitle">
			<?php the_field('fn_subheading'); ?>
		</h2>
		<div id="neuro-content">
			<?php the_field('functional_neurology_description'); ?>
		</div>
	</div>
	<div id="col=pain" class="two-column">
		<h1 id="pain-title">
			<?php the_field('pain_title'); ?>
		</h1>
		<h2 id="pain-subtitle">
			<?php the_field('pain_subheading'); ?>
		</h2>
		<div id="pain-content">
			<?php the_field('pain_description'); ?>
			
		</div>
	</div>
</div>

<div id="page-subbanner-container">

	<h1 id="page-testimonials-title">
		What people say about Us
	</h1>
</div>

<div id="page-testimonials" class="itemcont">
	<div class="col-4 text">
		<p>
			'I was a little dubious when I was told Neuroworks could cure my shoulder pain that I had been living with for so long but after only 3 sessions my shoulder was feeling approx. 80% better. Jake Cooke came highly recommended to me and I can now pass on this recommendation. I have just finished my 5th session and my shoulder has almost made a full recovery. Jake is professional, reliable and friendly with his patient's needs at the forefront of his practice' <span>- Amy, Teacher.</span>
		</p>
	</div>
	<div class="col-4" style="background-image: url(/trainmybrain/wp-content/uploads/2018/07/CF-Girl-e1532549071847.jpeg)">
	</div>
	<div class="col-4 text">
		<p>
			'I am currently receiving treatment at Neuroworks Chiropractic Clinic in Ealing under practitioner/chiropractor Jake Cooke. I have found Jake’s approach, treatment, exercise programme, guidance and encouragement excellent. Following on from an initial assessment and diagnosis, the specific, innovative and progressive treatment plan has been carried out in a relaxed and comforting environment and I would highly recommend Jake and the Clinic' <span>- Peter</span>
		</p>
	</div>
	<div class="col-4" style="background-image: url(/trainmybrain/wp-content/uploads/2018/07/TrP.jpeg)">
	</div>
	<div class="col-4 text">
		<p>
			'I recently visited Jake Cooke after a traumatic fall where I had a whiplash injury and also had a problem with my hip. I found him to be extremely professional, personable and knowledgable. He has a very easy manner and I have complete confidence in his abilities. He has completely sorted my neck and has given me exercises to do which are strengthening my hip. I would have no hesitation in recommending him to anybody' <span>- Mary, Air hostess</span>
		</p>
	</div>
	<div class="col-4"  style="background-image: url(/trainmybrain/wp-content/uploads/2018/07/Sunset.jpeg)">
		
	</div>
	<div class="col-4 text">
		<p>
			'I recently visited the clinic in New Malden as I was suffering from acute BPPV. Jake was able to pinpoint the cause of my condition immediately and clearly articulated the required cause of treatment. I was particularly impressed with Jake’s knowledge of the condition and was able to treat me accordingly. Excellent service, and would recommend to anyone – thanks for fixing me!' <span>- Hannah, Accountant</span>
		</p>
	</div>
		<div class="col-4" style="background-image: url(/trainmybrain/wp-content/uploads/2018/07/Man-in-field.jpg)">
	</div>
	<div class="col-4 text">
		<p>
			'I was a little dubious when I was told Neuroworks could cure my shoulder pain that I had been living with for so long but after only 3 sessions my shoulder was feeling approx. 80% better. Jake Cooke came highly recommended to me and I can now pass on this recommendation. I have just finished my 5th session and my shoulder has almost made a full recovery. Jake is professional, reliable and friendly with his patient's needs at the forefront of his practice' <span>- Amy, Teacher</span>
		</p>
	</div>
</div>

<?php get_template_part('lastline'); ?>


<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>