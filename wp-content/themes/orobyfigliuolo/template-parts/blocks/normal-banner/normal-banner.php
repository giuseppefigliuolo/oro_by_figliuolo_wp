<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'normal-banner' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'normal-banner';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
?>


<div class="obf-container <?php echo esc_attr($className); ?>">
    <div class="banner-img" style="background-image: url( '<?php echo the_field('normal-banner-img'); ?>' );">
        <h2><?php the_field('normal-banner-text'); ?></h2>
        <a href="<?php the_field('normal-banner-link'); ?>">
            <button class="btn btn-border capitalize"><?php the_field('normal-banner-button-text'); ?></button>
        </a>
    </div>
</div>

<!-- Sconto del 30% sul tuo primo acquisto -->