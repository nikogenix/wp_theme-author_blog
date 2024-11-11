<?php get_header(); ?>

<section class="home-section home-intro">

    <?php
    $featured_post = get_posts(array(
        'category_name' => 'featured',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    ));

    if (!empty($featured_post)) {
        $post = $featured_post[0];
        setup_postdata($post);

        $background_image_url = get_the_post_thumbnail_url($post, 'full');
        ?>

        <div class="home-featured wide-section" style="background-image: url('<?php echo esc_url($background_image_url); ?>');">
            <h2 class="heading-badge">Recommended read</h2>
            <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
            <p><?php echo get_the_excerpt(); ?></p>
        </div>

        <?php
        wp_reset_postdata();
    }
    ?>

    <div class="home-intro">
        <?php get_template_part('includes/section', 'content') ?>
    </div>

</section>

<section class="home-section home-posts wide-section">

    <h2>My most recent posts</h2>

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'category__not_in' => array(get_cat_ID('featured'))
    );

    $recent_posts_query = new WP_Query($args);

    if ($recent_posts_query->have_posts()) {
        echo '<div class="recent-posts">';

        while ($recent_posts_query->have_posts()) {
            $recent_posts_query->the_post();

            echo '<div><h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            echo '<p>' . wp_trim_words(get_the_excerpt(), 20, " (...)") . '</p></div>';
        }

        echo '</div>';

        wp_reset_postdata();
    } else {
        echo '<p>No recent posts found.</p>';
    }
    ?>

</section>

<?php
$about_page = new WP_Query(
    array(
        'post_type' => 'page',
        'title' => 'About',
    )
);

if ($about_page):
    $about_excerpt = get_the_excerpt($about_page->ID);
    echo '<section class="home-section home-about">';
    echo "<h2>A bit about me</h2>";
    echo '<p>' . wp_trim_words($about_excerpt, 50, " (...)") . '</p>';
    echo '<p>Read more on my <a href="/about">About</a> page</p>';
    echo "</section>";
endif;
?>

<?php get_footer(); ?>