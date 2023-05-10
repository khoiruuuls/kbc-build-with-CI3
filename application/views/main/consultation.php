<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_partials/head.php")?>
    
        <title><?php echo $page_title; ?></title>
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/consultation.css">
    </head>
    
    <body>  
        <?php $this->load->view("_partials/navbar.php")?>

        <section id="header-post" class="img-consultation">
			<div class="header-post-wrap">
				<div class="container">
					<div class="row">
						<div class="header-post-box">
							<div class="route">
								<p><strong>Beranda</strong> </p>
								<i class="bi bi-chevron-right"></i>
								<p><strong>Layanan</strong></p>
								<i class="bi bi-chevron-right"></i>
								<p>Konsultasi</p>
							</div>
							<h1>Konsultasi</h1>
							<p class="body-text col-6">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna
								aliqua.
							</p>
							<div class="search-bar">
								<input
									placeholder="Kata kunci, kategori, nama konsultan dsb ..."
									type="text"
									class="input" />
								<button class="primary-button">
									Cari
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="category">
			<div class="container">
				<h4>Category Topics</h4>
				<div class="sub-category justify-content-start">
					<ul>
						<li class="active">Semua</li>
						<li>UMKM</li>
						<li>Pemasaran</li>
						<li>Keuangan</li>
						<li>Pelanggan</li>
						<li>Data</li>
					</ul>
				</div>

				<div class="row">
					<?php foreach ($consultant as $item) : ?>
					<div class="col-6 col-sm-12 col-lg-6">
						<div class="card-consultation">
							<div class="img">
								<img src="<?php echo $item->photo ?>" alt="" />
							</div>
							<div class="text-card">
								<div class="mentor-detail">
									<div class="mentor-name">
										<h6><?php echo $item->nama ?></h6>
										<p>12 Januari 2009</p>
									</div>
									<div class="box-icon">
										<i class="ri-heart-fill"></i>
									</div>
								</div>
								<div class="mentor-name">
									<p>
										Setiap hari | Tatap muka &
										Online
									</p>
									<p>
										<strong>4,9 | 235</strong>
										Klien
									</p>
								</div>
								<div class="mentor-button">
									<button class="sm-primary-button">
										Lihat selengkapnya
									</button>
									<a href="<?php echo 'homecontroller/detail/'.$item->id?>">
										<button
											class="sm-secondary-button">
											Detail
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
			</div>
		</section>

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

		<?php $this->load->view("_partials/footer.php")?>
    </body>
    </html>
