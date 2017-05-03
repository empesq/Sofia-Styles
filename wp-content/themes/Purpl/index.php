<?php get_header(); ?>

	<div class="slider home-slider">
		<?php echo do_shortcode('[masterslider id="2"]'); ?>
		<div class="text-center scroll-down"><span id="down-arrow"><i class="fa fa-angle-double-down" aria-hidden="true"></i></span></div>
	</div>
	
	<?php
		get_template_part('frontpage/content','product-categories');
	?>
	
	<?php
		//get_template_part('frontpage/content','newsletter');
		//get_template_part('frontpage/content','categories-gallery');
	?>
	
	
	<?php
		get_template_part('frontpage/content','brands');
	?>
	<?php
		/* get_template_part('frontpage/content','offers'); */
	?>
	<div>
	<?php
		/*get_template_part('frontpage/content','featured-products');*/
	?>
	</div> <!-- end: main -->
		
	<?php
		get_template_part('frontpage/content','new-products');
	?>
	
	<?php
		get_template_part('frontpage/content','deals');
	?>
		
	<?php
		// get_template_part('frontpage/content','featured-post');
	?>
	
	
	
	<?php
		//get_template_part('frontpage/content','newsletter');
		get_template_part('frontpage/content','instagram-shots');
	?>
	</div> <!-- end: main -->

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$("#down-arrow").click(function() {
				$('html, body').animate({
				  scrollTop: $("#categories-gallery").offset().top -100
				}, 1000);
			});
		});
	</script>
<?php get_footer(); ?>