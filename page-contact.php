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
		<h3>Clinic in New Malden</h3>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2489.1970591044483!2d-0.2479065845455978!3d51.399433779617596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876091000e02539%3A0x618b05338bc846bf!2sThe+Chiropractic+Clinic!5e0!3m2!1sen!2ses!4v1533138222802" width="95%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>		
	</div>
	<div id="contact-jake" class="contact-clinic">
		<h3>Contact me directly</h3>
		<div id="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="65" title="Contact Form"]'); ?>
		</div>
		<a href="mailto:jake@trainmybrain.uk">
			Email to jake@trainmybrain.uk
		</a>
		<p>
			For clinicians interested in booking a seminar, please go to <a id="bcneurolink" href="http://www.bcneuro.co.uk">B C Neuro</a> for more information
		</p>
	</div>
	<div id="contact-clinic-2" class="contact-clinic">
		<h3>Clinic in Ealing</h3>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9739136059493!2d-0.2998488845406261!3d51.51369457963612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760df6376743e5%3A0x39bbb4b18bdd8caa!2sNeuroworks+Chiropractic+Clinic!5e0!3m2!1sen!2ses!4v1533138032152" width="95%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>