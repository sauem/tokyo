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
        <div class="row gallery g-3">
            <?php
            $thumbs = get_post_meta(get_the_ID(), 'thumbnails');
            if ($thumbs) {
                foreach ($thumbs as $thumb) {
                    ?>
                    <div class="col-md-3 col-6">
                        <a href="<?= $thumb['guid'] ?>">
                            <img src=" <?= $thumb['guid'] ?>" class="img-fluid"/>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script>
    $('.gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery:{
            enabled:true
        }
        // other options
    });
</script>
