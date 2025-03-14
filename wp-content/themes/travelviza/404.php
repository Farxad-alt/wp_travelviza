<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package travelviza
 */

get_header();
?>

<main id="primary" class="site-main container">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title title"><?php esc_html_e('Такой страницы нет.', 'travelviza'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">






		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
