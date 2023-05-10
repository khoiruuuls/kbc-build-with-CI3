<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_partials/head.php")?>
    
        <title><?php echo $page_title; ?></title>
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>"> -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">


    </head>
    
    <body>  
		<?php $this->load->view("_partials/navbar.php")?>

		<section id="home">
			<img src="<?php echo base_url('assets/img/home.jpg')?>" alt="">
			<div class="headline">
				<h3>Tingkatkan <span>Performa Bisnis</span></h3>
				<h3>Anda Sekarang Juga!</h3> 
				<div class="text-hero">
					<p class="body-text">
					Dapatkan solusi yang tepat dan efektif dari konsultan bisnis yang ahli di bidangnya melalui program-program yang inovatif untuk membantu mencapai tujuan bisnis Anda.
					</p>
					<button class="primary-button">
						Eksplore Sekarang
					</button>
				</div>
			</div>
		</section>

		<section id="partnerku" class="section-p1">
			<div class="container">
				<div class="list-partner">
					<img src="<?php echo base_url('assets/img/partner/partner (1).jpg')?>" alt="">
					<img src="<?php echo base_url('assets/img/partner/partner (2).jpg')?>" alt="">
					<img src="<?php echo base_url('assets/img/partner/partner (3).jpg')?>" alt="">
					<img src="<?php echo base_url('assets/img/partner/partner (4).jpg')?>" alt="">
					<img src="<?php echo base_url('assets/img/partner/partner (5).jpg')?>" alt="">
					<img src="<?php echo base_url('assets/img/partner/partner (6).jpg')?>" alt="">
					<img src="<?php echo base_url('assets/img/partner/partner (7).jpg')?>" alt="">
					<img src="<?php echo base_url('assets/img/partner/partner (8).jpg')?>" alt="">
				</div>
			</div>
		</section>


		<section id="about-us" class="section-p1 ">
			<div class="container">
				<div class="row display-default">
				<div class="col">
					<iframe class="frame" src="https://www.youtube.com/embed/Vrl5dYPf82E" allowfullscreen></iframe>
				</div>
				<div class="col">
					<div class="title-box">
						<span>Tentang Kami</span>
						<h6 class="body-text mt-3">Kami Berkomitmen Menyusun Solusi Bisnis yang Unik dan Sesuai dengan Kebutuhan Anda.</h6>
					</div>
					<p class="body-text">Kingdom Business Community (KBC)  adalah sebuah gerakan moral dalam dunia kerja berbentuk yayasan niralaba dengan fokus untuk memiliki ‘transformasi pola pikir’ dalam melakukan Bisnis / Pekerjaan dengan Tujuan yang Mulia (tidak hanya orientasi profit) dan mempraktekkan nilai spritual dalam bekerja.</p>
				</div>
				</div>
			</div>
		</section>

		<section id="our-service" class="section-p1">
			<div class="container">
				<div class="title-box">
					<span>Layanan Kami</span>
					<h6 class="mt-3">Tim Kami Bekerja Sama Untuk Merancang Strategi</h6>
					<h6>yang Tepat Guna Meningkatkan Performa Bisnis Anda.</h6>
				</div>
				<div class="row our-gap">
					<div class="card card-our-service col">
						<div class="icon-frame">
							<i class="ri-team-fill"></i>
						</div>
						<div class="text-group">
							<h6>Training</h6>
							<p class="body-text">Suatu praktik pembelajaran yang bertujuan untuk meningkatkan pengetahuan dan keterampilan anggota tim Anda, dengan harapan dapat memberikan kontribusi positif pada produktivitas dan kinerja perusahaan secara keseluruhan.</p>
						</div>
						<button class="log-secondary-button">
							Baca Lebih Lengkap
						</button>
					</div>
					<div class="card card-our-service col">
						<div class="icon-frame">
							<i class="ri-open-arm-fill"></i>
						</div>
						<div class="text-group">
							<h6>Coaching & Mentoring</h6>
							<p class="body-text">Proses pembelajaran yang mampu memberikan arahan untuk membantu Anda dalam memahami dan mengatasi tantangan bisnis yang dihadapi, serta mengemmt-3kan strategi dan keterampilan yang diperlukan untuk mencapai tujuan bisnis.</p>
						</div>
						<button class="log-secondary-button">
							Baca Lebih Lengkap
						</button>
					</div>
					<div class="card card-our-service col">
						<div class="icon-frame">
							<i class="ri-parent-fill"></i>
						</div>
						<div class="text-group">
							<h6>Consulting</h6>
							<p class="body-text">Proses diskusi dengan konsultan yang ahli dibidangnya sehingga Anda dapat memperoleh analisis, solusi, serta rekomendasi untuk mengatasi masalah  terkait bisnis, serta memberikan ide dan saran dalam meningkatkan kinerja bisnis Anda. </p>
						</div>
						<button class="log-secondary-button">
							Baca Lebih Lengkap
						</button>
					</div>
				</div>
			</div>
		</section>
		<section id="our-consultant" class="section-p1">
			<div class="container">
				<div class="title-box">
					<span>Konsultan Kami</span>
					<h6 class="mt-3">Para Ahli dalam Bidangnya yang Berdedikasi Untuk </h6>
					<h6>Memberikan Layanan Terbaik Kepada Anda.</h6>
				</div>
				<div class="row our-gap">
					<div class="box-icon">
						<i class="ri-arrow-left-line"></i>
					</div>
					<div class="card card-our-consultant col">
						<img src="<?php echo base_url('assets/img/consultant/consultant (1).jpg')?>" alt="">
						<h6>Khoirul</h6>
						<p>Coach</p>
					</div>
					<div class="card card-our-consultant col">
						<img src="<?php echo base_url('assets/img/consultant/consultant (2).jpg')?>" alt="">
						<h6>Khoirul</h6>
						<p>Coach</p>
					</div>
					<div class="card card-our-consultant col">
						<img src="<?php echo base_url('assets/img/consultant/consultant (3).jpg')?>" alt="">
						<h6>Khoirul</h6>
						<p>Psycholog</p>
					</div>
					<div class="box-icon">
						<i class="ri-arrow-right-line"></i>
					</div>
				</div>
			</div>
		</section>

		<section id="tobe-consultant">
			<div class="title-box">
			<img src="<?php echo base_url('assets/img/tobe-consultant.jpg')?>" alt="">
			<div class="container tobe-consultant-box">
				<div class="col-md-6">
					<h5>Tertarik Bergabung Menjadi Konsultan?</h5>
					<div class="text-hero mt-3">
						<p class="body-text">
						Dengan menjadi konsultan kami, Anda memiliki kesempatan untuk berkontribusi dalam membantu bisnis dan pelanggan kami, serta mengembangkan karir Anda dalam bisnis. Segera bergabung dengan kami dan jadilah bagian dari tim ahli kami yang berdedikasi dan berpengalaman
						</p>
					</div>
					<button class="primary-button mt-3">Daftar Konsultan</button>
				</div>
			</div>
			</div>
		</section>

		<section id="our-consultant" class="section-p1">
			<div class="container">
				<div class="title-box">
					<span>Program kami</span>
					<h6 class="mt-3">Temukan Program yang Tepat dalam Membantu Anda</h6>
					<h6> Mencapai Tujuan Bisnis dengan Lebih Efektif.</h6>
				</div>
				<div class="row our-gap">
					<div class="card card-our-consultant col">
						<img src="<?php echo base_url('assets/img/program/our-program (1).jpg')?>" alt="">
						<div class="our-consultant-text">
							<span>Training</span>
							<h6>Transformasi Dimulai Dari Pemimpin</h6>
							<p>23 Juni - 30 Juli 2023</p>
							<span class="text-capitalize">Rp. 1.200.000 - 3.500.000</span>
						</div>
					</div>
					<div class="card card-our-consultant col">
						<img src="<?php echo base_url('assets/img/program/our-program (2).jpg')?>" alt="">
						<div class="our-consultant-text">
							<span>Training</span>
							<h6>Kingdom Financial for Kids Program</h6>
							<p>23 Juni - 30 Juli 2023</p>
							<span class="text-capitalize">Rp. 1.200.000 - 3.500.000</span>
						</div>
					</div>
					<div class="card card-our-consultant col">
						<img src="<?php echo base_url('assets/img/program/our-program (3).jpg')?>" alt="">
						<div class="our-consultant-text">
							<span>Training</span>
							<h6>Shifting Up: Tranforming Your Business</h6>
							<p>23 Juni - 30 Juli 2023</p>
							<span class="text-capitalize">Rp. 1.200.000 - 3.500.000</span>
						</div>
					</div>
					<div class="card card-our-consultant col">
						<img src="<?php echo base_url('assets/img/program/our-program (4).jpg')?>" alt="">
						<div class="our-consultant-text">
							<span>Training</span>
							<h6>Sukses Sejati Blended Learning</h6>
							<p>23 Juni - 30 Juli 2023</p>
							<span class="text-capitalize">Rp. 1.200.000 - 3.500.000</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="testimoni">
			<div class="layer">
				<img src="<?php echo base_url('assets/img/testimoni.jpg')?>" alt="">
			</div>
			<div class="container testimoni-box">
				<div class="title-box text-white">
					<span class="text-uppercase text-white">Blog & Artikel</span>
					<h6 class="mt-3">Apa yang Dikatakan Oleh Klien Kami?</h6>
				</div>
				<div class="row our-gap">
					<div class="card card-testimoni col">
						<img src="<?php echo base_url('assets/img/svg/double-quote.svg')?>" alt="">
						<div class="testimoni-text text-gap">
							<p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
							<div class="display-default testimoni-user text-gap">
								<img src="<?php echo base_url('assets/img/user-profile.jpg')?>" alt="">
								<div class="box-user">
									<p>Khoirul</p>
									<div class="star-user">
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-testimoni col">
						<img src="<?php echo base_url('assets/img/svg/double-quote.svg')?>" alt="">
						<div class="testimoni-text text-gap">
							<p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
							<div class="display-default testimoni-user text-gap">
								<img src="<?php echo base_url('assets/img/user-profile.jpg')?>" alt="">
								<div class="box-user">
									<p>Khoirul</p>
									<div class="star-user">
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-testimoni col">
						<img src="<?php echo base_url('assets/img/svg/double-quote.svg')?>" alt="">
						<div class="testimoni-text text-gap">
							<p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
							<div class="display-default testimoni-user text-gap">
								<img src="<?php echo base_url('assets/img/user-profile.jpg')?>" alt="">
								<div class="box-user">
									<p>Khoirul</p>
									<div class="star-user">
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="blog" class="section-p1">
			<div class="container">
				<div class="title-box">
					<span>Blog & Artikel</span>
					<h6 class="mt-3">Informasi Terbaru Tentang Produk dan Layanan Kami</h6>
					<h6>untuk Memenuhi Kebutuhan Kisnis Anda.</h6>
				</div>
				<div class="row display-default">
					<div class="col">
						<img src="<?php echo base_url('assets/img/blog/headline-blog.jpg')?>" alt="">
					</div>
					<div class="col">
						<p>23 Juni - 30 Juli 2023</p>
						<h6 class="body-text">Merancang Strategi Kebenaran : Kisah Stanley</h6>
						<p class="body-text">Namanya mudah diingat orang, Stanley. Pendidikannya mudah dilupakan orang, lulusan Sekolah Menengah Kejuruan. Perawakannya mudah dilecehkan, karena kurus, pendek dan tidak menunjukkan profil 'macho' sehingga dikejar para gadis. Namun gaya bicara dan semangatnya tak mudah diikuti orang karena termasuk manusia luar biasa.</p>
						<a href="<?php echo base_url('')?>">Baca Selengkapnya</a>
					</div>
				</div>
				<div class="row our-gap">
					<div class="card card-blog col">
						<img src="<?php echo base_url('assets/img/blog/blog (1).jpg')?>" alt="">
						<div class="blog-text">
							<p>23 Juni - 30 Juli 2023</p>
							<h6>Transformasi Dimulai Dari Pemimpin</h6>
							<p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun, ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
							<a href="<?php echo base_url('')?>">Baca Selengkapnya</a>
						</div>
					</div>
					<div class="card card-blog col">
						<img src="<?php echo base_url('assets/img/blog/blog (2).jpg')?>" alt="">
						<div class="blog-text">
							<p>23 Juni - 30 Juli 2023</p>
							<h6>Kingdom Financial for Kids Program</h6>
							<p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun, ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
							<a href="<?php echo base_url('')?>">Baca Selengkapnya</a>
						</div>
					</div>
					<div class="card card-blog col">
						<img src="<?php echo base_url('assets/img/blog/blog (3).jpg')?>" alt="">
						<div class="blog-text">
							<p>23 Juni - 30 Juli 2023</p>
							<h6>Shifting Up: Tranforming Your Business</h6>
							<p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun, ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
							<a href="<?php echo base_url('')?>">Baca Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php $this->load->view("_partials/footer.php")?>

    </body>
    </html>
