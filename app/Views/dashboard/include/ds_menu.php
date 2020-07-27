<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url(); ?>/admin">
                    <img src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_sekolah']); ?>" alt=" users avatar" class="users-avatar-shadow rounded" height="40" width="40">
                    <h2 class="brand-text mb-0"><?= esc($settings['sort_sekolah']); ?></h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <?php if ($session->get('user_role_id') == 1) { ?>
        <!----------------------------------- ADMIN ----------------------------------------------------->
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= (current_url() == base_url() . "/admin" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">New</span></a>
                </li>
                <li class=" navigation-header"><span>My Profile</span>
                </li>
                <li class="<?= (current_url() == base_url() . "/admin/profile" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/profile"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Email">Edit Profile</span></a>
                </li>
                <li class=" navigation-header"><span>Siswa</span>
                </li>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Siswa</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/admin/siswa" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/siswa"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Data Siswa</span></a>
                        </li>
                        <li class="<?= (current_url() == base_url() . "/admin/siswa/import" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/siswa/import"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Import Siswa</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Guru</span>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Guru</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/admin/guru" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/guru"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Data Guru</span></a>
                        </li>
                        <li class="<?= (current_url() == base_url() . "/admin/guru/import" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/guru/import"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Import Guru</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Tendik</span>
                <li class=" navigation-header"><span>Tata Usaha</span>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Surat</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/admin/tu/surat_keluar" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/tu/surat_keluar"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Surat Keluar</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Pengaturan</span>
                </li>
                <li class="<?= (current_url() == base_url() . "/admin/settings" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/settings"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Email">Pengaturan Umum</span></a>
                </li>
                <li class="<?= (current_url() == base_url() . "/admin/settings/year" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/settings/year"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Email">Tahun Pelajaran</span></a>
                </li>
                <li class="<?= (current_url() == base_url() . "/admin/menu_settings" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/menu_settings"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Email">Menu</span></a>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>

            </ul>
        </div>
    <?php } ?>
    <?php if ($session->get('user_role_id') == 2) { ?>
        <!----------------------------------- GURU ----------------------------------------------------->

        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= (current_url() == base_url() . "/guru" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/guru"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">New</span></a>
                </li>
                <li class=" navigation-header"><span>My Profile</span>
                </li>
                <li class="<?= (current_url() == base_url() . "/guru/profile" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/guru/profile"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Email">Edit Profile</span></a>
                </li>
                <li class=" navigation-header"><span>Siswa</span>
                </li>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Siswa</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/guru/siswa" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/guru/siswa"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Data Siswa</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Tata Usaha</span>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Surat</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/guru/tu/surat_keluar" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/guru/tu/surat_keluar"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Surat Keluar</span></a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    <?php } ?>
    <?php if ($session->get('user_role_id') == 3) { ?>
        <!----------------------------------- TATA USAHA ----------------------------------------------------->

        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= (current_url() == base_url() . "/admin" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">New</span></a>
                </li>
                <li class=" navigation-header"><span>My Profile</span>
                </li>
                <li class="<?= (current_url() == base_url() . "/admin/profile" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/profile"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Email">Edit Profile</span></a>
                </li>
                <li class=" navigation-header"><span>Siswa</span>
                </li>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Siswa</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/admin/siswa" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/siswa"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Data Siswa</span></a>
                        </li>
                        <li class="<?= (current_url() == base_url() . "/admin/siswa/import" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/siswa/import"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Import Siswa</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Guru</span> </li>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Guru</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/admin/guru" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/guru"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Data Guru</span></a>
                        </li>
                        <li class="<?= (current_url() == base_url() . "/admin/guru/import" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/admin/guru/import"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Import Guru</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Tendik</span></li>
                <li class=" navigation-header"><span>Tata Usaha</span>
                <li class="nav-item has-sub"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Icons">Surat</span></a>
                    <ul class="menu-content">
                        <li class="<?= (current_url() == base_url() . "/tata-usaha/tu/surat_keluar" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/tata-usaha/tu/surat_keluar"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Email">Surat Keluar</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>

            </ul>
        </div>
    <?php } ?>
    <?php if ($session->get('user_role_id') == 4) { ?>
        <!----------------------------------- SISWA ----------------------------------------------------->

        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= (current_url() == base_url() . "/siswa" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/siswa"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">New</span></a>
                </li>
                <li class=" navigation-header"><span>My Profile</span>
                </li>
                <li class="<?= (current_url() == base_url() . "/siswa/profile" ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url(); ?>/siswa/profile"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Email">Edit Profile</span></a>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>

            </ul>
        </div>
    <?php } ?>
</div>