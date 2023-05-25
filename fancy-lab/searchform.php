<?php
/**
 * Template for displaying search forms in Fancy Lab
 *
 * @package Fancy Lab
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fancy-lab' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'fancy-lab' ); ?></span></button>
	<?php 
	// If WooCommerce is activated, we'll be searching among products, not posts
	if( class_exists( 'WooCommerce' ) ): 
	?>
		<input type="hidden" value="product" name="post_type" id="post_type" />
	<?php endif; ?>
</form>