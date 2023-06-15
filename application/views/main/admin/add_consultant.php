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
            <div class="col-md-3 col-12 user-box ">
                <?php $this->load->view('_partials/sidebar.php') ?>
            </div>
            <div class="col-md-9 col-12">
                <div class="container container-consultant">
                    <div class="route d-flex gap-2">
                        <p><strong>Program</strong></p>
                        <i class="ri-arrow-right-s-line"></i>
                        <p><strong>Training</strong></p>
                        <i class="ri-arrow-right-s-line"></i>
                        <p>Kepemimpinan</p>
                    </div>
                    <h4>Tambah Konsultan</h3>
                        <p>Photo Profile</p>
                        <form action="<?= base_url() . 'admin/add_consultant' ?>" enctype="multipart/form-data" method="POST">
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
                                    <input class="log-input" type="text" placeholder="Masukan Nama Lengkap" name="name" id="">
                                    <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-input">
                                    <p>Profile Konsultan</p>
                                    <textarea class="log-input" type="text" placeholder="Masukan Profile Konsultan" name="profile" id=""></textarea>
                                    <?= form_error('alamat', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-input">
                                    <p>Alamat</p>
                                    <textarea class="log-input" type="text" placeholder="Masukan Alamat Lengkap" name="alamat" id=""></textarea>
                                    <?= form_error('alamat', '<p class="text-danger">', '</p>'); ?>
                                </div>
                            </div>
                            <hr class="line">
                            <div class="card-consultant">
                                <h6>Informasi Kontak</h6>
                                <div class="form-input">
                                    <p>Email</p>
                                    <input class="log-input" type="text" placeholder="Masukan Email" name="email" id="">
                                    <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="form-input">
                                    <p>Nomer Whatsapp</p>
                                    <input class="log-input" type="text" placeholder="Masukan Nomer Whatsapp" name="no_handphone" id="">
                                    <?= form_error('no_handphone', '<p class="text-danger">', '</p>'); ?>
                                </div>
                            </div>
                            <hr class="line">
                            <div class="card-consultant">
                                <h6>Informasi Konsultan</h6>
                                <div class="form-input">
                                    <div class="date-time gap-3">
                                        <div class="col">
                                            <p>Akun Media Sosial</p>
                                            <input class="log-input" type="text" name="akun_media" placeholder="Masukan Akun Media Sosial">
                                            <?= form_error('akun_media', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                        <div class="col">
                                            <p>Jumlah Klien</p>
                                            <input class="log-input" type="number" name="jumlah_client" placeholder="Masukan Link Akun">
                                            <?= form_error('jumlah_client', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <p>Bahasa</p>
                                    <div id="input-bahasa-Container">
                                        <div class="row">
                                            <!-- <?php foreach ($bahasa_options as $bahasa) : ?>
                                            <div class="col-6">
                                                <div class="d-flex gap-3 mb-2"> 
                                                    <input type="text" name="bahasa[]" value="<?php echo $bahasa; ?>" class="log-input select-dropdown" multiple>
                                                    <button type="button" class="deleteBahasaButton log-primary-button">Delete</button>
                                                </div>
                                            </div>
                                                <?php endforeach; ?> -->
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <input type="text" id="new-bahasa-Input" class="log-input" placeholder="Masukan Bahasa">
                                        <button class="log-primary-button" type="button" id="add-bahasa-Button">Add</button>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <p>Spesialisasi</p>
                                    <div id="input-spesialisasi-Container">
                                        <div class="row">
                                            <!-- <?php foreach ($spesialisasi_options as $spesialisasi) : ?>
                                            <div class="col-6">
                                                <div class="d-flex gap-3 mb-2"> 
                                                    <input type="text" name="spesialisasi[]" value="<?php echo $spesialisasi; ?>" class="log-input select-dropdown" multiple>
                                                    <button type="button" class="deleteSpesialisasiButton log-primary-button">Delete</button>
                                                </div>
                                            </div>
                                                <?php endforeach; ?> -->
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <input type="text" id="new-spesialisasi-Input" class="log-input" placeholder="Masukan Spesialisasi">
                                        <button class="log-primary-button" type="button" id="add-spesialisasi-Button">Add</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="line">
                            <div class="card-consultant">
                                <h6>Sertifikasi</h6>
                                <div class="form-input">
                                    <p>Sertifikasi</p>
                                    <div id="input-sertifikasi-Container">
                                        <div class="row">
                                            <!-- <?php foreach ($sertifikasi_options as $sertifikasi) : ?>
                                                <div class="col-6">
                                                    <div class="d-flex gap-3 mb-2">
                                                        <input type="text" name="sertifikasi[]" value="<?php echo $sertifikasi; ?>" class="log-input select-dropdown" multiple>
                                                        <button type="button" class="deletesertifikasiButton log-primary-button">Delete</button>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?> -->
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                        <input type="text" id="new-sertifikasi-Input" class="log-input" placeholder="Masukan sertifikasi">
                                        <div class="d-flex gap-3">
                                            <div class="input-group">
                                                <input type="date" id="start-date" class="log-input">
                                            </div>
                                            <div class="input-group">
                                                <input type="date" id="end-date" class="log-input">
                                            </div>
                                            <button class="log-primary-button" type="button" id="add-sertifikasi-Button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="line">
                            <div class="card-consultant">
                                <h6>Pengalaman</h6>
                                <div class="form-input">
                                    <p>Pengalaman</p>
                                    <div id="input-pengalaman-Container">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                        <input type="text" id="new-pengalaman-Input" class="log-input" placeholder="Masukan pengalaman">
                                        <div class="d-flex gap-3">
                                            <div class="input-group">
                                                <input type="date" id="start-pengalaman-date" class="log-input">
                                            </div>
                                            <div class="input-group">
                                                <input type="date" id="end-pengalaman-date" class="log-input">
                                            </div>
                                            <button class="log-primary-button" type="button" id="add-pengalaman-Button">Add</button>
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
    </div>

    <script src="<?php echo base_url('assets/js/admin.js') ?>"></script>

</body>

</html>