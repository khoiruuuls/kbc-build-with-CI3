<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>


    <!-- CUSTOM CSS -->
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <link rel="stylesheet" href="./assets/css/consultation.css">
</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>

    <?php $this->load->view("_partials/sub-header.php") ?>

    <section id="category">
        <div class="container">
            <h4>Category Topics</h4>
            <div class="sub-category justify-content-start">
                <ul>
                    <li class="active">Semua</li>
                    <li>UMKM</li>
                    <li>Pemasaran</li>
                    <li>Keuangan</li>
                    <li>Pelanggan</li>
                    <li>Data</li>
                </ul>
            </div>

            <div class="row">
                <?php foreach ($consultant as $item) : ?>
                <a href="<?php echo 'detail-consultant/' . $item->id ?>" class="col-6 col-sm-12 col-lg-6">
                    <div class="card-consultation">
                        <div class="img">
                            <img src="<?php echo base_url('assets/img/consultant/' . $item->photo) ?>" alt="" />
                        </div>
                        <div class="text-card">
                            <div class="mentor-detail">
                                <div class="mentor-name">
                                    <h6><?php echo $item->name ?></h6>
                                    <div class="star-user">
                                        <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <i class="ri-star-fill"></i>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="box-icon">
                                    <i class="ri-bookmark-line"></i>
                                </div>
                            </div>
                            <div class="mentor-name">
                                <div class="d-flex align-items-center gap-3 my-2">
                                    <i class="ri-user-2-fill"></i>
                                    <p class="m-0">Bidang Keahlian</p>
                                </div>
                                <p class="text-property m-0"><?php echo $item->profesi ?></p>
                                <div class="d-flex align-items-center gap-3 my-2">
                                    <i class="ri-calendar-check-fill"></i>
                                    <p class="m-0">Program</p>
                                </div>
                                <p class="m-0">7 Program yang ditawarkan</p>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
    </section>

    <?php $this->load->view('_partials/pagination.php') ?>

    <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>