<?php 

/**
 * Template Name: Shop Page
 */

get_header();
?>

<div class="obf-container">
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/archive/content');
        }
    } else {
        get_template_part('template-parts/archive/empty');
    }
    ?>
</div>

<?php
get_footer();
?>