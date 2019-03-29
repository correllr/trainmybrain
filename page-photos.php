<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!----------------- THE CONTENT --------------->
<h1 id="faq-title" class="itemcont">
	<?php the_title(); ?>
</h1>
<div id="faq-content" class="itemcont">
	<?php the_content(); ?>
</div>

	<!------ Gallery repeater ------->
	<div class="slick-carousel-container itemcont">
	<?php if( have_rows('photo_list') ): ?>
		<?php while( have_rows('photo_list') ): the_row(); ?>
		   <div> <!-- For Slick carousel, individual slide -->
			<?php
				$image = get_sub_field('photo');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		   </div> 
		<?php endwhile; ?>
	<?php endif; ?> <!-- End Gallery repeater -->
	</div>
	
		<!--- Mobile photos, no carousel --->
		<div class="mobile-gallery itemcont">
		<?php if( have_rows('photo_list') ): ?>
			<?php while( have_rows('photo_list') ): the_row(); ?>

				<?php
					$imagemob = get_sub_field('photo');
					if( !empty($imagemob) ): ?>
					<img src="<?php echo $imagemob['url']; ?>" alt="<?php echo $imagemob['alt']; ?>" title="<?php echo $imagemob['alt']; ?>" />
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?> <!-- End Gallery repeater -->
		</div>
	
<?php endwhile; endif; ?> <!-- End content loop -->

<script>
jQuery(document).ready(function(){
  jQuery('.slick-carousel-container').slick({
		dots: true,
		infinite: true,
	  speed: 800,
	  slidesToShow: 1,
	  centerMode: true,
	  variableWidth: true,
	  prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
	  nextArrow: '<i class="fas fa-chevron-right slick-next"></i>'
  });
  
  // Remove numbers from dots
	jQuery('.slick-dots button').html("");
});
</script>

<?php get_footer(); ?>