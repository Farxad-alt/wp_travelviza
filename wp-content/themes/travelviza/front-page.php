<?php


get_header('home');
?>
<main id="primary" class="site-main">
	<!-- Главная -->
	<section class="glavnaya">
		<div class="row">
			<?php
			$posts = get_posts([
				'numberposts' => 1,
				'category_name'    => 'glavnaya',

			]);
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="glavnaya-container container d-lg-flex ">
					<div class="header-content col-md-6 col-lg-6">
						<h1 class="header-title">
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
						<a href="" class=" header-button ">Заказать визу
						</a>
					</div>

					<?php get_template_part('/inc/componens/modal'); ?>
					<div class=" wrapper  col-md-6 offset-lg-2 col-lg-3 slider-block  end-0">
						<?php $slider_title = carbon_get_post_meta(158, 'slider_title');
						if ($slider_title) : ?>
							<h3 class="slider_title"><?= $slider_title; ?></h3>
						<?php endif; ?>
						<div class="image-slider swiper-container header-sliders">
							<h4 class="text-dark slider_text text-center">
								<?= carbon_get_post_meta(158, 'slider_text'); ?></h4>
							<div class=" slider_wrapper">
								<!-- Slider main container -->
								<div class="swiper image-swiper">
									<!-- Additional required wrapper -->
									<div class="swiper-wrapper">
										<!-- Slides -->
										<div class="swiper-slide image-slide">
											<?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(158, 'crb_image'), 'full'); ?>
											<img src="<?php echo $img_src; ?>" alt="photo" />
										</div>
										<div class="swiper-slide image-slide"> <?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(158, 'crb_image1'), 'full'); ?>
											<img src="<?php echo $img_src; ?>" alt="photo" />
										</div>
										<div class="swiper-slide image-slide"> <?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(158, 'crb_image2'), 'full'); ?>
											<img src="<?php echo $img_src; ?>" alt="photo" />
										</div>
									</div>
								</div>
								<p class="text-dark slider_description text-center">
									<?= carbon_get_post_meta(158, 'slider_description'); ?></p>
								<div class="block-button d-flex justify-content-center">
									<button class="button_price ">
										<?= carbon_get_post_meta(158, 'button_price'); ?>
									</button>
									<a href="#" class="button_details ">
										<?= carbon_get_post_meta(158, 'button_details'); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-pagination-image d-flex justify-content-center mt-3"></div>
					</div>
				</div>

			<?php
			}
			wp_reset_postdata(); // Сбрасываем $post
			?>
		</div>
		</div>
	</section>
	<!-- Наши достоинства -->
	<section class="dignity position-relative">
		<div class="dignity-bg__right ">
			<img src="/wp-content/themes/travelviza/assets/img/bg-right_1.svg" alt="">
		</div>

		<div class="row">
			<?php
			$posts = get_posts([
				'numberposts' => 2,
				'category_name'    => 'svyaz',

			]);
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="container">
					<div class="dignity-content ">
						<div class="row">
							<div class="col form-block d-flex align-items-center">
								<div class="form d-lg-flex">
									<?php echo do_shortcode('[contact-form-7 id="b463906" title="Без названия"]'); ?>
								</div>
								<?php $img_src = wp_get_attachment_image_url(carbon_get_theme_option('form-img'), 'full'); ?>
								<img src="<?php echo $img_src; ?>" alt="photo" />
							</div>

						</div>
						<h3 class=" dignity-title text-center"><?php the_title(); ?></h3>
						<div class="dignity__item  d-md-flex d-grid justify-content-center text-center ">
							<div class="dignity__item-img  " data-aos="zoom-in">
								<img src="<?= carbon_get_the_post_meta('photo1_klube'); ?>">
								<h5 class="dignity__title text">
									<?= carbon_get_the_post_meta("text1_klube"); ?>
								</h5>
								<p class="dignity__text text">
									<?= carbon_get_the_post_meta("textarea1_klube"); ?>
								</p>
							</div>
							<div class="dignity__item-img " data-aos="zoom-in">
								<img src="<?= carbon_get_the_post_meta('photo2_klube'); ?>">
								<h5 class="dignity__title text">
									<?= carbon_get_the_post_meta("text2_klube"); ?>
								</h5>
								<p class="dignity__text text">
									<?= carbon_get_the_post_meta("textarea2_klube"); ?>
								</p>
							</div>
							<div class="dignity__item-img  " data-aos="zoom-in">
								<img src="<?= carbon_get_the_post_meta('photo3_klube'); ?>">
								<h5 class="dignity__title text">
									<?= carbon_get_the_post_meta("text3_klube"); ?>
								</h5>
								<p class="dignity__text text">
									<?= carbon_get_the_post_meta("textarea3_klube"); ?>
								</p>
							</div>
						</div>

					</div>

				</div>
			<?php
			}
			wp_reset_postdata(); // Сбрасываем $post
			?>
		</div>
		<div class="dignity-bg__left">
			<img src="/wp-content/themes/travelviza/assets/img/bg-left.svg" alt="">
		</div>
	</section>
	<!-- Популярные заказы -->
	<section class="orders">
		<div class="row">
			<?php
			$posts = get_posts([
				'numberposts' => 1,
				'category_name'    => 'orders'

			]);
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="col orders bg-content">
					<div class="bg-block">
						<?php echo travelviza_post_thumb(get_the_ID(), 'fill', 'bg-full-thumb') ?>
						<h2 class="bg-title text-center"><?php the_title(); ?></h2>
					</div>
				</div>
			<?php
			}
			wp_reset_postdata(); // Сбрасываем $post
			?>
		</div>
	</section>
	<?php get_template_part('/templates/category-zakazy'); ?>
	<section class="orders">
		<div class="row">
			<?php
			$posts = get_posts([
				'numberposts' => 1,
				'category_name'    => 'guest_img'

			]);
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="col guest bg-content">
					<div class="bg-block ">
						<?php echo travelviza_post_thumb(get_the_ID(), 'fill', 'bg-full-thumb') ?>
						<h2 class="bg-title "><?php the_title(); ?></h2>
					</div>
				</div>
			<?php
			}
			wp_reset_postdata(); // Сбрасываем $post
			?>
		</div>
	</section>
	<section class="reviews position-relative">
		<div class="reviews-bg__right position-absolute ">
			<img src="/wp-content/uploads/2023/12/bg_reviws-1.png" alt="">
		</div>
		<div class="container reviews-container d-flex justify-content-center">
			<div class="row">
				<?php $reviews = new WP_Query([
					'post_type' => 'reviews',
					'posts_per_page' => 1,
				]);
				if ($reviews->have_posts()) {
					while ($reviews->have_posts()) {
						$reviews->the_post();
				?>

						<div class=" swiper-container reviews-slider">
							<div class=" slider_wrapper ">
								<div class="swiper reviews-swiper">
									<div class="swiper-wrapper">
										<!-- Slides -->
										<?php
										global $post;
										$myposts = get_posts([
											'posts_per_page' => -1,
											'post_type' => 'reviews',
										]);

										foreach ($myposts as $post) {
											setup_postdata($post);
										?>
											<div class="swiper-slide reviews-slide">
												<div class="reviews-slider__image">
													<?php $img_src = the_post_thumbnail(); ?>
													<?php echo  $img_src; ?>
												</div>
												<?php $reviews_text = get_the_title();
												if ($reviews_text) : ?>
													<h3 class="reviews_text"><?= $reviews_text; ?></h3>
												<?php endif; ?>
												<?php the_content(); ?>
											</div>
										<?php
										}
										wp_reset_postdata();
										?>
									</div>
									<div class="swiper-button-next display-none">
									</div>
									<div class="swiper-button-prev">
									</div>
									<!-- </div> -->
									<div class="swiper-pagination-reviews"></div>
								</div>
								<!-- <div class="pagination d-flex"> -->
							</div>
						</div>
			</div>
		</div>
		<p class="submit"><input type="submit" name="submit" id="submit" class="button button-reviews" value="Оставить отзыв" /></p>

	<?php
					} ?>
<?php
				} else {
					echo 'Записей нет';
				}

				wp_reset_postdata();

?>
<div class="reviews-bg__left position-absolute">
	<img src="/wp-content/uploads/2023/12/bg_left-reviws.png" alt="">
</div>
	</section>

</main>

<?php get_footer(); ?>