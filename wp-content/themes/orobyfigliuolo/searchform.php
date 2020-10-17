<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
    <input type="search" id="obf-searchbar" class="obf-search" placeholder="Cosa stai cercando?" value="<?php echo get_search_query(); ?>" name="s"/>
    <!-- <a href="#"><img src="<?php echo OBF_INCLUDES ?>./img/icons/search-icon.svg" alt="" /></a> -->
    <input type="submit" class="obf-search-submit" value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />

    <?php if(class_exists( 'WooCommerce' )): ?>
    <!-- this input is to show only post_type products in my search results -->
        <input type="hidden" value="product" name="post_type" id="post_type">
    <?php endif; ?>

</form>
