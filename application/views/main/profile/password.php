<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php') ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user-profile.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">
</head>

<body>
    <section id="user-profile">
        <div class="container-fluid">
            <div class="row user-container">
                <?php $this->load->view('_partials/navbar.php') ?>
                <div class="col-md-3 col-12 user-box bg-slide">
                    <?php $this->load->view('_partials/sidebar.php') ?>
                </div>

                <div class="col-md-9 col-12">
                    <div class="container section-pb1">
                        <div class="user-header">
                            <h4>Ubah Kata Sandi</h4>
                        </div>
                        <!-- <?php var_dump($user) ?> -->
                        <form action="<?= base_url() . 'profile/password ' ?>" method="post">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <input type="hidden" name="password_asli" value="<?= $user['password'] ?>">

                            <div class="form-input">
                                <p class="input-label" for="current_password">Kata Sandi Saat Ini</p>
                                <input class="log-input" type="password" name="old_password" required>
                            </div>
                            <div class="d-flex flex-row-reverse"><a href="" class=" fw-bold">Lupa password?</a></div>
                            <div class="form-input">
                                <p class="input-label" for="new_password">Kata Sandi Baru</p>
                                <input class="log-input" type="password" name="password" required>
                            </div>
                            <div class="form-input">
                                <p class="input-label" for="confirm_password">Konfirmasi Kata Sandi Baru</p>
                                <input class="log-input" type="password" name="konfirmasi" required>
                            </div>

                            <button class="submit log-primary-button mt-5" name="submit">Konfimasi</button>
                        </form>

                    </div>
                </div>
                <?php $this->load->view('_partials/footer.php') ?>
            </div>
        </div>
    </section>
</body>

</html>