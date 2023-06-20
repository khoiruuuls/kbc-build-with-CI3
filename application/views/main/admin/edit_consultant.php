<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/consultant.css'); ?>">

</head>

<body>
    <?php $this->load->view("_partials/navbar_admin.php") ?>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-3 user-box ">
                <?php $this->load->view('_partials/sidebar.php') ?>
            </div>
            <div class="col">
                <div class="container container-consultant">
                    <div class="route d-flex gap-2">
                        <p><strong>Program</strong></p>
                        <i class="ri-arrow-right-s-line"></i>
                        <p><strong>Training</strong></p>
                        <i class="ri-arrow-right-s-line"></i>
                        <p>Kepemimpinan</p>
                    </div>
                    <h4>Edit Konsultan</h3>
                        <p>Photo Profile</p>
                        <form action="<?= base_url() . 'admin/updateConsultant'?>"
                            enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="<?php echo $consultant['id']; ?>">
                            <input type="hidden" name="foto" value="<?= $consultant['photo']; ?>">
                            <div class="form-input">
                                <div class="upload-container">
                                    <div class="header">
                                        <img src="" alt="">
                                        <label for="file" class="footer">
                                            <i class="ri-link"></i>
                                            <p class="m-0">Upload file</p>
                                            <i class="ri-close-fill"></i>
                                        </label>
                                    </div>
                                    <input id="file" name="photo" type="file">
                                </div>
                            </div>
                            <div class="card-consultant">
                                <h6>Informasi Dasar</h6>
                                <div class="form-input">
                                    <p>Nama Lengkap</p>
                                    <input class="log-input" type="text" placeholder="Masukan Nama Lengkap" name="name"
                                        id="" value="<?php echo $consultant['name']; ?>">
                                    <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-input">
                                    <p>Alamat</p>
                                    <textarea class="log-input"  type="text" placeholder="Masukan Alamat Lengkap"
                                        name="alamat" value="<?= $consultant['alamat'] ?>" id=""></textarea>
                                    <?= form_error('alamat', '<p class="text-danger">', '</p>'); ?>
                                </div>
                            </div>
                            <hr class="line">
                            <div class="card-consultant">
                                <h6>Informasi Kontak</h6>
                                <div class="form-input">
                                    <p>Email</p>
                                    <input class="log-input" type="text" placeholder="Masukan Email" name="email" id=""
                                        value="<?php echo $consultant['email']; ?>">
                                    <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-input">
                                    <p>Nomer Whatsapp</p>
                                    <input class="log-input" type="text" placeholder="Masukan Nomer Whatsapp"
                                        name="no_handphone" id="" value="<?php echo $consultant['no_handphone']; ?>">
                                    <?= form_error('no_handphone', '<p class="text-danger">', '</p>'); ?>
                                </div>
                            </div>
                            <hr class="line">
                            <div class="card-consultant">
                                <h6>Informasi Konsultan</h6>
                                <div class="form-input">
                                    <div class="date-time gap-3">
                                        <div class="col">
                                            <p>Spesialisasi</p>
                                            <input class="log-input" type="text" name="spesialisasi"
                                                placeholder="Masukan Spesialisasi"
                                                value="<?php echo $consultant['spesialisasi']; ?>">
                                            <?= form_error('spesialisasi', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                        <div class="col">
                                            <p>Perusahaan</p>
                                            <input class="log-input" type="text" name="perusahaan"
                                                placeholder="Masukan Perusahaan"
                                                value="<?php echo $consultant['perusahaan']; ?>">
                                            <?= form_error('perusahaan', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <div class="date-time gap-3">
                                        <div class="col">
                                            <p>Akun Media Sosial</p>
                                            <input class="log-input" type="text" name="akun_media"
                                                placeholder="Masukan Akun Media Sosial"
                                                value="<?php echo $consultant['akun_media']; ?>">
                                            <?= form_error('akun_media', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                        <div class="col">
                                            <p>Jumlah Klien</p>
                                            <input class="log-input" type="number" name="jumlah_client"
                                                placeholder="Masukan Link Akun"
                                                value="<?php echo $consultant['jumlah_client']; ?>">
                                            <?= form_error('jumlah_client', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class=" line">
                            <div class="form-input d-flex flex-row-reverse">
                                <button class="log-primary-button" type="submit" name="" id="">Simpan</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>