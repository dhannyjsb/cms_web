    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label style="text-align: center;display: block;">NO SURAT</label>
                <input type=" text" class="form-control" name="no_surat" placeholder="NO SURAT" value="<?= esc($data_surat['no_surat_keluar']); ?>" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label style="text-align: center;display: block;">KODE SURAT</label>
                <input type="text" class="form-control" name="kode_surat" placeholder="KODE SURAT" value="<?= esc($data_surat['second_surat_keluar']); ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label style="text-align: center;display: block;">NO BERKAS</label>
                <input type="text" class="form-control" name="no_berkas" placeholder="NO BERKAS" value="<?= esc($data_surat['no_berkas_keluar']); ?>" required>
                <input type="hidden" class="form-control" name="surat_keluar_id" placeholder="NO BERKAS" value="<?= esc($data_surat['surat_keluar_id']); ?>" required>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label style="text-align: center;display: block;">TANGGAL</label>
                <input type='text' name="tanggal_surat_keluar" class="form-control format_tanggal" value="<?= esc($data_surat['tanggal_surat_keluar']); ?>" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label style="text-align: center;display: block;">ALAMAT TUJUAN</label>
        <input type="text" class="form-control" name="tujuan_surat" placeholder="ALAMAT TUJUAN" value="<?= esc($data_surat['alamat_surat_keluar']); ?>" required>
    </div>
    <div class="form-group">
        <label style="text-align: center;display: block;">PERIHAL SURAT</label>
        <input type="text" class="form-control" name="perihal_surat" placeholder="PERIHAL SURAT" value="<?= esc($data_surat['perihal_surat_keluar']); ?>" required>
        <input type="hidden" class="form-control" name="tahun_surat_keluar" placeholder="PERIHAL SURAT" value="2020">
        <input type="hidden" class="form-control" name="pengedit_surat_keluar" placeholder="PERIHAL SURAT" value="<?= esc($user_info['id_unik']); ?>">

    </div>
    <div class="form-group">
        <a class="btn btn-primary" href="https://drive.google.com/file/d/<?= esc($data_surat['id_gdrive_sk']); ?>/view" target="_blank">Lihat File</a>
    </div>
    <div class="form-group">
        <label for="basicInputFile" style="text-align: center;display: block;">LAMPIRKAN FILE ?</label>

        <select name="pakai_file" data-placeholder="pakai_file" class="select2-icons form-control" id="edit_pakai_file">
            <option value="1" data-icon="fa fa-wordpress" selected>Ya</option>
            <option value="2" data-icon="fa fa-codepen">Tidak</option>
        </select>
    </div>
    <fieldset class="form-group" style="display: block;" id="edit_form_filenya">
        <label for="basicInputFile" style="text-align: center;display: block;">UPLOAD SCAN PDF</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="file">
            <label class="custom-file-label" for="inputGroupFile01">Pilih file yang di upload</label>
        </div>
    </fieldset>

    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script>
        $(document).ready(function() {

            edit_pakai_file.onchange = function() {
                var val = this.options[this.selectedIndex].value;
                var x = document.getElementById("edit_form_filenya");
                //  alert(val);
                if (val === "2") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }

            };
        });
    </script>