    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Pengaturan Umum</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Pengaturan Umum
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Umum</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                            <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Alamat</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                                            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Social</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="tema-tab" data-toggle="tab" href="#tema" aria-controls="tema" role="tab" aria-selected="false">
                                            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Tema</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->

                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <?php echo form_open(base_url('/admin/settings'), 'novalidate id="form_settings"'); ?>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Nama Sekolah</label>
                                                        <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" value="<?= esc($settings['nama_sekolah']); ?>" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="controls col-md-6">
                                                            <label>NPSN Sekolah</label>
                                                            <input type="text" class="form-control" name="npsn_sekolah" placeholder="NPSN" value="<?= esc($settings['npsn_sekolah']); ?>" required data-validation-required-message="This name field is required">
                                                        </div>
                                                        <div class="controls col-md-6">
                                                            <label>Telepon Sekolah</label>
                                                            <input type="text" class="form-control" name="telpon_sekolah" placeholder="Name" value="<?= esc($settings['telpon_sekolah']); ?>" required data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>E-mail</label>
                                                        <input type="email_sekolah" class="form-control" name="email_sekolah" placeholder="Email" value="<?= esc($settings['email_sekolah']); ?>" required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Status</label>
                                                        <input type="text" class="form-control" name="status_sekolah" placeholder="Status" value="<?= (esc($settings['status_sekolah']) == 1 ? 'Negeri' : 'Swasta'); ?>" required data-validation-required-message="This email field is required" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Nama Kepala Sekolah</label>
                                                        <input type="kepala_sekolah" class="form-control" name="kepala_sekolah" placeholder="Nama Kepala Sekolah" value="<?= esc($settings['kepala_sekolah']); ?>" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jam Operasional</label>
                                                    <input type="text" name="jam_operasional" class="form-control" value="<?= esc($settings['jam_operasional']); ?>" Company name">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" name="upload" value="upload" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                    Changes</button>
                                            </div>
                                        </div>

                                        <!-- users edit account form ends -->
                                    </div>
                                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                        <!-- users edit Info form start -->
                                        <div class="row mt-1">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Alamat</label>
                                                        <input type="text" class="form-control" name="alamat_sekolah" required placeholder="Website here..." value="<?= esc($settings['alamat_sekolah']); ?>" data-validation-required-message="This Website field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Kabupaten</label>
                                                        <input type="text" class="form-control" name="kabupaten" required placeholder="Website here..." value="<?= esc($settings['kabupaten']); ?>" data-validation-required-message="This Website field is required">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Provinsi</label>
                                                        <input type="text" class="form-control" name="provinsi" required placeholder="Website here..." value="<?= esc($settings['provinsi']); ?>" data-validation-required-message="This Website field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Kode POS</label>
                                                        <input type="text" name="kode_pos" class="form-control" required placeholder="" value="<?= esc($settings['kode_pos']); ?>" data-validation-required-message="This Website field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" name="upload" value="upload" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                        <!-- users edit Info form ends -->
                                    </div>
                                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <fieldset>
                                                    <label>Twitter</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="twitter" value="<?= esc($settings['twitter']); ?>" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                                    </div>
                                                    <label>Facebook</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="facebook" value="<?= esc($settings['facebook']); ?>" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>LinkedIn</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-linkedin" id="basic-addon9"></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="linkedin" value="<?= esc($settings['linkedin']); ?>" placeholder="https://id.linkedin.com/" aria-describedby="basic-addon9">
                                                </div>
                                                <label>Instagram</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="instagram" value="<?= esc($settings['instagram']); ?>" placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" name="upload" value="upload" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                Changes</button>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                                    <div class="tab-pane" id="tema" aria-labelledby="tema-tab" role="tabpanel">
                                        <div class="row col-12 col-sm-auto">
                                            <d<div class="row">
                                                <div class="col-12">
                                                    <div class="card-deck-wrapper">
                                                        <div class="card-deck col">
                                                            <div class="card col ">
                                                                <div class="card-content col">
                                                                    <div class="foto_upload">
                                                                        <img class="card-img-top img-fluid img_upload" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_sekolah']); ?>" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title" style="text-align:center">Logo Sekolah</h4>
                                                                        <button onclick="modal_upload('logo_sekolah')" data-toggle="modal" data-target=".bs-admission-modal-lg" class=" btn gradient-light-primary btn-block mt-2 waves-effect waves-light btn_upload_foto">Ubah</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card col">
                                                                <div class="card-content col">
                                                                    <div class="foto_upload">
                                                                        <img class="card-img-top img-fluid img_upload" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['favicon']); ?>" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title" style="text-align:center">Favicon</h4>
                                                                        <button onclick="modal_upload('favicon')" data-toggle="modal" data-target=".bs-admission-modal-lg" class=" btn gradient-light-primary btn-block mt-2 waves-effect waves-light btn_upload_foto">Ubah</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card col">
                                                                <div class="card-content col">
                                                                    <div class="foto_upload">
                                                                        <img class="card-img-top img-fluid img_upload" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['background_panel']); ?>" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title" style="text-align:center">Background</h4>
                                                                        <button onclick="modal_upload('background_panel')" data-toggle="modal" data-target=".bs-admission-modal-lg" class=" btn gradient-light-primary btn-block mt-2 waves-effect waves-light btn_upload_foto">Ubah</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card col">
                                                                <div class="card-content col">
                                                                    <div class="foto_upload">
                                                                        <img class="card-img-top img-fluid img_upload" src="<?php echo base_url(); ?>/app-assets/images/logo/<?= esc($settings['logo_depan']); ?>" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title" style="text-align:center">Logo Depan</h4>
                                                                        <button onclick="modal_upload('logo_depan')" data-toggle="modal" data-target=".bs-admission-modal-lg" class=" btn gradient-light-primary btn-block mt-2 waves-effect waves-light btn_upload_foto">Ubah</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <!-- users edit ends -->

        </div>
    </div>


    <div id="fn_admission_data" class="modal fade bs-admission-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg fn_admission_data">
        </div>
    </div>
    <script type="text/javascript">
        function modal_upload(id) {
            var csrfName = '<?= csrf_token() ?>',
                csrfHash = '<?= csrf_hash() ?>';
            var dataJson = {
                [csrfName]: csrfHash,
                id: id
            };
            $('.fn_admission_data').html();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('admin/settings/modal'); ?>",
                data: dataJson,
                success: function(response) {
                    if (response) {
                        $('.fn_admission_data').html(response);
                    }
                }
            });
        }
    </script>
    <!-- END: Content-->