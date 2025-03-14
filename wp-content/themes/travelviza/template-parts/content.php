<div class="row">
	<div class="col news">
		<?php
		global $post;

		$myposts = get_posts([
			'numberposts' => -1,
			'category_name'    => 'uznat-bolshe',

		]);

		if ($myposts) {
			foreach ($myposts as $post) {
				setup_postdata($post);
		?>
				<div class="card card-news border-none ">
					<div class="row align-items-lg-center">
						<div class=" offset-lg-1 col-md-3 card-news__img img-fluid rounded-start">
							<?php echo travelviza_post_thumb(get_the_ID(), 'medium', 'img-fluid rounded-start') ?>
						</div>
						<div class="col-md-8 p-md-5">
							<div class="card-body">
								<h5 class="card-news__title ">
									<a class="section-title section-title__novosti text-start d-block" href="<?php the_permalink(); ?>"><?php the_title(); ?>
									</a>
								</h5>
								<div class="card-news__text text-sm-start">
									<?php the_excerpt(); ?>
								</div>
							</div>
							<a href="<?php the_permalink(); ?>">
								<p class="card-text display-block ms-3"><small class="text-muted"> <?= get_the_date(); ?></small>
								</p>
							</a>
						</div>
					</div>
				</div>

		<?php
			}
		} else {
			echo 'постов нет';
		}

		wp_reset_postdata(); // Сбрасываем $post
		?>
	</div>
</div>