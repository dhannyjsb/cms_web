<?php $request = \Config\Services::request(); ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Tata Usaha</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Surat Keluar
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
                                    <div class="h4">Surat Keluar Tahun 2020</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="btn-group float-right mt-2" role="group">
                                        <a class="btn btn-md btn-secondary" data-toggle="modal" data-target="#addModal">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
                                    </div>
                                </div>
                            </section>
                            </br>
                            <table id="table_surat_keluar" class="table table-striped table-bordered dt-responsive" style="width:100%">
                                <thead style="height: 50px;text-align: center;">
                                    <tr>
                                        <th style="width:5%;vertical-align: middle;">NO</th>
                                        <th style="width:3%;vertical-align: middle;">KODE</th>
                                        <th style="width:3%;vertical-align: middle;">NO BERKAS</th>
                                        <th style="width:28%;vertical-align: middle;">PERIHAL</th>
                                        <th style="width:20%;vertical-align: middle;">ALAMAT TUJUAN</th>
                                        <th style="width:8%;vertical-align: middle;">TANGGAL</th>
                                        <th style="width:8%;vertical-align: middle;">FILE</th>
                                        <th style="width:10%;vertical-align: middle;">AUTHOR</th>
                                        <th style="width:15%;vertical-align: middle;">ACT</th>
                                    </tr>
                                </thead>
                                <tbody id="list_surat_keluar">
                                </tbody>
                            </table>
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
                <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data nomor <b><span id="delete_user"></span></b> ?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="deleteUserId" id="deleteUserId" class="form-control">
                <input type="hidden" name="penghapus_surat_keluar" class="form-control" id="penghapus_surat_keluar" value="<?= $user_info['id_unik']; ?>">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

<?php echo form_open_multipart(base_url($request->uri->getSegment(1) . '/tu/surat_keluar'), 'class="form-horizontal" id="form_tambah_surat_keluar"');  ?>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah surat keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="text-align: center;display: block;">NO SURAT</label>
                            <input type=" text" class="form-control" name="no_surat" placeholder="NO SURAT" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="text-align: center;display: block;">KODE SURAT</label>
                            <input type=" text" class="form-control" name="kode_surat" placeholder="KODE SURAT" value="-" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="text-align: center;display: block;">NO BERKAS</label>
                            <input type=" text" class="form-control" name="no_berkas" placeholder="NO BERKAS" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="text-align: center;display: block;">TANGGAL</label>
                            <input name="tanggal_surat_keluar" class="form-control format_tanggal">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label style="text-align: center;display: block;">ALAMAT TUJUAN</label>
                    <input type="text" class="form-control" name="tujuan_surat" placeholder="ALAMAT TUJUAN" required>
                </div>
                <div class="form-group">
                    <label style="text-align: center;display: block;">PERIHAL SURAT</label>
                    <input type="text" class="form-control" name="perihal_surat" placeholder="PERIHAL SURAT" required>
                    <input type="hidden" class="form-control" name="tahun_surat_keluar" placeholder="PERIHAL SURAT" value="2020">
                    <input type="hidden" class="form-control" name="pembuat_surat_keluar" value="<?= $user_info['id_unik']; ?>">

                </div>
                <div class="form-group">
                    <label for="basicInputFile" style="text-align: center;display: block;">LAMPIRKAN FILE ?</label>

                    <select name="pakai_file" data-placeholder="pakai_file" class="select2-icons form-control" id="pakai_file">
                        <option value="1" data-icon="fa fa-wordpress" selected>Ya</option>
                        <option value="2" data-icon="fa fa-codepen">Tidak</option>
                    </select>
                </div>
                <fieldset class="form-group" style="display: block;" id="form_filenya">
                    <label for="basicInputFile" style="text-align: center;display: block;">UPLOAD SCAN PDF</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="file">
                        <label class="custom-file-label" for="inputGroupFile01">Pilih file yang di upload</label>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="tombol_batal">Tutup</button>
                <button type="submit" class="btn btn-primary" id="tombol_tambah">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

<div class="modal fade view_modal_data" id="view_modal_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit surat keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open(base_url($request->uri->getSegment(1) . '/tu/simpan_edit_surat_keluar'), 'class="form-horizontal" id="form_edit_surat_keluar"');  ?>
            <div class="modal-body load_modal_view">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        pakai_file.onchange = function() {
            var val = this.options[this.selectedIndex].value;
            var x = document.getElementById("form_filenya");
            //  alert(val);
            if (val === "2") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }

        };

        var list_surat_keluar = $("#table_surat_keluar").DataTable({
            processing: true,
            responsive: true,
            dom: "lrtip",
            lengthChange: false,
            paging: true,
            bInfo: false,
            order: [],
            ajax: {
                url: "get_surat_keluar",
                dataSrc: "",
            },
            columns: [{
                    orderable: true,
                    data: "no_surat_keluar"
                },
                {
                    orderable: false,
                    data: "second_surat_keluar"
                },

                {
                    orderable: false,
                    data: "no_berkas_keluar"
                },
                {
                    orderable: false,
                    data: "perihal_surat_keluar"
                },
                {
                    orderable: false,
                    data: "alamat_surat_keluar"
                },
                {
                    orderable: false,
                    data: "tanggal_surat_keluar"
                },
                {
                    orderable: false,
                    data: function(row, type, set) {
                        if (row.id_gdrive_sk == "-") {
                            return (
                                'Tidak ada File'
                            );
                        } else {
                            return (
                                '<a href="https://drive.google.com/file/d/' + row.id_gdrive_sk + '/view"  target="_blank" class="btn btn-info btn-sm">Link</a>'
                            );
                        }

                    },
                },
                {
                    orderable: false,
                    data: "nama_lengkap"
                },
                {
                    orderable: false,
                    data: function(row, type, set) {
                        if (<?= $user_info['user_role_id']; ?> == 1) {
                            return (
                                '<button class="btn btn-info btn-sm editRecord" onclick="modal_edit_surat_keluar(' +
                                row.surat_keluar_id +
                                ')" data-toggle="modal" data-target=".view_modal_data">Edit</button>' +
                                '<button style="margin-left:6px" class="btn btn-danger btn-sm deleteRecord" data-id="' +
                                row.surat_keluar_id +
                                '" data-nama="' +
                                row.no_surat_keluar +
                                row.second_surat_keluar +
                                '" id="ajax-request">Hapus</button>'
                            );
                        } else {
                            if (row.pembuat_surat_keluar == "<?= $user_info['id_unik']; ?>") {
                                return (
                                    '<button class="btn btn-info btn-sm editRecord" onclick="modal_edit_surat_keluar(' +
                                    row.surat_keluar_id +
                                    ')" data-toggle="modal" data-target=".view_modal_data">Edit</button>' +
                                    '<button style="margin-left:6px" class="btn btn-danger btn-sm deleteRecord" data-id="' +
                                    row.surat_keluar_id +
                                    '" data-nama="' +
                                    row.no_surat_keluar +
                                    row.second_surat_keluar +
                                    '" id="ajax-request">Hapus</button>'
                                );
                            } else {
                                return (
                                    '<button class="btn btn-info btn-sm editRecord" onclick="modal_edit_surat_keluar(' +
                                    row.surat_keluar_id +
                                    ')" data-toggle="modal" data-target=".view_modal_data">Edit</button>'
                                );
                            };
                        };

                    },
                },
            ],
            columnDefs: [{
                className: "surat_center",
                targets: [0, 1, 2, 5, 6, 8]
            }],
        });

        list_surat_keluar.order([0, "desc"], [1, "desc"]).draw();

        $("#list_surat_keluar").on("click", ".editSurat", function() {
            var UserId = $(this).data("id");
            var nama_data = $(this).data("nama");
            $("#EditModal").modal("show");
            $("#delete_user").text("" + nama_data);
            $("#deleteUserId").val(UserId);
        });

        $("#list_surat_keluar").on("click", ".deleteRecord", function() {
            var UserId = $(this).data("id");
            var nama_data = $(this).data("nama");
            $("#deleteUserModal").modal("show");
            $("#delete_user").text("" + nama_data);
            $("#deleteUserId").val(UserId);
        });

        $("#deleteUserForm").on("submit", function() {
            var UserId = $("#deleteUserId").val();
            var penghapus_surat_keluar = $("#penghapus_surat_keluar").val();
            var token = $('input[name="csrf_token_web"]').attr("value");
            $.ajax({
                type: "POST",
                url: "hapus_surat_keluar",
                dataType: "JSON",
                data: {
                    id: UserId,
                    csrf_token_web: token,
                    penghapus_surat_keluar: penghapus_surat_keluar,
                },
                success: function(data) {
                    if (data == false) {
                        Swal.fire({
                            position: "top-end",
                            type: "error",
                            title: "Data Gagal Dihapus",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                        $("#deleteUserModal").modal("hide");
                    } else {
                        Swal.fire({
                            position: "top-end",
                            type: "success",
                            title: "Data Berhasil Dihapus",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                        $("#" + UserId).remove();
                        $("#deleteUserId").val("");
                        $("#deleteUserModal").modal("hide");
                        list_surat_keluar.ajax.reload(function() {});
                    }
                },
            });
            return false;
        });

        var form_tambah_surat_keluar = $("#form_tambah_surat_keluar").attr("action");
        $("#form_tambah_surat_keluar").submit(function(e) {
            $('#tombol_tambah').prop('disabled', true);
            $('#tombol_batal').prop('disabled', true);

            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: form_tambah_surat_keluar,
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                success: function(result) {
                    $('#tombol_tambah').prop('disabled', false);
                    $('#tombol_batal').prop('disabled', false);
                    if (result == 1) {
                        $('#tombol_tambah').prop('disabled', false);
                        $('#tombol_batal').prop('disabled', false);
                        Swal.fire({
                            position: "top-end",
                            type: "error",
                            title: "Tanggal harus diisi",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,

                        });
                    } else {
                        $('#tombol_tambah').prop('disabled', false);
                        $('#tombol_batal').prop('disabled', false);

                        $("#addModal").modal("toggle");
                        $("#form_tambah_surat_keluar")[0].reset();
                        list_surat_keluar.ajax.reload(function() {});
                        Swal.fire({
                            position: "top-end",
                            type: "success",
                            title: "Data berhasil ditambahkan",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                    }
                },
                error: function(result) {
                    alert("error");
                    $('#tombol_tambah').prop('disabled', false);
                    $('#tombol_batal').prop('disabled', false);
                },
            });
        });

        var form_edit_surat_keluar = $("#form_edit_surat_keluar").attr("action");
        $("#form_edit_surat_keluar").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: form_edit_surat_keluar,
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                success: function(result) {
                    if (result == 1) {
                        Swal.fire({
                            position: "top-end",
                            type: "error",
                            title: "Tanggal harus diisi",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                    } else {
                        $("#view_modal_data").modal("toggle");
                        $("#form_edit_surat_keluar")[0].reset();
                        list_surat_keluar.ajax.reload(function() {});
                        Swal.fire({
                            position: "top-end",
                            type: "success",
                            title: "Data berhasil dismpan",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                    }
                },
                error: function(result) {
                    alert("error");
                },
            });
        });
    });
</script>
<script type="text/javascript">
    function modal_edit_surat_keluar(id) {
        var csrfName = '<?= csrf_token(); ?>',
            csrfHash = '<?= csrf_hash(); ?>';
        var dataJson = {
            [csrfName]: csrfHash,
            id: id
        };
        $('.load_modal_view').html();
        $.ajax({
            type: "POST",

            url: "<?php echo base_url($request->uri->getSegment(1) . '/tu/edit_surat_keluar'); ?>",
            data: dataJson,
            success: function(response) {
                if (response) {
                    $('.load_modal_view').html(response);
                }
            }
        });
    }
</script>