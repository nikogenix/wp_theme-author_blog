<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <span>Posted by <?php echo get_the_author_meta("display_name") ?> on <?php echo get_the_date() ?></span>
        <span>Related categories: <?php the_category(" "); ?> </span>

        <?php the_content(); ?>

        <span><?php the_tags("", "", ""); ?> </span>

        <?php comments_template() ?>
    <?php endwhile; else: endif; ?>