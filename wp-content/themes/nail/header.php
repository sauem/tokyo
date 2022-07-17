<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>


    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;700;800&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&amp;display=swap"
          rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="<?= ASSET ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="<?= ASSET ?>/css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="<?= ASSET ?>/css/menu.css" rel="stylesheet">
    <link id="effect" href="<?= ASSET ?>/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="<?= ASSET ?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?= ASSET ?>/css/flexslider.css" rel="stylesheet">
    <link href="<?= ASSET ?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= ASSET ?>/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= ASSET ?>/css/datetimepicker.min.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="<?= ASSET ?>/css/style.css?v=<?= time() ?>" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="<?= ASSET ?>/css/animate.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="<?= ASSET ?>/css/responsive.css?v=<?= time() ?>" rel="stylesheet">

    <link rel="icon" type="image/png" href="<?= get_site_icon_url() ?>">
    <style>
        .page .entry-title {
            display: none;
        }
    </style>
</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>
<!--<div id="loading" class="rose-loading">-->
<!--    <div id="loading-center">-->
<!--        <div class="spinner">-->
<!--            <div class="blob top"></div>-->
<!--            <div class="blob bottom"></div>-->
<!--            <div class="blob left"></div>-->
<!--            <div class="blob move-blob"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div id="page" class="page bg--moccasin">
    <?php get_template_part('inc/header') ?>
<?php
