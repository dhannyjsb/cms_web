<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Import Data</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Import Data
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Dropzone section start -->
            <section id="dropzone-examples">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Import Data Siswa Tahun Pelajaran</h4>
                            </div>
                            <?php echo form_open_multipart(base_url('/admin/siswa/import'), 'class="form-horizontal ", id="upload_foto_settings"');  ?>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">This example uploads a single file using dropzone js library. By default, dropzone is a
                                        multiple file uploader and does not have specific option allowing us to switch to single file uploading
                                        mode, but this functionality can be achieved by adding more options to the plugin settings, such as
                                        <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1. <code>maxFiles: 1</code>
                                        is used to tell dropzone that there should be only one file. When there is more then 1 file the function
                                        <code>maxfilesexceeded</code> will be called, with the exceeding file in the first parameter. Now only 1
                                        file can be selected and it will be replaced with another one instead of adding it to the preview.</p>
                                    <?php
                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            Whoops! Ada kesalahan saat input data, yaitu:
                                            <ul>
                                                <?php foreach ($errors as $error) : ?>
                                                    <li><?= esc($error) ?></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if (!empty(session()->getFlashdata('success'))) { ?>
                                        <div class="alert alert-success">
                                            <?php echo session()->getFlashdata('success'); ?>
                                        </div>
                                    <?php } ?>

                                    <div class="row">
                                        <div class="col-12 col-sm-6">

                                            <label>Twitter</label>

                                            <div class="input-group mb-75">
                                                <input name="dapo_file" type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Upload file dapodik</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <label>Tahun Pelajaran</label>
                                            <select class="combo_tahun select2-icons form-control" id="combo_tahun" name="ta_input">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="upload" value="upload" class="btn btn-info">Upload</button>
                                </div>

                            </div>
                            <?php form_close() ?>
                        </div>
                    </div>
                </div>

                <!-- file upload tips ends -->
            </section>
            <!-- // Dropzone section end -->

        </div>
    </div>
</div>