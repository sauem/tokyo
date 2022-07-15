<?php
?>

<header id="header" class="header white-menu navbar-dark">
    <div class="header-wrapper">

        <!--        /images/logo-01.png-->
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo"><img src="<?= get_logo() ?>" alt="<?= get_bloginfo() ?>"/></span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <a href="tel:123456789" class="callusbtn ico-20"><span class="flaticon-phone-call-1"></span></a>
        </div>


        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- HEADER LOGO -->
                <div class="desktoplogo"><a href="/" class="logo-black">
                        <img src="<?= get_logo() ?>" alt="<?= get_bloginfo() ?>"/>
                    </a></div>
                <div class="desktoplogo">
                    <a href="/" class="logo-white">
                        <img src="<?= get_logo() ?>" alt="<?= get_bloginfo() ?>"/>
                    </a></div>


                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">

                    <?= wp_nav_menu([
                        'menu' => 'main',
                        'container' => 'ul',
                        'add_li_class' => 'nl-simple',
                        'menu_class' => 'wsmenu-list'
                    ]) ?>
                    <!--                    <ul class="wsmenu-list">-->


                    <!-- DROPDOWN MENU -->
                    <!--                        <li aria-haspopup="true"><a href="#">About <span class="wsarrow"></span></a>-->
                    <!--                            <ul class="sub-menu">-->
                    <!--                                <li aria-haspopup="true"><a href="#services-2">About Studio</a></li>-->
                    <!--                                <li aria-haspopup="true"><a href="#promo-2">Best Experience</a></li>-->
                    <!--                                <li aria-haspopup="true"><a href="#about-9">Why La Notte?</a></li>-->
                    <!--                                <li aria-haspopup="true"><a href="#reviews-1">Testimonials</a></li>-->
                    <!--                                <li aria-haspopup="true"><a href="#pricing-4">Our Promotions</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </li>-->


                    <!-- SIMPLE NAVIGATION LINK -->
                    <!--                        <li class="nl-simple" aria-haspopup="true"><a href="#pricing-6">Menu</a></li>-->

                    <!--                    </ul>-->
                </nav>    <!-- END MAIN MENU -->


            </div>
        </div>    <!-- END NAVIGATION MENU -->


    </div>     <!-- End header-wrapper -->
</header>    <!-- END HEADER -->
