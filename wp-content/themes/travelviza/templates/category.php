<?php

get_header();

if (is_category('novosti')) {
?>
	<div class="col guest bg-content mt-5">
		<div class="bg-block ">
			<?= travelviza_post_thumb(13, 'fill', 'bg-full-thumb') ?>
			<div class="bg-title">
				<?php $the_post = get_post(13);
				echo get_the_title($the_post); ?></h2>
			</div>
		</div>
	</div>
	<?php get_template_part('/inc/componens/direction'); ?>
	<main id="primary" class="site-main">
		<section class="container ">
			<div class="col-9">
				<h2 class="contact-title title">
					<?php $the_post = get_post(13);
					echo get_the_title($the_post); ?></h2>
			</div>

			<div class="row">
				<div class="col news">
					<?php
					global $post;

					$myposts = get_posts([
						'numberposts' => 5,
						'category_name'    => 'novosti',

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
					} {
						// Постов не найдено
					}
					wp_reset_postdata(); // Сбрасываем $post
					?>
				</div>
			</div>
		</section>
		<div class="america-bg__left position-absolute ">
			<img src="/wp-content/uploads/2023/12/america-right.png" alt="">
		</div>
	</main>
<?php
} elseif (is_category('shengen')) { ?>
	<section class="orders">
		<div class="row">
			<div class="col guest bg-content mt-5">
				<div class="bg-block">
					<?= travelviza_post_thumb(1, 'fill', 'bg-full-thumb') ?>
					<div class="bg-title">
						<?php $the_post = get_post(1);
						echo get_the_title($the_post); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container  d-flex" style="background: url(<?= get_template_directory_uri() ?> /assets/img/bg-shengen.png);">
		<div class="row">
			<div class="col-9">
				<h2 class="shengen-title title">
					<?php $the_post = get_post(1);
					echo get_the_title($the_post); ?></h2>
				</h2>
			</div>
			<div class="col-md-9 col-xl-10">
				<div class="shengen-visa_block ">
					<div class="row  align-items-baseline">
						<?php
						global $post;
						$myposts = get_posts([
							'numberposts' => -1,
							// 'offset'      => 1,
							'category_name'    => 'shengen'
						]);

						if ($myposts) {
							foreach ($myposts as $post) {
								setup_postdata($post);
						?>
								<div class="gallery col-sm-12  col-md-6 col-lg-4 d-flex justify-content-center">
									<div class="shengen-image">
										<div class="bg-block text-center">
											<?php echo travelviza_post_thumb(get_the_ID(), 'medium', 'visa-thumbs') ?>
											<a class="section-title d-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
									</div>
								</div>
						<?php
							}
						} else {
							// Постов не найдено
						}
						wp_reset_postdata(); // Сбрасываем $post
						?>
					</div>
				</div>

			</div>
			<?php get_sidebar(); ?>
		</div>
		<div class="shengen-bg__left position-absolute ">
			<img src="/wp-content/uploads/2023/12/bg-direction_left.png" alt="">
		</div>
	</section>
<?php
}
?>
<?php get_template_part('/inc/componens/form'); ?>

<?php get_footer(); ?>