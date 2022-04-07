<?php

/*
function stylesheet ()
{
    wp_register_style( 'main', get_template_directory_uri() . '/style.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style( 'main', get_stylesheet_uri(), array(), time() );

}
*/
add_action('wp_enqueue_scripts', 'stylesheet');

function load_stylesheets ()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css' ,
    array(), false, 'all');
    wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


/*
function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_scripts('jquery', get_template_directory_uri() . '/js/bootstrap.min.js' ,
    '', 1, true);
}
add_action('wp_enqueue_scripts', 'include_jquery');
*/

function loadjs()
{
    wp_enqueue_script('jquery');
    wp_register_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js' ,
    'jquery', false, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');