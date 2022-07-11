<?php 




function HiYield_register_styles(){

    wp_enqueue_style('HiYield-style', get_stylesheet_uri(). '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('HiYield-bootstrap', get_stylesheet_uri(). '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('HiYield-fontA', get_stylesheet_uri(). '/style.css', array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'HiYield_register_styles');


function HiYield_register_scripts(){

    wp_enqueue_script('HiYield-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);

}

add_action('wp_enqueue_scripts', 'HiYield_register_scripts');

?>
