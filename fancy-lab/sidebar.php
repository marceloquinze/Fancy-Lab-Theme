<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Fancy Lab
 */
?>

<?php if ( is_active_sidebar( 'fancy-lab-sidebar-1' )  ) : ?>
	<aside class="sidebar-1 col-lg-3 col-md-4 col-12 h-100">
   		<?php dynamic_sidebar( 'fancy-lab-sidebar-1' ); ?>
	</aside>
<?php endif;