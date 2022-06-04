<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <div id="hero-4" class="hero-section division">
        <div class="slider">
            <ul class="slides">

                <!-- SLIDE #1 -->
                <li id="slide-1">
                    <img src="<?= ASSET ?>/images/slider/slide-4.jpg" alt="slide-background">
                </li>

                <!-- SLIDE #2 -->
                <li id="slide-2">
                    <img src="<?= ASSET ?>/images/slider/slide-5.jpg" alt="slide-background">
                </li>

                <!-- SLIDE #3 -->
                <li id="slide-3">
                    <img src="<?= ASSET ?>/images/slider/slide-6.jpg" alt="slide-background">
                </li>

            </ul>
        </div>  <!-- END SLIDER -->
    </div>

    <section id="pricing-1" class="white-smoke--shape pricing-section division">
        <div class="container">
            <?= get_the_content()?>
        </div>
    </section>
<?php

get_footer();
