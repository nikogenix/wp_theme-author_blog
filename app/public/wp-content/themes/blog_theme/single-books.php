<?php get_header(); ?>

<section class="page-wrap">

    <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>">
    <?php endif; ?>

    <!-- <?php if (is_active_sidebar('post-sidebar')): ?>
        <?php dynamic_sidebar('post-sidebar') ?>
    <?php endif; ?> -->

    <h1><?php the_title(); ?></h1>

    <?php get_template_part('includes/section', 'blogcontent') ?>

    <ul>
        <li>Publisher: <?php the_field('publisher'); ?></li>
        <li>Pages: <?php the_field('pages'); ?></li>
        <li>Price: <?php the_field('price'); ?></li>
    </ul>

</section>

<?php get_footer(); ?>