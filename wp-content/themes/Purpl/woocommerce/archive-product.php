<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php 
	
	// verify that this is a product category page
	if ( is_product_category() ){
	    global $wp_query;
	    
	    global $post;
	    $prod_terms = get_the_terms( $post->ID, 'product_cat' );
	    
	    foreach ($prod_terms as $prod_term) {
	
		    // gets product cat id
		    $product_cat_id = $prod_term->term_id;
		
		    // gets an array of all parent category levels
		    $product_parent_categories_all_hierachy = get_ancestors( $product_cat_id, 'product_cat' );  
		    
		
		
		    // This cuts the array and extracts the last set in the array
		    $last_parent_cat = array_slice($product_parent_categories_all_hierachy, -1, 1, true);
		    foreach($last_parent_cat as $last_parent_cat_value){
		        // $last_parent_cat_value is the id of the most top level category, can be use whichever one like
		       // echo '<strong>' . $last_parent_cat_value . '</strong>';
		    }
	   }
			
	    // get the query object
	    $cat = $wp_query->get_queried_object();
		    
	    // get the thumbnail id using the queried category term_id
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    
	    if(!$thumbnail_id) {
	    	$thumbnail_id = get_woocommerce_term_meta( $last_parent_cat_value, 'thumbnail_id', true );
	    }
	     
	    
	    // get the image URL
	    $bg_image = wp_get_attachment_url( $thumbnail_id ); 
	    $desc = $cat->description;
	}
?>

<?php if (isset($bg_image) && isset($desc)) { ?>
<style>
.banner-img {
	background: url("<?php echo $bg_image; ?>");
	background-size: cover;
	background-attachment: fixed;
}
</style>

<div class="banner-img">
	<div class="banner-overlay wrapper text-center">
		<?php echo $desc; ?>
	</div>
</div>
<?php } ?> 

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<div class="sectionHeading">
				<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
			</div>
		<?php endif; ?>
		
		<?php 
			
		?>
		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			/*do_action( 'woocommerce_archive_description' );*/
		?>
		<div class="products-grid">
		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>
	</div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		/* do_action( 'woocommerce_sidebar' ); */
	?>

<?php get_footer( 'shop' ); ?>
