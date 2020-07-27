    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit Profile</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Profile
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
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                            <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Information</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                                            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Social</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <a class="mr-2 my-25" href="#">
                                                <img src="<?php echo base_url(); ?>/perpustakaan_file/profile_photo/<?= esc($user_info['image']); ?>"" alt=" users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                                            </a>
                                            <div class="media-body mt-50">
                                                <h4 class="media-heading"><?= esc($user_info['nama_lengkap']); ?></h4>
                                                <div class="col-12 d-flex mt-1 px-0">
                                                    <button type="button" class="btn btn-primary d-none d-sm-block mr-75" data-toggle="modal" data-backdrop="false" data-target="#modal_foto">
                                                        Change
                                                    </button>
                                                    <a href="#" data-toggle="modal" data-backdrop="false" data-target="#modal_foto" class="btn btn-primary d-block d-sm-none mr-75"><i class="feather icon-edit-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modal_foto" tabindex="-1" role="dialog" aria-labelledby="modal_fotoTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modal_fotoTitle">Upload Foto</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo form_open_multipart(base_url('/admin/profile/upload_foto'), 'novalidate id="form_photo"'); ?>
                                                        <div class="modal-body" style="overflow: hidden">
                                                            <div class="row fileupload-buttonbar">
                                                                <div class="col-md">
                                                                    <div class="custom-file">
                                                                        <input name="file" type="file" class="custom-file-input" id="file">
                                                                        <label class="custom-file-label" for="customFile">Pilih foto</label>
                                                                        <p><small class="text-muted">jpg,jpeg,png Maksimal 2048Kb ( 2MB ).</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Upload</button>

                                                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                                                    </div>
                                                    <?php echo form_close(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <?php echo form_open(base_url('/admin/profile'), 'novalidate id="form_profile"'); ?>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" placeholder="Username" value="<?= esc($user_info['username']); ?>" required data-validation-required-message="This username field is required" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" placeholder="nama_lengkap" value="<?= esc($user_info['nama_lengkap']); ?>" required data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>E-mail</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= esc($user_info['email']); ?>" required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Status</label>
                                                        <input type="text" class="form-control" placeholder="Status" value="<?= (esc($user_info['is_active']) == 1 ? 'Aktif' : 'Non Aktif'); ?>" required data-validation-required-message="This email field is required" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jabatan</label>
                                                    <div class="controls">
                                                        <?php foreach ($admin_roles as $role) : ?>
                                                            <?php if (esc($role['role_id']) == esc($user_info['user_role_id'])) : ?>
                                                                <input type="text" class="form-control" placeholder="Email" value="<?= esc($role['nama_role']); ?>" required data-validation-required-message="This email field is required" readonly>
                                                            <?php
                                                            endif; ?>
                                                        <?php
                                                        endforeach; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sekolah</label>
                                                    <input type="text" class="form-control" value="SMAN 1 Barambai" placeholder="Company name" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- users edit account form ends -->
                                    </div>
                                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                        <!-- users edit Info form start -->

                                        <div class="row mt-1">
                                            <div class="col-12 col-sm-6">
                                                <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Personal Information</h5>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Birth date</label>
                                                                <input name="dateMask" class="form-control date-inputmask" type="text" placeholder="Enter Date" value="<?= esc($user_info['tahun_lahir']); ?>" data-inputmask="'alias': 'datetime','inputFormat': 'dd/mm/yyyy'">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="vueradio" <?= (esc($user_info['gender']) == 0 ? 'checked' : ''); ?> value="0">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    Laki-laki
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="vueradio" <?= (esc($user_info['gender']) == 1 ? 'checked' : ''); ?> value="1">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    Perempuan
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <input type="hidden" name="radio_v" id="radio_v">
                                                    </ul>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Mobile</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="sizing-addon1">+62</span>
                                                            </div>
                                                            <input type="text" class="form-control phone-inputmask" name="mobile_no" id="phone-mask" placeholder="Enter Phone Number" value="<?= esc($user_info['mobile_no']); ?>" inputmode="verbatim">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Website</label>
                                                        <input type="text" class="form-control" name="website" required placeholder="Website here..." value="<?= esc($user_info['website']); ?>" data-validation-required-message="This Website field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Last Login</label>
                                                        <input type="text" class="form-control" required placeholder="" value="<?= date('l, d F Y h:i A', esc($user_info['last_login'])); ?>" data-validation-required-message="This Website field is " readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" value="A-65, Belvedere Streets" required placeholder="Address Line 1" data-validation-required-message="This Address field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Kodepos</label>
                                                        <input type="text" class="form-control" name="kodepos" required placeholder="postcode" value="1868" data-validation-required-message="This Postcode field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Kota</label>
                                                        <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Porvinsi</label>
                                                        <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Negara</label>
                                                        <input type="text" class="form-control" required value="United Kingdom" data-validation-required-message="This Time Zone field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- users edit Info form ends -->
                                    </div>
                                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                                        <!-- users edit socail form start -->
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <fieldset>
                                                    <label>Twitter</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="twitter" value="<?= esc($user_info['twitter']); ?>" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                                    </div>

                                                    <label>Facebook</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="facebook" value="<?= esc($user_info['facebook']); ?>" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                                    </div>
                                                    <label>Instagram</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="instagram" value="<?= esc($user_info['instagram']); ?>" placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>LinkedIn</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-linkedin" id="basic-addon9"></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="linkedin" value="<?= esc($user_info['linkedin']); ?>" placeholder="https://id.linkedin.com/" aria-describedby="basic-addon9">
                                                </div>
                                                <label>Codepen</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                                                    </div>
                                                    <input type="text" class="form-control" value="" placeholder="https://www.codepen.com/" aria-describedby="basic-addon12">
                                                </div>
                                                <label>Slack</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-slack" id="basic-addon11"></span>
                                                    </div>
                                                    <input type="text" class="form-control" value="" placeholder="https://www.slack.com/" aria-describedby="basic-addon11">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- users edit socail form ends -->
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" name="upload" value="upload" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        Changes</button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>

    <!-- END: Content-->