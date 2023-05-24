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
                <div class="col-3 filter-box stiky">
                    <div class="filter-top">
                        <div class="filter-title filter-display">
                            <i class="ri-equalizer-line"></i>
                            <h6>Filter</h6>
                        </div>
                        <div class="filter-sub">
                            <div class="filter-name filter-display">
                                <h6>Tipe Program</h6>
                                <i class="ri-arrow-down-s-fill"></i>
                            </div>
                            <div class="filter-name filter-display">
                                <h6>Tipe Program</h6>
                                <i class="ri-arrow-down-s-fill"></i>
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
                <div class="col">
                    <div class="container-fluid">
                        <div class="header-card">
                            <p>Menampilkan 9 dari 89 Program</p>
                            <p>Urutkan Berdasarkan Waktu</p>
                        </div>
                        <div class="row program-gap-all">
                            <?php foreach ($program as $item) : ?>
                            <a href="<?php echo 'detail-program/' . $item->id ?>">
                                <div class="card card-our-program">
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
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view('_partials/pagination.php') ?>
        </div>
        </div>
        </div>
    </section>




    <?php $this->load->view("_partials/footer.php") ?>
    <script src="./assets/js/main.js"></script>
</body>

</html>