<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">
            <?php if ($mode == "logo_sekolah") {
                echo "Upload Logo Sekolah";
            }
            if ($mode == "favicon") {
                echo "Upload Favicon";
            }
            if ($mode == "background_panel") {
                echo "Upload Foto Background";
            }
            if ($mode == "logo_depan") {
                echo "Upload Logo Depan";
            } ?>
        </h4>

    </div>
    <?php echo form_open_multipart(base_url('/admin/settings/modal'), 'class="form-horizontal ", id="upload_foto_settings"');  ?>
    <div class="modal-body">
        <div class="row fileupload-buttonbar">
            <div class="col-md">
                <div class="custom-file">
                    <input name="file" type="file" class="custom-file-input" id="customFile">
                    <input name="modenya" type="hidden" value="<?= $mode; ?>">
                    <label class="custom-file-label" for="customFile">Pilih foto</label>
                </div>
            </div>

        </div>
    </div>
    <div class="card-footer">
        <button type="submit" name="upload" value="upload" class="btn btn-info">Upload</button>
        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Tutup</button>
    </div>
    <?php echo form_close(); ?>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>

<script type="text/javascript">
    var alamat4 = $("#upload_foto_settings").attr("action");
    $("#upload_foto_settings").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: alamat4,
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: function(result) {
                $("#fn_admission_data").modal("toggle");
                Swal.fire({
                    position: "top-end",
                    type: "success",
                    title: "Data berhasil disimpan",
                    showConfirmButton: false,
                    timer: 1500,
                    confirmButtonClass: "btn btn-primary",
                    buttonsStyling: false,
                });
            },
            error: function(result) {
                alert("error");
            },
        });
    });
</script>