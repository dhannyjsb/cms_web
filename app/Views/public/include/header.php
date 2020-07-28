        <div id="Header_wrapper" class="bg-parallax" data-stellar-background-ratio="0.5">

            <!-- Header -->
            <header id="Header">

                <!-- Header Top -  Info Area -->
                <div id="Action_bar" class="topbar_hide">
                    <div class="container">
                        <div class="column one">

                            <!-- Header - contact info area-->
                            <ul class="contact_details">
                                <li class="slogan">
                                    Ada pertanyaan?
                                </li>
                                <li class="phone">
                                    <i class="icon-phone"></i><a href="tel:<?= esc($settings['telpon_sekolah']); ?>"><?= esc($settings['telpon_sekolah']); ?></a>
                                </li>
                                <li class="mail">
                                    <i class="icon-mail-line"></i><a href="mailto:<?= esc($settings['email_sekolah']); ?>"><?= esc($settings['email_sekolah']); ?></a>
                                </li>
                            </ul>

                            <!--Social info area-->
                            <ul class="social">
                                <li class="skype">
                                    <a href="#" title="Skype"><i class="icon-skype"></i></a>
                                </li>
                                <li class="facebook">
                                    <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
                                </li>
                                <li class="googleplus">
                                    <a href="#" title="Google+"><i class="icon-gplus"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Header -  Logo and Menu area -->
                <div id="Top_bar">

                    <div class="container">
                        <div class="column one">

                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="<?= base_url(); ?>" title="BeSchool - BeTheme"><img class="logo-main scale-with-grid" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_depan']); ?>" alt="SMABA" /><img class="logo-sticky scale-with-grid" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_depan']); ?>" alt="">
                                    </a>
                                </div>
                                <!-- Main menu-->
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu">
                                            <?php get_menu('1'); ?>
                                        </ul>
                                    </nav>

                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                                    <a class="login_button_cuy" href="#"><i class="icon-menu"></i></a>

                                </div>

                                <!-- Secondary menu area - only for certain pages -->
                                <div class="secondary_menu_wrapper">
                                    <!-- #secondary-menu -->
                                </div>

                                <!-- Banner area - only for certain pages-->
                                <div class="banner_wrapper"></div>

                                <!-- Header Searchform area-->
                                <div class="search_wrapper">
                                    <!-- #searchform -->
                                    <form method="get" id="searchform" action="#">
                                        <i class="icon_search icon-search"></i>
                                        <a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                        <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                                        <input type="submit" class="submit flv_disp_none" value="" />
                                    </form>
                                </div>
                            </div>

                            <div class="top_bar_right">
                                <div class="top_bar_right_wrapper">
                                    <!-- <a id="search_button" href="#"><i class="icon-search"></i></a>-->
                                    <a id="search_buttons" href="#"><i class="icon-login"></i>Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Revolution slider area-->
            </header>

            <!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title"><?= $sub_header; ?></h1>
                    </div>
                </div>
            </div>
        </div>