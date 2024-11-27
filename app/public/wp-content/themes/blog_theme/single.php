<?php get_header(); ?>

<section class="single-post">

    <?php if (has_post_thumbnail()):
        $background_image_url = get_the_post_thumbnail_url($post, 'full');
        ?>
        <h1
            style="background-image: url('<?php echo esc_url($background_image_url); ?>'); text-shadow: 1px 1px 10px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white, 0px 0px 2px white;">
            <?php the_title(); ?>
        </h1>
    <?php else: ?>
        <h1><?php the_title(); ?></h1>
    <?php endif; ?>

    <?php get_template_part('includes/section', 'blogcontent') ?>

    <?php if (is_active_sidebar('post-sidebar')): ?>
        <?php dynamic_sidebar('post-sidebar') ?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>