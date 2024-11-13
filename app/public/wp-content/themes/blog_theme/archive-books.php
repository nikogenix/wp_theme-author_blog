<?php get_header(); ?>

<section class="page-wrap">

    <h1><?php
    echo the_archive_title();
    ?></h1>

    <div class="books-container">
        <?php get_template_part('includes/section', 'books') ?>
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