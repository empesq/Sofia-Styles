<?php 
/*
	Template Name: Default Template
*/
	get_header(); ?>


<div class="wrapper section-wrapper">
	<?php	if(have_posts()) :
			while ( have_posts()) : the_post(); ?>
				<article class="post">
					<?php 
					$page_title = get_the_title();
					if ($page_title != 'My Account') {
					?>
						<div class="sectionHeading">
							<h1> <?php echo $page_title; ?> </h1>
						</div>
					<?php } ?>
					<?php echo the_content(); ?>
				</article>
			<?php endwhile;
		else : 
			echo 'No content found';
		endif; ?>
		
</div>
	
<?php	get_footer(); ?>