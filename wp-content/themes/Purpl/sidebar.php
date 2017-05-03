<?php

if ( ! is_active_sidebar( 'products-sidebar' ) ) {
	return;
}
?>

<div id="products-sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'products-sidebar' ); ?>
</div><!-- #secondary -->

<div id="acrd-products-sidebar" class="widget-area" role="complementary">
	<dl class="accordion">
		<?php dynamic_sidebar( 'acrd-products-sidebar' ); ?>
	</dl>
</div>