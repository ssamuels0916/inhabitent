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
            </section>

<!--   Inhabitent Journal Section -->

            <section class = "inhabitent-journal">
                <h2>Inhabitent Journal</h2>
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
                              <a class  = "adventure-text" href="<?php the_permalink(); ?>">A Night with Friends at the Beach</a>  
                            </div>
                            <div class = "mountain">
                                <a class  = "adventure-text" href="<?php the_permalink(); ?>">Taking in the View at Big Mountain</a> 
                            </div>
                            <div class = "stars">
                                <a class  = "adventure-text" href="<?php the_permalink(); ?>">Star-gazing at the Night Sky</a> 
                            </div>
                        </div>
                    </div>

            </section>
			

		<!--</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
