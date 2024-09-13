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

            <button class="hamburger" aria-expanded="false" aria-controls="top-menu"><span></span><span></span><span></span></button>

            <div class="menu-container" id="top-menu">
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