<section class=" container d-flex">
	<div class="row align-items-lg-baseline">
		<div class="col d-flex flex-wrap align-items-baseline ">
			<div class="col-lg-12 col-xl-9 ">
				<h2 class="contact-title title">
					<a href="<?= get_the_permalink(13); ?>">Новости</a>
				</h2>

				<div class="news">
					<div class="card card-news border-none ">
						<div class="row align-items-lg-center">
							<div class=" col-md-3 card-news__img img-fluid rounded-start">
								<?= travelviza_post_thumb(get_the_ID(), 'medium', 'img-fluid rounded-start') ?>
							</div>
							<div class="col-md-8 p-md-5">
								<div class="card-body">
									<h5 class="card-news__title mb-4">
										<div class="section-title section-title__novosti text-start d-block" href=""><?php the_title(); ?>
										</div>
									</h5>
									<div class="card-news__text text-sm-start">
										<?php the_content(); ?>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>">
									<p class="card-text_time display-block ms-3"><small class="text-muted"> <?= mundana_post_time_diff(); ?></small>
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>