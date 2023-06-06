<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/home.css'); ?>">

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
                    <h4>Tambah Program</h3>
                        <p>Info Dasar</p>
                        <form action="<?= base_url() . 'admin/tambah' ?>" enctype="multipart/form-data" method="POST">
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
                            <div class="form-input">
                                <p>Judul</p>
                                <input class="log-input" type="text" placeholder="Masukan Judul" name="name" id="">
                            </div>
                            <div class="form-input">
                                <p>Tag</p>
                                <div class="d-flex gap-3">
                                    <input class="log-input" type="text" placeholder="Masukan Tag" name="tag" id="">
                                    <button class="log-primary-button">Tambah</button>
                                </div>
                            </div>
                            <div class="form-input">
                                <p>Konsultan</p>
                                <select name="consultant_id" id="consultant_id" class="log-input select-dropdown">
                                    <option value="">Select Consultant</option>
                                    <?php foreach ($consultants as $consultant) : ?>
                                    <option value="<?php echo $consultant->id; ?>"
                                        title="<?php echo $consultant->name; ?>"><?php echo $consultant->name; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-input">
                                <p>Deskripsi</p>
                                <textarea class="log-input" type="text" placeholder="Masukan Deskripsi"
                                    style="height: 300px" name="descProgram" id=""></textarea>
                            </div>
                            <hr class="line">
                            <div class="form-input">
                                <p>Lokasi</p>
                                <div class="row text-center ">
                                    <div class="col type active">Online</div>
                                    <div class="col type">Offline</div>
                                    <div class="col type">Hybrid</div>
                                </div>

                                <!-- nilai type consultan/training -->
                                <input type="hidden" name="type" value="consultan">
                                <div class="card card-info" style="width: 100%;">
                                    <ul class="p-0 m-0">
                                        <li style="list-style: inside;">
                                            Silakan masukan URL Streaming dengan benar karena URL Streaming ini yang
                                            akan
                                            diterima oleh Pembeli Program kamu setelah transaksi selesai terbayar.
                                        </li>
                                        <li style="list-style: inside;">
                                            Kamu tidak bisa melakukan perubahan URL Streaming setelah kamu selesai
                                            melakukan
                                            pembuatan event.
                                        </li>
                                        <li style="list-style: inside;">
                                            Kesalahan memasukkan URL Streaming bukan merupakan tanggung jawab ADMIN.
                                        </li>
                                        <li style="list-style: inside;">
                                            Jika kamu salah memasukkan URL Streaming, maka kamu harus membuat event baru
                                            untuk memperbaiki URL Streaming ini.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-input">
                                <p>URL Streaming</p>
                                <input class="log-input" type="text" placeholder="Masukan Nama Konsultan" name="url"
                                    id="">
                            </div>
                            <hr class="line">
                            <div class="form-input">
                                <p>Tanggal & Waktu</p>
                                <div class="date-time gap-3">
                                    <div class="col card card-date-time ">
                                        <i class="ri-calendar-2-line" style="font-size: 40px;"></i>
                                        <div class="display">
                                            <p class="text-center">Program Start *</p>
                                            <input type="date" id="date" name="date_start">
                                        </div>
                                        <i class="ri-subtract-fill"></i>
                                        <div class="display">
                                            <p class="text-center">Program End *</p>
                                            <input type="date" id="date" name="date_end">
                                        </div>
                                    </div>
                                    <div class="col card card-date-time ">
                                        <i class="ri-time-line" style="font-size: 40px;"></i>
                                        <div class="display">
                                            <p class="text-center">Program Start *</p>
                                            <input type="time" id="time" name="time_start">
                                        </div>
                                        <i class="ri-subtract-fill"></i>
                                        <div class="display">
                                            <p class="text-center">Program End *</p>
                                            <input type="time" id="time" name="time_end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-input">
                                <p>Kuota & Harga</p>
                                <div class="date-time gap-3">
                                    <div class="col">
                                        <!-- berhubung priceMaxnya tidak ada inputnya ,aku pake priceMin ditambah 100K -->
                                        <input class="log-input" type="number" name="priceMin"
                                            placeholder="Masukan Kouta">
                                    </div>
                                    <div class="col">
                                        <input class="log-input" type="number" name="kuota" placeholder="Masukan Harga">
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