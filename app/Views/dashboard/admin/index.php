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
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body pl-0">
                                    <div class="height-300">
                                        <canvas id="bar-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
        </div>

        </section>
        <!-- Dashboard Analytics end -->

    </div>
</div>
</div>
<?php
//Inisialisasi nilai variabel awal
$kelas = "";
$jumlah_laki = null;
$jumlah_perempuan = null;
$total = null;
foreach ($semua_kelas as $item) {
    $jur = $item->kelas;
    $kelas .= "'$jur'" . ", ";
    $jum1 = $item->laki;
    $jumlah_laki .= "$jum1" . ", ";
    $jum2 = $item->perempuan;
    $jumlah_perempuan .= "$jum2" . ", ";
    $jum3 = $item->jumlah_siswa;
    $total .= "$jum3" . ", ";
}
?>
<script>
    $(window).on("load", function() {
        var $primary = "#7367F0";
        var $success = "#28C76F";
        var $danger = "#EA5455";
        var $warning = "#FF9F43";
        var $label_color = "#1E1E1E";
        var $color2 = "#CE2068";
        var $color3 = "#cec220";
        var $color4 = "#18dada";
        var grid_line_color = "#dae1e7";
        var scatter_grid_color = "#f3f3f3";
        var $scatter_point_light = "#D1D4DB";
        var $scatter_point_dark = "#5175E0";
        var $white = "#fff";
        var $black = "#000";

        var themeColors = [$primary, $success, $danger, $warning, $label_color, $color2, $color3, $color4];
        var themeColors2 = [$label_color, $color2, $color3, $color4, $primary, $success, $danger, $warning];
        var barChartctx = $("#bar-chart");

        // Chart Options
        var barchartOptions = {
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each bar to be 2px wide
            elements: {
                rectangle: {
                    borderWidth: 2,
                    borderSkipped: "left",
                },
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    stacked: true,
                    display: true,
                    gridLines: {
                        color: grid_line_color,
                    },
                    scaleLabel: {
                        display: true,
                    },
                }, ],
                yAxes: [{
                    stacked: false,
                    display: true,
                    gridLines: {
                        color: grid_line_color,
                    },
                    scaleLabel: {
                        display: true,
                    },
                }, ],
            },
            title: {
                display: true,
                text: "Grafik Siswa Per-Kelas Tahun <?= $tahun_sedang_aktif; ?>",
            },
        };

        // Chart Data
        var barchartData = {
            labels: [<?= $kelas; ?>],
            datasets: [{
                label: "Laki-Laki",
                data: [<?= $jumlah_laki; ?>],
                backgroundColor: themeColors,
                borderColor: "transparent",
            }, {
                label: 'Perempuan',
                data: [<?= $jumlah_perempuan; ?>],
                backgroundColor: themeColors,
                borderColor: "transparent",
            }, {
                label: 'Total',
                data: [<?= $total; ?>],
                backgroundColor: themeColors,
                borderColor: "transparent",
            }],
        };

        var barChartconfig = {
            type: "bar",

            // Chart Options
            options: barchartOptions,

            data: barchartData,
        };

        // Create the chart
        var barChart = new Chart(barChartctx, barChartconfig);
    });
</script>