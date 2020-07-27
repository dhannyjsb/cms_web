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
    <link rel='stylesheet' href='<?= base_url(); ?>/front_css/global.css'>
    <link rel='stylesheet' href='<?= base_url(); ?>/front_css/school/css/structure.css'>
    <link rel='stylesheet' href='<?= base_url(); ?>/front_css/school/css/school.css'>
    <link rel='stylesheet' href='<?= base_url(); ?>/front_css/school/css/custom.css'>
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="<?= base_url(); ?>/front_css/plugins/rs-plugin/css/settings.css">
    <!-- ShareButton -->
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ef830d4dd16750013bd35b3&product=inline-share-buttons' async='async'></script>
</head>

<?php $request = \Config\Services::request();
if ($request->uri->getSegment(1) == '') {
    echo "<body class='template-slider color-orange layout-full-width header-modern sticky-header sticky-white subheader-title-left'>";
}
if ($request->uri->getSegment(1) == 'blogs' or $request->uri->getSegment(1) == 'categories') {
    if ($request->uri->getSegment(2) == 'read') {
        echo "<body class='single single-post single-format-standard with_aside aside_right layout-full-width header-modern sticky-header sticky-white subheader-both-center'>";
    } else {
        echo "<body class='blog with_aside aside_right layout-full-width header-modern sticky-header sticky-white subheader-both-center'>";
    }
}
?>
<!-- Main Theme Wrapper -->
<div id="Wrapper">
    <?php if (current_url() == base_url() . "/") {
        include('include/header_home.php');
    } else {
        include('include/header.php');
    } ?>
    <!-- Main Content -->
    <?= view($view); ?>
    <!-- #Footer -->
    <?php include('include/footer.php'); ?>
    <!-- Footer-->
</div>
<!-- #Wrapper -->
<!-- JS -->
<script src="<?= base_url(); ?>/front_css/js/jquery-2.1.4.min.js"></script>

<script src="<?= base_url(); ?>/front_css/js/mfn.menu.js"></script>
<script src="<?= base_url(); ?>/front_css/js/jquery.plugins.js"></script>
<script src="<?= base_url(); ?>/front_css/js/jquery.jplayer.min.js"></script>
<script src="<?= base_url(); ?>/front_css/js/animations/animations.js"></script>
<script src="<?= base_url(); ?>/front_css/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= base_url(); ?>/front_css/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

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