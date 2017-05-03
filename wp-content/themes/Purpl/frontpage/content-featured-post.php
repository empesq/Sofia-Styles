<section id="featured-post">
	<div class="wrapper">
		<div class="sectionHeading">
			<a href="#">
				<h1>Sofia Style</h1>
			</a>
		</div>
	
		<?php
		$posts = array(
		"post1" => 81,
		"post2" => 84,
		"post3" => 78
		); ?>
		<div class="row">
		<?php	foreach ($posts as $value) { ?>
				<div class="col col-md-4 col-sm-6 col-xs-12 image-gallery">
				<?php echo get_the_post_thumbnail($value); ?> <br/>
				<div class="post-heading-secondary"> 
					<h3> <?php echo get_post($value)->post_title; ?> </h3> <br/>
					<a href="<?php echo get_permalink($value); ?>" class="text-link-primary"> Read more</a>
				</div>
				</div>
			<?php   
			}
			?>
		</div>
	
	</div>
</section>