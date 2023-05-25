<?php
/**
 * The template for the sidebar containing the shop widget area
 *
 * @package Fancy Lab
 */
?>

<?php if ( is_active_sidebar( 'fancy-lab-sidebar-shop' )  ) : ?>
   <?php dynamic_sidebar( 'fancy-lab-sidebar-shop' ); ?>
<?php endif;