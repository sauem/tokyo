<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="footer-2" class="footer bg-white division">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php dynamic_sidebar("Footer #1") ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar("Footer #2") ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar("Footer #3") ?>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?= ASSET ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?= ASSET ?>/js/bootstrap.min.js"></script>
<script src="<?= ASSET ?>/js/modernizr.custom.js"></script>
<script src="<?= ASSET ?>/js/jquery.easing.js"></script>
<script src="<?= ASSET ?>/js/jquery.appear.js"></script>
<script src="<?= ASSET ?>/js/jquery.scrollto.js"></script>
<script src="<?= ASSET ?>/js/menu.js"></script>
<script src="<?= ASSET ?>/js/materialize.js"></script>
<script src="<?= ASSET ?>/js/datetimepicker.js"></script>
<script src="<?= ASSET ?>/js/jquery.vide.min.js"></script>
<script src="<?= ASSET ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= ASSET ?>/js/isotope.pkgd.min.js"></script>
<script src="<?= ASSET ?>/js/jquery.flexslider.js"></script>
<script src="<?= ASSET ?>/js/owl.carousel.min.js"></script>
<script src="<?= ASSET ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= ASSET ?>/js/booking-form.js"></script>
<script src="<?= ASSET ?>/js/contact-form.js"></script>
<script src="<?= ASSET ?>/js/jquery.validate.min.js"></script>
<script src="<?= ASSET ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= ASSET ?>/js/wow.js"></script>

<script src="<?= ASSET ?>/js/custom.js"></script>

<?php wp_footer(); ?>


</body>
</html>
