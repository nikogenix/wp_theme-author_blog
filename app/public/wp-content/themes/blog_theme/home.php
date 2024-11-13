<?php get_header(); ?>

<section class="">

    <h1><?php
    $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    if ($current_path === 'blog') {
        echo "Blog";
    } else {
        the_archive_title();
    }
    ?></h1>

    <div class="posts-container">
        <?php get_template_part('includes/section', 'home') ?>
    </div>

    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('<', 'textdomain'),
        'next_text' => __('>', 'textdomain'),
    ));

    ?>
</section>

<?php get_footer(); ?>