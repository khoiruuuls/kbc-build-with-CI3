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
                <img src="<?php echo base_url('assets/img/sign-up.jpg') ?>" class="stiky" alt="" />
            </div>
            <div class="col-sm p-0">
                <div class="field">
                    <img src="<?php echo base_url('assets/img/kbc-logo.png') ?>" alt="" />

                        <div class="row type-user">
                            <a class="col-sm active user-select">
                                <h6>Pengguna</h6>
                            </a>
                            <a href="<?php echo base_url('auth/sign-up-consultant')?>" class="col-sm user-select unselect-user-type">
                                <h6 >Konsultan</h6>
                            </a>
                        </div>

                    <div class="greeting">
                        <h4>Registrasi Akun</h4>
                        <p>Selamat datang! Silakan isi formulir pendaftaran di bawah ini untuk membuat akun Anda.</p>
                    </div>
                    <form action="<?= base_url().'SignController/signup'; ?>" method="POST" >
                        <div class="form-log">
                            <div class="form-input">
                                <p>Nama Lengkap</p>
                                <input class="log-input" name="name" type="text" placeholder="Masukkan Nama Lengkap" >
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Email</p>
                                <input class="log-input" name="email" type="text" placeholder="Masukkan Email" >
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Nomor Whatsapp</p>
                                <input class="log-input" name="noHp" type="text" placeholder="Masukkan Nomor Whatsapp" >
                                <?= form_error('noHp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Password</p>
                                <input class="log-input" name="password" type="password" placeholder="Masukkan Password" >
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-input">
                                <p>Konfirmasi Password</p>
                                <input class="log-input" name="konfirmasi" type="password" placeholder="Masukkan Ulang Password" >
                            </div>
                            <div class="checkbox-input">
                                <input class="checkbox-pop" type="checkbox" name="cek" id="check2"/>
                                <p>Membuat akun berarti Anda setuju dengan 
                                    <a class="agreement">Syarat Layanan</a>,
                                    <a class="agreement">Kebijakan Privasi</a>, dan 
                                    <a class="agreement">Pengaturan Notifikasi</a> bawaan kami.
                                </p>
                            </div>
                    
                            <button type="submit" class="log-primary-button">Registrasi akun</button>
                            
                        </div>
<<<<<<< HEAD
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
=======
                        
                    </form>
>>>>>>> fcf61dd1a55e24afcdb0bc16cd9ce6ed62dfd761
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
                    <p class="quest-account text-center">Sudah memiliki akun? <a href="<?php echo base_url('auth/sign-in')?>">Masuk Akun</a> </p>
                </div>
                    
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</body>
</html>