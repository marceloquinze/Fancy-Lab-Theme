<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

get_header();
?>

<div class="content-area">
	<main>
		<div class="container">
			<div class="row">
				<div class="blog-area col-lg-9 col-md-8 col-12">
				<?php 

				if( have_posts() ):

					// Load posts loop.
					while( have_posts() ): the_post();
						get_template_part( 'template-parts/content' );
					endwhile;

					// We're using numeric page navigation here.
			        the_posts_pagination( array(
			            'prev_text'	=> esc_html__( 'Previous' , 'fancy-lab'),
			            'next_text'	=> esc_html__( 'Next' , 'fancy-lab')
			        ));

			        // If no content, display the following message
					else: 
					?>
						<p><?php esc_html_e( 'Nothing to display', 'fancy-lab' ) ?></p>
				<?php 
				endif; 
				?>
			</div>
			<?php 
			// Display the main sidebar
			get_sidebar(); 
			?>
			</div>
		</div>											
	</main>
</div>
<?php get_footer(); ?>