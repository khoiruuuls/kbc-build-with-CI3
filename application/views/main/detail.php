<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_partials/head.php")?>
    
        
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="<?php echo site_url('/assets/css/style.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('/assets/css/detailconsult.css');?>">
    </head>
    
    <body>  
		<?php $this->load->view("_partials/navbar.php")?>
		<?php foreach ($consultant as $item) : ?>
    	<section id="header-post" class="img-detail">
			<div class="header-post-wrap">
				<div class="container">
					<div class="row">
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
								<img src="<?php echo base_url('assets/img/consultant/'.$item->photo)?>" alt="" />
								<div class="consultant-wrap">
									<h3><?php echo $item->name?></h3>
									<h6><?php echo $item->profesi?></h6>
									<div class="consultant-bar">
										<button
											class="primary-button">
											<i
												class="bi bi-chat-left-dots"></i>
											Mulai Konsultasi
										</button>
										<div class="box-icon">
											<i
												class="ri-heart-fill"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="summary">
			<div class="container">
				<div class="row">
					<div class="col-3">
						<div class="summary-card">
							<div class="summary">
								<p>Jumlah Klien</p>
								<div class="summary-box">
									<div class="circle-icon">
										<i class="ri-group-fill"></i>
									</div>
									<h2>235</h2>
									<p>Klien</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="summary-card">
							<div class="summary">
								<p>Pengalaman</p>
								<div class="summary-box">
									<div class="circle-icon">
										<i class="ri-user-2-fill"></i>
									</div>
									<h2>5 +</h2>
									<p>tahun</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="summary-card">
							<div class="summary">
								<p>Rata rata penilaian</p>
								<div class="summary-box">
									<div class="circle-icon">
										<i
											class="ri-thumb-up-fill"></i>
									</div>
									<h2>4.9</h2>
									<p>dari 5.0</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="summary-card">
							<div class="summary">
								<p>Jumlah Ulasan</p>
								<div class="summary-box">
									<div class="circle-icon">
										<i
											class="ri-message-2-fill"></i>
									</div>
									<h2>210</h2>
									<p>Ulasan</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="profile-consultant">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="profile-consultant-card">
							<h6>Profile Konsultan</h6>
							<p class="body-text">
								Lorem ipsum dolor sit amet, consectetur
								adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna
								aliqua. Ut enim ad minim veniam, quis
								nostru
							</p>
						</div>
					</div>
					<div class="col-6">
						<div class="profile-consultant-card">
							<h6>Konsultasi</h6>
							<div class="consultant-info">
								<div class="consultant-icon">
									<i class="ri-time-line"></i>
									<p>Status</p>
								</div>
								<p><strong>Available</strong></p>
							</div>
							<div class="consultant-info">
								<div class="consultant-icon">
									<i
										class="ri-question-answer-line"></i>
									<p>Jenis Konsultasi</p>
								</div>
								<p>
									<strong
										>Tatap muka & Online</strong
									>
								</p>
							</div>
							<div class="consultant-info">
								<div class="consultant-icon">
									<i class="ri-calendar-2-line"></i>
									<p>Jadwal</p>
								</div>
								<p>
									<strong
										>Selasa, Rabu, Kamis</strong
									>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="review">
			<div class="container">
				<h5>Ulasan</h5>
				<div class="review-header">
					<p>Menampilkan 15 dari 210</p>
					<a href="">Menampikan semua ulasan</a>
				</div>
				<div class="row">
					<div class="col-4">
						<div class="review-card">
							<h1>"</h1>
							<p class="body-text">
								Lorem ipsum dolor sit amet, consectetur
								adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna
								aliqua.
							</p>
							<div class="user">
								<img
									src="<?php echo site_url('./assets/img/user-profile.jpg')?>"
									alt="" />
								<div class="username">
									<h6>Aliyyu Gani</h6>
									<div class="star">
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="review-card">
							<h1>"</h1>
							<p class="body-text">
								Lorem ipsum dolor sit amet, consectetur
								adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna
								aliqua.
							</p>
							<div class="user">
								<img
									src="<?php echo site_url('./assets/	img/user-profile.jpg')?>"
									alt="" />
								<div class="username">
									<h6>Aliyyu Gani</h6>
									<div class="star">
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="review-card">
							<h1>"</h1>
							<p class="body-text">
								Lorem ipsum dolor sit amet, consectetur
								adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna
								aliqua.
							</p>
							<div class="user">
								<img
									src="<?php echo site_url('./assets/	img/user-profile.jpg')?>"
									alt="" />
								<div class="username">
									<h6>Aliyyu Gani</h6>
									<div class="star">
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
										<i
											class="bi bi-star-fill"></i>
									</div>
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
