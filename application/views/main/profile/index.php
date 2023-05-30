<?php

if (!empty($user['date'])) {
    $timestamp = strtotime($user['date']);
    $tahun = date('Y', $timestamp);
    $bulan = date('m', $timestamp);
    $hari = date('d', $timestamp);
} else {
    $tahun = '';
    $bulan = '';
    $hari = '';
}



?>

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
                <div class="col-3 user-box bg-slide">
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
                        <!-- <?php var_dump($user) ?> -->
                        <form method="post" action="<?= base_url() . 'profile/index' ?>">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <div class="form-input">
                                <p class="input-label" for="name">Name</p>
                                <input class="log-input" type="text" name="name" value="<?= $user['name']  ?>">
                                <?= form_error('name', '<p tyle="color:red;">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p class="input-label" for="email">Email</p>
                                <input class="log-input" type="email" name="email" value="<?= $user['email'] ?>">
                                <?= form_error('email', '<p style="color:red;">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p class="input-label" for="phone">Nomor whatsApp</p>
                                <input class="log-input" type="number" value="<?= $user['no'] ?>" name="no" required><br><br>
                            </div>

                            <div class="form-input">
                                <p class="input-label" style="width: 20%" for="jenis_kelamin">Jenis kelamin</p>
                                <div class="d-flex align-items-center gap-4">
                                    <input type="radio" name="jenis_kelamin" value="pria">
                                    <p for="male">
                                        Pria
                                    </p>
                                    <input type="radio" name="jenis_kelamin" value="wanita">
                                    <p for="female">
                                        Wanita
                                    </p>
                                </div>
                            </div>

                            <div class="form-input">
                                <p class="input-label" style="width: 20%" for="birthdate">Tanggal lahir</p>
                                <div class="d-flex gap-4">
                                    <select class="form-select" name="hari">
                                        <option value="<?= $hari ?>">Day</option>
                                        <?php
                                        for ($day = 1; $day <= 31; $day++) {
                                            echo "<option value=\"$day\">$day</option>";
                                        }
                                        ?>
                                    </select>
                                    <select class="form-select" style="width: 200px;" name="bulan">
                                        <option value="<?= $bulan ?>">Month</option>
                                        <?php
                                        $months = array(
                                            'January', 'February', 'March', 'April', 'May', 'June',
                                            'July', 'August', 'September', 'October', 'November', 'December'
                                        );
                                        foreach ($months as $index => $month) {
                                            $monthNumber = $index + 1;
                                            echo "<option value=\"$monthNumber\">$month</option>";
                                        }
                                        ?>
                                    </select>
                                    <select class="form-select" name="tahun">
                                        <option value="<?= $tahun ?>">Year</option>
                                        <?php
                                        $currentYear = date('Y');
                                        for ($year = $currentYear; $year >= $currentYear - 100; $year--) {
                                            echo "<option value=\"$year\">$year</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <button class="log-primary-button mt-5" type="submit" name="submit">Simpan</button>
                        </form>

                    </div>
                </div>
                <?php $this->load->view('_partials/footer.php') ?>
            </div>
        </div>
    </section>
</body>

</html>