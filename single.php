<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<?php $blogimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-banner' ); ?>

<!----------------- THE CONTENT --------------->
<div id="blog-banner" style="background-image: url('<?php echo $blogimage[0]; ?>') ">
	<h1 id="blog-post-title" class="itemcont">
		<?php the_title(); ?>
	</h1>
</div>

<p class="post-info itemcont"><?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in 

<?php
$categories = get_the_category();
$separator = ", ";
$output = '';

if ($categories) {	
	foreach ($categories as $category) {		
		$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;	
}
echo trim($output, $separator);
}
?>


<div id="blog-post-content" class="itemcont">
	<?php the_content(); ?>
</div>

<h3 id="lastline-contact" class="itemcont">
	If you have any other questions or would like to make an appointment, <a href="#">click here</a> to contact me.
</h3>


<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>