<?php
error_reporting(-1);
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}
function debug($data)
{
	echo '<pre>' . print_r($data, 1) . '</pre>';
}

function travelviza_setup()
{

	load_theme_textdomain('travelviza', get_template_directory() . '/languages');

	add_theme_support('automatic-feed-links');

	add_theme_support('title-tag');



	function travelviza_post_thumb($id, $size = 'full', $wrapper_class = 'orders-thumb')
	{
		//	global $post;
		$html = '<div class="' . $wrapper_class . '">';
		if (has_post_thumbnail()) {
			$html .= get_the_post_thumbnail($id, $size);
		} else {
			$html .= '<img src="http://travelviza/wp-content/uploads/2023/12/min-scaled.jpg">';
		}
		$html .= '</div>';

		return $html;
	}

	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'mega-menu' => 'Мега меню',
			'footer_menu' => 'Меню в подвале'
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'travelviza_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');



	add_theme_support('custom-header', array(
		'default-image'          => get_template_directory_uri() . '/assets/img/orders-bg.png',
		'width'                  => 1900,
		'height'                 => 500,
		'default-text-color'     => 'ffffff', // вызывается функций get_header_textcolor()

	));



	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'travelviza_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function travelviza_content_width()
{
	$GLOBALS['content_width'] = apply_filters('travelviza_content_width', 640);
}
add_action('after_setup_theme', 'travelviza_content_width', 0);

// header-fon
register_default_headers([
	'default-image' => [
		'url' => get_template_directory_uri() . '/assets/img/фон.png',
		'thumbnail_url' => get_template_directory_uri() . '/assets/img/фон.png',
		'description' => 'defailt image',
	],
]);
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function travelviza_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'travelviza'),
			'id'            => 'sidebar-1',
			'description'   => 'Мой сайдбар',
			'before_widget' => '<section id="%1$s" class="widget test %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('travelviza Sidebar', 'travelviza'),
			'id'            => 'sidebar-travelviza',
			'description'   => 'виджет сайдбар',
			'before_widget' => '<section id="%1$s" class="widget test-title %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title test">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'travelviza_widgets_init');

// регистрация Foo_Widget в WordPress
add_action('widgets_init', 'register_foo_widget');

function register_foo_widget()
{
	register_widget('Foo_Widget');
}


/**
 * Enqueue scripts and styles.
 */
function travelviza_scripts()
{
	wp_enqueue_style('travelviza-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;800&display=swap');

	wp_enqueue_style('travelviza-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

	wp_enqueue_style('iconsfont', get_template_directory_uri() . '/assets/css/iconsfont.css');
	wp_enqueue_style('travelviza-style', get_template_directory_uri() . '/assets/css/style.css', array('swiper'), _S_VERSION);


	// wp_enqueue_script('travelviza-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);



	wp_enqueue_script('travelviza-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), false, true);
	// wp_enqueue_script('jquery');
	wp_enqueue_script('travelviza-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);

	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), false, true);

	wp_enqueue_script('travelviza-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'swiper-js'), false, true);
}
add_action('wp_enqueue_scripts', 'travelviza_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/functions/ajax-search.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';


/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

// require get_template_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';

// add_action('carbon_register_fields', 'crb_register_custom_fields'); // Для версии 1.6 и ниже
// function crb_register_custom_fields()
// {
// 	require_once __DIR__ . '/inc/custom-fields/post-meta.php';
// }

require __DIR__ . '/travelviza_Menu.php';
require __DIR__ . '/widget-class.php';
require __DIR__ . '/Metabox.php';
require __DIR__ . '/contact7.php';






/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function change_default_placeholder($placeholder)
{
	$screen = get_current_screen();
	$placeholder = 'Как назовём?';
	return $placeholder;
}

add_filter('enter_title_here', 'change_default_placeholder');

function change_default_placeholders($placeholder)
{
	$screen = get_current_screen();
	switch ($screen->post_type) {
		case 'post': { // для постов
				$placeholder = 'Как назовём пост?';
				break;
			}
		case 'page': { // для страниц
				$placeholder = 'Как назовём страницу?';
				break;
			}
		case 'game': { // для игр (созданный тип постов)
				$placeholder = 'Введите название игры';
				break;
			}
			// сюда можно добавить ещё сколько угодно условий
	}
	return $placeholder;
}

add_filter('enter_title_here', 'change_default_placeholders');

$args = array(
	'default-color' => 'ffffff',
);
add_theme_support('custom-background', $args);


add_theme_support('custom-header', array(
	'default-image'          => get_template_directory_uri() . '/assets/img/фон.png',
	'random-default'         => false,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '', // вызывается функций get_header_textcolor()
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	'video'                  => false, // с 4.7
	'video-active-callback'  => 'is_front_page', // с 4.7
));

// Отключения тега p
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support('custom-background', $defaults);

// add_action('wp_enqueue_scripts', 'custom_shortcode_scripts');
// function custom_shortcode_scripts()
// {
// 	global $post;
// 	if (has_shortcode($post->post_content, 'gallery')) {
// 		wp_enqueue_script('custom-script');
// 	}
// }

add_filter('wpcf7_form_elements', 'do_shortcode');

add_image_size('crb_media_gallery', 184, 125, true);


function my_custom_init()
{
	register_post_type('reviews', array(
		'labels'             => [
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'all_items' => 'Все отзывы',
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую Отзыв',
			'edit_item'          => 'Редактировать Отзыв',
			'new_item'           => 'Новая книга',
			'view_item'          => 'Посмотреть Отзыв',
			'search_items'       => 'Найти Отзыв',
			'not_found'          => 'Книг не найдено',
		],
		'public'             => true,
		'show_in_rest'        => true,
		'menu_position'				=> 2,
		'menu_icon' => 'dashicons-admin-users',
		'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments']
	));
}

add_action('init', 'my_custom_init');

// допустим в functions.php мы регистрируем дополнительный размер так:
add_image_size('spec_thumb', 120, 115, true);

// далее в цикле выводим этот размер так:
the_post_thumbnail('spec_thumb');

// add_filter('excerpt_more', 'new_excerpt_more');
// function new_excerpt_more($more)
// {
// 	global $post;
// 	return '<a href="' . get_permalink($post) . '">Узнать больше</a>';
// }

add_filter('excerpt_length', function () {
	return 25;
});

// Как привязать рубрики к страницам
function true_apply_categories_for_pages()
{
	add_meta_box('categorydiv', 'Категории', 'post_categories_meta_box', 'page', 'side', 'normal'); // добавляем метабокс категорий для страниц
	register_taxonomy_for_object_type('category', 'page'); // регистрируем рубрики для страниц
}
// обязательно вешаем на admin_init
add_action('admin_init', 'true_apply_categories_for_pages');

function true_expanded_request_category($q)
{
	if (isset($q['category_name'])) // если в запросе присутствует параметр рубрики
		$q['post_type'] = array('post', 'page'); // то, помимо записей, выводим также и страницы
	return $q;
}

add_filter('request', 'true_expanded_request_category');

function mundana_post_meta($post_id)
{
	$date         = get_the_time('M j');
	$read_minutes = get_post_meta($post_id, 'read_minutes', true);
	$out          = '<small class="text-muted">';
	$out          .= $date;
	if ($read_minutes) {
		$out .= ' &middot; ' . $read_minutes . __(' min read', 'mundana');
	}
	$out .= '</small>';

	return $out;
}

function mundana_post_time_diff()
{
	return human_time_diff(get_post_time('U'), current_time('timestamp')) . __(' назад', 'mundana');
}


add_filter('excerpt_more', function ($more) {

	return ' Перейти к полной статье...';
});
// add_filter('excerpt_more', fn () => 'Узнать больше');

add_theme_support('post-formats', array('aside', 'image', 'quote', 'status', 'video', 'visa'));


// echo $content;
// вывод методаных
// function travelviza_post_meta($post_id)
// {
// 	$date = get_the_time('F Y');
// 	$read_minutes = get_post_meta($post_id, 'read_minutes', true);
// 	$out = '<small class="text-muted">';
// 	$out .= $date;
// 	if ($read_minutes) {
// 		$out .= ' &middot; ' . $read_minutes . __(' min read', 'travelviza');
// 	}
// 	$out .= '</small>';
// 	return $out;
// }


// add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// add_filter('use_widgets_block_editor', '__return_false');

// add_filter('excerpt_more', function ($more) {
// 	return '...';
// });

// // в php 7.4+ можно сократить так:
// add_filter('excerpt_more', fn () => '...');
