<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user-profile.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">

</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>

    <section id="user-profile">
        <div class="container-fluid">
            <div class="row user-container">
                <div class="col-4 user-box bg-slide">
                    <?php $this->load->view('_partials/sidebar.php') ?>
                </div>
                <div class="col">
                    <div class="container section-pb1">
                        <div class="user-header">
                            <h4>Profile</h4>
                            <p>Silahkan isi data profile anda secara lengkap. Pastikan informasi akurat dan mudah
                                dihubungi
                            </p>
                        </div>

                        <div class="form-input">
                            <p class="input-label">Nama Lengkap</p>
                            <input class="log-input" type="text" placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="form-input">
                            <p class="input-label">Email</p>
                            <input class="log-input" type="text" placeholder="Masukan Email">
                        </div>
                        <div class="form-input">
                            <p class="input-label">Nomer Whatsapp</p>
                            <input class="log-input" type="text" placeholder="Masukan Nomer Whatsapp">
                        </div>
                        <div class="form-input">
                            <p class="input-label">Jenis Kelamin</p>
                            <input class="log-input" type="text" placeholder="Masukan Jenis Kelamin">
                        </div>
                        <div class="form-input">
                            <p class="input-label">Tanggal Lahir</p>
                            <input class="log-input" type="text" placeholder="Masukan Tanggal Lahir">
                        </div>
                        <button class="log-primary-button">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>