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
                    <div class="form-log">
                        <div class="form-input">
                            <p>Nama Lengkap</p>
                            <input class="log-input" type="text" placeholder="Masukkan Nama Lengkap" >
                        </div>
                        <div class="form-input">
                            <p>Bidang Keahlian</p>
                            <input class="log-input" type="text" placeholder="Masukkan Nama Lengkap" >
                        </div>
                        <div class="form-input">
                            <p>Provinsi Domisili</p>
                            <div class="select-menu">
                                <div class="select-btn">
                                    <span class="sBtn-text log-input form-select">Masukan Provinsi Domisili Anda</span>
                                </div>
                                <ul class="options log-input">
                                    <li class="option">
                                        <span class="option-text">Jambi</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">Jakarta</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">Jawa Barat</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">Jawa Tengah</span>
                                    </li>
                                    <li class="option">
                                        <span class="option-text">Jawa Timur</span>
                                    </li>
                                </ul>
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
                            <input class="log-input" type="text" placeholder="Masukkan Email" >
                        </div>
                        <div class="form-input">
                            <p>Nomor Whatsapp</p>
                            <input class="log-input" type="text" placeholder="Masukkan Nomor Whatsapp" >
                        </div>
                        <div class="form-input">
                            <p>Password</p>
                            <input class="log-input" type="password" placeholder="Masukkan Password" >
                        </div>
                        <div class="form-input">
                            <p>Konfirmasi Password</p>
                            <input class="log-input" type="password" placeholder="Masukkan Ulang Password" >
                        </div>
                        <div class="checkbox-input">
                            <input class="checkbox-pop" type="checkbox" id="check2"/>
                            <p>Membuat akun berarti Anda setuju dengan 
                                <a class="link-text">Syarat Layanan</a>,
                                <a class="link-text">Kebijakan Privasi</a>, dan 
                                <a class="link-text">Pengaturan Notifikasi</a> bawaan kami.
                            </p>
                        </div>
                        <a href="index.php">
                            <button class="log-primary-button">Registrasi akun</button>
                        </a>
                    </div>
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
                                        <i class="ri-facebook-circle-fill" style="vertical-align: start;"></i>
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