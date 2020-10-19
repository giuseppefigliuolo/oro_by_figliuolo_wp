<?php

/**
 *  The tamplate for the sidebar containing the main widget area
 */
?>

<?php if (is_active_sidebar(' products_sidebar')) : ?>
    <aside class="obf-sidebar-container">
        <?php dynamic_sidebar('products_sidebar'); ?>
    </aside>
<?php endif;
