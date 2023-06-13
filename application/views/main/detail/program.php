<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/detail/program.css') ?>" />
</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>

    <?php foreach ($program as $item) : ?>
        <div class="container">
            <div class="route d-flex gap-2 py-4">
                <p><strong>Program</strong></p>
                <i class="ri-arrow-right-s-line"></i>
                <p><strong>Training</strong></p>
                <i class="ri-arrow-right-s-line"></i>
                <p>Kepemimpinan</p>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <img class="card-kbc img-program" src="<?php echo base_url('assets/img/program/' . $item->photo) ?>" alt="">
                    <div class="pt-5">
                        <h6 style="color: var(--secondary-color-5)">Profile Konsultan</h6>
                        <hr class="line">
                        <p class="body-text">
                            <?php echo $item->descProgram ?>
                        </p>
                    </div>
                    <div>
                        <h6 style="color: var(--secondary-color-5)">Pendaftaran</h6>
                        <hr class="line">
                        <p class="body-text">
                            Pendaftaran dibuka mulai tanggal 05 Februari hingga 15 April 2023. Pendaftaran yang
                            dilakukan
                            sebelum tanggal 18 Maret 2023 akan mendapatkan potongan harga sebesar 20% (Hanya berlaku
                            untuk
                            yang hybrid).
                        </p>
                    </div>
                    <div>
                        <h6 style="color: var(--secondary-color-5)">Syarat &amp; Ketentuan</h6>
                        <hr class="line">
                        <ul>
                            <li style="list-style-type: disc;">
                                <p class="m-0">
                                    Alumni SS / SSK (Onsite maupun Blended Learning) atau DTS.
                                </p>
                            </li>

                            <li style="list-style-type: disc;">
                                <p class="m-0">
                                    Professional maupun pengusaha yang memiliki tim kerja minimal berjumlah 3 orang.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="sub-card">
                        <h6 style="color: var(--secondary-color-5)">Kata Kunci</h6>
                        <p class="specialist">Pemasaran</p>
                        <p class="specialist">Strategi Bisnis</p>
                        <p class="specialist">Teknologi Informasi</p>
                        <p class="specialist">Keuangan</p>
                    </div>
                </div>
                <div class="col d-flex flex-column gap-4">
                    <div class="card card-kbc p-4 icon">
                        <h6><?php echo $item->name ?></h6>
                        <hr class="line">
                        <div class="d-flex gap-3">
                            <i class="ri-calendar-line"></i>
                            <div class="flex-row">
                                <p class="text-title m-0">Tanggal Program</p>
                                <p><?= date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="ri-time-fill"></i>
                            <div class="flex-row">
                                <p class="text-title m-0">Waktu Program</p>
                                <p>09.00 - 15.00 WIB</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="ri-map-pin-line"></i>
                            <div class="flex-row">
                                <p class="text-title m-0">Pelaksanaan Program</p>
                                <p>Online, Onsite (Bandung, Jawa Barat), Hybrid</p>
                            </div>
                        </div>
                        <hr class="line">
                        <p>Diselenggarakan Oleh</p>
                        <div class="d-flex gap-3 align-items-center">
                            <?php if (!empty($consultants)) : ?>
                                <?php foreach ($consultants as $consultant) : ?>
                                    <a href="<?php echo site_url() . 'detail-consultant/' . $consultant->id ?>">
                                        <div class="d-flex gap-3  align-items-center">
                                            <img class="img-profile" src="<?php echo base_url() . 'assets/img/consultant/' . $consultant->photo ?>"></img>
                                            <div class="flex-column">
                                                <p class="m-0 pb-1 fw-bolder"><?php echo $consultant->name; ?></p>
                                                <div class="d-flex gap-4">
                                                    <div class="  star-user">
                                                        <?php for ($i = 0; $i < 5; $i++) { ?>
                                                            <i class="ri-star-fill"></i>
                                                        <?php } ?>
                                                    </div>
                                                    <p class="m-0">4.9 dari 5.0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <p class="m-0">Tidak Ada</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card card-kbc p-4">
                        <div class="row box-program">
                            <p class="col text-title text-center pb-2 active">Hybrid</p>
                            <p class="col text-title text-center pb-2 disable">Online</p>
                            <p class="col text-title text-center pb-2 disable">Onsite</p>
                        </div>
                        <p class="text-title">Kuota tersisa</p>
                        <p><?php echo $item->kuota ?></p>
                        <p class="text-title">Harga</p>
                        <p class="m-0">
                            <?php if ($item->priceMin == $item->priceMax) {
                                echo "Rp. " . number_format($item->priceMin);
                            } else {
                                echo "Rp. " . number_format($item->priceMin) . " - " . "Rp." . number_format($item->priceMax);
                            }
                            ?>
                        </p>
                        <hr class="line">
                        <div class="d-flex gap-3">
                            <i class="ri-error-warning-line"></i>
                            <p class="body-text">Pendaftaran sebelum tanggal 18 Maret 2023 memperoleh potongan harga
                                sebesar
                                20%!</p>
                        </div>
                        <div class="row justify-content-between">
                            <a class="col-6" href="<?php echo site_url() . 'detail-pesanan' ?>">
                                <button class="col log-secondary-button" style="width: 100%">
                                    <i class="ri-bookmark-line me-2"></i>
                                    Wishlist
                                </button>
                            </a>
                            <a class="col-6" href="<?php echo site_url('pesanan/' . $item->id) ?>">
                                <button class="log-primary-button" style="width: 100%">Daftar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    <?php endforeach; ?>

    <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>