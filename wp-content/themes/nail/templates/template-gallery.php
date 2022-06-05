<?php
/**
 * Template Name: Template gallery
 * Template Post Type: post, page, galleries
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$thumb = get_the_post_thumbnail_url();
$categories = get_categories([
    'taxonomy' => 'product_cat',
    'hide_empty' => 0,
    'parent' => 0
]);
get_header();

?>
<section id="gallery-1" class="wide-60 inner-page-hero gallery-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title title-01 mb-70">

                    <h2 class="h2-lg"><?= get_the_title() ?></h2>
                    <span class="section-id"><?= get_the_excerpt() ?></span>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 gallery-items-list">
                <div class="masonry-wrap grid-loaded text-center">

                    <?php
                    query_posts([
                        'post_type' => 'galleries',
                        'posts_per_page' => 24
                    ]);
                    while (have_posts()) : the_post();
                        ?>
                        <div class="masonry-image">
                            <a class="" href="<?= get_permalink() ?>">
                                <div class="hover-overlay">

                                    <!-- Image -->
                                    <img class="img-fluid" src="<?= get_the_post_thumbnail_url() ?>"
                                         alt="gallery-image"/>
                                    <div class="item-overlay"></div>

                                    <!-- Image Description -->
                                    <div class="image-description white--color">
                                        <div class="image-caption">
                                            <h5 class="h5-xl"><?= get_the_title() ?></h5>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    <?php endwhile;

                    wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <!-- BUTTON -->
        <div class="row">
            <div class="col">
                <div class="more-btn mt-40">
                    <a href="#" class="btn tra-grey--btn rose--hover ico-15">
                        <span class="flaticon-instagram"></span> Visit Our Instagram
                    </a>
                </div>
            </div>
        </div>    <!-- END BUTTON -->


    </div>       <!-- End container -->
</section>    <!-- END GALLERY-1 -->


<?php get_footer(); ?>
