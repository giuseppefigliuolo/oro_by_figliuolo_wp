<?php 
get_header();
?>

<?php echo 'questa è una prova-> siamo su woocommerce.php' ?>
<div class="shopping-page-container">
      <div class="mobile filter-categories">
        <ul>
          <li>
            <a href="./shopping-page.html" class="">Collane</a>
          </li>
          <li>
            <a href="#" class="">Bracciali</a>
          </li>
          <li>
            <a href="#" class="">Orologi</a>
          </li>
          <li>
            <a href="#" class="">Anelli</a>
          </li>
          <li>
            <a href="#" class="">Accessori</a>
          </li>
        </ul>
      </div>
      <div class="desktop shopping-sidebar">
        <ul>
          <li>
            <a href="./shopping-page.html" class="">Collane</a>
          </li>
          <li>
            <a href="#" class="">Bracciali</a>
          </li>
          <li>
            <a href="#" class="">Orologi</a>
          </li>
          <li>
            <a href="#" class="">Anelli</a>
          </li>
          <li>
            <a href="#" class="">Accessori</a>
          </li>
        </ul>
      </div>
      <div class="main-shopping">
        <div class="category-header">
          <ul class="breadcrumb">
            <li><a href="">Homepage</a></li>
            <li><a href="">Negozio</a></li>
            <li>Collane</li>
          </ul>
          <h2>Collane</h2>
        </div>
        
        <!-- Products container -->
        <div class="shop-list">
            <?php woocommerce_content() ?>

        </div>

        <!-- /**  <?php if ( have_posts() ) {
                while ( have_posts() ) {
                        the_post(); ?>
                            <div class="shop-list__product">
                                <a>
                                    <img src="<?php the_post_thumbnail('post_image') ?>" alt="<?php the_title(); ?>" />
                                </a>
                                <p class="shop-list__product__header header-font"><?php the_title(); ?></p>
                                <p class="shop-list__product__price header-font">€ 499,00</p>
                                <a href="#" class="shop-list__product__add-to-cart capitalize">aggiungi al carrello</a>
                            </div>
                            
                            <?php           }
                } else {
                    get_template_part('template-parts/archive/empty');
                }
                
                ?>  */ -->

      </div>
    </div>

<!-- \\ <?php woocommerce_content(); ?> -->

<?php
get_footer();
?>