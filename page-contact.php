<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!----------------- THE CONTENT --------------->
<h1 id="contact-title" class="itemcont">
	<?php the_title(); ?>
</h1>
<div id="contact-content">
	<?php the_content(); ?>
</div>

<div id="contact-container" class="itemcont">
	<div id="contact-clinic-1" class="contact-clinic">
		<p>
			The Chiropractic Clinic<br>
			157 Burlington Road<br>
			New Malden, Surrey<br>
			KT3 4LU
		</p>
		<a href="http://www.backandneckpain.co.uk">
			www.backandneckpain.co.uk
		</a>
		<a href="">
			020 8715 1133
		</a>
		<div id="contact-map-TCC" class="contact-map">
			
		</div>		
	</div>
	<div id="contact-jake" class="contact-clinic">
		<div id="contact-form">
		
		</div>
		<a href="mailto:jake@trainmybrain.uk">
			Email to jake@trainmybrain.uk
		</a>
		<p>
			For clinicians interested in booking a seminar, please go to <a href="http://www.bcneuro.co.uk">B C Neuro</a> for more information
		</p>
	</div>
	<div id="contact-clinic-2" class="contact-clinic">
		<p>
			Neuroworks<br>
			31 The Mall<br>
			Ealing, London<br>
			W5 2PX		
		</p>
		<a href="http://www.neuroworks.co.uk">
			www.neuroworks.co.uk
		</a>
		<a href="">
			020 8566 3757
		</a>
		<div id="contact-map-neuroworks" class="contact-map">
			
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>