<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php $img_header = has_custom_header() ? get_header_image() : get_custom_header()->url; ?>
	<div id="page" class="site text-light" style="background: url(<?= $img_header ?>) no-repeat  bottom / cover; ">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'travelviza'); ?></a>

		<header id="masthead" class="site-header container">
			<div class="site-branding branding">
				<div class="row">
					<div class="branding-info  mb-md-5">
						<div class="col-lg-6">
							<h1 class="site-home__title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
							the_custom_logo();
							$travelviza_description = get_bloginfo('description', 'display');
							if ($travelviza_description || is_customize_preview()) :
							?>
								<p class="site-header__description"><?php echo $travelviza_description; ?></p>
							<?php endif; ?>
						</div>
						<div class="col-lg-6 d-lg-flex justify-content-lg-between align-items-center">
							<div class="position">
								<a href="/travelviza/contact/">
									<p class="position-map d-flex text-start text-light">
										<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
											<path d="M15 0C9.72861 0 5.33203 4.24629 5.33203 9.66797C5.33203 11.7306 5.95184 13.5698 7.14135 15.2933L14.2601 26.4015C14.6055 26.9415 15.3952 26.9405 15.7399 26.4015L22.8895 15.2555C24.0534 13.6102 24.668 11.6781 24.668 9.66797C24.668 4.33705 20.3309 0 15 0ZM15 14.0625C12.577 14.0625 10.6055 12.091 10.6055 9.66797C10.6055 7.24494 12.577 5.27344 15 5.27344C17.423 5.27344 19.3945 7.24494 19.3945 9.66797C19.3945 12.091 17.423 14.0625 15 14.0625Z" fill="#F93A3A" />
											<path d="M21.8709 20.197L17.4453 27.1161C16.2997 28.9022 13.6939 28.8963 12.5538 27.1178L8.12098 20.1988C4.22074 21.1005 1.81641 22.7525 1.81641 24.7265C1.81641 28.1521 8.60906 30 15 30C21.3909 30 28.1836 28.1521 28.1836 24.7265C28.1836 22.7511 25.7759 21.0982 21.8709 20.197Z" fill="#FFED4B" />
										</svg> <?= carbon_get_theme_option('map_url'); ?>
									</p>
								</a>
								<p class="position-time">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
										<g clip-path="url(#clip0_149_164)">
											<path d="M15 0C6.7292 0 0 6.72885 0 15C0 23.2712 6.7292 30 15 30C23.2712 30 30 23.2712 30 15C30 6.72885 23.2708 0 15 0ZM15 27.8102C7.93652 27.8102 2.18977 22.0635 2.18977 15C2.18977 7.93652 7.93652 2.18977 15 2.18977C22.0635 2.18977 27.8102 7.93647 27.8102 14.9996C27.8102 22.0635 22.0635 27.8102 15 27.8102Z" fill="#F2994A" />
											<path d="M20.1095 15H15.365V8.43065C15.365 7.82591 14.8748 7.33577 14.2701 7.33577C13.6653 7.33577 13.1752 7.82591 13.1752 8.43065V16.0949C13.1752 16.6996 13.6653 17.1898 14.2701 17.1898H20.1095C20.7142 17.1898 21.2044 16.6996 21.2044 16.0949C21.2044 15.4901 20.7142 15 20.1095 15Z" fill="#F2994A" />
										</g>
										<defs>
											<clipPath id="clip0_149_164">
												<rect width="30" height="30" fill="white" />
											</clipPath>
										</defs>
									</svg><?= carbon_get_theme_option('time');	?>
								</p>
							</div><a href="#">
							</a>
							<div class="phone justify-content-center d-flex align-items-center phohe-nomber">
								<div class="phohe-nomber__whatsapp">
									<svg class="position-svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
										<g clip-path="url(#clip0_1_82)">
											<circle cx="12.5" cy="12.5" r="12.5" fill="white" />
											<path d="M21.3372 3.65945C16.4549 -1.22136 8.54028 -1.22019 3.65947 3.66214C-1.22134 8.54446 -1.22017 16.459 3.66215 21.3398C8.54448 26.2206 16.459 26.2195 21.3398 21.3371C23.6839 18.9924 25.0004 15.8124 24.9997 12.497C24.999 9.18201 23.6815 6.0031 21.3372 3.65945ZM18.9305 17.412C18.9299 17.4125 18.9294 17.4131 18.9288 17.4137V17.4095L18.2955 18.0387C17.4764 18.8681 16.2834 19.2094 15.1496 18.9387C14.0073 18.6329 12.9213 18.1462 11.933 17.497C11.0147 16.9101 10.1637 16.2241 9.39545 15.4512C8.68857 14.7494 8.05351 13.9789 7.4996 13.1512C6.89374 12.2604 6.4142 11.2901 6.0746 10.2678C5.6853 9.06683 6.0079 7.749 6.90795 6.86365L7.6496 6.122C7.85581 5.91487 8.19086 5.91414 8.39794 6.12034C8.39848 6.12088 8.39907 6.12141 8.3996 6.122L10.7413 8.46365C10.9484 8.66985 10.9491 9.00491 10.7429 9.21199C10.7424 9.21253 10.7418 9.21307 10.7413 9.21365L9.36625 10.5887C8.97172 10.9789 8.92211 11.599 9.2496 12.047C9.74692 12.7295 10.2973 13.3718 10.8955 13.9679C11.5624 14.6377 12.2874 15.247 13.0621 15.7887C13.5097 16.1009 14.1165 16.0483 14.5038 15.6637L15.8329 14.3137C16.0391 14.1066 16.3742 14.1058 16.5812 14.312C16.5818 14.3126 16.5823 14.3131 16.5829 14.3137L18.9288 16.6637C19.1359 16.8699 19.1367 17.2049 18.9305 17.412Z" fill="#47C13C" />
										</g>
										<defs>
											<clipPath id="clip0_1_82">
												<rect width="25" height="25" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</div>
								<div class="phohe-nomber__phone">
									<?php $phone_one = carbon_get_theme_option('phone_number_one');
									if ($phone_one) : ?>
										<p class="phone"><a href="" class="text-light"><?php echo $phone_one; ?></a>
										</p>
									<?php endif; ?>
									<?php $phone_ty = carbon_get_theme_option('phone_number_ty');
									if ($phone_ty) : ?>
										<p class="phone1"> <a href="#" class="text-light"><?php echo $phone_ty; ?></a></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-md navbar-light bg-light position-relative">
				<div class="navbar-menu">
					<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'mega-menu',
							'menu'            => '',
							'container'       => false,
							'menu_class' =>   'navbar-nav',
							'container_id'    => '',
							'menu_id'         => 'id-menu',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
							'depth'           => 0,
							// 'walker'          => new travelviza_Menu(),

						)
					)
					?>
					<?php get_search_form(); ?>
					<!-- </div> -->
				</div>
			</nav>
		</header>