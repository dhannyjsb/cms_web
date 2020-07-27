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
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
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
                                    <a id="search_button" href="#"><i class="icon-search"></i>Login</a>
                                </div>
                                <div id="popup_contact">
                                    <a class="button button_js" href="#"><i class="icon-mail-line"></i></a>
                                    <div class="popup_contact_wrapper">

                                        <div id="contactWrapper_popup">
                                            <form id="contactform_popup">
                                                <h4>Send us a message</h4>
                                                <p>
                                                    <span>
                                                        <input type="text" name="name_popup" id="name_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your name" />
                                                    </span><span>
                                                        <input type="email" name="email_popup" id="email_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your email" />
                                                    </span><span>
                                                        <input type="text" name="subject_popup" id="subject_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Subject" />
                                                    </span><span> <textarea name="body_popup" cols="40" id="body_popup" rows="2" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>

                                                    <input type="button" value="Send Message" id="submit_popup" onClick="return check_values_popup();">
                                                </p>
                                            </form>
                                            <div id="confirmation_popup"></div>
                                        </div>

                                        <span class="arrow"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Revolution slider area-->
                <div class="mfn-main-slider">
                    <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;max-height:699px;">
                        <!-- START REVOLUTION SLIDER 4.6.9 fullwidth mode -->
                        <div id="rev_slider_1_2" class="rev_slider fullwidthabanner" style="display:none;max-height:699px;height:699px;">
                            <ul>
                                <!-- SLIDE -->
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                    <!-- MAIN IMAGE -->
                                    <img src="front_css/school/images/home_school_slide_1_bg.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption lfr" data-x="center" data-hoffset="333" data-y="center" data-voffset="84" data-speed="1000" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5;">
                                        <img src="<?= base_url(); ?>/perpustakaan_file/home/YuiProfile2.png" alt="">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-fade" data-x="center" data-hoffset="-207" data-y="center" data-voffset="15" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6;"><img src="front_css/school/images/home_school_slide_1_num.png" alt="">
                                    </div>
                                </li>
                                <!-- SLIDE -->
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                    <!-- MAIN IMAGE -->
                                    <img src="front_css/school/images/home_school_slide_1_bg.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption lfr" data-x="center" data-hoffset="333" data-y="center" data-voffset="84" data-speed="1000" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5;"><img src="front_css/school/images/home_school_slide_1_woman.png" alt="">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-fade" data-x="center" data-hoffset="-207" data-y="center" data-voffset="15" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6;"><img src="front_css/school/images/home_school_slide_1_num.png" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom flv_viz_hid"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </header>
        </div>