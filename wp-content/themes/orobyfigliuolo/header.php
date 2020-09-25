<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oro By Figliuolo</title>
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
      <!-- STARTS WEBSITE BODY -->
    <div class="topbar">
      <!-- Per mobile -->
      <div class="topbar__search"><img src="<?php echo OBF_INCLUDES ?>./img/icons/search-icon.svg" alt="search-icon" /></div>
      <!-- LOGO -->
      <div class="topbar__logo">
        <a href="./index.html"><img src="<?php echo OBF_INCLUDES ?>img/Logo.svg" alt="oro by figliuolo logo" /></a>
      </div>
      <div class="topbar__menu"><img src="<?php echo OBF_INCLUDES ?>./img/icons/menu-icon.svg" alt="menu-icon" /></div>

      <div class="desktop topbar__main__container">
        <!-- Parte del menu con voci categorie-about-shop etcc. + searchbar -->
        <div class="topbar__main">
          <ul class="topbar__links">
            <li class="dropdown-portfolio capitalize">
              categoria
              <div class="dropdown-content"></div>
            </li>
            <li class="capitalize">categoria</li>
            <li class="capitalize">categoria</li>
            <li class="capitalize">categoria</li>
            <li class="capitalize">categoria</li>
          </ul>
          <div class="topbar__searchbar">
            <input type="text" />
          </div>
        </div>
      </div>
    </div>
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