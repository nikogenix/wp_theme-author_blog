<?php get_header(); ?>

<section class="single-book">

    <?php if (has_post_thumbnail()): ?>

        <div class="wide-section styled-title">
            <div class="background-colour wide-section" style="background-image: url(<?php the_post_thumbnail_url('blog-small'); ?>);">
            </div>
            <h1><?php the_title(); ?></h1>
        </div>

    <?php else: ?>
        <h1><?php the_title(); ?></h1>
    <?php endif; ?>
    <div class="book-container">

        <?php $image_url = get_the_post_thumbnail_url($post, 'full');
        ?>


        <div class="book-sidebar">
            <?php if (has_post_thumbnail()): ?>

                <img src="<?php echo $image_url ?>" alt="Picture of the book '<?php the_title(); ?>'" class="">

                <div>
                    <div class="background-colour wide-section" style="background-image: url(<?php the_post_thumbnail_url('blog-small'); ?>);">
                    </div>

                    <div class="table-wrap">
                        <table class="book-data">
                            <?php if (get_field('publisher')): ?>
                                <tr>
                                    <td>Publisher</td>
                                    <td><?php the_field('publisher'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('pages')): ?>
                                <tr>
                                    <td>Pages</td>
                                    <td><?php the_field('pages'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('price')): ?>
                                <tr>
                                    <td>Price</td>
                                    <td><?php the_field('price'); ?></td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>

            <?php else: ?>
                <div class="table-only">
                    <div class="table-wrap">

                        <table class="book-data">
                            <?php if (get_field('publisher')): ?>
                                <tr>
                                    <td>Publisher</td>
                                    <td><?php the_field('publisher'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('pages')): ?>
                                <tr>
                                    <td>Pages</td>
                                    <td><?php the_field('pages'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('price')): ?>
                                <tr>
                                    <td>Price</td>
                                    <td><?php the_field('price'); ?></td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>

            <?php endif; ?>
        </div>

        <?php get_template_part('includes/section', 'blogcontent') ?>


    </div>
</section>

<?php get_footer(); ?>