<?php $session = \Config\Services::session(); ?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Data Siswa</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Data Siswa
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
                            <div class="h4">Daftar Siswa Tahun Pelajaran <?= $tahun_sedang_aktif; ?></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="basic-datatable">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Rombel</label>
                                        <select class="column_filter select2 form-control" id="column_filter" data-column="5">
                                            <option value="">Semua Kelas</option>
                                            <?php foreach ($semua_kelas as $semua_kelas) : ?>
                                                <option data-column="5" value="<?= $semua_kelas['rombel_saat_ini'] ?>"><?= $semua_kelas['rombel_saat_ini'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input type="text" class="column_filter form-control" id="col1_filter" data-column="1">
                                    </div>
                                </div>
                            </div>
                            <table id="<?php if ($session->get('user_role_id') == 1) {
                                            echo "example";
                                        } else {
                                            echo "example2";
                                        } ?>" class="table table-striped table-bordered dt-responsive" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>NIPD</th>
                                        <th>NISN</th>
                                        <th>JK</th>
                                        <th>ROMBEL</th>
                                        <th>AGAMA</th>
                                        <th>ACT</th>
                                    </tr>
                                </thead>
                                <tbody id="<?php if ($session->get('user_role_id') == 1) {
                                                echo "list_siswa";
                                            } else {
                                                echo "list_siswa2";
                                            } ?>">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="modal fade view_modal_data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Informasi Siswa</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body load_modal_view">

            </div>
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

<script type="text/javascript">
    function lihat_modal_siswa(id) {
        var csrfName = '<?= csrf_token(); ?>',
            csrfHash = '<?= csrf_hash(); ?>';
        var dataJson = {
            [csrfName]: csrfHash,
            id: id
        };
        $('.load_modal_view').html();
        $.ajax({
            type: "POST",
            <?php $request = \Config\Services::request(); ?>
            url: "<?php echo base_url($request->uri->getSegment(1) . '/siswa/view_single'); ?>",
            data: dataJson,
            success: function(response) {
                if (response) {
                    $('.load_modal_view').html(response);
                }
            }
        });
    }
</script>