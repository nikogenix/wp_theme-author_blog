<?php get_header(); ?>

<section class="page-wrap">

    <h1><?php echo single_cat_title() ?></h1>

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