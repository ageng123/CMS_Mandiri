<!DOCTYPE html>
<html lang="en-US">

<head>
	<title><?= $page_title ?></title>
	<meta name="author" content="Nile-Theme">
	<meta name="robots" content="index follow">
	<meta name="googlebot" content="index follow">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
	<meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- google fonts -->
	{_header_}
</head>

<body class="background-white" data-server="<?= base_url() ?>">
	<!-- header -->
	<header class="gradient-white box-shadow">
		<div class="background-grey-2 padding-tb-10px position-relative" style="background-color: #efebe8;">
				
			<div class="container">
				<div class="row">
					<div class="col-xl-8  d-none d-xl-block">
							<ul class="user-area list-inline margin-0px text-black">
								<li class="list-inline-item  padding-right-50px">
										<img src="<?= base_url('assets/img/pesan1.png') ?>"
											style="object-fit: cover;width: 30px; height: 30px" alt="" srcset="">
										<b style="color: #432a19;">info@KJKPI.com</b></li>
								<li class="list-inline-item padding-right-50px"><img
											src="<?= base_url('assets/img/telp.png') ?>"
											style="object-fit: cover;width: 24px; height: 24px" alt="" srcset="">
										<b style="color: #432a19;">(021) 4582 5710</b></li>
								<li class="list-inline-item  padding-right-50px"><img
											src="<?= base_url('assets/img/chat.png') ?>"
											style="object-fit: cover;width: 24px; height: 24px" alt="" srcset=""> 
										<b style="color: #432a19;">User Login</b></li>
							</ul>
					</div>

					<div class="col-xl-4  d-none d-lg-block">
						<ul class="list-inline margin-0px text-black" style="display: inline-flex">
							<li class="list-inline-item"><a class="facebook" href="#"><img
										src="<?= base_url('assets/img/facebook.png') ?>"
										style="object-fit: cover;width: 24px; height: 24px" alt="" srcset=""></a></li>
							<li class="list-inline-item"><a class="youtube" href="#"><img
										src="<?= base_url('assets/img/twitter.png') ?>"
										style="object-fit: cover;width: 24px; height: 24px" alt="" srcset=""></a>
							</li>
							<li class="list-inline-item"><a class="linkedin" href="#"><img
										src="<?= base_url('assets/img/instagram.png') ?>"
										style="object-fit: cover;width: 24px; height: 24px" alt="" srcset=""></a></li>
							<li class="list-inline-item">
									<form action="" style="display: flex; flex-direction: row; height: 24px; ">
									<input type="text" style="padding: 1px; font-size: 12pt; letter-spacing: 1px" name="search" id="">
									<div class="button text-center" style="height: 24px;width: 24px;background-color: #f7a91e;">
									<a href="" class="text-center"><img
										src="<?= base_url('assets/img/search.png') ?>"
										style="object-fit: cover;width: 15px; height: 15px" alt="" srcset=""></a>
									</div>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



		<div class="header-output" style="border-image: url(<?= base_url('assets/img/list.png') ?>); border-top: 0px; border-right: 0px; border-left: 0px; white-space: nowrap">
			<div class="container header-in">
				<div class="row">
					<div class="col-xl-2 col-lg-2">
						<a id="logo" href="<?= base_url();?>Landing" class="d-inline-block margin-tb-10px"><img
								src="<?= base_url('assets//') ?>img/logo.png" alt=""></a>
						<a class="mobile-toggle padding-15px background-main-color" href="#"><i
								class="fas fa-bars"></i></a>
					</div>
					<div class="col-xl-8 col-lg-9 position-inherit">
						<div class="">
							<style>
								#menu-main > li > a{
									font-size: 12pt !important;
								}
							</style>
							<ul id="menu-main" style="font-size: 14pt !important" class="float-lg-left nav-menu link-padding-tb-25px dropdown-dark">
								<li><a href="<?= base_url();?>About">Tentang <span style="color: #f7a91e">KJKPI</span></a></li>
								<li><a href="<?= base_url();?>Syarat">Syarat & Ketentuan</a></li>
								<li><a href="<?= base_url();?>Faq">FAQ</a></li>
								<li><a href="<?= base_url();?>Berita">Berita & Media</a></li>
								<li><a href="<?= base_url();?>Kontak">Kontak</a></li>
								<?php if(!($this->session->userdata('full_name'))): ?>
								<li><a href="<?= base_url();?>Profile"><img
											src="<?= base_url('assets/img/profil.png') ?>"
											style="object-fit: cover;width: 24px; height: 24px" alt="" srcset="">&nbsp;Profile</a>
								</li>
								<?php else: ?>
								<li class="has-dropdown" style="position: absolute">
									<a style="display: flex; flex-direction: row" href="<?= base_url();?>Profile"><img
											src="<?= base_url('assets/img/profil.png') ?>"
											style="object-fit: cover;width: 24px; height: 24px" alt="" srcset="">&nbsp;<div><?= $this->session->userdata('full_name') ?></div></a>
									<ul class="sub-menu">
										<li><a href="<?= base_url('profile') ?>">Profile User</a></li>
										<li><a href="<?= base_url('auth/logout') ?>">Logout</a></li>

									</ul>
								</li>
								<?php endif; ?>
							</ul>

							
						</div>
					</div>
				</div>
			</div>
		</div>

	<section class="padding-tb-6px" style="background-image: url('<?= base_url('assets/img/') ?>list2.jpg');">
		<div class="container">
			<div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
		</div>
	</section>

	
	</header>
	<!-- // header -->
	<style type="text/css">
		#rev_slider_18_1 .uranus.tparrows {
			width: 50px;
			height: 50px;
			background: rgba(255, 255, 255, 0)
		}

		#rev_slider_18_1 .uranus.tparrows:before {
			width: 50px;
			height: 50px;
			line-height: 50px;
			font-size: 40px;
			transition: all 0.3s;
			-webkit-transition: all 0.3s
		}

		#rev_slider_18_1 .uranus.tparrows:hover:before {
			opacity: 0.75
		}

		.hermes.tp-bullets {}

		.hermes .tp-bullet {
			overflow: hidden;
			border-radius: 50%;
			width: 16px;
			height: 16px;
			background-color: rgba(0, 0, 0, 0);
			box-shadow: inset 0 0 0 2px rgb(255, 255, 255);
			-webkit-transition: background 0.3s ease;
			transition: background 0.3s ease;
			position: absolute
		}

		.hermes .tp-bullet:hover {
			background-color: rgba(0, 0, 0, 0.21)
		}

		.hermes .tp-bullet:after {
			content: ' ';
			position: absolute;
			bottom: 0;
			height: 0;
			left: 0;
			width: 100%;
			background-color: rgb(255, 255, 255);
			box-shadow: 0 0 1px rgb(255, 255, 255);
			-webkit-transition: height 0.3s ease;
			transition: height 0.3s ease
		}

		.hermes .tp-bullet.selected:after {
			height: 100%
		}
		.page_content{
			max-width: 100vw;
		}
		.border-primary{
			border-bottom: 4px solid #ddaa37;
		}
	</style>
	<div class="page_content">
		{_content_}
	</div>

	{_footer_}
</body>

</html>