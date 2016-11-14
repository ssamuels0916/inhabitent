<?php
/**
* The template for displaying all single product posts.
*
* @package Inhabitent_Theme
*/

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large' ); ?>
                <?php endif; ?>



                  <?php if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                      <?php red_starter_posted_on(); ?> /
                        <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> /
                          <?php red_starter_posted_by(); ?>
                    </div>
                    <!-- .entry-meta -->
                    <?php endif; ?>
          </header>
          <!-- .entry-header -->

          <div class="entry-content">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              <span>$
<?php echo CFS()->get( 'product_price' ); ?>
</span>
              <?php the_content(); ?>
                <div class='social'>
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
                  <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
                </div>

          </div>
          <!-- .entry-content -->
        </article>
        <!-- #post-## -->



        <?php the_post_navigation(); ?>

          <?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>

            <?php endwhile; // End of the loop. ?>
    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->


  <?php get_footer(); ?>