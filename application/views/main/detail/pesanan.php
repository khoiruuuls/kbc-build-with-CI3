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

        <?php foreach ($program as $item) : ?>
            <div class="card card-kbc p-4">
                <h6><?php echo $item->type ?></h6>
                <h6><?php echo $item->name ?></h6>
                <p>3 Mei - 26 Juli 2023</p>
                <span class="d-flex flex-row-reverse">
                    <?php if ($item->priceMin == $item->priceMax) {
                        echo "Rp. " . number_format($item->priceMin);
                    } else {
                        echo "Rp. " . number_format($item->priceMin) . " - " . "Rp." . number_format($item->priceMax);
                    }
                    ?>
                </span>
            </div>

            <div class="form-input">
                <div class="pt-4 pb-3">
                    <p class="m-0">Nama</p>
                    <span>Gunakan nama yang tertera di KTP/Paspor</span>
                </div>
                <input value="<?php echo $user['name'] ?>" class="log-input" type="text" placeholder="Masukkan Nama">
            </div>
            <div class="form-input">
                <div class="pt-4 pb-3">
                    <p class="m-0">Email</p>
                    <span>Bukti pembayaran akan dikirimkan ke email</span>
                </div>
                <input value="<?php echo $user['email'] ?>" class="log-input" type="text" placeholder="Masukkan Email">
            </div>
            <div class="form-input">
                <p class="m-0 pt-4 pb-3">Nomer Handphone</p>
                <input value="<?php echo $user['no'] ?>" class="log-input" type="text" placeholder="Masukkan Nomer Handphone">
            </div>
            <div class="py-4">
                <h6>Detail Harga</h6>
                <div class="d-flex justify-content-between">
                    <p>Subtotal</p>
                    <p>
                        <?php if ($item->priceMin == $item->priceMax) {
                            echo "Rp. " . number_format($item->priceMin);
                        } else {
                            echo "Rp. " . number_format($item->priceMin) . " - " . "Rp." . number_format($item->priceMax);
                        }
                        ?>
                    </p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Biaya Layanan</p>
                    <p>Rp 12.000</p>
                </div>
                <hr class="line m-0">
                <div class="d-flex justify-content-between pt-3">
                    <p>Total Bayar</p>
                    <p>
                        <?php if ($item->priceMin == $item->priceMax) {
                            echo "Rp. " . number_format($item->priceMin + 12000);
                        } else {
                            echo "Rp. " . number_format($item->priceMin + $item->priceMax +  12000);
                        }
                        ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="div d-flex justify-content-center mb-5">
            <a href="<?php echo site_url() . 'pembayaran/' . $item->id ?>">
                <button class="log-primary-button ">Lanjutkan Pembayaran</button>
            </a>
        </div>
    </div>

    <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>