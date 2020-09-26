<?php 
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<!-- style="background-color: <?php the_field('background_color'); ?> " -->
    <!-- <div class="banner"> -->
        <img
            src="<?php the_field('banner_img'); ?>"
            alt="promo oro by figliuolo"
        />
        <h2 class="capitalize"><?php the_field('banner_title'); ?></h2>
        <div class="banner__button">
            <button class="capitalize is-light btn-border"><?php the_field('btn_text'); ?></button>
        </div>
    <!-- </div> -->
</div>