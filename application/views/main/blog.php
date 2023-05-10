<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_partials/head.php")?>
    
        <title><?php echo $page_title; ?></title>
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/blog.css">
    </head>
    
    <body>  
        <?php $this->load->view("_partials/navbar.php")?>

		<section id="header-post" class="img-blog">
			<div class="header-post-wrap">
				<div class="container">
					<div class="row">
						<div class="header-post-box">
							<div class="route">
								<p><strong>Beranda</strong></p>
								<i class="bi bi-chevron-right"></i>
								<p>Blog</p>
							</div>
							<h1>Blog</h1>
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

		<section id="headline-blog">
			<div class="container">
				<div class="headline-blog-wrap">
					<img src="./assets/img/blog-headline.jpg" alt="" />
					<div class="blog-text">
						<h2>Strategi Bisnis</h2>
						<p class="body-text">
							Lorem ipsum dolor sit amet, consectetur
							adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip
							ex ea commodo consequat. Duis aute irure
							dolor in reprehenderit in voluptate velit
							esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt
							mollit anim id est laborum
						</p>
						<a href="blog-content.html">
							<button class="primary-button">
								Baca Selengkapnya
							</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="blog">
			<div class="container">
				<h3 class="text-center">Recent Post</h3>
				<div class="row">
					<div class="col-4">
						<div class="card">
							<img src="./assets/img/blog.jpg" alt="" />
							<div class="card-text">
								<p>
									2 days ago by
									<span>Khoirul Fahmi</span>
								</p>
								<h5>Strategi Bisnis</h5>
								<p class="body-text">
									Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut
									labore et dolore magna aliqua. Ut
									enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi
									ut aliquip ex ea commodo consequat.
									Duis aute irure dolor in
									reprehenderit in voluptate velit
									esse cillum dolore eu fugiat nulla
									pariatur.
								</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="./assets/img/blog.jpg" alt="" />
							<div class="card-text">
								<p>
									2 days ago by
									<span>Khoirul Fahmi</span>
								</p>
								<h5>Strategi Bisnis</h5>
								<p class="body-text">
									Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut
									labore et dolore magna aliqua. Ut
									enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi
									ut aliquip ex ea commodo consequat.
									Duis aute irure dolor in
									reprehenderit in voluptate velit
									esse cillum dolore eu fugiat nulla
									pariatur.
								</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="./assets/img/blog.jpg" alt="" />
							<div class="card-text">
								<p>
									2 days ago by
									<span>Khoirul Fahmi</span>
								</p>
								<h5>Strategi Bisnis</h5>
								<p class="body-text">
									Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut
									labore et dolore magna aliqua. Ut
									enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi
									ut aliquip ex ea commodo consequat.
									Duis aute irure dolor in
									reprehenderit in voluptate velit
									esse cillum dolore eu fugiat nulla
									pariatur.
								</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="./assets/img/blog.jpg" alt="" />
							<div class="card-text">
								<p>
									2 days ago by
									<span>Khoirul Fahmi</span>
								</p>
								<h5>Strategi Bisnis</h5>
								<p class="body-text">
									Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut
									labore et dolore magna aliqua. Ut
									enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi
									ut aliquip ex ea commodo consequat.
									Duis aute irure dolor in
									reprehenderit in voluptate velit
									esse cillum dolore eu fugiat nulla
									pariatur.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php $this->load->view("_partials/footer.php")?>
    </body>
    </html>
