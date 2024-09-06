<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <a href="<?php echo site_url() ?>">
                <img src="" alt="Logo">
            </a>
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'top-bar'
                ]
            )
                ?>
        </nav>




        <!-- <nav>
            <ul>
                <li class="logo">
                    <a href="<?php echo site_url() ?>">
                        <img src="" alt="Logo">
                    </a>
                </li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav> -->
    </header>