<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo ('assets/css/_partials/consultant.css'); ?>">

</head>

<body>
    <!-- Fadli -->

    <?php $this->load->view("_partials/navbar_consultant.php") ?>
    <?php $this->load->view("_partials/sidebar_consultant.php") ?>

    <section id="main-section">
        <!-- Content Utama -->
        <div class="main">
            <div class="header-main">
                <p>My Program</p>
            </div>
            <div class="header-main-title">
                <h3>Data Program Saya</h3>
            </div>
            <div class="search-add-program-main">
                <div id="search-program-main">
                    <form action="#" method="get" class="search-form">
                        <div class="search-container">
                            <input type="text" name="search" placeholder="Cari" />
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </div>
                    </form>
                    <div class="filter-container">
                        <div class="dropdown">
                            <button class="dropbtn">
                                <i class="ri-filter-2-line"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="#">All</a>
                                <a href="#">Program 1</a>
                                <a href="#">Program 2</a>
                                <a href="#">Program 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="add-program-main">
                    <a href="" type="submit" class=""><i class="ri-add-line"></i>
                        Tambah Program
                    </a>
                </div>
            </div>
            <div class="kategori-main">
                <ul>
                    <li class="active-main">Semua</li>
                    <li>Aktif</li>
                    <li>Draft</li>
                    <li>Menunggu</li>
                    <li>History</li>
                </ul>
            </div>
            <div class="table-main">
                <table>
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>TITLE</th>
                            <th>DATE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($seminar as $item) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $item->name ?></td>
                                <td><?= $item->date_start ?></td>
                                <td>
                                    <?php if ($item->status == 'menunggu') : ?>
                                        <p class="menunggu"><?= $item->status ?></p>
                                    <?php elseif ($item->status == 'aktif') : ?>
                                        <p class="aktif"><?= $item->status ?></p>
                                    <?php elseif ($item->status == 'draf') : ?>
                                        <p class="draf"><?= $item->status ?></p>
                                    <?php else : ?>
                                        <p class="lainnya"><?= $item->status ?></p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div id="button-table">
                                        <a href="<?= base_url() . 'seminar/detail/' . $item->id ?>">
                                            <button><i class="ri-edit-line"></i> </button>
                                        </a>
                                        <!-- <Form action="<?= base_url() . 'seminar/hapus' ?>" method="POST">
                                            <input type="hidden" name="id" value="<?= $item->id ?>">
                                            <input type="hidden" name="file" value="<?= $item->photo ?>">
                                            <button type="submit" name="hapus">delete</button>
                                        </Form> -->
                                        <button><i class="ri-delete-bin-5-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="show-main-content">
                <p>Showing 1 to 5 of 57 entries</p>
                <section id="pagination">
                    <div class="container">
                        <button class="button prevNext" id="prev" disabled>
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <div class="links">
                            <a href="#" class="link active">1</a>
                            <a href="#" class="link">2</a>
                            <a href="#" class="link">3</a>
                            <a href="#" class="link">4</a>
                            <a href="#" class="link">5</a>
                        </div>
                        <button class="button prevNext" id="next">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Sadam -->

    <!-- <h1>Data Program Konsultan</h1>
    <form style="margin-bottom:10px;" action="<?= base_url() . 'seminar/index' ?>" method="GET">
        <input type="text" name="search" placeholder="search">
        <button type="submit">cari</button>
    </form>
    <a href="<?= base_url() . 'seminar/index' ?>">Semua</a>
    <a href="<?= base_url() . 'seminar/index?opsi=aktif' ?>">aktif</a>
    <a href="<?= base_url() . 'seminar/index?opsi=draf' ?>">draf</a>
    <a href="<?= base_url() . 'seminar/index?opsi=menunggu' ?>">menunggu</a>
    <a href="">history</a>

    <table border="2" style="margin-top: 50px;">
        <tr>
            <th>No</th>
            <th>title</th>
            <th>tanggal</th>
            <th>Status</th>
            <th>partisipan</th>
            <th>action</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($seminar as $item) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->date_start ?></td>
                <td><?= $item->status ?></td>
                <td>100</td>
                <td> <a href="<?= base_url() . 'seminar/detail/' . $item->id ?>">edit</a> |
                    <Form action="<?= base_url() . 'seminar/hapus' ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $item->id ?>">
                        <input type="hidden" name="file" value="<?= $item->photo ?>">
                        <button type="submit" name="hapus">delete</button>
                    </Form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/consultant.js"></script>
</body>

</html>