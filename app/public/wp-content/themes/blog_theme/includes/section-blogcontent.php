<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <span class="post-info">Posted by <?php echo get_the_author_meta("display_name") ?> on <?php echo get_the_date() ?></span>

        <?php the_content(); ?>

        <?php if (has_category()): ?>
            <span class="categories">Related categories: <?php the_category(" "); ?> </span>
        <?php endif; ?>

        <?php if (has_tag()): ?>
            <span class="tags wide-section"><?php the_tags("", "", ""); ?> </span>
        <?php endif; ?>


    <?php //comments_template() ?>
    <?php endwhile; else: endif; ?>