<?php /*
Template Name: шаблон Азия
Template Post Type: post
*/
?>
<?php

get_header();
?>

<section class="orders">
	<div class="row">
		<div class="col guest bg-content mt-5 ">
			<div class="bg-block bg-visa ">
				<?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'photo-posts'), 'full'); ?>
				<img class="w-100" src="<?= $img_src; ?>" alt="photo" />
				<h2 class="bg-title "><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>
<section class="direction position-relative">
	<div class="direction-bg__right position-absolute ">
		<img src="/wp-content/uploads/2023/12/bg-direction.png" alt="">
	</div>
	<?php
	global $post;
	$post = get_post(333); ?>
	<h3 class="direction-title text-center "><?php the_title(); ?></h3>
	<div class="swiper directionSwiper-slider container ">
		<div class="swiper-wrapper">
			<?php
			$slides = carbon_get_post_meta(get_the_ID(), 'truemisha_slider');

			if ($slides) {
				foreach ($slides as $slide) {
					echo '<div class="swiper-slide directionSwiper-slide">';
					// смысла в слайде ведь нет, если не используется фото??
					if (!$slide['photo']) {
						continue; // скипаем итерацию цикла, если нет фотки
					}
					echo wp_get_attachment_image($slide['photo']);
					if ($slide['title']) { // empty() и isset() нет нужды использовать тут
						echo '<h4 class="slide-title">' . esc_html($slide['title']) . '</h4>';
					}
					echo '</div>';
				}
			}
			wp_reset_postdata(); // Сбрасываем $post
			?>
		</div>
		<div class="pagination directionSwiper-pagination d-flex ">
			<div class="s-button-next">
				<svg xmlns="http://www.w3.org/2000/svg" width="28" height="25" viewBox="0 0 28 25" fill="none">
					<g clip-path="url(#clip0_52_85)">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.7231 2.21779C10.5718 2.21779 7.54962 3.31167 5.32132 5.25879C3.09303 7.20591 1.84118 9.84677 1.84118 12.6004C1.84118 15.3541 3.09303 17.9949 5.32132 19.942C7.54962 21.8891 10.5718 22.983 13.7231 22.983C16.8744 22.983 19.8966 21.8891 22.1249 19.942C24.3532 17.9949 25.6051 15.3541 25.6051 12.6004C25.6051 9.84677 24.3532 7.20591 22.1249 5.25879C19.8966 3.31167 16.8744 2.21779 13.7231 2.21779ZM13.7231 24.4663C10.1217 24.4663 6.66769 23.2161 4.12106 20.9908C1.57444 18.7656 0.143759 15.7474 0.143759 12.6004C0.143759 9.45339 1.57444 6.43526 4.12106 4.20999C6.66769 1.98471 10.1217 0.734558 13.7231 0.734558C17.3246 0.734558 20.7786 1.98471 23.3252 4.20999C25.8718 6.43526 27.3025 9.45339 27.3025 12.6004C27.3025 15.7474 25.8718 18.7656 23.3252 20.9908C20.7786 23.2161 17.3246 24.4663 13.7231 24.4663ZM19.6641 13.342C19.8892 13.342 20.1051 13.2639 20.2642 13.1248C20.4234 12.9857 20.5128 12.7971 20.5128 12.6004C20.5128 12.4037 20.4234 12.2151 20.2642 12.076C20.1051 11.9369 19.8892 11.8588 19.6641 11.8588L9.83094 11.8588L13.4753 8.67578C13.6347 8.53652 13.7242 8.34765 13.7242 8.15071C13.7242 7.95378 13.6347 7.76491 13.4753 7.62565C13.3159 7.48639 13.0998 7.40816 12.8744 7.40816C12.649 7.40816 12.4329 7.48639 12.2735 7.62565L7.18126 12.0753C7.10223 12.1442 7.03952 12.2261 6.99673 12.3162C6.95395 12.4063 6.93192 12.5029 6.93192 12.6004C6.93192 12.698 6.95395 12.7945 6.99673 12.8846C7.03952 12.9747 7.10223 13.0566 7.18126 13.1255L12.2735 17.5752C12.4329 17.7144 12.649 17.7927 12.8744 17.7927C13.0998 17.7927 13.3159 17.7144 13.4753 17.5752C13.6347 17.4359 13.7242 17.247 13.7242 17.0501C13.7242 16.8532 13.6347 16.6643 13.4753 16.525L9.83094 13.342L19.6641 13.342Z" fill="black" />
					</g>
					<defs>
						<clipPath id="clip0_52_85">
							<rect width="23.7317" height="27.1587" fill="white" transform="matrix(0 1 -1 0 27.3025 0.734558)" />
						</clipPath>
					</defs>
				</svg>
			</div>
			<div class="s-button-prev">
				<svg xmlns="http://www.w3.org/2000/svg" width="28" height="25" viewBox="0 0 28 25" fill="none">
					<g clip-path="url(#clip0_52_88)">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.7268 22.7294C16.8781 22.7294 19.9003 21.6355 22.1286 19.6884C24.3569 17.7412 25.6088 15.1004 25.6088 12.3467C25.6088 9.59309 24.3569 6.95223 22.1286 5.00512C19.9003 3.058 16.8781 1.96412 13.7268 1.96412C10.5755 1.96412 7.55332 3.058 5.32502 5.00512C3.09673 6.95223 1.84488 9.59309 1.84488 12.3467C1.84488 15.1004 3.09673 17.7412 5.32502 19.6884C7.55332 21.6355 10.5755 22.7294 13.7268 22.7294ZM13.7268 0.480885C17.3283 0.480885 20.7823 1.73103 23.3289 3.95631C25.8755 6.18159 27.3062 9.19972 27.3062 12.3467C27.3062 15.4938 25.8755 18.5119 23.3289 20.7372C20.7823 22.9624 17.3283 24.2126 13.7268 24.2126C10.1254 24.2126 6.67139 22.9624 4.12477 20.7372C1.57814 18.5119 0.147461 15.4938 0.147461 12.3467C0.147461 9.19972 1.57814 6.18159 4.12477 3.95631C6.67139 1.73103 10.1254 0.480885 13.7268 0.480885ZM7.78585 11.6051C7.56076 11.6051 7.34489 11.6833 7.18573 11.8223C7.02656 11.9614 6.93714 12.15 6.93714 12.3467C6.93714 12.5434 7.02656 12.7321 7.18573 12.8711C7.34489 13.0102 7.56076 13.0884 7.78585 13.0884L17.619 13.0884L13.9747 16.2714C13.8153 16.4106 13.7258 16.5995 13.7258 16.7964C13.7258 16.9934 13.8153 17.1822 13.9747 17.3215C14.134 17.4607 14.3502 17.539 14.5755 17.539C14.8009 17.539 15.0171 17.4607 15.1764 17.3215L20.2687 12.8718C20.3477 12.8029 20.4104 12.7211 20.4532 12.631C20.496 12.5409 20.518 12.4443 20.518 12.3467C20.518 12.2492 20.496 12.1526 20.4532 12.0625C20.4104 11.9724 20.3477 11.8906 20.2687 11.8217L15.1764 7.37198C15.0171 7.23272 14.8009 7.15449 14.5755 7.15449C14.3502 7.15449 14.134 7.23272 13.9747 7.37198C13.8153 7.51123 13.7258 7.7001 13.7258 7.89704C13.7258 8.09398 13.8153 8.28285 13.9747 8.4221L17.619 11.6051L7.78585 11.6051Z" fill="black" />
					</g>
					<defs>
						<clipPath id="clip0_52_88">
							<rect width="23.7317" height="27.1587" fill="white" transform="matrix(0 -1 1 0 0.147461 24.2126)" />
						</clipPath>
					</defs>
				</svg>
			</div>
		</div>
	</div>
</section>

<section class="container  d-flex">
	<div class="row align-items-lg-baseline">
		<div class="col d-flex flex-wrap align-items-baseline ">
			<div class="col-lg-12 col-xl-9 ">
				<h5 class="card-news__title title"><?php the_title(); ?></h5>
				<div class="news news-visa">
					<div class="card card-news card-visa border-none ">
						<div class="row">
							<div class="card-news__left ">
								<div class="row ">
									<div class="card-body card-shengen d-md-flex">
										<div class="card-shengen__img photo-shengen me-lg-4">
											<?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'photo-shengen'), 'full'); ?>
											<img class="me-lg-4" src="<?php echo $img_src; ?>" alt="photo" />
										</div>
										<div class="card-shengen_text">
											<h4 class="shengen-title">
												<?= carbon_get_theme_option('shengen-title'); ?>
											</h4>
											<small class="title-smull">
												<?= carbon_get_theme_option('title-smull'); ?>
											</small>
											<h5 class="title-residence mb-2">
												<?= carbon_get_theme_option('title-residence'); ?>
											</h5>
											<h5 class="title-receipt mb-2">
												<?= carbon_get_theme_option('title-receipt'); ?>
											</h5>
											<h5 class="title-text mb-2">
												<?= carbon_get_theme_option('title-text'); ?>
											</h5>
											<ul class="card-shengen__list">
												<li class="text-paswort">
													<?= carbon_get_theme_option('text-paswort'); ?></li>
												<li>
													<?= carbon_get_theme_option('text-foto'); ?>
												</li>
												<li>
													<?= carbon_get_theme_option('text-vextract'); ?>
												</li>
												<li>
													<?= carbon_get_theme_option('text-reference'); ?>
												</li>
											</ul>
											<p class="text-discount mt-2">
												<?= carbon_get_theme_option('text-discount'); ?>
											</p>
										</div>
									</div>
									<p class="text-payment">
										<?= carbon_get_theme_option('text-payment'); ?>
									</p>
								</div>
							</div>
							<div class="card-news__right  pt-5">
								<div class="card-body card-shengen d-md-flex ">
									<div class="card-shengen_text text-md-end">
										<h4 class="shengen-title d-inline-block">
											<?= carbon_get_theme_option('shengen-title-del'); ?>
										</h4>
										<small class="title-smull">
											<?= carbon_get_theme_option('title-smull'); ?>
										</small>
										<h5 class="title-residence mb-2">
											<?= carbon_get_theme_option('title-residence-del'); ?>
										</h5>
										<h5 class="title-receipt mb-2">
											<?= carbon_get_theme_option('title-receipt-del'); ?>
										</h5>
										<h5 class="title-text mb-2">
											<?= carbon_get_theme_option('title-text-del'); ?>
										</h5>
										<ul class="card-shengen__list ">
											<li> <?= carbon_get_theme_option('text-paswort'); ?>
											</li>
											<li>
												<?= carbon_get_theme_option('text-foto'); ?>
											</li>
											<li>
												<?= carbon_get_theme_option('text-agreement-del'); ?>
											</li>
											<li>
												<?= carbon_get_theme_option('text-reference-del'); ?>
											</li>
										</ul>
										<p class="text-discount">
											<?= carbon_get_theme_option('text-discount'); ?>
										</p>
									</div>
									<div class="photo-shengen photo-shengen-del">
										<?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'photo-shengen-del'), 'full'); ?>
										<img class="ms-lg-4" src="<?php echo $img_src; ?>" alt="photo" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<h2 class="title-visa text-center">
						<?= carbon_get_theme_option('title-visa'); ?>
					</h2>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
</section>

<div class="america-bg__left position-absolute single-bg">
	<img src="/wp-content/uploads/2023/12/america-right.png" alt="">
</div>

<?php get_template_part('/inc/componens/form'); ?>

<?php get_footer(); ?>