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

            </section>
            <section class = "inhabitent-journal>
            
            </section>   

            <section class="adventure">
            
            </section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
