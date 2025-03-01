<?php get_header(); ?>

<section class="search-container">

    <h1>Search results for '<?php echo get_search_query(); ?>'</h1>

    <?php get_template_part('includes/section', 'searchresults') ?>

    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('<', 'textdomain'),
        'next_text' => __('>', 'textdomain'),
    ));

    ?>
</section>

<?php get_footer(); ?>