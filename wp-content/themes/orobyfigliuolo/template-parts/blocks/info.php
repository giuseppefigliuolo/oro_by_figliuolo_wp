<?php 
// Create id attribute allowing for custom "anchor" value.
$id = 'info-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'shop-info';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>


<main id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="shop-info__title">
    <h1 class="capitalize"><?php the_field('title'); ?></h1>
    </div>
    <p>
    <?php the_field('text_description'); ?>.
    </p>
    <img src="<?php the_field('shop_img'); ?>" alt="negozio oro by figliuolo" />
    <div class="shop-info__details">
    <a href="">
        <img src="<?php echo OBF_INCLUDES ?>./img/icons/location-icon.svg" alt="" />
        <p><?php the_field('location'); ?></p>
    </a>
    <a href="#">
        <img src="<?php echo OBF_INCLUDES ?>./img/icons/instagram-icon.svg" alt="" />
        <p><b><?php the_field('social_info'); ?></b></p>
    </a>
    </div>
</main>