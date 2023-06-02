<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/detail/program.css') ?>" />
</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>

    <div class="container">
        <div class="route d-flex gap-2 py-4">
            <a href="" class="d-flex gap-3">
                <i class="ri-arrow-left-line"></i>
                <p><strong>Kembali</strong></p>
            </a>
        </div>
        <div class="card card-kbc p-4">
            <h6>Training</h6>
            <h6>Transformasi Dimulai Dari Pemimpin</h6>
            <p>3 Mei - 26 Juli 2023</p>
            <span class="d-flex flex-row-reverse">Rp. 500.000 </span>
        </div>

        <div class="form-input">
            <div class="pt-4 pb-3">
                <p class="m-0">Nama</p>
                <span>Gunakan nama yang tertera di KTP/Paspor</span>
            </div>
            <input class="log-input" type="text" placeholder="Masukkan Nama">
        </div>
        <div class="form-input">
            <div class="pt-4 pb-3">
                <p class="m-0">Email</p>
                <span>Bukti pembayaran akan dikirimkan ke email</span>
            </div>
            <input class="log-input" type="text" placeholder="Masukkan Email">
        </div>
        <div class="form-input">
            <p class="m-0 pt-4 pb-3">Nomer Handphone</p>
            <input class="log-input" type="text" placeholder="Masukkan Nomer Handphone">
        </div>
        <div class="py-4">
            <h6>Detail Harga</h6>
            <div class="d-flex justify-content-between">
                <p>Subtotal</p>
                <p>Rp 12.000</p>
            </div>
            <div class="d-flex justify-content-between">
                <p>Biaya Layanan</p>
                <p>Rp 12.000</p>
            </div>
            <hr class="line m-0">
            <div class="d-flex justify-content-between pt-3">
                <p>Total Bayar</p>
                <p>Rp 12.000</p>
            </div>
        </div>
        <div class="div d-flex justify-content-center mb-5">
            <a href="<?php echo site_url() . 'pembayaran' ?>">
                <button class="log-primary-button ">Lanjutkan Pembayaran</button>
            </a>
        </div>
    </div>

    <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>