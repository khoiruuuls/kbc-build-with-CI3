<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/consultant.css'); ?>">
</head>

<body>
    <!-- Perubahan Fadli -->
    <!-- Tambah tampilan navbar dan sidebar kedalam dashboard konsultan -->
    <section id="consultant-dashboard">
        <div class="container-fluid">
            <div class="row consultan-container">
                <?php $this->load->view("_partials/navbar_consultant.php") ?>
                <div class="col-3">
                    <?php $this->load->view("_partials/sidebar_consultant.php") ?>
                </div>
                <div class="col">
                    <div class="container-content">
                        <div class="konsultan-header">
                            <h1>Selamat datang <?= $this->session->userdata('name') ?></h1>
                            <p>dashboard consultant</p>
                        </div>
                        <div class="status-content">
                            <h4>Status profile <?= $profile * 10 ?></h4>
                        </div>
                        <div class="program-content">
                            <h1>Program aktif</h1>
                            <h1>0</h1>

                            <h1>Program waiting</h1>
                            <h1>0</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>