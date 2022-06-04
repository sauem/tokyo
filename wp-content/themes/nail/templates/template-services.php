<?php
/**
 * Template Name: Template services
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$thumb = get_the_post_thumbnail_url();
$categories = get_categories([
    'taxonomy' => 'product_cat',
    'hide_empty' => 0,
    'parent' => 0,
    'orderby' => 'term_id',
    'order' => 'ASC'
]);
get_header();

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

<?php if (!empty($categories)) : ?>
    <section id="pricing-1" class="white-smoke--shape pricing-section division">
        <div class="container">
            <?php foreach ($categories as $index => $category) : ?>
                <div class="row mb-40 d-flex align-items-top">
                    <div class="col-lg-4 <?= $index % 2 === 0 ? 'order-md-2' : 'order-md-1' ?>">
                        <div class="pricing-1-img wow fadeInRight">
                            <img class="img-fluid w-100" src="<?= getImageTerm($category) ?>" alt="pricing-image">
                        </div>
                    </div>
                    <div class="col-lg-8 <?= $index % 2 !== 0 ? 'order-md-2' : 'order-md-1' ?>">
                        <div class="pricing-1-wrapper wow fadeInLeft">
                            <h4 class="h4-lg pricing-title"><?= $category->name ?></h4>
                            <p class="section-id"><?= $category->description ?></p>
                            <ul class="pricing-1-list">

                                <?php
                                query_posts([
                                    'posts_per_page' => 50,
                                    'post_type' => 'product',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'product_cat',
                                            'field' => 'term_id',
                                            'terms' => [$category->term_id],
                                            'operator' => 'IN',
                                        ]
                                    ],

                                ]);
                                while (have_posts()) : the_post();
                                    $product = wc_get_product(get_the_ID());
                                    ?>
                                    <li class="pricing-1-item">

                                        <!-- Title & Price -->
                                        <div class="detail-price">
                                            <div class="price-name"><h5 class="h5-lg">
                                                    <?= get_the_title() ?>
                                                </h5></div>
                                            <div class="price-dots"></div>
                                            <div class="price-number"><h5 class="h5-lg">
                                                    $<?= $product->get_regular_price() ?></h5></div>
                                        </div>

                                        <!-- Description -->
                                        <div class="price-txt">
                                            <p class="p-md"><em>
                                                    <?= get_the_excerpt() ?>
                                                </em></p>
                                        </div>

                                    </li>
                                <?php endwhile;
                                wp_reset_query(); ?>

                            </ul>    <!-- END PRICING LIST -->
                            <?php
                            $children = get_categories([
                                'taxonomy' => 'product_cat',
                                'parent' => $category->term_id,
                                'hide_empty' => 0,
                                'orderby' => 'term_id',
                                'order' => 'ASC'
                            ]);
                            if (!empty($children)):
                                foreach ($children as $key => $subCat):
                                    ?>
                                    <h4 class="h4-lg pricing-title mt-4"><?= $subCat->name ?></h4>
                                    <p class="section-id"><?= $subCat->description ?></p>

                                    <ul class="pricing-1-list">

                                        <?php
                                        query_posts([
                                            'posts_per_page' => 50,
                                            'post_type' => 'product',
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'product_cat',
                                                    'field' => 'term_id',
                                                    'terms' => [$subCat->term_id],
                                                    'operator' => 'IN',
                                                ]
                                            ],

                                        ]);
                                        while (have_posts()) : the_post();
                                            $product = wc_get_product(get_the_ID());
                                            ?>
                                            <li class="pricing-1-item">

                                                <!-- Title & Price -->
                                                <div class="detail-price">
                                                    <div class="price-name"><h5 class="h5-lg">
                                                            <?= get_the_title() ?>
                                                        </h5></div>
                                                    <div class="price-dots"></div>
                                                    <div class="price-number">
                                                        <?php if ($product->get_sale_price() > 0) : ?>
                                                            <h5 class="h5-lg">$<?= $product->get_sale_price() ?></h5>
                                                        <?php else: ?>
                                                            <h5 class="h5-lg">$<?= $product->get_regular_price() ?></h5>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php if ($product->get_sale_price() > 0) : ?>
                                                    <h6 class="text-danger">REGULAR PRICE
                                                        $<?= $product->get_regular_price() ?> (SAVE
                                                        $<?= $product->get_regular_price() - $product->get_sale_price() ?>
                                                        )</h6>
                                                <?php endif; ?>
                                                <!-- Description -->
                                                <div class="price-txt">

                                                    <p class="p-md">
                                                        <em>
                                                            <?= get_the_excerpt() ?>
                                                        </em>
                                                    </p>
                                                </div>

                                            </li>
                                        <?php endwhile;
                                        wp_reset_query(); ?>

                                    </ul>
                                <?php endforeach; endif; ?>
                        </div>
                    </div>    <!-- END PRICING-1 WRAPPER -->


                </div>
            <?php endforeach; ?>

        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
