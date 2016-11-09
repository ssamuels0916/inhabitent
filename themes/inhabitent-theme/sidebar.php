<?php
/**
* The sidebar containing the main widget area.
*
* @package Inhabitent_Theme
*/

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<section class="side-bar">
    <div class= "contact-info">
       <h3>Contact Info</h3>
       <p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:778-456-7891"> 778-456-7891</a></p>
       <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="info@inhabitent.com"> info@inhabitent.com</a></p>
       <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1490 W Broadway Vancouver, BC V6H 1H5</p>
    </div>

    <div class = "business-hours">
        <h3>Business Hours</h3>
       <p><span class="day">Monday-Friday:</span> 9am to 5pm</p>
       <p><span class="day">Saturday:</span> 10am to 2pm</p>
       <p><span class="day">Sunday:</span> Closed</p>
    </div>
</section>