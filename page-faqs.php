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

<h3 id="lastline-contact" class="itemcont">
	If you have any other questions or would like to make an appointment, <a href="#">click here</a> to contact me.
</h3>


<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>