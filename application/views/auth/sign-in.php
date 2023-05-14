<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php")?>

    <title><?php echo $title_page ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/auth.css'); ?>">

</head>
<body>
    
    <div class="container-fluid">
        <div class="row">   
            <div class="col-sm p-0">
                <img src="<?php echo base_url('assets/img/sign-in.jpg') ?>" class="stiky" alt="" />
            </div>
            <div class="col-sm p-0">
                <div class="field">
                    <img src="<?php echo base_url('assets/img/kbc-logo.png') ?>" alt="" />
                    <div class="greeting">
                        <h4>Selamat Datang !</h4>
                        <p>Silakan masukkan alamat email dan password Anda untuk masuk ke akun Anda.</p>
                    </div>
                    <form action="<?= base_url().'SignController/LoginUser' ?>" method="post">
                        <div class="form-log">
                            <div class="form-input">
                                <p>Email</p>
                                <input class="log-input" name="email" type="text" placeholder="Masukan Email" >
                            </div>
                            <div class="form-input">
                                <p>Password</p>
                                <input class="log-input" name="password" type="password" placeholder="Masukan Password">
                            </div>
                            <a href="hello.php" class="d-flex flex-row-reverse mb-3 ">Lupa Password ?</a>
                            <button type="submit" name="submit" class="log-primary-button">Masuk</button>
                            
                        </div>
                        <a href="hello.php" class="d-flex flex-row-reverse mb-3 ">Lupa Password ?</a>
                        <a href="index.php">
                            <button class="log-primary-button">Masuk</button>
                        </a>
                        </form>
                    </div>
                    <div class="log-with text-center">
                        <p>Atau masuk dengan menggunakan:</p>
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
                    <p class="quest-account text-center">Belum memiliki akun? <a href="<?php echo base_url('auth/sign-up')?>">Register Akun</a> </p>
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