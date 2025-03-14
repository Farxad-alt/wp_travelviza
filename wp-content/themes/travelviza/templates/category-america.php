<?php
/*
Template Name:  шаблон поста Америка
Template Post Type: post
*/

get_header();
?>
<?php get_template_part('/inc/componens/orders'); ?>
<?php require get_template_directory() . '/inc/componens/direction.php'; ?>
<section class="container  d-flex">
	<div class="row">
	<div class="col d-flex flex-wrap align-items-baseline ">
			<div class="col-lg-12 col-xl-9 ">
				<h2 class="card-news__title title"><?php the_title(); ?></h2>
			<div class="shengen-visa_block ">
				<div class="row  align-items-baseline">
					<?php
					global $post;

					$myposts = get_posts([
						'numberposts' => -1,
						'category_name'    => 'america',

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
						echo 'постов нет';
					}

					wp_reset_postdata(); // Сбрасываем $post
					?>
				</div>
			</div>

		</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="america-bg__left position-absolute ">
		<img src="/wp-content/uploads/2023/12/america-right.png" alt="">
	</div>
</section>

<?php require get_template_directory() . '/inc/componens/form.php'; ?>

<?php get_footer(); ?>