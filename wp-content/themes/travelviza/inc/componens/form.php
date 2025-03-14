<section class="direction-form position-relative">
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
						<div class="col form-block shengen-form d-flex align-items-center">
							<div class="form d-lg-flex">
								<?php echo do_shortcode('[contact-form-7 id="b463906" title="Без названия"]'); ?>
							</div>
							<?php $img_src = wp_get_attachment_image_url(carbon_get_theme_option('form-img'), 'full'); ?>
							<img src="<?php echo $img_src; ?>" alt="photo" />
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		wp_reset_postdata(); // Сбрасываем $post
		?>
	</div>

</section>