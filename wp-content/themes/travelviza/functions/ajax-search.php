<?php

// ajax поиск по сайту
add_action("wp_ajax_nopriv_ajax_search", "ajax_search");
add_action("wp_ajax_ajax_search", "ajax_search");
function ajax_search()
{
	$args = array(
		"post_type"      => "any", // Тип записи: post, page, кастомный тип записи
		"post_status"    => "publish",
		"order"          => "DESC",
		"orderby"        => "date",
		"s"              => $_POST["term"],
		"posts_per_page" => -1
	);
	$query = new WP_Query($args);
	if ($query->have_posts()) {
		while ($query->have_posts()) : $query->the_post();
			get_template_part("template-parts/loop-search-item");
		endwhile;
	} else {
		echo "Ничего не найдено";
	}
	exit;
}

# Подсветка результатов поиска
add_filter("the_content", "search_results_hightlight");
add_filter("the_excerpt", "search_results_hightlight");
add_filter("the_title", "search_results_hightlight");
function search_results_hightlight($text)
{
	// цвета
	$styles = [
		"",
		"color: #000; background: #98fd65;",
		"color: #000; background: #ffcc56;",
		"color: #000; background: #98cefa;",
		"color: #000; background: #fd9897;",
		"color: #000; background: #df7dca;",
	];

	// только для страницы поиска
	if (!is_search())
		return $text;

	$query_terms = get_query_var("search_terms");

	if (empty($query_terms))
		$query_terms = array_filter([get_query_var("s")]);

	if (empty($query_terms))
		return $text;

	$n = 0;
	foreach ($query_terms as $term) {
		$n++;

		$term = preg_quote($term, "/");
		$text = preg_replace_callback("/$term/iu", function ($match) use ($styles, $n) {
			return '<span style="' . $styles[$n] . '">"' . $match[0] . '"</span>';
		}, $text);
	}

	return $text;
}

add_filter("pre_get_posts", "include_search_filter");
function include_search_filter($query)
{
	if (!is_admin() && $query->is_main_query() && $query->is_search) {
		$query->set("post_type", "post");
	}
	return $query;
}

add_filter('posts_join', 'cf_search_join');
add_filter('posts_where', 'cf_search_where');
add_filter('posts_distinct', 'cf_search_distinct');
function cf_search_join($join)
{
	global $wpdb;
	if (is_search())
		$join .= " LEFT JOIN $wpdb->postmeta ON ID = $wpdb->postmeta.post_id ";
	return $join;
}
function cf_search_where($where)
{
	global $wpdb;
	if (is_search()) {
		$where = preg_replace(
			"/\(\s*$wpdb->posts.post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
			"($wpdb->posts.post_title LIKE $1) OR ($wpdb->postmeta.meta_value LIKE $1)",
			$where
		);
	}
	return $where;
}
function cf_search_distinct($where)
{
	return is_search() ? 'DISTINCT' : $where;
}

add_filter('posts_orderby', 'search_results_custom', 10, 2);
function search_results_custom($orderby, $query)
{
	global $wpdb;

	if (!is_admin() && is_search())
		$orderby =  $wpdb->prefix . "posts.post_type DESC";

	if (!is_admin() && is_search())
		$orderby =  $wpdb->prefix . "posts.post_type DESC{$wpdb->prefix}posts.post_title ASC";
	return  $orderby;
}
