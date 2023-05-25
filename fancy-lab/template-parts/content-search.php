<?php
/**
 * Template part for displaying search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

?>
<article <?php post_class(); ?>>
	<h2 class="title">
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
    <div class="post-thumbnail">
    	<?php 
        	if( has_post_thumbnail() ): 
        		the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid') );
        	endif;
    	?>
    </div>	
    <div class="meta">
		<p>
            <?php esc_html_e( 'Published by', 'fancy-lab' ); ?> <?php the_author_posts_link(); ?> 
            <?php esc_html_e( 'on', 'fancy-lab' ) ?> <a href="<?php the_permalink() ?>"><?php echo esc_html( get_the_date() ); ?></a>
            <br />
            <?php if( has_category() ): ?>
                <?php esc_html_e( 'Categories', 'fancy-lab' ) ?>: <span><?php the_category( ' ' ); ?><br/>
            <?php endif; ?>
    		<?php if( has_tag() ): ?>
    			<?php esc_html_e( 'Tags', 'fancy-lab' ) ?>: <span><?php the_tags( '', ', '); ?></span>
    		<?php endif; ?>
		</p>				        	
    </div>						
    <?php if( has_excerpt() ): ?>
        <div class="content"><?php the_excerpt(); ?></div>
    <?php elseif( strpos( $post->post_content, '<!--more-->' ) ): ?>
       <div class="content"><?php the_content( 'More' ); ?></div>
    <?php else: ?>
         <div class="content"><?php the_excerpt(); ?></div>
    <?php endif; ?>
</article>