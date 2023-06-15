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

    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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
                </div>
                <div class="col-lg-6">
                    <div class="container-hero">
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
                <h6 class="mt-3">Tim Kami Bekerja Sama Untuk Merancang Strategi</h6>
                <h6>yang Tepat Guna Meningkatkan Performa Bisnis Anda.</h6>
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

    <!-- <section id="our-consultant" class="section-p1">
        <div class="container my-5">
            <div class="my-5 title-box">
                <div>
                    <span>Konsultan Kami</span>
                    <h6 class="mt-3">Para Ahli dalam Bidangnya yang Berdedikasi Untuk </h6>
                    <h6>Memberikan Layanan Terbaik Kepada Anda.</h6>
                </div>
                <a href="<?php echo site_url('./consultation') ?>">
                    <p class="detail-text">Lihat Semua Konsultan</p>
                </a>
            </div>
            <div class="row our-gap display-default">
                <div class="box-icon">
                    <i class="ri-arrow-left-line"></i>
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
                <div class="box-icon">
                    <i class="ri-arrow-right-line"></i>
                </div>
            </div>
        </div>
    </section> -->

    <section id="tobe-consultant">
        <div class="title-box">
            <img src="<?php echo base_url('assets/img/tobe-consultant.jpg') ?>" alt="">
            <div class="container tobe-consultant-box">
                <div class="col-md-6">
                    <h5>Tertarik Bergabung Menjadi Konsultan?</h5>
                    <div class="text-hero mt-3">
                        <p class="body-text">
                            Dengan menjadi konsultan kami, Anda memiliki kesempatan untuk berkontribusi dalam membantu
                            bisnis dan pelanggan kami, serta mengembangkan karir Anda dalam bisnis. Segera bergabung
                            dengan kami dan jadilah bagian dari tim ahli kami yang berdedikasi dan berpengalaman
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

    <section id="help">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title-help">
                        <h6>Perlu Bantuan Memilih Program Sesuai Kebutuhan Bisnis Anda?</h6>
                        <p>Jika Anda memiliki pertanyaan atau memerlukan saran terkait program yang cocok dengan kebutuhan Anda, kami siap membantu. Tim kami dengan senang hati akan memberikan informasi dan panduan yang Anda perlukan.</p>
                    </div>
                    <button class="primary-button">
                        Hubungi Kami
                    </button>
                </div>
                <div class="col-lg-5">
                    <!-- <div id="circle-help">
                        <svg class="background-svg" width="317" height="317" viewBox="0 0 317 317" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="158.501" cy="158.658" r="158.342" fill="#EBC96A" />
                        </svg>
                        <img src="<?php echo base_url('assets/img/help.png') ?>" alt="">
                    </div> -->
                    <div class="blob-ctr">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="80%" id="blobSvg1" filter="blur(0.4px)" style="opacity: 1" transform="rotate(60)">
                            <defs>
                                <linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="
													stop-color: rgb(
														197,
														191,
														191
													);
												"></stop>
                                    <stop offset="100%" style="
													stop-color: rgb(
														87,
														76,
														76
													);
												"></stop>
                                </linearGradient>
                            </defs>
                            <path id="blob" fill="url(#gradient1)" style="opacity: 0.56">
                                <animate attributeName="d" dur="11000ms" repeatCount="indefinite" values="M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M429.79847,339.54154Q392.67727,429.08308,294.97368,455.00137Q197.27008,480.91966,143.94598,403.56786Q90.62188,326.21607,83.52769,246.22992Q76.43351,166.24376,136.8518,92.77008Q197.27008,19.29641,287.1482,55Q377.02632,90.70359,421.97299,170.3518Q466.91966,250,429.79847,339.54154Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z">
                                </animate>
                            </path>
                        </svg>

                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="25%" id="blobSvg2" filter="blur(3.2px)" style="opacity: 1" transform="rotate(60)">
                            <defs>
                                <linearGradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="
													stop-color: rgb(
														197,
														191,
														191
													);
												"></stop>
                                    <stop offset="100%" style="
													stop-color: rgb(
														0,
														0,
														0
													);
												"></stop>
                                </linearGradient>
                            </defs>
                            <path id="S" fill="url(#gradient2)" style="opacity: 0.56">
                                <animate attributeName="d" dur="11000ms" repeatCount="indefinite" values="M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M429.79847,339.54154Q392.67727,429.08308,294.97368,455.00137Q197.27008,480.91966,143.94598,403.56786Q90.62188,326.21607,83.52769,246.22992Q76.43351,166.24376,136.8518,92.77008Q197.27008,19.29641,287.1482,55Q377.02632,90.70359,421.97299,170.3518Q466.91966,250,429.79847,339.54154Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z">
                                </animate>
                            </path>
                        </svg>

                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="40%" id="blobSvg3" filter="blur(3.2px)" style="opacity: 1" transform="rotate(16)">
                            <defs>
                                <linearGradient id="gradient3" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="
													stop-color: rgb(
														139,
														126,
														116
													);
												"></stop>
                                    <stop offset="100%" style="
													stop-color: rgb(
														0,
														0,
														0
													);
												"></stop>
                                </linearGradient>
                            </defs>
                            <path id="blob" fill="url(#gradient3)" style="opacity: 0.28">
                                <animate attributeName="d" dur="10s" repeatCount="indefinite" values="M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z;M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M437.20545,311.82292Q441.89352,373.64584,380.77431,387.66608Q319.65509,401.68633,271.82754,416.34317Q224,431,184.22569,401.27431Q144.45139,371.54861,81.45601,344.74769Q18.46064,317.94676,58.87153,261.64584Q99.28242,205.34491,102.46413,144.38253Q105.64584,83.42014,164.05961,69.5926Q222.47338,55.76506,274.24769,69.97338Q326.02199,84.18171,376.989,109.95139Q427.95601,135.72107,430.23669,192.86053Q432.51737,250,437.20545,311.82292Z;M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z">
                                </animate>
                            </path>
                        </svg>
                        <div class="tagline">
                            <img src="<?php echo base_url('assets/img/help.png') ?>" alt="">
                        </div>
                    </div>
                </div>
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
                <h6 class="mt-3">Apa yang Dikatakan Oleh Klien Kami?</h6>
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
                            <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                            <div class="box-user">
                                <p>Khoirul</p>
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
                        <p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan
                            bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang
                            dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi
                            siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                            <div class="box-user">
                                <p>Khoirul</p>
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
                        <p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan
                            bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang
                            dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi
                            siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                            <div class="box-user">
                                <p>Khoirul</p>
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