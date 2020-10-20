<?php
get_header();
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
    get_template_part('template-parts/single/empty');
}
?>

<section class="popular-products">
    <div class="obf-container">
        <h2 class="capitalize">i nostri best seller</h2>
        <!-- this is a woocommerce shortcode for products -->
        <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]'); ?>
    </div>
</section>

<section class="new-arrivals-products">
    <div class="obf-container">
        <h2 class="capitalize">nuovi arrivi</h2>
        <!-- this is a woocommerce shortcode for products -->
        <?php echo do_shortcode('[products limit="4" columns="4" orderby="date"]'); ?>
    </div>
</section>

<section class="categories-to-display">
    <div class="obf-container">
        <h2 class="capitalize">Categorie</h2>
        <!-- this is a woocommerce shortcode for products -->
        <?php echo do_shortcode('[product_categories number="0" parent="0" limit="8" columns="4"]'); ?>
    </div>
</section>




<?php
get_footer();
?>