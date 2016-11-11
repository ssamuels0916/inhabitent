<?php
/**
* The template for displaying archive product pages.
*
* @package Inhabitent_Theme
*/

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <?php
the_archive_title( '<h1 class="page-title">', '</h1>' );

the_archive_description( '<div class="taxonomy-description">', '</div>' );
/*
Custom archive page title
*/

$terms = get_terms('product_type'); ?>
            <ul class="shop-stuff-items">
              <?php foreach ($terms as $term): ?>

                <?php $url = get_term_link($term->slug, 'product_type'); ?>

                  <a href="<?php echo $url ?>"><?php echo $term->name ?></a>

                  <?php endforeach; ?>
            </ul>

        </header>
        <!-- .page-header -->

        <?php /* Start the Loop */ ?>
          <div class="allProducts">
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="productDetails">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <header class="entry-header">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink() ; ?> ">
                        <?php the_post_thumbnail( 'large' ); ?>
                      </a>
                      <?php endif; ?>
                        <div class="product-details">
                          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                            <p>
                              <?php echo CFS()->get( 'product_price' ); ?>
                            </p>
                        </div>
                  </header>
                  <!-- .entry-header -->

                  <div class="entry-content">
                    <?php the_excerpt(); ?>
                  </div>
                  <!-- .entry-content -->
                </article>
                <!-- #post-## -->
              </div>
              <?php endwhile; ?>

                <!--<?php the_posts_navigation(); ?>-->
          </div>
          <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

              <?php endif; ?>
                <!--end of allProducts-->
    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php get_footer(); ?>