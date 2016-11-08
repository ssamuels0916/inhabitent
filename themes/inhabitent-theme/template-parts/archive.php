<?php
/**
* Template part for displaying posts.
*
* @package Inhabitent_Theme

**delete not using
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="archive-header">
        
    

    

        <?php if ( 'post' === get_post_type() ) : ?>
        <div class="archive-meta">
            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="archive-content">
   <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
               <?php the_title( sprintf( '<h2 class="archive-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                
                <?php echo CFS()->get( 'product_price' ); ?>
        
        <?php endif; ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->