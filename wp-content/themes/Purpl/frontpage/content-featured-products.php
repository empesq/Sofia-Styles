<section id="featured-products" class="rel wrapper">

	<div class="sectionHeading">

		<a href="#"> <h1> Featured </h1> </a>

	</div>

	<div class="row">

		<?php
 
		echo do_shortcode("[wcps id='55']");
		//echo do_shortcode('[featured_products per_page="12" columns="4"]');
		//echo do_shortcode('[wpcs id="93"]');
		
		/*$args = array(  
		    'post_type' => 'product',  
		    'meta_key' => '_featured',  
		    'meta_value' => 'yes',  
		    'posts_per_page' => 10  
		);  
		  
		$featured_query = new WP_Query( $args );  
		      
		if ($featured_query->have_posts()) :   
		  
		    while ($featured_query->have_posts()) :   
		      
		        $featured_query->the_post();  
		          
		        $product = get_product( $featured_query->post->ID );  
		          
		        echo get_post($product)->post_title; 
		          
		    endwhile;  
		      
		endif;  
		  
		wp_reset_query(); // Remember to reset  */
		?>

	</div>

</section>