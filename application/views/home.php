<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/' . $page_title . '.css'); ?>">

</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>

    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="headline">
                        <h3>Bisnis anda siap</h3>
                        <h3>untuk <strong>Shifting Up</strong> ?</h3>
                        <div class="text-hero">
                            <p class="body-text">
                                Mengoptimalkan Potensi Bisnis Anda dengan Konsultan Profesional dalam Menghadapi Tantangan Bisnis Kompleks
                            </p>
                            <button class="primary-button">
                                Eksplore Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container-home">
                        <svg class="background-svg" width="463" height="460" viewBox="0 0 463 460" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M177.945 458.417C171.023 460.192 163.681 458.14 158.683 453.034L6.51009 297.568C1.51196 292.462 -0.382341 285.077 1.54077 278.196L60.0913 68.6778C62.0145 61.7962 67.4628 56.4632 74.384 54.6878L285.107 0.635221C292.028 -1.14016 299.371 0.911775 304.369 6.01806L456.542 161.483C461.54 166.59 463.434 173.974 461.511 180.856L402.96 390.374C401.037 397.256 395.589 402.589 388.668 404.364L177.945 458.417Z" fill="url(#paint0_linear_4136_49434)" />
                            <defs>
                                <linearGradient id="paint0_linear_4136_49434" x1="-225.944" y1="648.545" x2="438.654" y2="4.54967" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#BE8511" />
                                    <stop offset="1" stop-color="#BE8511" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <!-- <img class="image" src="img/hero.png" alt="Gambar"> -->
                        <img class="image" src="<?php echo base_url('assets/img/hero.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="home">
        <img src="<?php echo base_url('assets/img/home.jpg') ?>" alt="">
        <div class="headline">
            <h3>Bisnis anda siap</h3>
            <h3>untuk <strong>Shifting Up</strong> ?</h3>
            <div class="text-hero">
                <p class="body-text">
                    Anda dapat belajar langsung dari para professional di industri teknologi, dan juga banyak aktifitas seru yang bisa kamu ikuti.
                </p>
                <button class="primary-button">
                    Eksplore Sekarang
                </button>
            </div>
        </div>
    </section> -->

    <!-- <section id="partnerku" class="section-pb1">
        <div class="container">
            <div class="list-partner my-3">
                <?php for ($i = 1; $i <= 8; $i++) { ?>
                    <img src="<?php echo base_url('assets/img/partner/partner (' . $i . ').jpg') ?>" alt="">
                <?php } ?>
            </div>
        </div>
    </section> -->


    <section id="about-us">
        <div class="container">
            <div class="row display-default my-5">
                <div class="col-md-6 col-12">
                    <iframe class="frame" src="https://www.youtube.com/embed/Vrl5dYPf82E" allowfullscreen></iframe>
                </div>
                <div class="col">
                    <div class="my-3">
                        <span>Tentang Kami</span>
                        <h6 class="body-text mt-3">Who We Are?</h6>
                    </div>
                    <p class="body-text">Kingdom Business Community (KBC) adalah sebuah gerakan moral dalam dunia kerja
                        berbentuk yayasan niralaba dengan fokus untuk memiliki ‘transformasi pola pikir’ dalam melakukan
                        Bisnis / Pekerjaan dengan Tujuan yang Mulia (tidak hanya orientasi profit) dan mempraktekkan
                        nilai spritual dalam bekerja.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="visi-misi">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box-visi-misi">
                        <div id="title-visi">
                            <div class="line-visi"></div>
                            <h6>Visi</h6>
                        </div>
                        <div id="text-visi">
                            <p>Komunias Dunia Usaha yang Berpusatkan Allah (A God Centered Marketplace Community)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div id="title-misi">
                        <div class="line-misi"></div>
                        <h6>Misi</h6>
                    </div>
                    <div id="text-misi">
                        <p>KBC Build berkomitmen untuk membangun <strong>komunitas bisnis kerajaan</strong> yang:</p>
                        <div class="text-misi-role1">
                            <div class="number">
                                <p>1</p>
                            </div>
                            <div class="text-number">
                                <p class="number-bold">Grow In Truth</p>
                                <p>Kuat dalam Firman </p>
                            </div>
                        </div>
                        <div class="text-misi-role2">
                            <div class="number">
                                <p>2</p>
                            </div>
                            <div class="text-number">
                                <p class="number-bold">Grow In Competence</p>
                                <p>Ahli dalam Bisnis </p>
                            </div>
                        </div>
                        <div class="text-misi-role3">
                            <div class="number">
                                <p>3</p>
                            </div>
                            <div class="text-number">
                                <p class="number-bold">Grow In Care</p>
                                <p>Menjadi Berkat (Peduli) </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="<?php echo base_url('assets/img/visi-misi.png') ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="our-service" class="section-pb1">
        <div class="container my-5">
            <div class="my-5">
                <span>Layanan Kami</span>
                <h6 class="mt-3">Konsultan di Build dapat Menolong Anda Untuk</h6>
                <h6>Meningkatkan Perfoma Bisnis Anda</h6>
            </div>
            <div class="row gy-4">
                <?php foreach ($service as $item) : ?>
                    <div class="col-md-4 col-12">
                        <div class="card-our-service">
                            <div class="icon-frame">
                                <i class="<?php echo $item->icon ?>"></i>
                            </div>
                            <div class="text-group">
                                <h6><?= $item->title ?></h6>
                                <p class="body-text">
                                    <?= $item->description ?>
                                </p>
                            </div>
                            <button class="log-secondary-button">
                                Eksplor Lebih Lengkap
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="our-consultant" class="section-p1">
        <div class="container my-5">
            <div class="my-5 title-box">
                <div>
                    <span>Konsultan Kami</span>
                    <h6 class="mt-3">Konsultasikan Keluhan Anda pada Kami! Anda Dapat </h6>
                    <h6>Berdiskusi & Sharing Terkait Hal yang Belum Anda Ketahui.</h6>
                </div>
                <a href="<?php echo site_url('./consultation') ?>">
                    <p class="detail-text">Lihat Semua Konsultan</p>
                </a>
            </div>
            <div class="row our-gap display-default">
                <div class="consultant-icon">
                    <div class="box-icon">
                        <i class="ri-arrow-left-line"></i>
                    </div>
                    <div class="box-icon">
                        <i class="ri-arrow-right-line"></i>
                    </div>
                </div>
                <?php foreach ($consultant as $item) : ?>
                    <div class="col">
                        <div class="card card-our-consultant">
                            <a href="<?php echo 'detail-consultant/' . $item->id ?>" class="d-flex flex-column align-items-center justify-content-center">
                                <img src="<?php echo base_url('assets/img/consultant/' . $item->photo) ?>" alt="">
                                <h6 class="pt-2"><?php echo $item->name ?></h6>
                                <p class=""><?php echo $item->profesi ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="tobe-consultant">
        <div class="title-box">
            <img src="<?php echo base_url('assets/img/tobe-consultant.jpg') ?>" alt="">
            <div class="container tobe-consultant-box">
                <div class="col-md-5">
                    <h5>Bergabung Menjadi Konsultan?</h5>
                    <div class="text-hero mt-3">
                        <p class="body-text">
                            Dengan bergabung di Build, anda memiliki kesempatan untuk
                            berkontribusi terhadap bisnis pelanggan kami. Gabung sekarang dan jadilah bagian dari tim ahli Build
                        </p>
                    </div>
                    <a href="https://bit.ly/ProfilKonsultanBuild">
                        <button class="primary-button mt-3">Daftar Konsultan</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="our-program">
        <div class="container my-5">
            <div class="my-5 title-box">
                <div>
                    <span>Program kami</span>
                    <h6 class="mt-3">Temukan Program yang Tepat dalam Membantu Anda</h6>
                    <h6> Mencapai Tujuan Bisnis dengan Lebih Efektif.</h6>
                </div>
                <a href="<?php echo site_url('./eksplorasi') ?>">
                    <p class="detail-text">Lihat Selengkapnya</p>
                </a>
            </div>
            <div class="row gy-3">
                <?php foreach ($program as $item) : ?>
                    <div class="col-md-3 col">
                        <a href="<?php echo 'detail-program/' . $item->id ?>">
                            <div class="card card-kbc">
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
        </div>
    </section>

    <section id="testimoni">
        <div class="layer">
            <img src="<?php echo base_url('assets/img/testimoni.jpg') ?>" alt="">
        </div>
        <div class="container testimoni-box">
            <div class="my-5 text-white">
                <span class="text-uppercase text-white">Testimoni</span>
                <h6 class="mt-3">Kesan Setelah Join Menggunakan KBC Build</h6>
            </div>
            <div class="row gx-4 gy-4">
                <div class="card card-testimoni col-md-4">
                    <img src="<?php echo base_url('assets/img/svg/double-quote.svg') ?>" alt="">
                    <div class="testimoni-text text-gap">
                        <p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan
                            bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang
                            dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi
                            siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/testimoni/testimoni1.png') ?>" alt="">
                            <div class="box-user">
                                <p>Adrian Yahya</p>
                                <div class="star-user">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <i class="ri-star-fill"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-testimoni col-md-4">
                    <img src="<?php echo base_url('assets/img/svg/double-quote.svg') ?>" alt="">
                    <div class="testimoni-text text-gap">
                        <p class="body-text">Saya sangat senang telah menghadiri event konsultasi bisnis ini. Para ahli yang mengisi acara ini sangat ramah, mereka memberikan saran dan solusi untuk masalah bisnis saya. Saya belajar banyak dari diskusi dan sharing pengalaman dari peserta lainnya juga. Event ini sangat bermanfaat dan saya sangat merekomendasikannya.</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/testimoni/testimoni2.png') ?>" alt="">
                            <div class="box-user">
                                <p>Aleesha Indira</p>
                                <div class="star-user">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <i class="ri-star-fill"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-testimoni col-md-4">
                    <img src="<?php echo base_url('assets/img/svg/double-quote.svg') ?>" alt="">
                    <div class="testimoni-text text-gap">
                        <p class="body-text">Saya belajar banyak tentang manajemen keuangan dan strategi bisnis yang dapat membantu bisnis saya tumbuh dan berkembang. Para pembicara sangat berpengetahuan dan banyak memberikan banyak contoh nyata dalam pengalaman mereka sendiri. Event ini sangat bermanfaat dan saya sangat merekomendasikannya.</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/testimoni/testimoni3.png') ?>" alt="">
                            <div class="box-user">
                                <p>Dean Robert</p>
                                <div class="star-user">
                                    <?php for ($i = 0; $i < 4; $i++) { ?>
                                        <i class="ri-star-fill"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container my-5">
            <div class="my-3">
                <span>Blog & Artikel</span>
                <h6 class="mt-3">Informasi Terbaru Tentang Produk dan Layanan Kami</h6>
                <h6>untuk Memenuhi Kebutuhan Bisnis Anda.</h6>
            </div>
            <div class="row display-default my-5">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/img/blog/headline-blog.jpg') ?>" alt="" class="img-fluid">

                </div>
                <div class="col-md-6">
                    <p>23 Juni - 30 Juli 2023</p>
                    <h6 class="body-text">Merancang Strategi Kebenaran: Kisah Stanley</h6>
                    <p class="body-text">Namanya mudah diingat orang, Stanley. Pendidikannya mudah dilupakan orang,
                        lulusan Sekolah Menengah Kejuruan. Perawakannya mudah dilecehkan, karena kurus, pendek dan tidak
                        menunjukkan profil 'macho' sehingga dikejar para gadis. Namun gaya bicara dan semangatnya tak
                        mudah diikuti orang karena termasuk manusia luar biasa.</p>
                    <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="row gy-4">
                <?php foreach ($service as $item) : ?>
                    <div class="col-md-4 col-12">
                        <div class="card-our-service">
                            <img class="w-100" src="<?php echo base_url('assets/img/blog/blog (1).jpg') ?>" alt="">
                            <div class="p-4">
                                <div class="text-group">
                                    <p>23 Juni - 30 Juli 2023</p>
                                    <h6 class="title">Transformasi Dimulai Dari Pemimpin</h6>
                                    <p class="body-text">
                                        Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun, ia
                                        berketetapan hati kembali ke Indonesia pada tahun 1996.
                                    </p>
                                </div>
                                <a class="title-home" href="#">
                                    Eksplor Lebih Lengkap
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- <div class="row gx-5">
                <div class="card card-blog col-md-4">
                    <img src="<?php echo base_url('assets/img/blog/blog (1).jpg') ?>" alt="">
                    <div class="blog-text">
                        <p>23 Juni - 30 Juli 2023</p>
                        <h6>Transformasi Dimulai Dari Pemimpin</h6>
                        <p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun,
                            ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
                        <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card card-blog col-md-4">
                    <img src="<?php echo base_url('assets/img/blog/blog (2).jpg') ?>" alt="">
                    <div class="blog-text">
                        <p>23 Juni - 30 Juli 2023</p>
                        <h6>Kingdom Financial for Kids Program</h6>
                        <p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun,
                            ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
                        <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card card-blog col-md-4">
                    <img src="<?php echo base_url('assets/img/blog/blog (3).jpg') ?>" alt="">
                    <div class="blog-text">
                        <p>23 Juni - 30 Juli 2023</p>
                        <h6>Shifting Up: Transforming Your Business</h6>
                        <p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun,
                            ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
                        <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- <section class="section-pb1">
        <div class="container my-5">
            <div class="my-5">
                <span class="title-home">Testimoni</span>
                <h6 class="mt-3">Tim Kami Bekerja Sama Untuk Merancang Strategi</h6>
                <h6>yang Tepat Guna Meningkatkan Performa Bisnis Anda.</h6>
            </div>
            <div class="row gy-4">
                <?php foreach ($service as $item) : ?>
                <div class="col-md-4 col-12">
                    <div class="card-our-service">
                        <img class="w-100" src="<?php echo base_url('assets/img/blog/blog (1).jpg') ?>" alt="">
                        <div class="p-4">
                            <div class="text-group">
                                <p>23 Juni - 30 Juli 2023</p>
                                <h6 class="title">Transformasi Dimulai Dari Pemimpin</h6>
                                <p class="body-text">
                                    Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun, ia
                                    berketetapan hati kembali ke Indonesia pada tahun 1996.
                                </p>
                            </div>
                            <a class="title-home" href="#">
                                Eksplor Lebih Lengkap
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section> -->


    <?php $this->load->view("_partials/footer.php") ?>
</body>

</html>