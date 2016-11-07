<?php
/**
 * The template for the home page.
 * @package Inhabitent_Theme
 */

get_header(); ?>
    <section class = "hero-image">
        <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="hero-img" alt="inhabitent circle logo" />
    </section>

	<div id = "primary" class="content-area">
		<main id = "main" class="site-main" role="main">
            <section class = "shop-stuff">
                <h2>Shop Stuff</h2>
            </section>
            <section class = "inhabitent-journal">
                <h2>Inhabitent Journal</h2>
            </section>   

            <section class="adventure">
                <h2>Latest Adventures</h2>
                <div class = "adventure-block">

                    <div class = "left-block">
                    
                    </div>

                        <div class = "right-block">
                            <div class = "beach">
                                
                            </div>
                            <div class = "mountain">
                                
                            </div>
                            <div class = "stars">

                            </div>
                        </div>
                    </div>

            </section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
