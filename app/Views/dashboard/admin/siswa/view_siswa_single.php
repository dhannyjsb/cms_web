<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#data_diri" aria-controls="account" role="tab" aria-selected="true">
            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Data Diri</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#data_orang_tua" aria-controls="information" role="tab" aria-selected="false">
            <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Data Orang Tua</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#data_sosial" aria-controls="social" role="tab" aria-selected="false">
            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Data Sosial</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#data_periodik" aria-controls="social" role="tab" aria-selected="false">
            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Data Periodik</span>
        </a>
    </li>
</ul>

<!-- /.card-header -->
<div class="card-body">
    <div class="tab-content">
        <div class="media mb-2">
            <a class="mr-2 my-25" href="#">
                <img src="<?= base_url(); ?>/app-assets/images/profile/guru-admin-upload/1-1591887676_0ac1ecc1f27a512087c5.jpg" alt=" users avatar" class="users-avatar-shadow rounded" height="90" width="90">
            </a>
            <div class="media-body mt-50">
                <div class="mr-2 my-25">
                    <h4 class="media-heading"><?= esc($user['nama']); ?></h4>
                </div>
            </div>
        </div>
        <div class="active tab-pane" id="data_diri">
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>NISN</label>
                        <input readonly type="nisn" class="form-control" placeholder="nisn" value="<?= esc($user['nisn']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIPD</label>
                        <input readonly type="nipd" class="form-control" placeholder="nipd" value="<?= esc($user['nipd']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama</label>
                        <input readonly type="nama" class="form-control" placeholder="nama" value="<?= esc($user['nama']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select readonly name="jk" class="form-control">
                            <option value="P" <?php if (esc($user['jk']) == "P") echo 'selected="selected"'; ?>>Perempuan</option>
                            <option value="L" <?php if (esc($user['jk']) == "L") echo 'selected="selected"'; ?>>Laki-Laki</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tempatl Lahir</label>
                        <input readonly type="tempat_lahir" class="form-control" placeholder="tempat_lahir" value="<?= esc($user['tempat_lahir']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input readonly type="tanggal_lahir" class="form-control" placeholder="tanggal_lahir" value="<?= esc($user['tanggal_lahir']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>NIK</label>
                        <input readonly type="nik" class="form-control" placeholder="nik" value="<?= esc($user['nik']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Agama</label>
                        <select readonly name="agama" class="form-control">
                            <option value='Islam' <?php if (esc($user['agama']) == "Islam") echo 'selected="selected"'; ?>>Islam</option>
                            <option value='Kristen' <?php if (esc($user['agama']) == "Kristen") echo 'selected="selected"'; ?>>Kristen</option>
                            <option value='Katolik' <?php if (esc($user['agama']) == "Katolik") echo 'selected="selected"'; ?>>Katolik</option>
                            <option value='Budha' <?php if (esc($user['agama']) == "Budha") echo 'selected="selected"'; ?>>Budha</option>
                            <option value='Hindu' <?php if (esc($user['agama']) == "Hindu") echo 'selected="selected"'; ?>>Hindu</option>
                            <option value='Kong hu chu' <?php if (esc($user['agama']) == "Kong hu chu") echo 'selected="selected"'; ?>>Kong hu chu</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>No HP</label>
                        <input readonly type="hp" class="form-control" placeholder="No HP" value="<?= esc($user['hp']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input readonly type="email" class="form-control" placeholder="Alamat Email" value="<?= esc($user['email']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>No SKHUN MTs/SMP</label>
                        <input readonly type="skhun" class="form-control" placeholder="No SKHUN MTs/SMP" value="<?= esc($user['skhun']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Ijazah MTs/SMP</label>
                        <input readonly type="no_seri_ijazah" class="form-control" placeholder="No Ijazah  MTs/SMP" value="<?= esc($user['no_seri_ijazah']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>No Peserta UN MTs/SMP</label>
                        <input readonly type="no_peserta_ujian_nasional" class="form-control" placeholder="No Peserta MTs/SMP" value="<?= esc($user['no_peserta_ujian_nasional']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Akta Lahir</label>
                        <input readonly type="no_registrasi_akta_lahir" class="form-control" placeholder="No Akta Lahir" value="<?= esc($user['no_registrasi_akta_lahir']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Sekolah MTs/SMP</label>
                        <input readonly type="sekolah_asal" class="form-control" placeholder="Nama Sekolah MTs/SMP" value="<?= esc($user['sekolah_asal']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Kartu Keluarga</label>
                        <input readonly type="no_kk" class="form-control" placeholder="No Akta Lahir" value="<?= esc($user['no_kk']); ?>">
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane" id="data_sosial">

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Alamat Jalan</label>
                        <input readonly type="alamat" class="form-control" placeholder="alamat" value="<?= esc($user['alamat']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Dusun</label>
                        <input readonly type="dusun" class="form-control" placeholder="Dusun" value="<?= esc($user['dusun']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>RT</label>
                        <input readonly type="rt" class="form-control" placeholder="RT" value="<?= esc($user['rt']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>RW</label>
                        <input readonly type="rw" class="form-control" placeholder="RW" value="<?= esc($user['rw']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Kelurahan</label>
                        <input readonly type="kelurahan" class="form-control" placeholder="kelurahan" value="<?= esc($user['kelurahan']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input readonly type="kecamatan" class="form-control" placeholder="kecamatan" value="<?= esc($user['kecamatan']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Kode POS</label>
                        <input readonly type="kode_pos" class="form-control" placeholder="Kode POS" value="<?= esc($user['kode_pos']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Tinggal</label>
                        <select readonly name="jenis_tinggal " class="form-control">
                            <option value=''>-</option>
                            <option value='Bersama Orang Tua' <?php if (esc($user['jenis_tinggal']) == "Bersama orang tua") echo 'selected="selected"'; ?>>Bersama Orang Tua</option>
                            <option value='Bersama Wali' <?php if (esc($user['jenis_tinggal']) == "Wali") echo 'selected="selected"'; ?>>Bersama Wali</option>
                            <option value='KOS' <?php if (esc($user['jenis_tinggal']) == "KOS") echo 'selected="selected"'; ?>>KOS</option>
                            <option value='Asrama' <?php if (esc($user['jenis_tinggal']) == "Asrama") echo 'selected="selected"'; ?>>Asrama</option>
                            <option value='Lainnya' <?php if (esc($user['jenis_tinggal']) == "Lainnya") echo 'selected="selected"'; ?>>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Telepon Rumah</label>
                        <input readonly type="telepon" class="form-control" placeholder="Telepon Rumah" value="<?= esc($user['telepon']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alat Transportasi</label>
                        <select readonly name="alat_transportasi" class="form-control">
                            <option value=''></option>
                            <option value='Jalan Kaki' <?php if (esc($user['alat_transportasi']) == "Jalan kaki") echo 'selected="selected"'; ?>>Jalan Kaki</option>
                            <option value='Sepeda' <?php if (esc($user['alat_transportasi']) == "Sepeda") echo 'selected="selected"'; ?>>Sepeda</option>
                            <option value='Sepeda Motor' <?php if (esc($user['alat_transportasi']) == "Sepeda motor") echo 'selected="selected"'; ?>>Sepeda Motor</option>
                            <option value='Kendaraan Umum' <?php if (esc($user['alat_transportasi']) == "Kendaraan Umum") echo 'selected="selected"'; ?>>Kendaraan Umum</option>
                            <option value='Jemputan Sekolah' <?php if (esc($user['alat_transportasi']) == "Jemputan Sekolah") echo 'selected="selected"'; ?>>Jemputan Sekolah</option>
                            <option value='Ojek' <?php if (esc($user['alat_transportasi']) == "Ojek") echo 'selected="selected"'; ?>>Ojek</option>
                            <option value='Lainnya' <?php if (esc($user['alat_transportasi']) == "Lainnya") echo 'selected="selected"'; ?>>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Penerima KPS</label>
                        <select readonly name="penerima_kps" class="form-control">
                            <option value='Tidak' <?php if (esc($user['penerima_kps']) == "Tidak") echo 'selected="selected"'; ?>>Tidak</option>
                            <option value='Ya' <?php if (esc($user['penerima_kps']) == "Ya") echo 'selected="selected"'; ?>>Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nomor KPS</label>
                        <input readonly type="no_kps" class="form-control" placeholder="Nomor KPS" value="<?= esc($user['no_kps']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Penerima KIP</label>
                        <select readonly name="penerima_kip" class="form-control">
                            <option value='Tidak' <?php if (esc($user['penerima_kip']) == "Tidak") echo 'selected="selected"'; ?>>Tidak</option>
                            <option value='Ya' <?php if (esc($user['penerima_kip']) == "Ya") echo 'selected="selected"'; ?>>Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nomor KIP</label>
                        <input readonly type="nomor_kip " class="form-control" placeholder="Nomor KIP" value="<?= esc($user['nomor_kip']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama KIP</label>
                        <input readonly type="nama_di_kip" class="form-control" placeholder="nama_di_kip" value="<?= esc($user['nama_di_kip']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nomor KKS</label>
                        <input readonly type="nomor_kks" class="form-control" placeholder="nomor_kks" value="<?= esc($user['nomor_kks']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Bank</label>
                        <input readonly type="bank" class="form-control" placeholder="bank" value="<?= esc($user['bank']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Rekening Bank</label>
                        <input readonly type="nomor_rekening_bank" class="form-control" placeholder="nomor_rekening_bank" value="<?= esc($user['nomor_rekening_bank']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Pemilik Rekening</label>
                        <input readonly type="rekening_atas_nama" class="form-control" placeholder="rekening_atas_nama" value="<?= esc($user['rekening_atas_nama']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alasan Layak PIP</label>
                        <input readonly type="alasan_layak_pip" class="form-control" placeholder="alasan_layak_pip" value="<?= esc($user['kebutuhan_khusus']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alasan Layak PIP</label>
                        <input readonly type="alasan_layak_pip" class="form-control" placeholder="alasan_layak_pip" value="<?= esc($user['layak_pip']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alasan Layak PIP</label>
                        <input readonly type="alasan_layak_pip" class="form-control" placeholder="alasan_layak_pip" value="<?= esc($user['alasan_layak_pip']); ?>">
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane" id="data_orang_tua">

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input readonly type="nama_ayah" class="form-control" placeholder="nama_ayah" value="<?= esc($user['nama_ayah']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tahun Lahir Ayah</label>
                        <input readonly type="tahun_lahir_ayah" class="form-control" placeholder="tahun_lahir_ayah" value="<?= esc($user['tahun_lahir_ayah']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>NIK Ayah</label>
                        <input readonly type="nik_ayah" class="form-control" placeholder="NIK Ayah" value="<?= esc($user['nik_ayah']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input readonly type="nama_ibu" class="form-control" placeholder="nama_ibu" value="<?= esc($user['jenjang_pendidikan_ayah']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input readonly type="nama_ibu" class="form-control" placeholder="nama_ibu" value="<?= esc($user['pekerjaan_ayah']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input readonly type="nama_ibu" class="form-control" placeholder="nama_ibu" value="<?= esc($user['penghasilan_ayah']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input readonly type="nama_ibu" class="form-control" placeholder="nama_ibu" value="<?= esc($user['nama_ibu']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tahun Lahir Ibu</label>
                        <input readonly type="tahun_lahir_ibu" class="form-control" placeholder="tahun_lahir_ibu" value="<?= esc($user['tahun_lahir_ibu']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>NIK Ibu</label>
                        <input readonly type="nik_ibu" class="form-control" placeholder="NIK Ibu" value="<?= esc($user['nik_ibu']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input readonly type="nama_wali" class="form-control" placeholder="nama_wali" value="<?= esc($user['jenjang_pendidikan_ibu']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input readonly type="nama_wali" class="form-control" placeholder="nama_wali" value="<?= esc($user['pekerjaan_ibu']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input readonly type="nama_wali" class="form-control" placeholder="nama_wali" value="<?= esc($user['penghasilan_ibu']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input readonly type="nama_wali" class="form-control" placeholder="nama_wali" value="<?= esc($user['nama_wali']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tahun Lahir Wali</label>
                        <input readonly type="tahun_lahir_wali" class="form-control" placeholder="tahun_lahir_wali" value="<?= esc($user['tahun_lahir_wali']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>NIK Wali</label>
                        <input readonly type="nik_wali" class="form-control" placeholder="NIK Wali" value="<?= esc($user['nik_wali']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Anak Ke?</label>
                        <input readonly type="berat_badan" class="form-control" placeholder="berat_badan" value="<?= esc($user['jenjang_pendidikan_wali']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Anak Ke?</label>
                        <input readonly type="berat_badan" class="form-control" placeholder="berat_badan" value="<?= esc($user['pekerjaan_wali']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Anak Ke?</label>
                        <input readonly type="berat_badan" class="form-control" placeholder="berat_badan" value="<?= esc($user['penghasilan_wali']); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="data_periodik">

            <div class="row">

                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Anak Ke?</label>
                        <input readonly type="berat_badan" class="form-control" placeholder="berat_badan" value="<?= esc($user['anak_ke']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Jumlah Saudara Kandung?</label>
                        <input readonly type="berat_badan" class="form-control" placeholder="berat_badan" value="<?= esc($user['jml_saudara_kandung']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Berat Badan</label>
                        <input readonly type="berat_badan" class="form-control" placeholder="berat_badan" value="<?= esc($user['berat_badan']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input readonly type="tinggi_badan" class="form-control" placeholder="tinggi_badan" value="<?= esc($user['tinggi_badan']); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Lingkar Kepala</label>
                        <input readonly type="lingkar_kepala" class="form-control" placeholder="lingkar_kepala" value="<?= esc($user['lingkar_kepala']); ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jarak Rumah</label>
                        <input readonly id="jarak_rumah" type="jarak_rumah" class="form-control" placeholder="jarak_rumah" value="<?= esc($user['jarak_rumah']); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Lintang</label>
                        <input readonly type="lintang" id="lintang" class="form-control" placeholder="Lintang" value="<?= esc($user['lintang']); ?>" readonly>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Bujur</label>
                        <input readonly type="bujur" id="bujur" class="form-control" placeholder="Bujur" value="<?= esc($user['bujur']); ?>" readonly>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="data_nilai">
            <div class="row">
                <div class="col-12 col-sm-4"></div>
                <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content"> <span class="info-box-text text-center text-muted">Menyusul</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4"></div>
            </div>
        </div>
    </div>
    <!-- /.tab-content -->
</div>