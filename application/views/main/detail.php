<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>


    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/detailconsult.css'); ?>">
</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>
    <?php foreach ($consultant as $item) : ?>
    <section id="header-post">
        <div class="header-post-wrap">
            <div class="container">
                <div class="header-post-box">
                    <div class="route">
                        <p><strong>Beranda</strong></p>
                        <i class="bi bi-chevron-right"></i>
                        <p><strong>Layanan</strong></p>
                        <i class="bi bi-chevron-right"></i>
                        <p><strong>Konsultasi</strong></p>
                        <i class="bi bi-chevron-right"></i>
                        <p><?php echo $item->name ?></p>
                    </div>
                    <div class="consultant-box">
                        <img src="<?php echo base_url('assets/img/consultant/' . $item->photo) ?>" alt="" />
                        <div class="consultant-wrap">
                            <h3><?php echo $item->name ?></h3>
                            <div class="consultant-bar">
                                <a href="https://chat.whatsapp.com/DcqvZrQI7OXKYUqSzcn0iK">
                                    <button class="log-primary-button">
                                        <i class="ri-whatsapp-line fw-normal"></i>
                                        Hubungi WA
                                    </button>
                                </a>
                                <div class="box-icon">
                                    <i class="ri-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="detail" class="section-pb1">
        <div class="container d-grid gap-3">
            <h6>Insight</h6>
            <div class="card card-consultant">
                <h6>Analitik</h6>
                <hr class="line">
                <div class="row">
                    <div class="analytic-item col">
                        <div class="d-flex gap-3">
                            <i class="ri-calendar-check-fill"></i>
                            <p>Jumlah Program</p>
                        </div>
                        <span>7 Program Ditawarkan</span>
                    </div>
                    <div class="analytic-item col">
                        <div class="d-flex gap-3">
                            <i class="ri-group-fill"></i>
                            <p>Jumlah Klien</p>
                        </div>
                        <span><?php echo $item->jumlah_client ?> Klien</span>
                    </div>
                    <div class="analytic-item col">
                        <div class="d-flex gap-3">
                            <i class="ri-briefcase-fill"></i>
                            <p>Pengalaman</p>
                        </div>
                        <span>10+ Tahun Pengalaman</span>
                    </div>
                    <div class="analytic-item col">
                        <div class="d-flex gap-3">
                            <i class="ri-star-fill"></i>
                            <p>Rata rata rating</p>

                        </div>
                        <span>4,9 dari 5,0</span>
                    </div>
                    <div class="analytic-item col">
                        <div class="d-flex gap-3">
                            <i class="ri-message-2-fill"></i>
                            <p>Jumlah Ulasan</p>
                        </div>
                        <span>210 Ulasan</span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center my-2">
                <h6>Curriculum Vitae</h6>
                <button class="log-primary-button ">
                    <i class="ri-download-2-fill fw-normal pe-3"></i>
                    Download CV
                </button>
            </div>
            <div class="card card-consultant ">
                <h6>Profile Konsultan</h6>
                <hr class="line">
                <p class="body-text">
                    <?php echo $item->profile ?>
                </p>
            </div>
            <div class="card card-consultant">
                <h6>Keahlian</h6>
                <hr class="line">
                <div class="sub-card">
                    <h6>Spesialisasi</h6>
                    <p class="specialist">Pemasaran</p>
                    <p class="specialist">Strategi Bisnis</p>
                    <p class="specialist">Teknologi Informasi</p>
                    <p class="specialist">Keuangan</p>
                    <p class="specialist">Sumber Daya Manusia</p>
                    <p class="specialist">Strategi Berkelanjutan</p>
                    <p class="specialist">Operasional & Bisnis</p>
                    <h6>Bahasa</h6>
                    <p class="fw-bold"><?php echo $item->bahasa ?></p>
                </div>
            </div>
            <div class="card card-consultant">
                <h6>Pengalaman</h6>
                <hr class="line">
                <div class="row">
                    <div class="col-6  mb-4 d-flex gap-3 edu-certif ">
                        <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                        <div class="d-flex flex-column justify-content-center">
                            <h6>Bank Indonesia</h6>
                            <p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
                        </div>
                    </div>
                    <div class="col-6  mb-4 d-flex gap-3 edu-certif ">
                        <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                        <div class="d-flex flex-column justify-content-center">
                            <h6>Bank Indonesia</h6>
                            <p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
                        </div>
                    </div>
                    <div class="col-6  mb-4 d-flex gap-3 edu-certif ">
                        <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                        <div class="d-flex flex-column justify-content-center">
                            <h6>Bank Indonesia</h6>
                            <p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-consultant">
                <h6>Pendidikan dan Sertifikasi</h6>
                <hr class="line">
                <div class="row">
                    <div class="col-6  mb-4 d-flex gap-3 edu-certif ">
                        <div class="d-flex flex-column edu-certif  justify-content-center">
                            <h6>Master of Technology Education</h6>
                            <p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
                        </div>
                    </div>
                    <div class="col-6  mb-4 d-flex gap-3 edu-certif ">
                        <div class="d-flex flex-column justify-content-center">
                            <h6>Certified Behavioral Analyst</h6>
                            <p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
                        </div>
                    </div>
                    <div class="col-6  mb-4 d-flex gap-3 edu-certif ">
                        <div class="d-flex flex-column justify-content-center">
                            <h6>Master Trainer - Future Digital Skills Certification</h6>
                            <p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
                        </div>
                    </div>
                    <div class="col-6  mb-4 d-flex gap-3 edu-certif ">
                        <div class="d-flex flex-column justify-content-center">
                            <h6>Human Capital Strategy</h6>
                            <p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <h6>Program</h6>
            <div class="card card-consultant">
                <h6>Program yang ditawarkan (7)</h6>
                <hr class="line">
                <section id="our-program">
                    <div class="row gy-3">
                        <?php foreach ($program as $item) : ?>
                        <div class="col-md-4 col-12">
                            <a href="<?php echo site_url() . 'detail-program/' . $item->id ?>">
                                <div class="card card-kbc" style="height: 100%">
                                    <img src="<?php echo base_url('assets/img/program/' . $item->photo) ?>" alt="">
                                    <div class="our-program-text">
                                        <span><?= $item->type ?></span>
                                        <h6><?= $item->name ?></h6>
                                        <p><?= date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
                                        </p>
                                        <span class="text-capitalize">
                                            <?php if ($item->priceMin == $item->priceMax) {
                                                        echo "Rp. " . number_format($item->priceMin);
                                                    } else {
                                                        echo "Rp. " . number_format($item->priceMin) . " - " . "Rp." . number_format($item->priceMax);
                                                    }
                                                    ?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>

            <h6>Penilaian</h6>
            <div class="card card-consultant">
                <h6>Ulasan Klien (210)</h6>
                <hr class="line">
                <div class="mb-4 title-box">
                    <div>
                        <p class="m-0">Rata - rata rating</p>
                        <div class="star-user">
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                            <i class="ri-star-fill"></i>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="">Lihat semua komentar</a>
                </div>
                <div class="card card-consultant d-flex flex-row align-items-start gap-4">
                    <img class="user-img" src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                    <div>
                        <div class="mb-3 ">
                            <div>
                                <p class="m-0">Adrian Yahya</p>
                                <div class="star-user">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <i class="ri-star-fill"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <p class="body-text">
                            Ahli bisnis yang luar biasa! Anda telah membantu kami mengidentifikasi peluang pertumbuhan
                            yang
                            sebelumnya tidak kami sadari. Pengelolaan proyek Anda yang efektif dan saran yang berharga
                            telah
                            membawa perubahan positif dalam operasional perusahaan kami. Kami sangat menghargai kerja
                            sama
                            kita!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php endforeach; ?>
    <?php $this->load->view("_partials/footer.php") ?>
</body>

</html>