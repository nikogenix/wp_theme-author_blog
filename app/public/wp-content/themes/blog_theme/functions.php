<?php

function load_css()
{

    wp_register_style("blog_style", get_stylesheet_uri());
    wp_enqueue_style("blog_style");

    wp_register_style("main", get_template_directory_uri() . "/css/main.css", [], false, "all");
    wp_enqueue_style("main");

    wp_register_style("header", get_template_directory_uri() . "/css/header.css", [], false, "all");
    wp_enqueue_style("header");

    wp_register_style("front-page", get_template_directory_uri() . "/css/front-page.css", [], false, "all");
    wp_enqueue_style("front-page");

    wp_register_style("archive", get_template_directory_uri() . "/css/archive.css", [], false, "all");
    wp_enqueue_style("archive");

    wp_register_style("archive-books", get_template_directory_uri() . "/css/archive-books.css", [], false, "all");
    wp_enqueue_style("archive-books");

    wp_register_style("page", get_template_directory_uri() . "/css/page.css", [], false, "all");
    wp_enqueue_style("page");

    wp_register_style("footer", get_template_directory_uri() . "/css/footer.css", [], false, "all");
    wp_enqueue_style("footer");

}
add_action("wp_enqueue_scripts", "load_css");


function load_js()
{

    wp_register_script("header-js", get_template_directory_uri() . "/js/header.js", [], false, true);
    wp_enqueue_script("header-js");

}
add_action("wp_enqueue_scripts", "load_js");

function load_features()
{

    add_theme_support("title-tag");
    add_theme_support("menus");
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');

}
add_action("after_setup_theme", "load_features");


register_nav_menus(
    [
        'primary-menu' => 'Primary Menu Location',
        'footer-menu' => 'Footer Menu Location',
        'privacy-menu' => 'Privacy Menu Location',

    ]
);


add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);


function load_sidebars()
{

    register_sidebar([
        'name' => 'Post Sidebar',
        'id' => 'post-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s post-sidebar">',
        'after_widget' => '</div>',
    ]);

}
add_action('widgets_init', 'load_sidebars');

function add_book_post_type()
{

    register_post_type('books', [
        'labels' => [
            'name' => 'Books',
            'singular_name' => 'Book',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'hierarchical' => true,
        'menu_icon' => 'dashicons-book-alt',
    ]);

}
add_action('init', 'add_book_post_type');

function add_genre_taxonomy()
{

    register_taxonomy('genre', ['books'], [
        'labels' => [
            'name' => 'Genres',
            'singular_name' => 'Genre',
        ],
        'public' => true,
        'hierarchical' => false,
    ]);

}
add_action('init', 'add_genre_taxonomy');

add_filter('get_the_archive_title_prefix', '__return_false');

function custom_excerpt_more($more)
{
    return ' (...)';
}
add_filter('excerpt_more', 'custom_excerpt_more');


// DEV-TEMP
add_action('wp_footer', function () {
    global $template;
    echo '<div style="position:fixed;bottom:0;left:0;background:#fff;padding:5px;border:1px solid #ccc;z-index:9999;">';
    echo 'Template: ' . basename($template);
    echo '</div>';
});

