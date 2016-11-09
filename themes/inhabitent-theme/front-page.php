<?php
/**
 * The template for the home page.
 * @package Inhabitent_Theme
 */

get_header(); ?>

    <section class = "hero-image">
        <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="hero-img" alt="inhabitent circle logo" />
    </section>

<!--	<div id = "primary" class="content-area">
		<main id = "main" class="site-main" role="main">-->

<!--   Shopping Section -->

            <section class = "shop-stuff">
                <h2>Shop Stuff</h2>
                    
                <?php
                $terms = get_terms('product_type');
                foreach ($terms as $term):
                ?>
                <div>
               
                <?php $url = get_term_link($term->slug, 'product_type'); ?>
                <img src = "<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" />
                <!--term meta api *try later-->
                <p><?php echo $term->description ?></p>
                <p><a href="<?php echo $url ?>"><?php echo $term->name ?> Stuff</a></p>
                <?php endforeach; ?>
                 </div>
                
            </section>

<!--   Inhabitent Journal Section -->

            <section class = "inhabitent-journal">
                <h2>Inhabitent Journal</h2>
    <div class="get-posts">
  	<!--get_posts()-->
               
<?php
   $args = array( 'post_type' => 'post',
   'posts_per_page' => 3,
    'order' => 'DESC',);

   $product_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $product_posts as $post ) : setup_postdata( $post );
 ?>
 <div class = "post-content">
   <?php the_post_thumbnail(); ?>
   <p>
       <?php the_date(); ?> <?php 
        $comments_count = wp_count_comments();
        echo $comments_count->approved . " Comments";
        ?>
</p>
   
    <h3><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<a class = "read" href = "<?php the_permalink(); ?>">Read entry</a>
		<br />

</div>
		 

<?php endforeach; 
wp_reset_postdata(); ?>


</div>




            </section>   


<!--   Adventure Section -->
            <section class="adventure">
                <h2>Latest Adventures</h2>
                <div class = "adventure-block">

                    <div class = "left-block">
                        <h3>Getting Back to Nature in a Canoe</h3>
                        <a class  = "adventure-text" href="<?php the_permalink(); ?>">Read More</a>
                        
                    </div>

                        <div class = "right-block">
                            <div class = "beach">
                                <h3>A Night with Friends at the Beach</h3>
                              <a class  = "adventure-text" href="<?php the_permalink(); ?>">Read More</a>  
                            </div>
                            <div class = "mountain">
                                <h3>Taking in the View at Big Mountain</h3>
                                <a class  = "adventure-text" href="<?php the_permalink(); ?>">Read More</a> 
                            </div>
                            <div class = "stars">
                                <h3>Star-gazing at the Night Sky</h3>
                                <a class  = "adventure-text" href="<?php the_permalink(); ?>">Read More</a> 
                            </div>
                        </div>
                    </div>

            </section>
			

		<!--</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
