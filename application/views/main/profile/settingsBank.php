<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php') ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user-profile.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_partials/sidebar.css'); ?>">
</head>

<body>
    <section id="user-profile">
        <div class="container-fluid">
            <div class="row user-container">
                <?php $this->load->view('_partials/navbar.php') ?>
                <div class="col-4 user-box bg-slide">
                    <?php $this->load->view('_partials/sidebar.php') ?>
                </div>

                <div class="col">
                    <div class="container section-pb1">
                        <div class="user-header">
                            <h4>Setting Bank</h4>
                        </div>

                        <div class="d-flex justify-content-between pb-4">
                            <p>Kartu debit / kredit</p>
                            <button type="button" class="log-primary-button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambahkan kartu
                            </button>
                        </div>

                        <!-- <?php var_dump($user) ?> -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="padding: 2rem;">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Tambahkan kartu</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6 class="mb-5">Detail kartu</h6>
                                        <form action="<?= base_url() . 'profile/settingsBank' ?>" method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control log-input" name="nomer"
                                                            placeholder="Nomer Kartu">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="varchar" class="form-control log-input"
                                                            name="bb/tt" placeholder="BB/TT">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control log-input" name="cvv"
                                                            placeholder="CVV">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control log-input"
                                                            name="name_kartu" placeholder="Nama dikartu">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="log-primary-button">Simpan</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                        <?php if ($bank == null) : ?>
                        <p>Belum ada bank </p>
                        <?php else : ?>
                        <?php foreach ($bank as $item) : ?>
                        <div class="bank-card d-flex align-items-center">
                            <div class="d-flex gap-3 col">
                                <i class="ri-record-circle-fill"></i>
                                <p class="m-0"><?= $item->name ?></p>
                            </div>
                            <div class="col-8">
                                <p><?= $item->name_kartu ?></p>
                                <p class="m-0"> Nomor kartu : <?= $item->nomer ?></p>
                            </div>
                            <div class="col">
                                <p class="fw-bold m-0" style="color: var(--success-color-6);"> Aktif</p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                            crossorigin="anonymous"></script>
                    </div>
                </div>
                <?php $this->load->view('_partials/footer.php') ?>
            </div>
        </div>
    </section>
</body>

</html>