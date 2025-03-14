<!-- <?php

			get_header();
			?>
<section class="orders">
	<div class="row">
		<div class="col guest bg-content mt-5 ">
			<div class="bg-block bg-visa ">
				<?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'photo-posts'), 'full'); ?>
				<img class="w-100" src="<?= $img_src; ?>" alt="photo" />
				<h2 class="bg-title "><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('/inc/componens/direction'); ?>
<h2 class="title container">Поиск по запросу: <?php echo get_search_query() ?></h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/single', get_post_format()); ?>
		<?php get_sidebar(); ?>
	<?php endwhile; ?>
<?php else : ?>
	<div class="card">
		<p>По запросу ничего не найдено...</p>
	</div>
<?php endif; ?>
<div class="america-bg__left position-absolute single-bg">
	<img src="/wp-content/uploads/2023/12/america-right.png" alt="">
</div>


<?php get_template_part('/inc/componens/form'); ?>

<?php get_footer(); ?> -->