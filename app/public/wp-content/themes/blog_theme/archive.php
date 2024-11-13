<?php get_header(); ?>

<section class="">

    <h1><?php
    if (is_category() or is_tag()) {
        echo single_cat_title();
    } else {
        echo the_archive_title();
    }
    ?></h1>

    <?php get_template_part('includes/section', 'home') ?>

    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('<', 'textdomain'),
        'next_text' => __('>', 'textdomain'),
    ));

    ?>
</section>

<?php get_footer(); ?>