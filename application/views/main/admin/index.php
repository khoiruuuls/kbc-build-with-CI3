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
                        <div class="search-bar col-6">
                            <input type="text" class="log-input">
                            <button class="log-primary-button">Search</button>
                        </div>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Digital Marketing</td>
                                        <td>28 Mei 2023</td>
                                        <td>
                                            <p class="menunggu">Menunggu</p>
                                        </td>
                                        <td>
                                            <button><i class="ri-eye-line"></i></button>
                                            <button><i class="ri-edit-line"></i></button>
                                            <button><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Accounting</td>
                                        <td>20 Mei 2023</td>
                                        <td>
                                            <p class="menunggu">Menunggu</p>
                                        </td>
                                        <td>
                                            <button><i class="ri-eye-line"></i></button>
                                            <button><i class="ri-edit-line"></i></button>
                                            <button><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Management Risk</td>
                                        <td>28 Juni 2023</td>
                                        <td>
                                            <p class="active">Active</p>
                                        </td>
                                        <td>
                                            <button><i class="ri-eye-line"></i></button>
                                            <button><i class="ri-edit-line"></i></button>
                                            <button><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Fostering creativity, critical thinking, communication and collaboration for
                                            sustainable business</td>
                                        <td>27 Juli 2023</td>
                                        <td>
                                            <p class="draf">Draf</p>
                                        </td>
                                        <td>
                                            <button><i class="ri-eye-line"></i></button>
                                            <button><i class="ri-edit-line"></i></button>
                                            <button><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Strategic Digital Marketing for Leaders</td>
                                        <td>29 Juli 2023</td>
                                        <td>
                                            <p class="draf">Draf</p>
                                        </td>
                                        <td>
                                            <button><i class="ri-eye-line"></i></button>
                                            <button><i class="ri-edit-line"></i></button>
                                            <button><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php $this->load->view('_partials/pagination.php') ?>
                </div>
            </div>
        </div>

        </ y>

</html>