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
<!---
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
--->
	<p id="booking-link">
		Click here to book your appointment online
	</p>
<div id="contact-container" class="itemcont">
	<div id="contact-clinic-1" class="contact-clinic">
		<a id="clinic-phone" href="callto:+441483382449">
			Call us on 01483 382449
		</a>
		<p>You can reach us Monday - Friday from 09:00 to 18:00</p>
		<!--- Book link removed from here --->
		<h3>Where to find us</h3>
		<p>
			The Neuro-Muscular Clinic<br>
			43 The Riding<br>
			Woking<br>
			GU21 5TA
		</p>
		
		<div id="contact-map-TCC" class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2492.8644281520815!2d-0.5431956845484985!3d51.332013379606714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876091aabc96c9b%3A0xd66ce2920c0c1c9b!2sThe+Neuro-Muscular+Clinic!5e0!3m2!1snl!2snl!4v1554709711842!5m2!1snl!2snl" width="95%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>		
	</div>
	<div id="contact-jake" class="contact-clinic">
		<h3><?php the_field('pricing_title'); ?></h3>
		<div id="pricing-container">
			<?php if( have_rows('price_levels') ): ?>
				<?php while( have_rows('price_levels') ): the_row(); ?>
					<div id="price-row">
						<div id="price-left">
							<p id="price-title"><?php the_sub_field('type_of_visit'); ?></p>
							<p id="price-description"><?php the_sub_field('visit_description'); ?></p>
						</div>
						<div id="price-right">
							<p id="price-number"><?php the_sub_field('price'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<p id="pricing-extra"><?php the_field('extra_information'); ?></p>
		</div>
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
<h1 class="itemcont"><?php the_field('booking_title'); ?></h1>

<div id="contactpage-booking" class="itemcont">
<iframe id='cliniko-37129915' src='https://the-neuro-muscular-clinic.cliniko.com/bookings?embedded=true' frameborder='0' scrolling='auto' width='100%' height='1000'></iframe>
</div>

<script type='text/javascript'>
  window.addEventListener('message', function handleIFrameMessage (e) {
    var clinikoBookings = document.getElementById('cliniko-37129915')
    if (typeof e.data !== 'string') return;
    if (e.data.search('cliniko-bookings-resize') > -1) {
      var height = Number(e.data.split(':')[1]);
      clinikoBookings.style.height = height + 50 + 'px';
    }
    e.data.search('cliniko-bookings-page') > -1 && clinikoBookings.scrollIntoView();
  });
</script>

<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>