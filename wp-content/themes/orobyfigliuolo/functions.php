<?php
/**
 * functions.php is the file where you can control all the logics behind your website
 * You can even change how WordPress works because this file is called very early in the process of building the pages
 *
 * @since 1.0.0
 * @version 1.0.0
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */

/**
 * whenever you see an add_action( 'moment', 'nameofthefunction' ) call it means we want to add a function with the name 'nameofthefunction' to the list of things to do in that 'moment'
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 */

// Non facciamo altro che cambiare la versione del nostro tema (così da aggiornarlo) usando time() che restituirà sempre un numero diverso
define('OBF_VERSION', OBF_IS_STAGING ? time() : '1.0.1');
// Se l'utente è l'amministratore può scrivere testi
define('OBF_IS_ADMIN', current_user_can( 'edit_others_posts' ) );

function obf_setup() {
    /**
     * add_theme_support will be used to add some functionalities
     * 
     * @see https://developer.wordpress.org/reference/functions/add_theme_support
     * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
     */
    
        add_theme_support("post-thumbnails");
        // adds support for the HTML title tag, autocompiled by WP
        add_theme_support("title-tag");
        // adds WP support for all gutemberg default blocks
        add_theme_support("wp-block-styles");
        add_theme_support("align-wide");
        add_theme_support( 'responsive-embeds' );

        add_theme_support('menus');
        // Set up main menu
        register_nav_menus( ['main_menu' => 'Menu Principale', 'footer_menu' => 'Menu del footer' ] );    
}
    
/**
 * in questa funzione quando definiamo la prima variabile quello sarà il MOMENTO in cui parte ed esegue il contenuto della funzione. In questo caso dopo 'after_setup_theme'
 * si esegue obf_setup
 */
add_action ('after_setup_theme', 'obf_setup');

function obf_widgets_registration(){

    register_sidebar([
        'name' => 'Products Sidebar',
        'id' => 'products_sidebar',
        'before_widget' => '<div class="desktop shopping-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);
    
}
add_action( 'widgets_init', 'obf_widgets_registration' );

/**
 * enqueue SCRIPTS and STYLES the way WordPress wants them to be
 * 
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function obf_styles(){
    
    // enqueue our style.css file
    wp_enqueue_style( 'obf-reset', get_stylesheet_directory_uri().'/style.css', array(), null , 'all' );
    wp_enqueue_style( 'obf-style', OBF_INCLUDES.'css/main.css', array( 'obf-reset' ),  null, 'all' );        
    wp_enqueue_style( 'swiper_styles', 'https://unpkg.com/swiper/swiper-bundle.min.css', array('obf-style') , null , 'all');
    
}
add_action( 'wp_enqueue_scripts', 'obf_styles' );

function obf_scripts(){
    // remove jquery and add scripts
    //   wp_deregister_script('jquery');
    wp_enqueue_script( 'obf_script', OBF_INCLUDES.'js/index.js', array() , null , 'all');
}
add_action('wp_enqueue_scripts', 'obf_scripts');

function obf_backend_styles() {
    // enqueue our style.css file
    wp_enqueue_style( 'obf-reset', get_stylesheet_directory_uri().'/style.css', array(), null , 'all' );
    wp_enqueue_style( 'obf-style', OBF_INCLUDES.'css/main.css', array( 'obf-reset' ),  null, 'all' );
}
// enqueue_block_editor_assets – For enqueueing JavaScript and CSS in the admin editor.
add_action( 'enqueue_block_editor_assets', 'obf_backend_styles' );


/**
 * Remove the default emoji styles slowing down the website
 *
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_action('acf/init', 'obf_acf_blocks_init');

// Advanced custom field config
function obf_acf_blocks_init() {

// Check function exists.
if( function_exists('acf_register_block_type') ) {
    // Register a banner block.
    acf_register_block_type(array(
        'name'              => 'banner-plus-info',
        'title'             => 'Banner e informazioni negozio',
        'description'       => 'Banner più sezione info del negozio',
        'render_template'   => 'template-parts/blocks/banner/banner.php',
        'category'          => 'formatting',
    ));

    // Shop-info block
    acf_register_block_type(array(
        'name'              => 'shop-info',
        'title'             => 'Sezione negozio info',
        'description'       => 'Sezione con le info riguardo il negozio',
        'render_template'   => 'template-parts/blocks/info.php',
        'category'          => 'formatting',
    ));
    }
}

function obf_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'obf_add_woocommerce_support' );

// Changing woocommerce sale badge text
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);
function woocommerce_custom_sale_text($text, $post, $_product)
{
    return '<span class="onsale">Offerta</span>';
}

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'AGGIUNGI AL CARRELLO', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'AGGIUNGI AL CARRELLO', 'woocommerce' );
}


