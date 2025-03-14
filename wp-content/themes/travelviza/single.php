<?php

get_header();
?>
<div class="col guest bg-content mt-5">
	<div class="bg-block ">
		<?php $img_src = wp_get_attachment_image_url(carbon_get_theme_option('photo'), 'full'); ?>
		<div class="image-title">
			<h2 class="bg-title"><?php echo carbon_get_theme_option('title'); ?></h2>
			<img src=" <?= $img_src; ?>" alt="photo" />
		</div>
	</div>
</div>
<?php get_template_part('/inc/componens/direction'); ?>
<?php get_template_part('template-parts/single', get_post_format()); ?>

<div class="america-bg__left position-absolute single-bg">
	<img src="/wp-content/uploads/2023/12/america-right.png" alt="">
</div>

<?php get_template_part('/inc/componens/form'); ?>

<?php get_footer(); ?>