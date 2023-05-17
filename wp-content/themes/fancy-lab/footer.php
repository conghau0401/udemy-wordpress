<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */
?>
    <footer>
        <div class="container">
            <section class="footer-widgets">Footer widgets</section>
            <section class="copyright">
                    <div class="row">
                        <div class="copyright col-12 col-md-6">Copyright</div>
                        <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => "fancy_lab_footer_menu"
                                    )
                                );
                            ?>
                        </nav>
                    </div>
            </section>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
