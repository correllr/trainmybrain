<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!----------------- THE CONTENT --------------->
<h1 id="resources-title" class="itemcont">
	<?php the_title(); ?>
</h1>
<div id="resources-content" class="itemcont">
	<?php the_content(); ?>
</div>

<?php get_template_part('lastline'); ?>


<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>