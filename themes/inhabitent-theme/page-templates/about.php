<?php
 /* Template Name: About Page
 *
 * @package Inhabitent_Theme
 */
 get_header(); ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
        <section class = "about_photo">
			<h2><?php echo get_the_title();  ?></h2>
        </section>
		<section class="about_copy">
			<!--Our Story/Team copy-->
			<div class='section'>
			<?php echo CFS()->get( 'our_story_title' ); ?>
			<?php echo CFS()->get( 'our_story' ); ?>
			<?php echo CFS()->get( 'our_team_title' ); ?>
			<?php echo CFS()->get( 'our_team' ); ?>
		
			</section>

		
			

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>