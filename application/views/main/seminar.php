<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_partials/head.php")?>
    
        
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/seminar-program.css'); ?>">
    </head>
    
    <body>  
        <?php $this->load->view("_partials/navbar.php")?>

		<?php $this->load->view("_partials/sub-header.php")?>

        <?php foreach ($seminar as $item) : ?> 

		<!-- bagian hero section -->
		<section id="hero-detail-program-seminar">
			<div class="container">
				<div class="hero-detail">
					<img src="<?php echo site_url($item->photo) ?> " alt="" />
				</div>
			</div>
		</section>

		<!-- bagian headline section -->
		<section id="headline-detail" class="section-p1">
			<div class="container">
				<div class="row text-center">
					<h3><?php echo $item->name ?></h3>
					<p>
						Inspirasi yang menarik melalui sharing dari
						perilaku bisnis yang berdampak ditempat kerja dan
						usaha juga komunitas. pastikan anda mendaftar
						segera
					</p>
				</div>
			</div>
		</section>

		<!-- bagian daftar section -->
		<section id="detail-daftar">
			<div class="container">
				<div class="row text-center">
					<div class="col">
						<p>Pembelajaran</p>
						<p>On Site + Aplikasi</p>
					</div>
					<div class="col">
						<p>Tanggal</p>
						<p>27 Maret 2023</p>
					</div>
					<div class="col">
						<p>Speaker</p>
						<p>Bily Triana</p>
					</div>
					<div class="col">
						<p>Pendaftar</p>
						<p>120 Peserta</p>
					</div>
					<div class="col">
						<p>Pendaftaran</p>
						<p>
							<?php 
								$subprice = number_format($item->price, 0, '.', ',');
								echo 'Rp. ' . $subprice;
							?>
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- bagian tentang seminar section -->
		<section id="tentang-seminar" class="section-p1">
			<div class="container">
				<div class="judul">
					<div class="row">
						<div class="col">
							<p>Tentang Seminar</p>
						</div>
					</div>
				</div>
				<div class="isi-konten">
					<p class="body-text">
						<?php echo $item->content ?>
					</p>
					<p class="body-text">
					</p>
				</div>
			</div>
		</section>

		<!-- bagian benefit seminar section -->
		<section id="benefit-seminar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="benefit">
							<p>Benefit Seminar</p>
						</div>
					</div>
				</div>
				<div class="isi-konten">
					<div class="row">
						<div class="col">
							<div class="benefit-checklist">
								<i class="bx bxs-check-circle"></i>
								<p>Memahami Tentang Berbisnis</p>
							</div>
							<div class="benefit-checklist">
								<i class="bx bxs-check-circle"></i>
								<p>Menambah Relasi</p>
							</div>
							<div class="benefit-checklist">
								<i class="bx bxs-check-circle"></i>
								<p>Sertifikat</p>
							</div>
						</div>
						<div class="col">
							<div class="benefit-checklist">
								<i class="bx bxs-check-circle"></i>
								<p>Memahami Tentang Berbisnis</p>
							</div>
							<div class="benefit-checklist">
								<i class="bx bxs-check-circle"></i>
								<p>Menambah Relasi</p>
							</div>
							<div class="benefit-checklist">
								<i class="bx bxs-check-circle"></i>
								<p>Sertifikat</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- bagian register section -->
		<section id="register" class="section-p1">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="register-detail">
							<p>Registrasi</p>
							<a href="">httphttps://blablablba</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- bagian kontak person section -->
		<section id="kontak" class="section-p1">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="kontak-person">
							<p>Contact Person</p>
							<p class="body-text">0963573823 / Doma</p>
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php endforeach; ?>

		<?php $this->load->view("_partials/footer.php")?>

    </body>
    </html>

        