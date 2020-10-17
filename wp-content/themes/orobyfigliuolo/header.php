<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <?php
      /**
       * the wp_head() function lets WordPress execute all the pre-body operations including the injection of important styles and scripts.
       * This function call should always be inside your <head> tag
       * 
       * @see  https://developer.wordpress.org/reference/functions/wp_head/
       */
      wp_head();
    ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- TOPBAR -->
    <header class="topbar">
      <!-- MOBILE -->
      <div class="mobile topbar__search"><img src="<?php echo OBF_INCLUDES ?>./img/icons/search-icon.svg" alt="search-icon" /></div>
      <div class="topbar__logo">
        <a href="./index.html"><img src="<?php echo OBF_INCLUDES ?>img/Logo.svg" alt="orobyfigliuolo-logo" /></a>
      </div>
      <div class="mobile topbar__menu"><img src="<?php echo OBF_INCLUDES ?>./img/icons/menu-icon.svg" alt="menu-icon" /></div>

      <!-- DESKTOP -->
      <div class="desktop topbar__desk__contacts">
        <ul>
          <li class="first-li">
            <a href="tel:+39 0973 577418">
              <img src="<?php echo OBF_INCLUDES ?>./img/icons/phone-icon.svg" alt="" />
              <p>0973 577418</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo OBF_INCLUDES ?>./img/icons/location-icon.svg" alt="" />
              <p>via Luigi Ciminelli, 84. Francavilla in Sinni (PZ)</p>
            </a>
          </li>
        </ul>
      </div>

      <div class="desktop topbar__desk__login">

        <!-- link alla pagina 'my account del sito - esc_url serve a sanitanizzare il link, per la sicurezza-->
        <!-- Qui ceckhiamo se lo user è loggato, se non lo è mostriamo accedi, se lo è mostriamo logout -->
        <?php if(is_user_logged_in() ):  ?>
          <a href="<?php echo esc_url(wp_logout_url(get_permalink( get_option('woocommerce_myaccount_page_id')))) ?>">
            <p>Esci</p>
            <img src="<?php echo OBF_INCLUDES ?>img/icons/user-icon.svg" alt="" />
          </a>
        <?php else:  ?>
          <a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id'))) ?>">
            <p>Accedi</p>
            <img src="<?php echo OBF_INCLUDES ?>img/icons/user-icon.svg" alt="" />
          </a>
        <?php endif;  ?>
        
        <a href="<?php wc_get_cart_url() ?>">
          <img src="<?php echo OBF_INCLUDES ?>img/icons/cart-icon.svg" alt="" /><span class="cart-counter"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </a>
      </div>

      <div class="desktop topbar__desk__baseline">
      <?php 
        wp_nav_menu([
          'theme_location' => 'main_menu',
          // 'menu_class' => 'classe-da-dare e altre classi da voler aggiungere '
        ]);
      ?>
        <!-- <ul>
          <li><a href="#">Categoria</a></li>
          <li><a href="#">Categoria</a></li>
          <li><a href="#">Categoria</a></li>
          <li><a href="#">Categoria</a></li>
          <li><a href="#">Categoria</a></li>
          <li>
          </li>
        </ul> -->
            <div class="sidemenu__header__search-bar">
              <!-- <input type="text" placeholder="Cosa stai cercando?" /><a href="#"><img src="<?php echo OBF_INCLUDES ?>./img/icons/search-icon.svg" alt="" /></a> -->
              <?php get_search_form() ?>
            </div>
      </div>
    </header>
    <!-- END TOP BAR -->
    <nav id="side-menu" class="sidemenu">
      <div class="sidemenu__header">
        <div class="sidemenu__header__close-logo"><img src="<?php echo OBF_INCLUDES ?>img/icons/close-menu.svg" alt="" /></div>
        <div class="sidemenu__header__logo"><img src="<?php echo OBF_INCLUDES ?>./img/logo.svg" alt="" /></div>
        <div class="sidemenu__header__search-bar">
          <input type="text" placeholder="Cosa stai cercando?" /><a href="#"><img src="<?php echo OBF_INCLUDES ?>./img/icons/search-icon.svg" alt="" /></a>
        </div>
      </div>
      <div class="sidemenu__body">
        <ul>
          <li><a href="#" class="capitalize">il mio account</a></li>
          <li><a href="#" class="capitalize">categorie</a></li>
          <li><a href="#" class="capitalize">promo e saldi</a></li>
          <li><a href="#" class="capitalize">novità</a></li>
          <li><a href="#" class="capitalize">chi siamo</a></li>
          <li><a href="#" class="capitalize">assistenza</a></li>
        </ul>
      </div>
    </nav>