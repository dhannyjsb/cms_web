<?php $session = \Config\Services::session(); ?>
<?php $request = \Config\Services::request(); ?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['favicon']); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['favicon']); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/extensions/sweetalert2.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/card-analytics.css">

    <?php if (current_url() == base_url() . "/admin" or current_url() == base_url() . "/guru" or current_url() == base_url() . "/tata-usaha") { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/dashboard-analytics.css">
    <?php } ?>
    <?php if (current_url() == base_url() . "/admin/profile" or current_url() == base_url() . "/guru/profile" or current_url() == base_url() . "/tata-usaha/profile") { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/app-user.css">
    <?php } ?>
    <?php if (current_url() == base_url() . "/admin/settings") { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/app-user.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/style.css">
    <?php } ?>
    <?php if (current_url() == base_url() . "/admin/settings/year") { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/app-user.css">

    <?php } ?>
    <?php if (current_url() == base_url() . "/admin/siswa" or current_url() == base_url() . "/guru/siswa" or current_url() == base_url() . "/tata-usaha/siswa") { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/app-user.css">
    <?php } ?>
    <?php if (current_url() == base_url() . "/admin/siswa/import") { ?>

    <?php } ?>

    <?php if (current_url() == base_url() . "/admin/guru" or current_url() == base_url() . "/guru/guru" or current_url() == base_url() . "/tata-usaha/guru") { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
        <link rel="s
        tylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/app-user.css">
    <?php } ?>

    <?php if (current_url() == base_url() . "/admin/menu_settings") { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/plugins/extensions/drag-and-drop.css">

    <?php } ?>
    <?php if (
        current_url() == base_url() . "/admin/tu/surat_keluar"
        or current_url() == base_url() . "/guru/tu/surat_keluar"
        or current_url() == base_url() . "/tata-usaha/tu/surat_keluar"
        or current_url() == base_url() . "/admin/tu/surat_keputusan"
        or current_url() == base_url() . "/guru/tu/surat_keputusan"
        or current_url() == base_url() . "/tata-usaha/tu/surat_keputusan"
        or current_url() == base_url() . "/admin/tu/surat_extra"
        or current_url() == base_url() . "/guru/tu/surat_extra"
        or current_url() == base_url() . "/tata-usaha/tu/surat_extra"
    ) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/css/pages/app-user.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <?php } ?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    END: Custom CSS-->
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/vendors.min.js"></script>

</head>