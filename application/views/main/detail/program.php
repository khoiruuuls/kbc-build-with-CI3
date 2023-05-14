<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php")?> 
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/detail/program.css')?>" />
</head>

<body>
    <?php $this->load->view("_partials/navbar.php")?>

    <?php foreach($program as $item) : ?>
    <!-- bagian header -->
    <section id="header-program">
        <div class="container-program">
            <img src="<?php echo base_url('assets/img/program/'.$item->photo)?>" alt="">
        </div>
    </section>

    <!-- bagian route -->
    <section id="header-route">
        <div class="container">
            <div class="route">
                <p><strong>Program</strong></p>
                <i class="bi bi-chevron-right"></i>
                <p><strong>Training</strong></p>
                <i class="bi bi-chevron-right"></i>
                <p>Kepemimpinan</p>
            </div>
        </div>
    </section>

    <!-- bagian period -->
    <section id="header-period">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title-period">
                        <h3><?php echo $item->name?></h3>
                    </div>
                    <div class="text-period1">
                        <i class='bx bx-calendar'></i>
                        <p><?= date('d M Y', strtotime($item->dateStart)). " - " . date('d M Y', strtotime($item->dateEnd))?></p>
                    </div>
                    <div class="text-period2">
                        <i class='bx bxs-time-five'></i>
                        <p>13.00-16.00</p>
                    </div>
                    <div class="text-period3">
                        <i class='bx bxs-map'></i>
                        <p>Online</p>
                    </div>
                </div>
                <div class="col-lg-3 offset-2">
                    <div class="card-price">
                        <div class="card-price-content">
                            <h5>Harga mulai dari</h5>
                            <p>
                                <?php if ($item->priceMin == $item->priceMax){
                                    echo "Rp. " . number_format($item->priceMin);
                                } else {
                                    echo "Rp. " . number_format($item->priceMin) . " - " . "Rp." . number_format($item->priceMax);
                                }
                                ?>
                            </p>
                            <div class="button_price">
                                <a href="" type="submit" class="primary-button">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- bagian detail program -->
    <section id="detail_program" class="section-m1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-detail-prgram">
                        <div class="title-detail-program">
                            <h5>Detail Program</h5>
                            <div class="garis"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="text-detail-program">
                                <p>
                                    <?php echo $item->descProgram ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endforeach; ?>

    <?php $this->load->view("_partials/footer.php")?>
  
</body>

</html>