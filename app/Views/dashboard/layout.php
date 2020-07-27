<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php include('include/ds_head.php'); ?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <?php include('include/ds_nav.php'); ?>

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include('include/ds_menu.php'); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <?= view($view); ?>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include('include/ds_script_and_footer.php'); ?>

</body>
<!-- END: Body-->

</html>