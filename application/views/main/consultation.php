<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_partials/head.php")?>
    
        
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/consultation.css">
    </head>
    
    <body>  
        <?php $this->load->view("_partials/navbar.php")?>

		<?php $this->load->view("_partials/sub-header.php")?>

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
								<img src="<?php echo site_url('assets/img/consultant/'.$item->photo )?>" alt="" />
							</div>
							<div class="text-card">
								<div class="mentor-detail">
									<div class="mentor-name">
										<h6><?php echo $item->name ?></h6>
										<p class="text-property"><?php echo $item->profesi?></p>
									</div>
									<div class="box-icon">
										<i class="ri-heart-fill"></i>
									</div>
								</div>
								<div class="mentor-name">
									<p>
										Setiap hari | Tatap muka & Online
									</p>
									<p>
									<div class="star-user">
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
									</div>
									</p>
								</div>
								<div class="mentor-button">
									<button class="log-primary-button">
										Jasa layanan
									</button>
									<a href="<?php echo 'homecontroller/detail/'.$item->id?>">
										<button
											class="log-secondary-button">
											Profile
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
