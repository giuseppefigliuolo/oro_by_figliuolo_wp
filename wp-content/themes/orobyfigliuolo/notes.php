<?php 
// Add image sizes -> false si riferisce al crop
    add_image_size('post_image', 1100, 550, false)

// How to add a widget
    register_sidebar(
        [
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'class' => '',
            'before_title' => '<h4>'
            'after_title' => '</h4> '
        ]
    )
    // poi creare un file chiamato sidebar.php in cui scrivere:
    <?php dynamic_sidebar('page-sidebar') ?>
            // poi inserirlo nella pagina template che vogliamo scrivendo: 
            <?php get_sidebar(); ?>

    // Per fare la paginazione: mettere in archive questo codice (sotto il loop) e poi andare nel backend e scegliere quanti post per pagina mostrare
    <?php
        $big = 999999999; // need an unlikely integer
        
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages
        ) );
    ?>
?>