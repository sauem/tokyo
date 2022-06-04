<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$thumb = get_the_post_thumbnail_url();
?>

<section id="pricing-page" style="<?php $thumb ? "background-image: url($thumb)" : "" ?>"
         class="bg-fixed page-hero-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-xl-8">
                <div class="hero-txt text-center white--color">
                    <h2 class="h2-xl"><?= get_the_title() ?></h2>
                </div>
            </div>
        </div>

        <div id="breadcrumb">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= get_the_title() ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pricing-1" class="white-smoke--shape pricing-section division">
    <div class="container">
        <?php

        if (have_posts()) {

            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', get_post_type());
            }
        }
        ?>
    </div>
</section>
<?php get_footer(); ?>
