<?php
/*
Template Name:  шаблон страницы новости
Template Post Type: page
*/


get_header();
?>
<?php get_template_part('/inc/componens/orders'); ?>
<?php get_template_part('/inc/componens/direction'); ?>

<main id="primary" class="site-main">

	<section class="container ">
		<div class="col-9">
			<h2 class="contact-title title"><?php the_title(); ?></h2>
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
											<a class="section-title section-title__novosti text-start d-block ajax-search__link" href="<?php the_permalink(); ?>"><?php the_title(); ?>
											</a>
										</h5>
										<div class="card-news__text text-sm-start ajax-search__excerpt">
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
	</section>
	<div class="america-bg__left position-absolute ">
		<img src="/wp-content/uploads/2023/12/america-right.png" alt="">
	</div>
</main><!-- #main -->
<?php get_template_part('/inc/componens/form'); ?>

<?php get_footer(); ?>