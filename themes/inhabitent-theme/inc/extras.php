<?php

/**
* Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
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

function my_login_logo() {
	?>
<style type="text/css">
       #login h1 a, .login h1 a {
           background-image: url(<?php echo get_stylesheet_directory_uri();
?>/images/logos/inhabitent-logo-text-dark.svg);
           padding-bottom: 30px;
            background-size: 300px !important; width: 300px !important;background-position: bottom !important;
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
                        background-image: url( {$url});
                }";
wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );
?>
<?php

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
?>
