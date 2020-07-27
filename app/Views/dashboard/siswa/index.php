<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="card-deck-wrapper">
                            <div class="card-deck">
                                <div class="card">
                                    <img src="<?php echo base_url(); ?>/app-assets/images/elements/decore-left.png" class="img-left" alt="card-img-left">
                                    <img src="<?php echo base_url(); ?>/app-assets/images/elements/decore-right.png" class="img-right" alt="card-img-right">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="../../../app-assets/images/slider/03.jpg" alt="Card image cap">
                                        <div class="card-img-overlay text-center">
                                            <div class="avatar avatar-xl bg-primary shadow mt-5">
                                                <div class="avatar-content">
                                                    <img class="img-fluid" src="<?php echo base_url(); ?>/perpustakaan_file/profile_photo/<?= esc($user_info['image']); ?>" alt="img placeholder">
                                                </div>
                                            </div>
                                            <h1 class="mb-2 text-white">Selamat Datang <?= esc($user_info['nama_lengkap']); ?></h1>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center">Tahun Pelajaran</h4>
                                            <h2 class="text-center"><?= $tahun_sedang_aktif; ?></h2>
                                            <ul class="list-group list-group-flush customer-info">
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <div class="series-info align-self-center">
                                                        <i class="fa fa-circle font-small-3 text-primary"></i>
                                                        <span class="text-bold-600">Jumlah Rombel</span>
                                                    </div>
                                                    <div class="font-medium-4 text-bold-700">
                                                        <span><?= $total_kelas; ?></span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between ">
                                                    <div class="series-info align-self-center">
                                                        <i class="fa fa-circle font-small-3 text-warning"></i>
                                                        <span class="text-bold-600">Jumlah Siswa</span>
                                                    </div>
                                                    <div class="font-medium-4 text-bold-700">
                                                        <span><?= $data_siswa['jumlah_siswa']; ?></span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between ">
                                                    <div class="series-info align-self-center">
                                                        <i class="fa fa-circle font-small-3 text-danger"></i>
                                                        <span class="text-bold-600">Siswa Laki-laki</span>
                                                    </div>
                                                    <div class="font-medium-4 text-bold-700">
                                                        <span><?= $data_siswa['laki']; ?></span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between ">
                                                    <div class="series-info align-self-center">
                                                        <i class="fa fa-circle font-small-3 text-info"></i>
                                                        <span class="text-bold-600">Siswa Perempuan</span>
                                                    </div>
                                                    <div class="font-medium-4 text-bold-700">
                                                        <span><?= $data_siswa['perempuan']; ?></span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between ">
                                                    <div class="series-info align-self-center">
                                                        <i class="fa fa-circle font-small-3 text-success"></i>
                                                        <span class="text-bold-600">Guru</span>
                                                    </div>
                                                    <div class="font-medium-4 text-bold-700">
                                                        <span>1</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between ">
                                                    <div class="series-info align-self-center">
                                                        <i class="fa fa-circle font-small-3 text-warning"></i>
                                                        <span class="text-bold-600">Tenaga Pendidik</span>
                                                    </div>
                                                    <div class="font-medium-4 text-bold-700">
                                                        <span>1</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </div>

        </section>
        <!-- Dashboard Analytics end -->

    </div>
</div>
</div>