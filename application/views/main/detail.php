<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>


	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="<?php echo site_url('/assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('/assets/css/detailconsult.css'); ?>">
</head>

<body>
	<?php $this->load->view("_partials/navbar.php") ?>
	<?php foreach ($consultant as $item) : ?>
		<section id="header-post">
			<div class="header-post-wrap">
				<div class="container">
					<div class="header-post-box">
						<div class="route">
							<p><strong>Beranda</strong></p>
							<i class="bi bi-chevron-right"></i>
							<p><strong>Layanan</strong></p>
							<i class="bi bi-chevron-right"></i>
							<p><strong>Konsultasi</strong></p>
							<i class="bi bi-chevron-right"></i>
							<p><?php echo $item->name ?></p>
						</div>
						<div class="consultant-box">
							<img src="<?php echo base_url('assets/img/consultant/' . $item->photo) ?>" alt="" />
							<div class="consultant-wrap">
								<h3><?php echo $item->name ?></h3>
								<div class="consultant-bar">
									<button class="log-primary-button">
										<i class="ri-whatsapp-line"></i>
										Hubungi WA
									</button>
									<div class="box-icon">
										<i class="ri-heart-fill"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="detail" class="section-pb1">
			<div class="container d-grid gap-3">
				<h6>Insight</h6>
				<div class="card card-consultant">
					<h6>Analitik</h6>
					<hr class="line">
					<div class="d-flex justify-content-between">
						<div class="analytic-item">
							<div class="d-flex gap-3">
								<i class="ri-calendar-check-fill"></i>
								<p>Jumlah Program</p>
							</div>
							<span>7 Program Ditawarkan</span>
						</div>
						<div class="analytic-item">
							<div class="d-flex gap-3">
								<i class="ri-group-fill"></i>
								<p>Jumlah Klien</p>
							</div>
							<span>235 Klien</span>
						</div>
						<div class="analytic-item">
							<div class="d-flex gap-3">
								<i class="ri-briefcase-fill"></i>
								<p>Pengalaman</p>
							</div>
							<span>10+ Tahun Pengalaman</span>
						</div>
						<div class="analytic-item">
							<div class="d-flex gap-3">
								<i class="ri-star-fill"></i>
								<p>Rata rata rating</p>

							</div>
							<span>4,9 dari 5,0</span>
						</div>
						<div class="analytic-item">
							<div class="d-flex gap-3">
								<i class="ri-message-2-fill"></i>
								<p>Jumlah Ulasan</p>
							</div>
							<span>210 Ulasan</span>
						</div>
					</div>
				</div>
				<h6>Curriculum Vitae</h6>
				<div class="card card-consultant ">
					<h6>Profile Konsultan</h6>
					<hr class="line">
					<p class="body-text">Pelatih kepemimpinan & mentor transformasi bisnis sesialis transformasi
						pembelajaran digital.
						Pelatih perputaran manajemen dampak tinggi penasihat sumber daya manusia untuk berbagai perusahaan
						nasional dan multinasional.

						Spesialisasi dalam membantu tim manajemen puncak di bidang pengembangan kepemimpinan berdampak
						tinggi, memenangkan program transformasi budaya organisasi, manajemen strategi, dan profesionalisasi
						berbagai UKM dan bisnis keluarga di Indonesia.
						Memelihara ekosistem pemilik bisnis dan profesional yang luas secara nasional yang berupaya
						berkontribusi pada pengembangan dampak bisnis yang sehat & inisiatif pembangunan bangsa.
					</p>
				</div>
				<div class="card card-consultant">
					<h6>Keahlian</h6>
					<hr class="line">
					<div class="sub-card">
						<h6>Spesialisasi</h6>
						<p class="specialist">Pemasaran</p>
						<p class="specialist">Strategi Bisnis</p>
						<p class="specialist">Teknologi Informasi</p>
						<p class="specialist">Keuangan</p>
						<p class="specialist">Sumber Daya Manusia</p>
						<p class="specialist">Strategi Berkelanjutan</p>
						<p class="specialist">Operasional & Bisnis</p>
						<h6>Bahasa</h6>
						<p class="fw-bold">Mandarin . Inggris</p>
					</div>
				</div>
				<div class="card card-consultant">
					<h6>Pengalaman</h6>
					<hr class="line">
					<div class="row">
						<div class="col-6  mb-4 d-flex gap-3 edu-certif ">
							<img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
							<div class="d-flex flex-column justify-content-center">
								<h6>Bank Indonesia</h6>
								<p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
							</div>
						</div>
						<div class="col-6  mb-4 d-flex gap-3 edu-certif ">
							<img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
							<div class="d-flex flex-column justify-content-center">
								<h6>Bank Indonesia</h6>
								<p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
							</div>
						</div>
						<div class="col-6  mb-4 d-flex gap-3 edu-certif ">
							<img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
							<div class="d-flex flex-column justify-content-center">
								<h6>Bank Indonesia</h6>
								<p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="card card-consultant">
					<h6>Pendidikan dan Sertifikasi</h6>
					<hr class="line">
					<div class="row">
						<div class="col-6  mb-4 d-flex gap-3 edu-certif ">
							<div class="d-flex flex-column edu-certif  justify-content-center">
								<h6>Master of Technology Education</h6>
								<p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
							</div>
						</div>
						<div class="col-6  mb-4 d-flex gap-3 edu-certif ">
							<div class="d-flex flex-column justify-content-center">
								<h6>Certified Behavioral Analyst</h6>
								<p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
							</div>
						</div>
						<div class="col-6  mb-4 d-flex gap-3 edu-certif ">
							<div class="d-flex flex-column justify-content-center">
								<h6>Master Trainer - Future Digital Skills Certification</h6>
								<p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
							</div>
						</div>
						<div class="col-6  mb-4 d-flex gap-3 edu-certif ">
							<div class="d-flex flex-column justify-content-center">
								<h6>Human Capital Strategy</h6>
								<p class="m-0">Agustus 2018 - Desember 2018 <span>(5 Bulan)</span></p>
							</div>
						</div>
					</div>
				</div>

				<h6>Program</h6>
				<div class="card card-consultant">
					<h6>Program yang ditawarkan (7)</h6>
					<hr class="line">
					<section id="our-program">
						<div class="row program-gap-all">
							<?php foreach ($program as $item) : ?>
								<a href="<?php echo base_url() . 'homecontroller/detailProgram/' . $item->id ?>">
									<div class="card card-our-program">
										<img src="<?php echo base_url('assets/img/program/' . $item->photo) ?>" alt="">
										<div class="our-program-text">
											<span><?= $item->type ?></span>
											<h6><?= $item->name ?></h6>
											<p><?= date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
											</p>
											<span class="text-capitalize">
												<?php if ($item->priceMin == $item->priceMax) {
													echo "Rp. " . number_format($item->priceMin);
												} else {
													echo "Rp. " . number_format($item->priceMin) . " - " . "Rp." . number_format($item->priceMax);
												}
												?>
											</span>
										</div>
									</div>
								</a>
							<?php endforeach; ?>
					</section>
				</div>

				<h6>Penilaian</h6>
				<div class="card card-consultant">
					<h6>Ulasan Klien (210)</h6>
					<hr class="line">
					<p class="body-text">Pelatih kepemimpinan & mentor transformasi bisnis sesialis transformasi
						pembelajaran digital.
						Pelatih perputaran manajemen dampak tinggi penasihat sumber daya manusia untuk berbagai perusahaan
						nasional dan multinasional.

						Spesialisasi dalam membantu tim manajemen puncak di bidang pengembangan kepemimpinan berdampak
						tinggi, memenangkan program transformasi budaya organisasi, manajemen strategi, dan profesionalisasi
						berbagai UKM dan bisnis keluarga di Indonesia.
						Memelihara ekosistem pemilik bisnis dan profesional yang luas secara nasional yang berupaya
						berkontribusi pada pengembangan dampak bisnis yang sehat & inisiatif pembangunan bangsa.
					</p>
				</div>
			</div>
		</section>


	<?php endforeach; ?>
	<?php $this->load->view("_partials/footer.php") ?>
</body>

</html>