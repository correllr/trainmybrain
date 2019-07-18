jQuery( document ).ready(function() {
// After here


/*On Page Load
jQuery('.hidecourse').hide();
*/

//MENU 
	// Open
		jQuery('#mobilemenuopen').click(function() {
			jQuery('#mobilemenuopen').css({'display':'hidden'});
			jQuery('#header-menu').fadeIn(500);
			jQuery('#mobilemenuclose').fadeIn(500);
		});
	
	
	// Close
		jQuery('#mobilemenuclose').click(function() {
			jQuery('#header-menu').hide();
			jQuery('#mobilemenuclose').hide();
			jQuery('#mobilemenuopen').fadeIn(800);
		});
	
// Contact
	/* Show referral info
	jQuery('#referral h3').click(function() {
		jQuery('#referral p').toggle();
	});
	*/
	
	// Scroll to online booking
	jQuery('#booking-link').click(function() {
		jQuery('html, body').animate({scrollTop: (jQuery('#contactpage-booking').offset().top)},500);
	});
	
	
/* Show/Hide Contact Page

	// Show
	jQuery('.open-contact').click( function() {
		jQuery('#contact').fadeIn(800);		
	});
	
	
	// Hide
	
	jQuery('#contact-close').click( function() {
		jQuery('#contact').fadeOut(800);		
	});
*/

//END
});