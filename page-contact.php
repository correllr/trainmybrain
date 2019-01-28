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
<div id="referral"  class="itemcont">
	<h3>
	Are you a clinician wanting to refer a patient? Click here</h3>
	<p>
	If you would like to refer a patient please send an email to jake@trainmybrain.uk with a summary of the patient's condition. Please attach any relevant imaging, investigations or reports. You're welcome to provide us with the patients contact details and we will arrange the initial consultation. Equally, we're happy to wait for the patient to contact us.
	</p>
	<p>
	After the initial consultation we will send a report of the examination findings and recommendations. In some cases the patient can be referred back to you after 3-4 treatments with some exercises and treatment plan. Other cases may require a longer treatment program. 
	</p>
	<p>
	We will keep you updated on the patients progress and refer them back to you when suitable. 
	</p>
	<p>
	Thank you for trusting us with your patients care.
	</p>
</div>

<div id="contact-container" class="itemcont">
	<div id="contact-clinic-1" class="contact-clinic">
		<a id="clinic-phone" href="callto:+441483382449">
			Call us on 01483 382449
		</a>
		<p>You can reach us Monday - Friday from 09:00 to 18:00</p>
		<a id="clinic-phone" href="/online-booking">
			Click here to book your appointment online
		</a>
		<h3>Where to find us</h3>
		<p>
			The Neuro-Muscular Clinic<br>
			43 The Riding<br>
			Woking<br>
			GU21 5TA
		</p>
		
		<div id="contact-map-TCC" class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9971.457690435187!2d-0.5497617412567738!3d51.33201348156163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875d8131a0ab805%3A0x8e21bc6f5c24f261!2s43+The+Riding%2C+Woking+GU21+5TA%2C+Verenigd+Koninkrijk!5e0!3m2!1snl!2ses!4v1548601471746" width="95%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>		
	</div>
	<div id="contact-jake" class="contact-clinic">
		<h3>Send us a message</h3>
		<div id="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="65" title="Contact Form"]'); ?>
		</div>
		<a href="mailto:info@trainmybrain.uk">
			Email to info@trainmybrain.uk
		</a>
		<p>
			For clinicians interested in booking a seminar, please go to <a id="bcneurolink" href="http://www.bcneuro.co.uk">B C Neuro</a> for more information
		</p>
	</div>
	<!-------------
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
	------------->
</div>

<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>