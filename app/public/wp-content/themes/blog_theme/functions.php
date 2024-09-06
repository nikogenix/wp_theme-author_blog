<?php

function load_css()
{

    wp_register_style("blog_style", get_stylesheet_uri());
    wp_enqueue_style("blog_style");

    wp_register_style("main", get_template_directory_uri() . "/css/main.css", [], false, "all");
    wp_enqueue_style("main");

}
add_action("wp_enqueue_scripts", "load_css");


function load_js()
{


}
add_action("wp_enqueue_scripts", "load_js");

function load_features()
{

    add_theme_support("title-tag");
    add_theme_support("menus");
    add_theme_support('post-thumbnails');

}
add_action("after_setup_theme", "load_features");


register_nav_menus(
    [
        'primary-menu' => 'Primary Menu Location',
        'footer-menu' => 'Footer Menu Location',
    ]
);


add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);