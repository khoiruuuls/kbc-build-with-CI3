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

                    <h4>Data Program Seminar</h3>
                        <form action="<?= base_url() . 'admin/index' ?>" method="GET">
                            <div class="d-flex justify-content-between">

                                <div class="search-bar col-6">
                                    <form action="<?= base_url().'admin/index' ?>" method="get">
                                        <input type="text" name="search" class="log-input">
                                        <button type="submit"  class="log-primary-button">Search</button>
                                    </form>
                                </div>

                                <a href="<?php echo site_url('admin/tambah') ?>" class="log-primary-button text-center">
                                    Tambah
                                </a>
                            </div>
                        </form>
                        <div>
                            <table class="table my-4">
                                <thead class="table-head">
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
                                                <a href="<?php echo site_url() . 'detail-program/' . $item->id ?>">
                                                    <button class="edit">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo site_url('admin/edit/' . $item->id) ?>">
                                                    <button class="warning">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo site_url('admin/delete/' . $item->id) ?>">
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
                                <form action="<?= base_url().'admin/index' ?>" method="get">
                                    <input type="text" name="search1" class="log-input">
                                    <button type="submit"  class="log-primary-button">Search</button>
                                </form>
                            </div>
                            <a href="<?php echo site_url('admin/add_consultant') ?>" class="log-primary-button text-center">
                                Tambah
                            </a>
                        </div>
                        <div>
                            <table class="table my-4">
                                <thead class="table-head">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Profesi</th>
                                        <th scope="col">Perusahaan</th>
                                        <th scope="col">Klien</th>
                                        <th scope="col">No Handphone</th>
                                        <th scope="col-6">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($consultant as $item) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $item->name ?></td>
                                            <td><?php echo $item->profesi ?></td>
                                            <td><?php echo $item->perusahaan ?></td>
                                            <td><?php echo $item->jumlah_client ?></td>
                                            <td><?php echo $item->no_handphone ?></td>
                                            <td class="d-flex justify-content-between">
                                                <a href="<?php echo site_url() . 'detail-consultant/' . $item->id ?>">
                                                    <button class="edit">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo site_url('admin/edit_consultant/' . $item->id) ?>">
                                                    <button class="warning">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo site_url('admin/delete_consultant/' . $item->id); ?>">
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