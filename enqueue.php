<?php

function enqueueFiles() {

$uri = get_theme_file_uri();

 wp_register_style('bootstrap', $uri . '/css/bootstrap.css');
 wp_register_style('font-awesome', $uri . '/css/font-awesome.css');
 
 wp_enqueue_style('font-awesome');
 wp_enqueue_style('bootstrap');
 wp_enqueue_style('style', $uri.'/style.css');



 wp_register_script('script', $uri . '/js/script.js', [], false, true );
 wp_register_script('jquery', $uri . '/js/script.js', [], false, true );
 wp_enqueue_script('script');
 wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts', 'enqueueFiles');

?>