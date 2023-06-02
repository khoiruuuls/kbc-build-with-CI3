    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php $this->load->view('_partials/head.php') ?>

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/user-profile.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">
    </head>

    <body>
        <section id="user-profile">
            <div class="container-fluid">
                <div class="row user-container">
                    <?php $this->load->view('_partials/navbar.php') ?>
                    <div class="col-3 user-box bg-slide">
                        <?php $this->load->view('_partials/sidebar.php') ?>
                    </div>

                    <div class="col">
                        <div class="container section-pb1">
                            <div class="user-header">
                                <h4>My Program</h4>
                            </div>

                            <?php if ($program == null) : ?>
                            <p>Belum ada program </p>
                            <?php else : ?>
                            <div class="row gy-3 gx-0">
                                <?php foreach ($program as $item) : ?>
                                <div class="card card-kbc">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="<?php echo base_url() . 'assets/img/program/' . $item->photo ?>"
                                                class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <section id="our-consultant">
                                                    <div class="our-program-text">
                                                        <span><?= $item->type ?></span>
                                                        <h6><?= $item->name ?></h6>
                                                        <p><?= date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
                                                        </p>
                                                        <div class="text-success d-flex gap-3">
                                                            <i class="ri-check-double-line"></i>
                                                            <p class="text-success">
                                                                Sedang Mengikuti
                                                            </p>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                                crossorigin="anonymous"></script>
                        </div>
                    </div>
                    <?php $this->load->view('_partials/footer.php') ?>
                </div>
            </div>
        </section>
    </body>

    </html>