<?php 
/*
	Template Name: Product Page
*/
	
get_header(); ?>

<div class="page-wrap">
	<?php 
	if(have_posts()) :
		while ( have_posts()) : the_post(); ?>
		<article class="post">
			<h2> <a href= <?php echo the_permalink(); ?> > <?php echo the_title(); ?> </a></h2>
			<p> <?php echo the_content(); ?> </p>
		</article>
		<?php endwhile;
	else : 
		echo 'No content found';
	endif; ?>
	
	<div class="product-sidebar">
		<?php get_sidebar('Main Sidebar'); ?>
	</div>
</div>

<?php get_footer(); ?>