<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="site_footer" class="site-footer " role="contentinfo">
		<div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col col-8 col-md-6 col-lg-5">
                        <div class="footer-content__inner text-center">
                            <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/logo-dark.png" alt="" class="img-fluid">
                            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada est, placerat interdum lacus, scelerisque mi imperdiet.</p>
                            <p class="copyright-text d-none d-md-block">All copyrights Reserved</p>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-7">
                        <div class="row">
                            <div class="col col-5 col-md-6 col-lg-6">
                                <div class="footer-menu">
                                    <ul class="footer-menu-list">
                                        <li class="footer-menu-item">
                                            <a href="#" class="footer-menu-link">About us</a>
                                        </li>
                                        <li class="footer-menu-item">
                                            <a href="#" class="footer-menu-link">Our Archive</a>
                                        </li>
                                        <li class="footer-menu-item">
                                            <a href="#" class="footer-menu-link">Our Research </a>
                                        </li>
                                        <li class="footer-menu-item">
                                            <a href="#" class="footer-menu-link">Donate</a>
                                        </li>
                                        <li class="footer-menu-item">
                                            <a href="#" class="footer-menu-link">Shop</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-7 col-md-6 col-lg-6">
                                <div class="contact-info">
                                    <label class="contact-info-label">Contact us</label>
                                    <ul class="contact-info-list">
                                        <li class="contact-info-item">
                                            <span>Email:</span> <a href="mailto:abcged@abceeg.com">abcged@abceeg.com</a>
                                        </li>
                                        <li class="contact-info-item">
                                            <span>Call:</span> <a href="tel:+919876543210">+91 9876543210</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="privacy-content">
                                    <ul class="privacy-menu-list">
                                        <li class="privacy-menu-item">
                                            <a href="#" class="privacy-menu-link">Privacy Policy</a>
                                        </li>
                                        <li class="privacy-menu-item">
                                            <a href="#" class="privacy-menu-link">Terms of Service</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="copyright-text d-block d-md-none">All copyrights Reserved</p>
            </div>
        </div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>