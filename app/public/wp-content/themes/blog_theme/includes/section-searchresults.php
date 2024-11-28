<?php
function get_post_type_name($post_type = null, $singular = true)
{
    if (!$post_type) {
        $post_type = get_post_type();
    }

    $post_type_obj = get_post_type_object($post_type);

    if ($post_type_obj && isset($post_type_obj->labels)) {
        return $singular ? $post_type_obj->labels->singular_name : $post_type_obj->labels->name;
    }

    return $post_type;
}
?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <div class="search-item">
            <?php if (has_post_thumbnail()): ?>
                <div class="background" style="background-image: url(<?php the_post_thumbnail_url('blog-small'); ?>);"></div>
            <?php else: ?>
                <div class="background no-image"></div>
            <?php endif; ?>

            <div class="card-header">
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h3>
                <span><?php echo get_post_type_name(); ?></span>
            </div>

            <?php the_excerpt(); ?>
        </div>

    <?php endwhile; else: ?>

    <p class="no-results">There are no results for '<?php echo get_search_query(); ?>'.</p>

    <?php if (is_active_sidebar('post-sidebar')): ?>
        <?php dynamic_sidebar('post-sidebar') ?>
    <?php endif; ?>

    <?php
endif; ?>