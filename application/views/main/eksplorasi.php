<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/program.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/khoirul.css'); ?>">
</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>

    <?php $this->load->view("_partials/sub-header.php") ?>


    <section id="our-program">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 filter-box stiky">
                    <div class="filter-top">
                        <div class="filter-title filter-display">
                            <i class="ri-equalizer-line"></i>
                            <h6>Filter</h6>
                        </div>
                        <div class="filter-sub">
                            <div class="accordion">
                                <div class="accordion-text">
                                    <ul class="faq-text">
                                        <li>
                                            <div class="question-arrow active">
                                                <span class="question" style="color: var(--black-color)">Tipe
                                                    Program</span>
                                                <i class="ri-arrow-up-s-fill arrow"></i>
                                            </div>
                                            <p>Consulting</p>
                                            <hr class="line">
                                        </li>
                                        <li>
                                            <div class="question-arrow">
                                                <span class="question" style="color: var(--black-color)">Pelaksanaan
                                                    Program</span>
                                                <i class="ri-arrow-up-s-fill arrow"></i>
                                            </div>
                                            <p class="body-text">
                                                JavaScript is a text-based programming
                                                language used both on the client-side and
                                                server-side that allows you to make web pages
                                                interactive
                                            </p>
                                            <hr class="line">
                                        </li>
                                        <li>
                                            <div class="question-arrow">
                                                <span class="question" style="color: var(--black-color)">Kategori
                                                    Topik</span>
                                                <i class="ri-arrow-up-s-fill arrow"></i>
                                            </div>
                                            <p class="body-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Rerum, labore.
                                            </p>
                                            <hr class="line">
                                        </li>
                                        <li>
                                            <div class="question-arrow">
                                                <span class="question" style="color: var(--black-color)">Waktu
                                                    Pelaksanaan</span>
                                                <i class="ri-arrow-up-s-fill arrow"></i>
                                            </div>
                                            <p class="body-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Saepe, repudiandae!
                                            </p>
                                            <hr class="line">
                                        </li>
                                        <li>
                                            <div class="question-arrow">
                                                <span class="question" style="color: var(--black-color)">Harga</span>
                                                <i class="ri-arrow-up-s-fill arrow"></i>
                                            </div>
                                            <p class="body-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Saepe, repudiandae!
                                            </p>
                                            <hr class="line">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-button">
                        <button class="log-secondary-button filter-btn">
                            Reset
                        </button>
                        <button class="log-primary-button filter-btn">
                            Terapkan
                        </button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                        <div class="header-card">
                            <p>Menampilkan 9 dari 89 Program</p>
                            <p>Urutkan Berdasarkan Waktu</p>
                        </div>
                        <div class="row gy-3">
                            <?php foreach ($program as $item) : ?>
                                <div class="col-md-4">
                                    <a href="<?php echo 'detail-program/' . $item->id ?>">
                                        <div class="card card-kbc">
                                            <img class="img-pr object-fit-sm-contain" src="<?php echo base_url('assets/img/program/' . $item->photo) ?>" alt="">
                                            <div class="our-program-text">
                                                <span><?= $item->type ?></span>
                                                <h6 style="height: 60px"><?= $item->name ?></h6>
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
                    <?php $this->load->view('_partials/pagination.php') ?>
                </div>
            </div>
        </div>
    </section>




    <?php $this->load->view("_partials/footer.php") ?>
</body>

</html>