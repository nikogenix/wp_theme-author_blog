<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <a href="<?php echo site_url() ?>" id="nav-logo">
                SJ
            </a>

            <div class="hamburger"><span></span><span></span><span></span></div>

            <div class="menu-container">
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'top-bar'
                    ]
                )
                    ?>

                <?php get_search_form() ?>
            </div>
        </nav>
    </header>