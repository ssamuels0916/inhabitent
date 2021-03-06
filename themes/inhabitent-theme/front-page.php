<?php


/**
The template for the home page.
* @package Inhabitent_Theme
*/

get_header();


?>

  <section class="hero-image">
    <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg';
?>" class="hero-img" alt="inhabitent circle logo" />
  </section>

  <!--   Shopping Section -->

  <section class="shop-stuff">
    <h2>Shop Stuff</h2>
    <div class="shop-section">
      <?php $terms = get_terms('product_type');
      foreach ($terms as $term):
      ?>
      <?php $url = get_term_link($term->slug, 'product_type'); ?>
    <div class="shop-stuff-content">
        <!--Shop stuff section icons-->
        <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" />
        <p>
            <?php echo $term->description ?>
        </p>
        <p><a href="<?php echo $url ?>"><?php echo $term->name ?> <span>Stuff</span></a></p>
    </div>
        <?php endforeach;?>
    </div>
  </section>
  <!--   Inhabitent Journal Section -->
  <section class="inhabitent-journal">
    <h2>Inhabitent Journal</h2>
    <div class="get-posts">
      <!--get_posts()-->
      <!--Returns an array of posts-->
      <?php
          $args = array( 'post_type' => 'post',
          'posts_per_page' => 3,
          'order' => 'DESC',);
          $product_posts = get_posts( $args );
      ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
          <div class="post-content">
            <?php the_post_thumbnail(); ?>
              <div class="journal-info">
                <p>
                  <?php the_date(); ?> /
        <?php $comments_count = wp_count_comments();
              echo $comments_count->approved . " Comments"; ?>
                </p>
                <h3><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <a class="read" href="<?php the_permalink(); ?>">Read entry</a>
              </div>
          </div>
          <?php endforeach;
          wp_reset_postdata();
          ?>
    </div>
  </section>
  <!--   Adventure Section -->
  <section class="adventure">
    <h2>Latest Adventures</h2>
    <div class="adventure-block">
      <div class="left-block">
        <h3><a class="adventure-link" href="#">Getting Back to Nature in a Canoe</a></h3>
        <a class="adventure-text" href="<?php the_permalink();
?>">Read More</a>
      </div>
      <div class="right-block">
        <div class="beach">
          <h3><a class="adventure-link" href="#">A Night with Friends at the Beach</a></h3>

          <a class="adventure-text" href="<?php the_permalink();
?>">Read More</a>
        </div>
        <div class="mountain">
          <h3><a class="adventure-link" href="#">Taking in the View at Big Mountain</a></h3>
          <a class="adventure-text" href="<?php the_permalink();
?>">Read More</a>
        </div>
        <div class="stars">
          <h3><a class="adventure-link" href="#">Star-gazing at the Night Sky</a></h3>
          <a class="adventure-text" href="<?php the_permalink();
?>">Read More</a>
        </div>

      </div>
      <span><a href="<?php the_permalink(); ?>">More Adventures</a></span>
    </div>

  </section>
  <!--</main><!-- #main -->
  </div>
  <!-- #primary -->
  <?php get_footer();
?>