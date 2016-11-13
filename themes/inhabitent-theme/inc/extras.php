<?php

/**
* Custom functions that act independently of the theme templates.
*
* @package  Inhabitent_Theme
*/


/**
* Adds custom classes to the array of body classes.
*
* @param array $classes Classes for the body element.
* @return array
*/
function red_starter_body_classes( $classes ) {
    // 	Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
    
    return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/*
Add custom logo to wp login
*/

function my_login_logo() {?>

  <style type="text/css">
    #login h1 a,
    .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri();
      ?>/images/logos/inhabitent-logo-text-dark.svg);
      padding-bottom: 30px;
      background-size: 300px !important;
      width: 300px !important;
      background-position: bottom !important;
    }
  </style>
  <?php
}

add_action( 'login_enqueue_scripts', 'my_login_logo' );

//change URL of custom logo on login page
function my_loginURL() {
    return '#';
}
add_filter('login_headerurl', 'my_loginURL');

//change the title tag of this link
function my_loginURLtext() {
    return 'Inhabitent Camping Supply Co.';
}
add_filter('login_headertitle', 'my_loginURLtext');


/*
Custom About Page background Image
*/

function my_styles_method() {
    
    if(!is_page_template( 'about.php' )){
        return;
    }
    $url = CFS()->get('about_page_photo');
    $custom_css = "
    .about_photo{
        background-image:linear-gradient( to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url( {$url});
    }";
    wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );


/*
Custom Archive Title
*/

function inhabitent_product_archive_title( $title ) {
    
    if(is_post_type_archive( 'product' )){
        $title = 'Shop Stuff';
    }
    return $title;
    
}
add_filter( 'get_the_archive_title', 'inhabitent_product_archive_title' );

/*
*   Retrieve the archive title for Do, Eat, Sleep and Wear
*/
function inhabitent_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    
    return $title;
}

add_filter( 'get_the_archive_title', 'inhabitent_archive_title' );


/*
Set posts to 16
*/

function products_per_post_page( $query ) {
    
    if(is_post_type_archive( 'product')&& !is_admin() && $query->is_main_query() ){
        $query->set('posts_per_page', '16');
        $query->set('orderby', 'title');
        $query->set('order','ASC' );
        
    }
}
add_action('pre_get_posts','products_per_post_page' );

?>

<?php
/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */

function red_wp_trim_excerpt( $text ) {
	$raw_excerpt = $text;
	
	if ( '' == $text ) {
		// retrieve the post content
		$text = get_the_content('');
		
		// delete all shortcode tags from the content
		$text = strip_shortcodes( $text );
		
		$text = apply_filters( 'the_content', $text );
		$text = str_replace( ']]>', ']]&gt;', $text );
		
		// indicate allowable tags
		$allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
		$text = strip_tags( $text, $allowed_tags );
		
		// change to desired word count
		$excerpt_word_count = 50;
		$excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
		
		// create a custom "more" link
		$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
		$excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
		
		// add the elipsis and link to the end if the word count is longer than the excerpt
		$words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
		
		if ( count( $words ) > $excerpt_length ) {
			array_pop( $words );
			$text = implode( ' ', $words );
			$text = $text . $excerpt_more;
		} else {
			$text = implode( ' ', $words );
		}
	}
	
	return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );