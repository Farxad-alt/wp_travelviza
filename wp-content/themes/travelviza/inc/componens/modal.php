<div id="my-modal-id" style="display:none;">
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
							<div class="col  form-modal  d-flex align-items-center">
								<div class="form d-lg-flex">
									<?php echo do_shortcode('[contact-form-7 id="739638c" title="modal-form"]'); ?>
								</div>

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
</div>