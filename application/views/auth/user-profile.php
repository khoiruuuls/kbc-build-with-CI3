<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_partials/head.php")?>
    
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>"> -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/khoirul.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/user-profile.css'); ?>">

    </head>
    
    <body>  
		<?php $this->load->view("_partials/navbar.php")?>

        <section id="user-profile">
            <div class="container-fluid user-container">
                <div class="row">
                    <div class="col-4 user-box bg-slide">
                        <div class="user-item">
                            <img src="<?php echo base_url('assets/img/user-profile.jpg')?>" alt="">
                            <div class="user-edit">
                                <h6>Muhamad Khoirul Fahmi</h6>
                                <div class="d-flex gap-3">
                                    <i class="ri-edit-box-line"></i>
                                    <p>Edit Profile</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-item">
                            <i class="ri-user-line"></i>
                            <h6>Akun Saya</h6>
                        </div>
                        <div class="user-item">
                            <i class="ri-thumb-down-line"></i>
                            <h6>Wishlist</h6>
                        </div>
                        <div class="user-item">
                            <i class="ri-notification-2-line"></i>
                            <h6>Notification</h6>
                        </div>
                        <div class="user-item">
                            <i class="ri-book-open-line"></i>
                            <h6>My Program</h6>
                        </div>
                        <div class="user-item">
                        <i class="ri-shopping-cart-line"></i>
                            <h6>Transaction History</h6>
                        </div>
                    </div>
                    <div class="col user-box">
                        <div class="user-header">
                            <h4>Profile</h4>
                            <p>Silahkan isi data profile anda secara lengkap. Pastikan informasi akurat dan mudah dihubungi</p>
                        </div>

                        <div class="form-input">
                            <p class="input-label">Nama Lengkap</p>
                            <input class="log-input" type="text" placeholder="Masukan Nama Lengkap" >
                        </div>
                        <div class="form-input">
                            <p class="input-label">Email</p>
                            <input class="log-input" type="text" placeholder="Masukan Email" >
                        </div>
                        <div class="form-input">
                            <p class="input-label">Nomer Whatsapp</p>
                            <input class="log-input" type="text" placeholder="Masukan Nomer Whatsapp" >
                        </div>
                        <div class="form-input">
                            <p class="input-label">Jenis Kelamin</p>
                            <input class="log-input" type="text" placeholder="Masukan Jenis Kelamin" >
                        </div>
                        <div class="form-input">
                            <p class="input-label">Tanggal Lahir</p>
                            <input class="log-input" type="text" placeholder="Masukan Tanggal Lahir" >
                        </div>
                        <button class="log-primary-button">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </section>

		<?php $this->load->view("_partials/footer.php")?>

    </body>
    </html>
