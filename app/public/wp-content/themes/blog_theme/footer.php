<footer>
    <nav>
        <?php
        wp_nav_menu(
            [
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-bar'
            ]
        )
            ?>
    </nav>

    <!-- <div class="footer-container">
        <div class="footer-section">
            <p>&copy; 2024 S.J. All rights reserved.</p>
        </div>
        <div class="footer-section">
            <a href="">Privacy Policy</a>
            <a href="">Terms of Service</a>
        </div>
    </div> -->
</footer>

<?php wp_footer(); ?>

</body>

</html>