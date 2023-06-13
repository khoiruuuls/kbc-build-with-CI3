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
                        <div class="m-2 col-md col-xs-12">
                            <div class="d-flex gap-3">
                                <i class="ri-calendar-check-fill"></i>
                                <p class="m-0">Jumlah Program</p>
                            </div>
                            <span>7 Program Ditawarkan</span>
                        </div>
                        <div class="m-2 col-md col-xs-12">
                            <div class="d-flex gap-3">
                                <i class="ri-group-fill"></i>
                                <p class="m-0">Jumlah Klien</p>
                            </div>
                            <span><?php echo $item->jumlah_client ?> Klien</span>
                        </div>
                        <div class="m-2 col-md col-xs-12">
                            <div class="d-flex gap-3">
                                <i class="ri-briefcase-fill"></i>
                                <p class="m-0">Pengalaman</p>
                            </div>
                            <span>10+ Tahun Pengalaman</span>
                        </div>
                        <div class="m-2 col-md col-xs-12">
                            <div class="d-flex gap-3">
                                <i class="ri-star-fill"></i>
                                <p class="m-0">Rata rata rating</p>

                            </div>
                            <span>4,9 dari 5,0</span>
                        </div>
                        <div class="m-2 col-md col-xs-12">
                            <div class="d-flex gap-3">
                                <i class="ri-message-2-fill"></i>
                                <p class="m-0">Jumlah Ulasan</p>
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
                        <?php if (!empty($spesialisasis)) : ?>
                            <?php foreach ($spesialisasis as $item) : ?>
                                <p class="specialist"><?php echo $item->spesialisasi_name ?></p>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="d-flex flex-column edu-certif justify-content-center">
                                <h6>Spesialisasi tidak ada</h6>
                            </div>
                        <?php endif; ?>

                        <h6>Bahasa</h6>
                        <?php if (!empty($languages)) : ?>
                            <div class="d-flex gap-3">
                                <?php $isFirst = true; ?>
                                <?php foreach ($languages as $language) : ?>
                                    <?php if (!$isFirst) : ?>
                                        <p>.</p> <!-- Separator -->
                                    <?php endif; ?>
                                    <p class="fw-bold"><?php echo $language->bahasa_name ?></p>
                                    <?php $isFirst = false; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php else : ?>
                            <p class="fw-bold">Bahasa tidak ada</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card card-consultant">
                    <h6>Pengalaman</h6>
                    <hr class="line">
                    <div class="row">
                        <?php if (!empty($pengalamans)) : ?>
                            <?php foreach ($pengalamans as $item) : ?>
                                <div class="col-md-6 col-12 mb-4 d-flex gap-3 edu-certif ">
                                    <div class="icon-wrap rounded-circle">
                                        <i class="ri-building-line"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="fw-bold"><?php echo $item->pengalaman_name ?></h6>
                                        <p class="m-0">
                                            <?php
                                            $dateStart = new DateTime($item->date_start);
                                            $dateEnd = new DateTime($item->date_end);

                                            $interval = $dateStart->diff($dateEnd);
                                            $months = ($interval->format('%y') * 12) + $interval->format('%m');

                                            echo date('d F Y', strtotime($item->date_start)) . ' - ' . date('d F Y', strtotime($item->date_end));
                                            echo '<span> (' . $months . ' Bulan)</span>';
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="d-flex flex-column edu-certif justify-content-center">
                                <h6>Sertifikasi tidak ada</h6>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card card-consultant">
                    <h6>Pendidikan dan Sertifikasi</h6>
                    <hr class="line">
                    <div class="row">
                        <?php if (!empty($sertifikasis)) : ?>
                            <?php foreach ($sertifikasis as $item) : ?>
                                <div class="col-md-6 col-12 mb-4 d-flex gap-3 edu-certif ">
                                    <div class="d-flex flex-column edu-certif  justify-content-center">
                                        <h6 class="fw-bold"><?php echo $item->sertifikasi_name ?></h6>
                                        <p class="m-0">
                                            <?php
                                            $dateStart = new DateTime($item->date_start);
                                            $dateEnd = new DateTime($item->date_end);

                                            $interval = $dateStart->diff($dateEnd);
                                            $months = ($interval->format('%y') * 12) + $interval->format('%m');

                                            echo date('d F Y', strtotime($item->date_start)) . ' - ' . date('d F Y', strtotime($item->date_end));
                                            echo '<span> (' . $months . ' Bulan)</span>'; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="d-flex flex-column edu-certif  justify-content-center">
                                <h6>Pendidikan dan Sertifikasi tidak ada</h6>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <h6>Program</h6>
                <div class="card card-consultant">
                    <h6><?php echo 'Program yang ditawarkan (' . $program_count . ')'; ?></h6>
                    <hr class="line">
                    <section id="our-program">
                        <div class="row gy-3">
                            <?php foreach ($programs as $program) : ?>
                                <div class="col-md-4 col-12">
                                    <a href="<?php echo site_url() . 'detail-program/' . $program->id ?>">
                                        <div class="card card-kbc" style="height: 100%">
                                            <img src="<?php echo base_url('assets/img/program/' . $program->photo) ?>" alt="">
                                            <div class="our-program-text">
                                                <span><?= $program->type ?></span>
                                                <h6><?= $program->name ?></h6>
                                                <p><?= date('d M Y', strtotime($program->dateStart)) . " - " . date('d M Y', strtotime($program->dateEnd)) ?>
                                                </p>
                                                <span class="text-capitalize">
                                                    <?php if ($program->priceMin == $program->priceMax) {
                                                        echo "Rp. " . number_format($program->priceMin);
                                                    } else {
                                                        echo "Rp. " . number_format($program->priceMin) . " - " . "Rp." . number_format($program->priceMax);
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