<footer>

    <nav>

        <div class="links-container">

            <h3><?php echo wp_get_nav_menu_name('footer-menu'); ?></h3>
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-menu'
                ]
            )
                ?>

        </div>

        <div class="legal-container">

            <h3><?php echo wp_get_nav_menu_name('privacy-menu'); ?></h3>
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'privacy-menu',
                    'menu_class' => 'privacy-menu'
                ]
            )
                ?>

        </div>

    </nav>

    <div class="copyright">
        <p>&copy; 2024 S.J. All rights reserved</p>
        <div></div>
        <p>Theme created by <a href="https://www.nikogenix.com">nikogenix</a></p>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>