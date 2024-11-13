<?php get_header(); ?>

<section class="">

    <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
    <?php endif; ?>

    <?php if (is_active_sidebar('post-sidebar')): ?>
        <?php dynamic_sidebar('post-sidebar') ?>
    <?php endif; ?>

    <h1><?php the_title(); ?></h1>

    <?php get_template_part('includes/section', 'blogcontent') ?>

</section>

<?php get_footer(); ?>