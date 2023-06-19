<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php")?>

    <title><?php echo $title_page ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/auth.css'); ?>">
</head>
<body>

    <div class="container-fluid ">
        <div class="row dflex flex-row-reverse ">   
            <div class="col-sm p-0">
                <img src="<?php echo base_url('assets/img/sign-up-consultant.jpg') ?>" class="stiky" alt="" />
            </div>
            <div class="col-sm p-0">
                <div class="field">
                    <img src="<?php echo base_url('assets/img/kbc-logo.png') ?>" alt="" />

                        <div class="row type-user">
                            <a href="<?php echo base_url('auth/sign-up')?>" class="col-sm unselect-user-type user-select">
                                <h6>Pengguna</h6>
                            </a>
                            <div class="col-sm active user-select">
                                <h6>Konsultan</h6>
                            </div>
                        </div>

                    <div class="greeting">
                        <h4>Registrasi Akun</h4>
                        <p>Selamat datang! Silakan isi formulir pendaftaran di bawah ini untuk membuat akun Anda.</p>
                    </div>
                    <form action="<?= base_url().'SignController/signupConsultant' ?>" method="post">
                        <div class="form-log">
                            <div class="form-input">
                                <p>Nama Lengkap</p>
                                <input class="log-input" name="name" type="text" placeholder="Masukkan Nama Lengkap" >
                                <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Bidang Keahlian</p>
                                <input class="log-input" name="spesialisasi" type="text" placeholder="Masukkan Nama Lengkap" >
                                <?= form_error('spesialisasi', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Provinsi Domisili</p>
                                <div class="select-menu">
                                    <div class="select-btn">
                                        <!-- <span class="sBtn-text log-input form-select">Masukan Provinsi Domisili Anda</span> -->
                                        <select name="provinsi" required class="sBtn-text log-input form-select" >
                                            <option value="ACEH">Masukan Provinsi Domisili anda</option>
                                            <?php foreach($provinsi as $item): ?>
                                                <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-input">
                                <p>Kota Domisili</p>
                                <div class="select-menuCity">
                                    <div class="select-btnCity">
                                        <span class="sBtn-textCity log-input form-select">Masukan Kota Domisili Anda</span>
                                    </div>
                                    <ul class="optionsCity log-input">
                                        <li class="optionCity">
                                            <span class="option-textCity">Jakarta Barat</span>
                                        </li>
                                        <li class="optionCity">
                                            <span class="option-textCity">Jakarta Pusat</span>
                                        </li>
                                        <li class="optionCity">
                                            <span class="option-textCity">Jakarta Selatan</span>
                                        </li>
                                        <li class="optionCity">
                                            <span class="option-textCity">Jakarta Timur</span>
                                        </li>
                                        <li class="optionCity">
                                            <span class="option-textCity">Jakarta Utara</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>  
                            <div class="form-input">
                                <p>Email</p>
                                <input class="log-input" name="email" type="text" placeholder="Masukkan Email" >
                                <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Nomor Whatsapp</p>
                                <input class="log-input" name="no_handphone" type="number" placeholder="Masukkan Nomor Whatsapp" >
                                <?= form_error('no_handphone', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Password</p>
                                <input class="log-input" name="password" type="password" placeholder="Masukkan Password" >
                                <?= form_error('password', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Konfirmasi Password</p>
                                <input class="log-input" type="password" name="konfirmasi" placeholder="Masukkan Ulang Password" >
                                <?= form_error('konfirmasi', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="checkbox-input">
                                <input class="checkbox-pop" name="cek" type="checkbox" id="check2"/>
                                <p>Membuat akun berarti Anda setuju dengan 
                                    <a class="link-text">Syarat Layanan</a>,
                                    <a class="link-text">Kebijakan Privasi</a>, dan 
                                    <a class="link-text">Pengaturan Notifikasi</a> bawaan kami.
                                </p>
                            </div>
                            
                            <button type="submit" class="log-primary-button">Registrasi akun</button>
                            
                        </div>
                    </form>
                    <div class="log-with text-center">
                        <p>Atau registrasi dengan menggunakan:</p>
                        <div class="row">
                            <div class="col-sm">
                                <a href="login-google.php">
                                    <button class="log-secondary-button gap-3">
                                        <i class="ri-google-fill"></i> 
                                        <p>Google</p>
                                    </button>
                                </a>
                            </div>
                            <div class="col-sm">
                                <a href="login-facebook.php" class">
                                    <button class="log-secondary-button gap-3">
                                        <i class="ri-facebook-circle-fill"></i>
                                        <p>Facebook</p>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="quest-account text-center">Sudah memiliki akun? <a href="<?php echo base_url('auth/sign-in')?>" class="link-text">Masuk Akun</a> </p>
                </div>
                    
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>
</html>
</body>
</html>