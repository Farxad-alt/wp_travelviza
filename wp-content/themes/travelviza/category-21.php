<?php
/*
Template Name: uznat-bolshe
*/

get_header(); ?>

<div id="content" class="narrowcolumn">

	<?php
	// page id 21 will get category ID 12 posts, page 16 will get category 32 posts, page 28 will get category 17 posts
	if (is_page('21')) {
		$cat = array(12);
	} elseif (is_page('16')) {
		$cat = array(32);
	} elseif (is_page('28')) {
		$cat = array(17);
	} else {
		$cat = '';
	}

	$showposts = -1; // -1 shows all posts
	$do_not_show_stickies = 1; // 0 to show stickies
	$args = array(
		'category__in' => $cat,
		'showposts' => $showposts,
		'caller_get_posts' => $do_not_show_stickies
	);
	$my_query = new WP_Query($args);

	?>

	<?php if ($my_query->have_posts()) : ?>

		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<?php
			//necessary to show the tags 
			global $wp_query;
			$wp_query->in_the_loop = true;
			?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry »'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?> <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>