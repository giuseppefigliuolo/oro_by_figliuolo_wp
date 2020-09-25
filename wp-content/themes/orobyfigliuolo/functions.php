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
        register_nav_menus( ['main_menu' => 'Menu Principale' ] );    
    }
    
    /**
     * in questa funzione quando definiamo la prima variabile quello sarà il MOMENTO in cui parte ed esegue il contenuto della funzione. In questo caso dopo 'after_setup_theme'
     * si esegue obf_setup
     */
    add_action ('after_setup_theme', 'obf_setup');

    function obf_widgets_registration(){
    
        register_sidebar([
            'name' => 'Footer',
            'id' => 'footer',
            'before_widget' => '',
            'after_widget' => '',
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
        
    }
    add_action( 'wp_enqueue_scripts', 'obf_styles' );

    function obf_scripts(){
          // remove jquery and add scripts
        //   wp_deregister_script('jquery');
        wp_enqueue_script( 'obf_script', OBF_INCLUDES.'js/script.js', array() , null , 'all');
    }
    add_action('wp_enqueue_scripts', 'obf_scripts');
    
    /**
     * Remove the default emoji styles slowing down the website
     *
     * @see  https://developer.wordpress.org/reference/functions/remove_action/
     */
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
    