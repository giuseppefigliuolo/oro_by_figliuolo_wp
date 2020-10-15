<?php 
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-plus-info-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner-plus-info';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>


<div class="<?php echo esc_attr($className); ?>">
    <div class="banner">
    <a href="#">
        <img
        src="<?php the_field('banner-img'); ?>"
        alt="promo oro by figliuolo"
        />
        <h2 class="capitalize"><?php the_field('banner-title'); ?></h2>
        <div class="banner__button">
        <button class="btn capitalize btn-border"><?php the_field('banner-btn-title'); ?></button>
        </div>
    </a>
    </div>
    <main class="shop-info">
    <div class="shop-info__title">
        <h1 class="capitalize"><?php the_field('shop-info-title'); ?></h1>
    </div>
    <p>
    <?php the_field('shop-info-paragraph'); ?>
    </p>
    <img src="<?php the_field('shop-info-img'); ?>" alt="negozio oro by figliuolo" />
    <div class="shop-info__details">
        <a href="">
        <img src="./img/icons/location-icon.svg" alt="" />
        <p>Ci trovi in <b>via Vittorio Emanuele, 38</b></p>
        </a>
        <a href="#">
        <img src="./img/icons/instagram-icon.svg" alt="" />
        <p><b>Seguici su Instagram</b></p>
        </a>
    </div>
    </main>
</div>

<!-- https://images.unsplash.com/photo-1511745564573-fec5d8b7e907?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80
https://wallpaperset.com/w/full/7/2/8/462752.jpg -->

