<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Tahun Pelajaran</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Tahun Pelajaran
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="basic-datatable">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <section class="row">
                                <div class="col-md-8">
                                    <div class="h4">Daftar Tahun Pelajaran</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="btn-group float-right mt-2" role="group">
                                        <a class="btn btn-md btn-secondary" data-toggle="modal" data-target="#addModal">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
                                    </div>
                                </div>
                            </section>
                            <table id="table_tahun" class="table table-striped table-bordered dt-responsive" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TAHUN PELAJARAN</th>
                                        <th>KETERANGAN</th>
                                        <th>STATUS</th>
                                        <th>ACT</th>
                                    </tr>
                                </thead>
                                <tbody id="list_tahun">
                                </tbody>
                            </table>
                            <?php echo form_open(base_url('admin/settings/year/tahun_pelajaran_aktif'), 'class="form-horizontal" id="tahun_pelajaran_aktif"');  ?>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Tahun Aktif</label>
                                        <select class="combo_tahun select2-icons form-control" id="combo_tahun" name="tahun_baru">
                                        </select>
                                        <div><input type="hidden" value="" name="tahun_sedang_aktif" id="tahun_sedang_aktif"></div>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-success ">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>

                </div>
        </div>
        </section>
    </div>
</div>
</div>
<?php echo form_open(base_url(''), 'class="form-horizontal ", id="deleteUserForm"');  ?>
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data <b><span id="delete_user"></span></b> ?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="deleteUserId" id="deleteUserId" class="form-control">
                <input type="text" name="nama_tahun" class="form-control" id="nama_tahun">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

<?php echo form_open(base_url('admin/settings/year'), 'class="form-horizontal" id="form_tahun_pelajaran"');  ?>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah tahun pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control tahun_pelajaran-inputmask" name="tahun_pelajaran" placeholder="Tahun Pelajaran" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="tahun_keterangan" placeholder="Keterangan" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>