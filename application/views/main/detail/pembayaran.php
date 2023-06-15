<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/detail/program.css') ?>" />
    <style>
        .img-bank {
            width: 80px;
            height: 50px;
            align-self: center;
        }

        .img-banner {
            max-height: 345px;
            object-fit: cover;
            object-position: top;
        }
    </style>
</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>
    <?php foreach ($program as $item) : ?>
        <div class="container">
            <div class="row py-5 gap-3">
                <div class="col-md-4">
                    <div class="card card-kbc p-4" style="background-color: var(--secondary-color-1);">
                        <p class="text-center">Sisa waktu pembayaran</p>
                        <div class="card card-kbc p-3 mb-3">
                            <div class="row">
                                <div class="col text-center">
                                    <h6 class="m-0">30</h6>
                                    <p class="m-0">Jam</p>
                                </div>
                                <div class="col text-center">
                                    <h6 class="m-0">30</h6>
                                    <p class="m-0">Menit</p>
                                </div>
                                <div class="col text-center">
                                    <h6 class="m-0">30</h6>
                                    <p class="m-0">Detik</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-center">Selesaikan pembayaranmu sebelum</p>
                        <p class="text-center">Rabu, 10 Mei 2023 12.30 WIB</p>
                        <div class="d-flex flex-column gap-3">
                            <div class="card card-kbc p-4">
                                <img class="img-bank" src="<?php echo base_url() . 'assets/img/bank.png' ?>" alt="">
                                <p>Kode Pesanan</p>
                                <p>SRWP198</p>
                                <p>Nomer Virtual Account</p>
                                <p>9127309128093812</p>
                                <p>Total Pembayaran</p>
                                <h6>Rp. 30.000</h6>
                            </div>
                            <div class="card card-kbc p-3">
                                <div class="d-flex justify-content-between">
                                    <p class="m-0">Petunjuk Pembayaran</p>
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column gap-3">
                        <div class="card card-kbc p-4">
                            <img class="pb-3 img-banner" src="<?php echo base_url() . 'assets/img/program/' . $item->photo ?>" alt="">
                            <h6 class="sub-title m-0"><?php echo $item->type ?></h6>
                            <h6 class="title"><?php echo $item->name ?></h6>
                            <div class="d-flex gap-3">
                                <i class="ri-calendar-line"></i>
                                <p class="m-0"><?php echo $item->dateStart ?></p>
                            </div>
                            <div class="d-flex gap-3">
                                <i class="ri-time-line"></i>
                                <p class="m-0">12.00 - 14.00 WIB</p>
                            </div>
                            <div class="d-flex gap-3">
                                <i class="ri-map-pin-line"></i>
                                <p class="m-0">Online</p>
                            </div>
                        </div>
                        <div class="card card-kbc p-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6>Bagikan Event</h6>
                                    <p class="m-0">Yuk bagikan event ini ke media social mu</p>
                                </div>

                                <div class="social-media">
                                    <button class="btn-social">
                                        <i class="ri-whatsapp-line"></i>
                                    </button>
                                    <button class="btn-social">
                                        <i class="ri-facebook-fill"></i>
                                    </button>
                                    <button class="btn-social">
                                        <i class="ri-instagram-line"></i>
                                    </button>
                                    <button class="btn-social">
                                        <i class="ri-link"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>