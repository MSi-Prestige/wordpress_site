<?php
//Xyk поделили в 1 и тот же хук 2 функции.  
// add_action('wp_enqueue_scripts', 'wordprchaild_styles');

add_action('wp_enqueue_scripts', 'wordprchaild_scripts');


function wordprchaild_scripts() { 
    wp_enqueue_style( 'wordprchaild-style', get_stylesheet_uri() );  
    wp_enqueue_script( 'wordprchaild-scripts', get_template_directory_uri() . '/assets/js/main.min.js' , array(), null, true);
};

add_theme_support( "custom-logo" );
add_theme_support( "post-thumbnails" );
?>
