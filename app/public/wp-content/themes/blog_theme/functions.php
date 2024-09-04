<?php

function blog_files()
{
    wp_enqueue_style("blog_styles", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "blog_files");

function blog_features()
{
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "blog_features");