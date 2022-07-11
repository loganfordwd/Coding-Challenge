<?php 

function hi_yield_register_styles(){
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('hi-yield-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css". "/style.css", array(), '4.4.1', 'all');
    wp_enqueue_style('hi-yield-bootstrap', "https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css". "/style.css", array(), '5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'hi_yield_register_styles');

function hi_yield_register_scripts(){
    
    wp_enqueue_script('hi-yield-bootstrap')
    
}

add_action('wp_enqueue_scripts', 'hi_yield_register_scripts');


?>
