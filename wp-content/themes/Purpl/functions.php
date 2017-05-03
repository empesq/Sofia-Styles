<?php

// UNHOOK THE WooCommerce WRAPPERS

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );



// HOOK IN Purpl WRAPPERS 

function my_theme_wrapper_start() {

  echo '<section id="main" class="wrapper">';

}



function my_theme_wrapper_end() {

  echo '</section>';

}

function custom_woo_before_shop_link() {
    add_filter('woocommerce_loop_add_to_cart_link', 'custom_woo_loop_add_to_cart_link', 10, 2);
    add_action('woocommerce_after_shop_loop', 'custom_woo_after_shop_loop');
}

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);

add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

add_action('woocommerce_before_shop_loop', 'custom_woo_before_shop_link');



// DECLARE WooCommerce SUPPORT

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {

    add_theme_support( 'woocommerce' );

}

/**
 * Remove existing tabs from single product pages.
 */
function remove_woocommerce_product_tabs( $tabs ) {
	unset( $tabs['description'] );
	unset( $tabs['reviews'] );
	unset( $tabs['additional_information'] );
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'remove_woocommerce_product_tabs', 98 );

//Change the breadcrumb separator
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_delimiter' );
function jk_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

//Add wishlist button after add-to-cart button in single product page
add_action('woocommerce_after_add_to_cart_button','add_wishlist_button');
function add_wishlist_button() {
	echo do_shortcode('[yith_wcwl_add_to_wishlist link_classes="sbtn btnPrimary"]');
}


// Purpl SETUP

function testing() {
	wp_enqueue_style('bootstrap', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'testing');

//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_script( 'prefix-font-awesome', 'https://use.fontawesome.com/923082c2e8.js' );
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

function enqueue_js()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/purpl.js' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/purpl.js');
}
add_filter( 'wp_enqueue_scripts', 'enqueue_js', 0 );
add_action( 'wp_enqueue_scripts', 'enqueue_js' );


function Purpl_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'Purpl_resources');

// REGISTER NAVIGATION MENUS

register_nav_menus( array (

	'primary' => __('Primary Menu'),

	'footer' => __('Footer Menu'),

));



// REGISTER PRODUCT SIDEBAR

function theme_slug_widgets_init() {

    register_sidebar( array(

        'name' => __( 'Products Sidebar', 'theme-slug' ),

        'id' => 'products-sidebar',

        'description' => __( 'Widgets for product sidebar.', 'theme-slug' ),

        'before_widget' => '<li id="%1$s" class="widget %2$s">',

		'after_widget'  => '</li>',

		'before_title'  => '<h3 class="widgettitle">',

		'after_title'   => '</h3>',

    ) );

	register_sidebar( array(

        'name' => __( 'Products Sidebar- Accordion', 'theme-slug' ),

        'id' => 'acrd-products-sidebar',

        'description' => __( 'Widgets for product filter on mobile screens.', 'theme-slug' ),

        'before_widget' => '<dt>',

		'before_title'  => '<span class="widgettitle">',

		'after_title'   => '</span></dt><dd>',

		'after_widget'  => '</dd>',

    ) );

}

add_action( 'widgets_init', 'theme_slug_widgets_init' );





//CUSTOMIZE APPEARANCE OPTIONS

function purpl_customize_register($wp_customize){

	

	$wp_customize->add_section('purpl_standard_colors', array(

		'title' => __('Standard Colors', 'Purpl'),

		'priority' => 30,

	));

	

	// Button Background Color

	$wp_customize->add_setting('purpl_buttonbg_color', array(

		'default' => '#daa520',

		'transport' => 'refresh',

	));

	

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'purpl_buttonbg_color_control', array(

		'label' => __('Button Background Color', 'Purpl'),

		'section' => 'purpl_standard_colors',

		'settings' => 'purpl_buttonbg_color',

	)));

	

	// Button Link Color

	$wp_customize->add_setting('purpl_button_color', array(

		'default' => '#daa520',

		'transport' => 'refresh',

	));

	

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'purpl_button_color_control', array(

		'label' => __('Button Link Color', 'Purpl'),

		'section' => 'purpl_standard_colors',

		'settings' => 'purpl_button_color',

	)));

	

	// Header Background Color

	$wp_customize->add_setting('purpl_headerbg_color', array(

		'default' => '#e05596',

		'transport' => 'refresh',

	));

		

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'purpl_headerbg_color_control', array(

		'label' => __('Header Background Color', 'Purpl'),

		'section' => 'purpl_standard_colors',

		'settings' => 'purpl_headerbg_color',

	)));

	

	// Header Link Color

	$wp_customize->add_setting('purpl_header_color', array(

		'default' => '#daa520',

		'transport' => 'refresh',

	));

		

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'purpl_header_color_control', array(

		'label' => __('Header Link Color', 'Purpl'),

		'section' => 'purpl_standard_colors',

		'settings' => 'purpl_header_color',

	)));

	

	// Footer Background Color

	$wp_customize->add_setting('purpl_footerbg_color', array(

		'default' => '#000',

		'transport' => 'refresh',

	));

		

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'purpl_footerbg_color_control', array(

		'label' => __('Footer Background Color', 'Purpl'),

		'section' => 'purpl_standard_colors',

		'settings' => 'purpl_footerbg_color',

	)));

}

add_action('customize_register', 'purpl_customize_register');

?>

<?php

// OUTPUT CUSTOMIZE CSS

function purpl_customize_css() { ?>

	<style type= "text/css">

				

		/*.btnPrimary {
			background-color: <?php echo get_theme_mod('purpl_button_color');?>; 
			border: 2px solid <?php echo get_theme_mod('purpl_button_color');?>;
			color: <?php echo get_theme_mod('purpl_buttonbg_color');?>; 
		}

			.btnPrimary:hover {
				background-color: <?php echo get_theme_mod('purpl_buttonbg_color');?>;
			}

			

		.btnPrimary:link {

			color: <?php echo get_theme_mod('purpl_buttonbg_color');?>;

		}

			.btnPrimary:hover:link {

				color: #fff;

			}
		*/
		

		.site-header {
			text-align: center;
		}

		

		.site-header a:link,

		.site-header a:visited {

			color: <?php echo get_theme_mod('purpl_header_color'); ?>

		}

		.site-nav .menu > li:hover h3 {

			border-bottom: 2px solid #daa520;

		}
		
		#featured-brand-image {
			background-image: url("<?php echo get_option('featured_brand_image'); ?>");
		}
	
		
		
	</style>

<?php }

add_action('wp_head', 'purpl_customize_css');



// THEME MENU OPTIONS

function purpl_add_options_page(){

	

	//This will add a top-level menu in the admin page

	add_menu_page(

		'Theme Options',				//The text to be displayed in the title tags of the page when the menu is selected

		'Theme Options',				//The on-screen name text for the menu

		'manage_options',				//The required capability of users to access this menu

		'purpl-theme-options',			//The slug by which this menu item is accessible

		'purpl_theme_options_display',	//The name of the function used to display the content

		''								//Provides a default icon for the menu page

	);

}

add_action( 'admin_menu', 'purpl_add_options_page' );



function purpl_initialize_theme_options(){

	//-----SLIDER SECTION ------------//

	add_settings_section(					//add_settings_section( $id, $title, $callback, $page ) 

		'brand_section',					// String for use in the 'id' attribute of tags.

		'Brands Section',					// Title of the section

		'',		// Function that fills the section with the desired content. The function should echo its output.

		'purpl-theme-options'				// The menu page on which to display this section. Should match $menu_slug from add_menu_page

	);

	

	add_settings_field(						//add_settings_field( $id, $title, $callback, $page, $section, $args )

		'featured_brand_image',					// String for use in the 'id' attribute of tags.

		'Featured Brand Image',					// Title of the field.

		'purpl_featured_brand_image_display',		// Function that fills the field with the desired inputs as part of the larger form. Passed a single argument, the $args array. Name and id of the input should match the $id given to this function. The function should echo its output.

		'purpl-theme-options',				// The menu page on which to display this field. 

		'brand_section'					//	The section of the settings page in which to show the box 

	);

	

	register_setting( 'settings_group', 'featured_brand_image', 'handle_file_upload' ); 

	
	//-----CATEGORIES SECTION ------------//

	add_settings_section(					//add_settings_section( $id, $title, $callback, $page ) 

		'categories_section',					// String for use in the 'id' attribute of tags.

		'Categories Section',					// Title of the section

		'',		// Function that fills the section with the desired content. The function should echo its output.

		'purpl-theme-options'				// The menu page on which to display this section. Should match $menu_slug from add_menu_page

	);

	
	//-----FOOTER SECTION ------------//

	add_settings_section(

		'footer_section',					// String for use in the 'id' attribute of tags.

		'Footer Section',					// Title of the section

		'purpl_footer_options_display',		// Function that fills the section with the desired content. The function should echo its output.

		'purpl-theme-options'				// The menu page on which to display this section. Should match $menu_slug from add_menu_page

	);

	

	add_settings_field(

		'footer_message',					// String for use in the 'id' attribute of tags.

		'Footer Message',					// Title of the field.

		'purpl_footer_message_display',		// Function that fills the field with the desired inputs as part of the larger form. Passed a single argument, the $args array. Name and id of the input should match the $id given to this function. The function should echo its output.

		'purpl-theme-options',				// The menu page on which to display this field. 

		'footer_section'					//	The section of the settings page in which to show the box 

	);

	register_setting( 'settings_group', 'footer_message' );	

	

	//-----FRONTPAGE SECTION ------------//

	add_settings_section(

		'frontpage_section',					// String for use in the 'id' attribute of tags.

		'Frontpage Section',					// Title of the section

		'purpl_frontpage_options_display',		// Function that fills the section with the desired content. The function should echo its output.

		'purpl-theme-options'					// The menu page on which to display this section. Should match $menu_slug from add_menu_page

	);

	

	add_settings_field(

		'frontpage_element1',					// String for use in the 'id' attribute of tags.

		'',										// Title of the field.

		'purpl_frontpage_element1_display',		// Function that fills the field with the desired inputs as part of the larger form. Passed a single argument, the $args array. Name and id of the input should match the $id given to this function. The function should echo its output.

		'purpl-theme-options',					// The menu page on which to display this field. 

		'frontpage_section'						//	The section of the settings page in which to show the box 

	);

	register_setting( 'settings_group', 'frontpage_element1' );	

	

	add_settings_field(

		'frontpage_element2',					// String for use in the 'id' attribute of tags.

		'',										// Title of the field.

		'purpl_frontpage_element2_display',		// Function that fills the field with the desired inputs as part of the larger form. Passed a single argument, the $args array. Name and id of the input should match the $id given to this function. The function should echo its output.

		'purpl-theme-options',					// The menu page on which to display this field. 

		'frontpage_section'						//	The section of the settings page in which to show the box 

	);

	register_setting( 'settings_group', 'frontpage_element2' );	

}

add_action( 'admin_init', 'purpl_initialize_theme_options' );



//--------------------FUNCTIONS--------------------------------//



function purpl_featured_brand_image_display(){ 

	echo "<div>" . get_option('featured_brand_image') . "</div>";

	echo "<input type='file' name='featured_brand_image' id='featured_brand_image' value='". get_option('featured_brand_image') ."'/>";

	

	//Call Media Library

	wp_enqueue_media();

	wp_enqueue_script( 'custom-header' );

	

	$modal_update_href = esc_url( add_query_arg( array(

		'page' => 'shiba_gallery',

		'_wpnonce' => wp_create_nonce('shiba_gallery_options'),

	), admin_url('upload.php') ) );

	?>

      

	<p>

	<a id="choose-from-library-link" href="#"

		data-update-link="<?php echo esc_attr( $modal_update_href ); ?>"

		data-choose="<?php esc_attr_e( 'Choose a Default Image' ); ?>"

		data-update="<?php esc_attr_e( 'Set as default image' ); ?>"><?php _e( 'Select image' ); ?>

	</a>

	</p>

<?php

}


function handle_file_upload($options)

{
	if(!empty($_FILES["featured_brand_image"]["tmp_name"])) {
	
	$urls = wp_handle_upload($_FILES["featured_brand_image"], array('test_form' => FALSE));
	
	$temp = $urls["url"];
	
	return $temp;   
	
	}
	
	return get_option("featured_brand_image");
}


function purpl_footer_options_display(){ ?>

	<h4> Display a message on the footer. </h4>

<?php

}



function purpl_footer_message_display(){ ?>

	<input type="text" name="footer_message" id="footer_message" value=" <?php echo get_option('footer_message'); ?> "/>

<?php

}



function purpl_frontpage_options_display() { ?>

	<h4>Arrange template parts (Drag & Drop).</h4>

<?php 

}



function purpl_frontpage_element1_display() { ?>

	<input type="checkbox" id="frontpage_element1" name="frontpage_element1" value="Product Categories" /> Product Categories

<?php

}



function purpl_frontpage_element2_display() { ?>

	<input type="checkbox" id="frontpage_element2" name="frontpage_element2" value="Product Brands" /> Featured Brand and More Brands

<?php

}



function purpl_theme_options_display(){ ?>

	<div class="wrap">

		<div id="icon-options-general" class="icon32"></div>

		<h2>Purpl Theme Options</h2>

		<form method="post" action="options.php" enctype="multipart/form-data">

			<?php 

			

				settings_fields('settings_group');				

				

				do_settings_sections('purpl-theme-options');

				

				submit_button();

			?>

		</form>

<?php }



// Change number or products per row to 3

add_filter('loop_shop_columns', 'loop_columns');

if (!function_exists('loop_columns')) {

	function loop_columns() {

		return 4; // 4 products per row

	}

}



//------------Disabling WooCommerce styles----------



// Remove each style one by one

/*add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );

function jk_dequeue_styles( $enqueue_styles ) {

	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss

	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout

	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation

	return $enqueue_styles;

} 



// Or just remove them all in one line

add_filter( 'woocommerce_enqueue_styles', '__return_false' ); */


/**======================================================================================
* customise Add to Cart link/button for product loop
* @param string $button
* @param object $product
* @return string
*/
function custom_woo_loop_add_to_cart_link($button, $product) {
    // not for variable, grouped or external products
    if (!in_array($product->product_type, array('variable', 'grouped', 'external'))) {
        // only if can be purchased
        if ($product->is_purchasable()) {
            // show qty +/- with button
            ob_start();
            woocommerce_simple_add_to_cart();
            $button = ob_get_clean();

            // modify button so that AJAX add-to-cart script finds it
            $replacement = sprintf('data-product_id="%d" data-quantity="1" $1 ajax_add_to_cart add_to_cart_button product_type_simple ', $product->id);
            $button = preg_replace('/(class="single_add_to_cart_button)/', $replacement, $button);
        }
    }

    return $button;
}

/**
* add the required JavaScript
*/
function custom_woo_after_shop_loop() {
    ?>

    <script>
    jQuery(function($) {

    <?php /* when product quantity changes, update quantity attribute on add-to-cart button */ ?>
    $("form.cart").on("change", "input.qty", function() {
        $(this.form).find("button[data-quantity]").data("quantity", this.value);
    });

    <?php /* remove old "view cart" text, only need latest one thanks! */ ?>
    $(document.body).on("adding_to_cart", function() {
        $("a.added_to_cart").remove();
    });

    });
    </script>

    <?php
}

?>



