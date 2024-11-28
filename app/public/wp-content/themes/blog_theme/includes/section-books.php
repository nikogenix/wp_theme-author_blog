<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <div class="individual-book">
            <?php if (has_post_thumbnail()): ?>
                <div class="image" style="background-image: url(<?php the_post_thumbnail_url('blog-small'); ?>);"></div>
                <div class="background-colour" style="background-image: url(<?php the_post_thumbnail_url('blog-small'); ?>);"></div>
            <?php else: ?>
                <div class="image no-image"></div>
                <div class="background-colour no-image"></div>
            <?php endif; ?>

            <div class="text">
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h3>
                <?php the_excerpt(); ?>
            </div>
        </div>

    <?php endwhile; else: endif; ?>