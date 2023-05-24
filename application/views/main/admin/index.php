<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/dashboard.css'); ?>">

</head>

<body>
    <?php $this->load->view("_partials/navbar_admin.php") ?>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-3 user-box ">
                <?php $this->load->view('_partials/sidebar_admin.php') ?>
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
                    
                    <h4>Data Program Seminar</h3>
                    <form action="<?= base_url().'/admin/index' ?>" method="GET">
                        <div class="d-flex justify-content-between">
                            
                                <div class="search-bar col-6">
                                    <input type="text" name="search" class="log-input">
                                    <button class="log-primary-button">Search</button>
                                </div>
                            
                            <a href="<?php echo site_url('admin/tambah') ?>" class="log-primary-button text-center">
                                Tambah
                            </a>
                        </div>
                    </form>
                        <div class="table--section table my-4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="width: 30%;">Title</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($program as $item) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $item->name ?></td>
                                        <td><?php echo date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
                                        </td>
                                        <td>
                                            <p class="menunggu">Menunggu</p>
                                        </td>
                                        <td class="d-flex justify-content-between">
                                            <a href="<?php echo site_url('admin/edit') ?>">
                                                <button class="edit">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo site_url('admin/edit/' . $item->id) ?>">
                                                <button class="warning">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo site_url('admin/delete_row/' . $item->id); ?>">
                                                <button class="delete">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php $this->load->view('_partials/pagination.php') ?>
                </div>
                <div class="container container-consultant">
                    <h4>Data Konsultan</h3>
                        <div class="d-flex justify-content-between">
                            <div class="search-bar col-6">
                                <input type="text" class="log-input">
                                <button class="log-primary-button">Search</button>
                            </div>
                            <a href="<?php echo site_url('admin/add_consultant') ?>"
                                class="log-primary-button text-center">
                                Tambah
                            </a>
                        </div>
                        <div class="table--section table my-4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="width: 30%;">Nama</th>
                                        <th>Jasa dan Layanan</th>
                                        <th>Jumlah Klien</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($program as $item) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $item->name ?></td>
                                        <td><?php echo date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
                                        </td>
                                        <td>
                                            <p class="menunggu">Menunggu</p>
                                        </td>
                                        <td class="d-flex justify-content-between">
                                            <a href="<?php echo site_url('admin/edit') ?>">
                                                <button class="edit">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo site_url('admin/edit/' . $item->id) ?>">
                                                <button class="warning">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo site_url('admin/delete_row/' . $item->id); ?>">
                                                <button class="delete">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php $this->load->view('_partials/pagination.php') ?>
                </div>
            </div>
        </div>

        </ y>

</html>