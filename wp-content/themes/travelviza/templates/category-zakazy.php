<section class="wrapper zakazy">

	<div class="container">
		<div class="row">
			<?php
			// параметры по умолчанию
			$my_posts = get_posts(array(
				'numberposts' => 8,
				'category_name'    => 'zakazy',
				'orderby'     => 'date',
				'order'       => 'DESC',
				'include'     => array(),
				'exclude'     => array(),
				'meta_key'    => '',
				'meta_value'  => '',
				'post_type'   => 'post',
				'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			));

			global $post;

			foreach ($my_posts as $post) {
				setup_postdata($post);
			?>
				<div class="gallery col-sm-12  col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
					<div class="gallery-card  position-relative ">
						<a href="<?php the_permalink(); ?>" class="card-title slider_text text-light "><?php the_title(); ?>
						</a>

						<?php echo travelviza_post_thumb(get_the_ID(), 'medium', 'card-full-thumb') ?>
						<div class="card-body d-flex justify-content-between p-0">
							<div class="card-price ">
								<?php
								$price_discount = carbon_get_post_meta(get_the_ID(), 'price_discount');
								$price_regular = carbon_get_post_meta(get_the_ID(), 'price_regular');
								if (empty($price_discount)) {
									echo  '<p >'  . $price_regular . 'BYN</p>';
								} else {
									echo '<p class="price_discount"><s>' . $price_discount . 'BYN</s></p>';
									echo '<b class="price_regular">'  . $price_regular . 'BYN</b>';
								}
								?>
							</div>
							<a href="<?php the_permalink(); ?>" class="button_details button_gallery">
								<?= carbon_get_post_meta(2, 'button_details'); ?>
							</a>
						</div>
					</div>


				</div>
			<?php

			}

			wp_reset_postdata(); // сброс
			?>


		</div>
	</div>
</section>