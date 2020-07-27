<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title><?= esc($settings['nama_sekolah']); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['favicon']); ?>">

    <!-- FONTS -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Courgette:100,300,400,400italic,500,700,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='front_css/global.css'>
    <link rel='stylesheet' href='front_css/school/css/structure.css'>
    <link rel='stylesheet' href='front_css/school/css/school.css'>
    <link rel='stylesheet' href='front_css/school/css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="front_css/plugins/rs-plugin/css/settings.css">

</head>

<body class="template-slider color-orange layout-full-width header-modern sticky-header sticky-white subheader-title-left">

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">

        <!-- Header Wrapper -->
        <div id="Header_wrapper" class="bg-parallax" data-stellar-background-ratio="0.5">

            <!-- Header -->
            <header id="Header">

                <!-- Header Top -  Info Area -->
                <div id="Action_bar">
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
                                    <a id="logo" href="index-school.html" title="BeSchool - BeTheme"><img class="logo-main scale-with-grid" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_depan']); ?>" alt="SMABA" /><img class="logo-sticky scale-with-grid" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_depan']); ?>" alt="">
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
                                    <div class="tp-caption lfr" data-x="center" data-hoffset="333" data-y="center" data-voffset="84" data-speed="1000" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5;"><img src="front_css/school/images/home_school_slide_1_woman.png" alt="">
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

        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">

                <!-- .sections_group -->
                <div class="sections_group">

                    <div class="entry-content">
                        <div class="section dark sections_style_3">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_column">
                                        <div class="column_attr animate" data-anim-type="zoomInLeft">
                                            <div style="background: url(front_css/school/images/home_school_textbox_1.png) no-repeat bottom center; background-size: cover; padding: 30px 30px 50px;">
                                                <h2>What distinguishes
                                                    <br>
                                                    us?</h2>
                                                <p>
                                                    Our mission is to ensure that every child is equipped mentally, emotionally, socially and spiritually for life. We provide a quality pre-school education and has been operating for the past 25 years.
                                                </p>
                                                <ul class="list_check">
                                                    <li>
                                                        Professional medical care for all kids included.
                                                    </li>
                                                    <li>
                                                        High qualified teachers with licenses.
                                                    </li>
                                                    <li>
                                                        Fresh and tasty food in canteen.
                                                    </li>
                                                </ul>
                                                <a class="button button_left button_js" href="#"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_column">
                                        <div class="column_attr animate" data-anim-type="zoomIn">
                                            <div style="background: url(front_css/school/images/home_school_textbox_2.png) no-repeat bottom center; background-size: cover; padding: 30px 30px 50px;">
                                                <h2>Our beliefs</h2>
                                                <div class="image_frame no_link scale-with-grid aligncenter has_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="front_css/school/images/home_school_photo.jpg" alt="">
                                                    </div>
                                                </div>

                                                <br>
                                                <p>
                                                    We believe that salvation is only possible in this life when a person is able to make a volitional and intelligent decision to receive Christ as Saviour. We believe that there is no second chance after death.
                                                </p>
                                                <a class="button button_left button_js" href="#"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_column">
                                        <div class="column_attr animate" data-anim-type="zoomInRight">
                                            <div style="background: url(front_css/school/images/home_school_textbox_3.png) no-repeat bottom center; background-size: cover; padding: 30px 30px 50px;">
                                                <h2>Picture of the week</h2>
                                                <br>
                                                <br>
                                                <div class="image_frame no_link scale-with-grid aligncenter no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="front_css/school/images/home_school_picoftheweek.png" alt="">
                                                    </div>
                                                </div>

                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:50px; padding-bottom:10px; background-image:url(front_css/school/images/home_school_section_book.jpg); background-repeat:repeat; background-position:center top; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Page Title-->
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading ">
                                        <div class="fancy_heading fancy_heading_arrows">
                                            <h2 class="title"><i class="icon-right-dir"></i>Pengumuman<i class="icon-left-dir"></i></h2>
                                            <div class="inside">
                                                <div class="big">
                                                    Easily create & run thousands of timeline posts on your website. Have complete control of privacy and content.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Timeline element -->
                                    <!-- One full width row-->
                                    <div class="column one column_timeline ">
                                        <ul class="timeline_items">
                                            <li>
                                                <h3><span>2nd January 2014</span>First day in school</h3>
                                                <div class="desc">
                                                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra.
                                                </div>
                                            </li>
                                            <li>
                                                <h3><span>21st March 2014</span>Parents meeting</h3>
                                                <div class="desc">
                                                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra.
                                                </div>
                                            </li>
                                            <li>
                                                <h3><span>10th June 2014</span>Amazing school adventure</h3>
                                                <div class="desc">
                                                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:65px; padding-bottom:0px; background-color:#fff; background-image:url(front_css/school/images/teacher_section_book_bottom.png); background-repeat:no-repeat; background-position:center top; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column ">
                                        <div class="column_attr "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:30px; padding-bottom:10px; background-color:#fff">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column ">
                                        <div class="column_attr ">
                                            <h2 style="text-align: center; margin: 0;">Our school is the <span class="highlight">best choice</span> for your kid</h2>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box ">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="fadeInLeftLarge">
                                            <div class="icon_box icon_position_left has_border">
                                                <div class="image_wrapper"><img src="front_css/school/images/home_school_box_1.png" alt="Teaching" class="scale-with-grid" />
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4>Teaching</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box ">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="zoomIn">
                                            <div class="icon_box icon_position_left has_border">
                                                <div class="image_wrapper"><img src="front_css/school/images/home_school_box_2.png" alt="Creativity" class="scale-with-grid" />
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4>Creativity</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box ">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="fadeInRightLarge">
                                            <div class="icon_box icon_position_left no_border">
                                                <div class="image_wrapper"><img src="front_css/school/images/home_school_box_3.png" alt="Recreation" class="scale-with-grid" />
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4>Recreation</h4>
                                                    <div class="desc">
                                                        Vitae adipiscing turpis. Aenean ligula nibh in, molestie id viverra a, dapibus at dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:0px; padding-bottom:0px; background-color:#fff; background-image:url(front_css/school/images/teacher_section_register.jpg); background-repeat:no-repeat; background-position:center top; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_image ">
                                        <div class="image_frame no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="front_css/school/images/home_school_children.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column ">
                                        <div class="column_attr ">
                                            <h2 style="margin-top: 40px;">Register now</h2>
                                            <div class="big">
                                                <p>
                                                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra a.
                                                </p>
                                            </div>
                                            <p>
                                                Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra
                                            </p>

                                            <a href="https://www.facebook.com/" class="icon_bar icon_bar_facebook icon_bar_large" target="_blank"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a>

                                            <a href="https://plus.google.com/" class="icon_bar icon_bar_google icon_bar_large" target="_blank"><span class="t"><i class="icon-gplus"></i></span><span class="b"><i class="icon-gplus"></i></span></a>

                                            <a href="https://twitter.com/" class="icon_bar icon_bar_twitter icon_bar_large" target="_blank"><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a>

                                            <a href="https://www.flickr.com/" class="icon_bar icon_bar_flickr icon_bar_large" target="_blank"><span class="t"><i class="icon-flickr"></i></span><span class="b"><i class="icon-flickr"></i></span></a>

                                            <a href="https://www.linkedin.com/" class="icon_bar icon_bar_linkedin icon_bar_large" target="_blank"><span class="t"><i class="icon-linkedin"></i></span><span class="b"><i class="icon-linkedin"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- .four-columns - sidebar -->

            </div>
        </div>

        <!-- #Footer -->
        <!-- Footer-->
        <footer id="Footer" class="clearfix">

            <div class="widgets_wrapper">
                <div class="container">
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third">
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <h4>Shortcut links</h4>
                            <div class="textwidget">
                                <ul class="flv_list">
                                    <li>
                                        <a href="#">Velit mauris</a>
                                    </li>
                                    <li>
                                        <a href="#">Entum feuis</a>
                                    </li>
                                    <li>
                                        <a href="#">Aliquam massa </a>
                                    </li>
                                    <li>
                                        <a href="#">Egestas quam</a>
                                    </li>
                                </ul>
                                <ul class="flv_list">
                                    <li>
                                        <a href="#">Aenean ligula</a>
                                    </li>
                                    <li>
                                        <a href="#">Dapibus at dolor</a>
                                    </li>
                                    <li>
                                        <a href="#">Molestie id</a>
                                    </li>
                                    <li>
                                        <a href="#">Vestibulum</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third">
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <h4>Tentang Kami</h4>
                            <div class="textwidget">

                            </div>
                        </aside>
                    </div>
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third">
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <h4>Hubungi Kami</h4>
                            <div class="textwidget">
                                <dl class="row">
                                    <dt class="col-lg-4 col-md-4 col-sm-12"> Alamat</dt>
                                    <dd class="col-lg-8 col-md-8 col-sm-12"><?= esc($settings['alamat_sekolah']); ?></dd>
                                    <dt class="col-lg-4 col-md-4 col-sm-12"> Telepon</dt>
                                    <dd class="col-lg-8 col-md-8 col-sm-12"><?= esc($settings['telpon_sekolah']); ?></dd>
                                    <dt class="col-lg-4 col-md-4 col-sm-12">Email</dt>
                                    <dd class="col-lg-8 col-md-8 col-sm-12"><?= esc($settings['email_sekolah']); ?></dd>
                                </dl>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>

                        <!-- Copyrights -->
                        <div class="copyright">
                            &copy; <?php echo date("Y"); ?> <?= esc($settings['sort_sekolah']); ?> - Hand-crafted & Made with ♥ from <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>

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

        </footer>

    </div>
    <!-- #Wrapper -->

    <!-- JS -->
    <script src="front_css/js/jquery-2.1.4.min.js"></script>

    <script src="front_css/js/mfn.menu.js"></script>
    <script src="front_css/js/jquery.plugins.js"></script>
    <script src="front_css/js/jquery.jplayer.min.js"></script>
    <script src="front_css/js/animations/animations.js"></script>
    <script src="front_css/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>


    <script src="front_css/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="front_css/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi1;

        tpj(document).ready(function() {

            if (tpj('#rev_slider_1_2').revolution == undefined) {
                revslider_showDoubleJqueryError('#rev_slider_1_2');
            } else {
                revapi1 = tpj('#rev_slider_1_2').show().revolution({
                    dottedOverlay: "none",
                    delay: 9000,
                    startwidth: 1180,
                    startheight: 699,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 1,

                    simplifyAll: "off",

                    navigationType: "none",
                    navigationArrows: "none",
                    navigationStyle: "round",

                    touchenabled: "on",
                    onHoverStop: "on",
                    nextSlideOnWindowFocus: "off",

                    swipe_threshold: 0.7,
                    swipe_min_touches: 1,
                    drag_block_vertical: false,

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",

                    spinner: "spinner3",

                    stopLoop: "off",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",

                    hideTimerBar: "on",
                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0
                });

            }
        });
        /*ready*/
    </script>

    <script>
        //<![CDATA[
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_depan']); ?>").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_depan']); ?>").width(stickyLogoW).height(stickyLogoH);
            }
        });
        //]]>
    </script>

</body>

</html>