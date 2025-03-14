<section class="container visa">
	<div class="row">
		<div class="col d-lg-flex justify-content-between">
			<div class="header-content col-md-12 col-lg-8">
				<h1 class="header-title">
					<?php the_title(); ?>
				</h1>
				<?php the_content(); ?>
			</div>
			<div class=" wrapper position-absolute col-md-12 col-lg-4 slider-block  end-0">
				<?php $slider_title = carbon_get_post_meta(2, 'slider_title');
				if ($slider_title) : ?>
					<h3 class="slider_title"><?= $slider_title; ?></h3>
				<?php endif; ?>
				<div class="image-slider swiper-container header-sliders">
					<h4 class="text-dark slider_text text-center">
						<?= carbon_get_post_meta(2, 'slider_text'); ?></h4>
					<div class=" slider_wrapper">
						<!-- Slider main container -->
						<div class="swiper">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide image-slide">
									<?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(2, 'crb_image'), 'full'); ?>
									<img src="<?php echo $img_src; ?>" alt="photo" />
								</div>
								<div class="swiper-slide image-slide"> <?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(2, 'crb_image1'), 'full'); ?>
									<img src="<?php echo $img_src; ?>" alt="photo" />
								</div>
								<div class="swiper-slide image-slide"> <?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(2, 'crb_image2'), 'full'); ?>
									<img src="<?php echo $img_src; ?>" alt="photo" />
								</div>
							</div>
						</div>
						<p class="text-dark slider_description text-center">
							<?= carbon_get_post_meta(2, 'slider_description'); ?></p>
						<div class="block-button d-flex justify-content-center">
							<button class="button_price ">
								<?= carbon_get_post_meta(2, 'button_price'); ?>
							</button>
							<a class="button_details ">
								<?= carbon_get_post_meta(2, 'button_details'); ?>
							</a>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>

</section>