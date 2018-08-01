<?php get_header(); ?>

<!--- Blogs page ---->
<div id="blog-page-container">
	<!----------------- THE CONTENT --------------->
	<!--- LEFT COLUMN - EXCERPTS --->
	<div id="column-left" class="three-column">
		<div id="excerptcontainer">
		<h1>Read the Blogs</h1>
			<?php echo do_shortcode("[pt_view id=717e826d69]"); ?>
		</div>
	</div>

	<!-- RIGHT COLUMN - VIDEOS -->
	<div id="column-right" class="three-column">
	<h1>Watch Jake's Videos</h1>
		<?php echo do_shortcode("[pt_view id=58305eav7e]"); ?>

	</div>
	
	<div id="column-fb" class="three-column">
	<h1>Follow me on Facebook</h1>
	<div class="fb-page" data-href="https://www.facebook.com/trainmybrain.uk/" data-tabs="timeline" data-width="400" data-height="1500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/trainmybrain.uk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/trainmybrain.uk/">Neuro-Muscular Rehab</a></blockquote></div>
	</div>
</div>




<?php get_footer(); ?>