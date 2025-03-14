<?php

use Carbon_Fields\Field;
use Carbon_Fields\Block;
use Carbon_Fields\Container;


function sv_carbon_load()
{
	require_once('carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', 'sv_carbon_load');
/**
 * Подключаем Carbon Fields из директории plugin со всеми зависимостями
 * @see sv_carbon_load
 */


/**
 * @see sv_theme_options
 */
function sv_theme_options()
{
	Container::make('theme_options', 'theme-options', 'Настройки темы')
		->add_fields([
			Field::make('image', 'form-img', 'Изображение в форме обратной связи'),
			Field::make('text', 'my_text', 'Текстовое поле'),
			Field::make('date_time', 'eta', __('Отображает поле выбора времени и даты.')),
			Field::make('time', 'opens_at', __('Opening time'))
		])
		->add_tab('Местоположение', array(
			Field::make("map", "crb_company_location", "Местоположение")
				->help_text('Перетащите указатель на карту, чтобы выбрать местоположение'),
			Field::make('text', 'map_url', 'адрес'),
			Field::make('text', 'time', 'Время работы'),
		))

		->add_tab('Дни работы', array(
			Field::make('text', 'title-lp', 'Время работы'),
		))
		->add_tab('Телефоны', array(
			Field::make('text', 'phone_number_one', 'телефон_1')
				->set_width(50),
			Field::make('text', 'phone_number_ty', 'телефон_2')
				->set_width(50),
		))


		->add_tab(__('Главная'), array(
			Field::make('text', 'title', __('Заголовок фото')),
			Field::make('image', 'photo', __('Фото')),
		))

		->add_tab(__('Текст одиночного поста виза'), array(
			Field::make('text', 'title-visa', 'Нижний текст карточки'),

		))
		// ->add_tab('Условия для получения визы', array(
		// 	Field::make('image', 'photo-shengen', 'Изображение туристической визы')
		// 		->set_width(33),
		// 	Field::make('image', 'photo-shengen-del', 'Изображение деловой визы')
		// 		->set_width(33),
		// 	Field::make('image', 'photo-posts', 'Изображение одиночной записи')
		// 		->set_width(33),
		// ))
		->add_tab('Мультивиза туристическая', array(
			Field::make('text', 'shengen-title', 'Информация про нас'),
			Field::make('text', 'title-smull', 'Подача личная'),
			Field::make('text', 'title-residence', 'Срок пребывания:'),
			Field::make('text', 'title-receipt', 'Срок получения: '),
			Field::make('text', 'title-text', 'Требования от Вас'),
			Field::make('text', 'text-paswort', 'паспорт'),
			Field::make('text', 'text-foto', '1 фото (3,5*4,5 см)'),
			Field::make('text', 'text-vextract', 'выписка с карт-счета от 300 €'),
			Field::make('text', 'text-reference', 'справка о доходах'),
			Field::make('text', 'text-discount', 'скидки'),
			Field::make('textarea', 'text-payment', 'оплата'),

		))

		->add_tab('Мультивиза деловая', array(
			Field::make('text', 'shengen-title-del', 'Информация про нас'),
			Field::make('text', 'title-smull-del', 'Подача личная'),
			Field::make('text', 'title-residence-del', 'Срок пребывания:'),
			Field::make('text', 'title-receipt-del', 'Срок получения:'),
			Field::make('text', 'title-text-del', 'Требования от Вас'),
			Field::make('text', 'text-paswort-del', 'паспорт'),
			Field::make('text', 'text-foto-del', '1 фото (3,5*4,5 см)'),
			Field::make('text', 'text-reference-del', 'справка о доходах'),
			Field::make('text', 'text-agreement-del', 'договор'),
			Field::make('text', 'text-discount-del', 'скидки'),

		))


		// footer
		->add_tab('Social', array(
			Field::make('complex', 'crb_social_urls', 'Социальные сети')
				->add_fields(array(
					Field::make('image', 'image', 'Image')
						->set_width(30)
						->set_required(),
					Field::make('text', 'url', 'URL')
						->set_width(30)
						->set_required(),
				)),
			Field::make('text', 'social-email', 'Почта')
				->set_classes('social-email-class'),
			Field::make('textarea', 'text-right', 'Текст визовой поддержки'),
			Field::make('text', 'contact-title', 'Информация про нас')
		));


	# Menu
	// Container::make('nav_menu_item', 'Мои настройки меню')
	// 	->add_fields(array(
	// 		Field::make('image', 'rz_menu_image', 'Иконка')
	// 			->set_value_type('url'),
	// 		Field::make('image', 'rz_menu_image_hover', 'Иконка при наведении')
	// 			->set_value_type('url'),
	// 	));

	// Container::make('post_meta', 'Настройки записи')
	// 	->show_on_post_type('post')
	// 	->show_on_template('templates/category-aziya.php')
	// 	->add_fields([
	// 		Field::make('image', 'footer-content-img', 'Изображение в конец всех записей и страницы'),
	// 		Field::make('text', 'my_text', 'Текстовое поле'),
	// 		Field::make('textarea', 'my_text_2', 'Текстовое поле2'),
	// 		Field::make('media_gallery', 'crb_media_gallery', __('Mоя Gallery')),
	// 		Field::make("image", "photo", "Фото")
	// 	]);
	// Горящие предложения
	Container::make('post_meta', __('Настройки главной страницы'))
		->where('post_id', '=', 158)
		->add_fields([
			Field::make('text', 'slider_title', 'Заголовок слайдера'),
			Field::make('text', 'slider_text', 'Заголовок слайда'),
			Field::make('text', 'slider_description', 'текст слайда'),
			Field::make('text', 'button_price', 'цена слайда'),
			Field::make('text', 'button_details', 'кнопка подробнее слайда'),

		])
		->add_tab('header-slider', [
			Field::make('image', 'crb_image', 'картинка слайдера-1')
				->set_width(30),
			Field::make('image', 'crb_image1', 'картинка слайдера-2')
				->set_width(30),
			Field::make('image', 'crb_image2', 'картинка слайдера-3')
				->set_width(30),
		]);

	// Направления
	Container::make('post_meta', 'Настройки слайдера направления')
		->where('post_id', '=', 333)
		->add_fields(array(


			Field::make('complex', 'truemisha_slider', 'Слайдер')->set_max(7)
				->add_fields(array(
					Field::make('text', 'title', 'Заголовок слайда')->set_width(50),
					Field::make('image', 'photo', 'Изображение слайда')->set_width(50),

				)),

		));


	// наши достоинства
	Container::make('post_meta', 'Изменить фотографию и тест')
		->where('post_id', '=', 154)
		->add_tab(
			'Фото',
			[
				Field::make('image', 'photo1_klube', 'Фото')->set_value_type('url')->set_width(30),
				Field::make('image', 'photo2_klube', 'Фото')->set_value_type('url')->set_width(30),
				Field::make('image', 'photo3_klube', 'Фото')->set_value_type('url')->set_width(30),

			]
		)
		->add_tab('Заголовки', [
			Field::make('text', 'text1_klube', 'Заголовок')
				->set_width(30),
			Field::make('text', 'text2_klube', 'Заголовок')
				->set_width(30),
			Field::make('text', 'text3_klube', 'Заголовок')
				->set_width(30)
		])

		->add_tab('Текст', [
			Field::make('textarea', 'textarea1_klube', 'текст')
				->set_width(30),
			Field::make('textarea', 'textarea2_klube', 'текст')
				->set_width(30),
			Field::make('textarea', 'textarea3_klube', 'текст')
				->set_width(30)
		]);


	// вывод полей категорий zakazy
	$args = array(
		'posts_per_page' => -1,
		'category_name'    => 'zakazy',
	);
	$rz_posts_info = get_posts($args);
	$rz_posts = [];
	$rz_posts['0'] = 'Не выбрано';
	if ($rz_posts_info) {
		foreach ($rz_posts_info as $rz_posts_info_item) {
			$rz_posts[$rz_posts_info_item->ID] = $rz_posts_info_item->post_title;
		}
	}

	$assistants_labels = array(
		'plural_name'   => 'записи',
		'singular_name' => 'запись',
	);

	Container::make('post_meta', 'Галерея карточки')
		->show_on_category('zakazy')
		->add_fields([
			Field::make('image', 'photo-shengen', 'Изображение туристической визы')
				->set_width(33),
			Field::make('image', 'photo-shengen-del', 'Изображение деловой визы')
				->set_width(33),
			Field::make('image', 'photo-posts', 'Изображение одиночной записи')
				->set_width(33),
		])
		->add_tab('Прайс', [
			Field::make('text', 'price_regular', 'Цена со скидкой')
				->set_width(50)
				->set_help_text('Цены в беларуских рублях, только цифры'),

			Field::make('text', 'price_discount', 'Цена')
				->set_width(50)
				->set_help_text('Цены в беларуских рублях, только цифры'),
			Field::make('text', 'button_details', 'кнопка подробнее слайда'),
		]);


	// Контакты
	Container::make('post_meta', 'Контакты')
		->show_on_category('contact')
		->add_fields([
			Field::make('text', 'contact-title', 'Информация про нас')
				->set_width(30),
			Field::make('image', 'photo-contact', 'Изображение контакта')
				->set_width(30),

		])
		->add_tab('Местоположение', array(
			Field::make('map', 'crb_company_location', __('Location'))
				->set_help_text(__('drag and drop the pin on the map to select location')),
			Field::make('text', 'map-contact', 'адрес')
				->set_width(30),
			Field::make('text', 'email-contact', 'Почта')
				->set_width(30),
			Field::make('text', 'ip-contact', 'Название ИП')
				->set_width(30),

		));

	// Новости
	Container::make('post_meta', 'Вывод изображения и заголовка на странице новость')
		->show_on_category('novost')
		->add_fields([
			Field::make('text', 'novost-title', 'Информация про нас')
				->set_width(50),

			Field::make('image', 'photo-novost', 'Изображение Новости')
				->set_width(50),

		]);

	// single shengen
	Container::make('post_meta', 'Вывод изображения и заголовка на странице новость')
		->show_on_category('shengen', 'africa', 'aziya', 'europa', 'svyaz')
		->add_fields([
			Field::make('image', 'photo-shengen', 'Изображение туристической визы')
				->set_width(33),
			Field::make('image', 'photo-shengen-del', 'Изображение деловой визы')
				->set_width(33),
			Field::make('image', 'photo-posts', 'Изображение одиночной записи')
				->set_width(33),
		])
		->add_tab('Мультивиза туристическая', [
			Field::make('text', 'shengen-title', 'Информация про нас'),
			Field::make('text', 'title-smull', 'Подача личная'),
			Field::make('text', 'title-residence', 'Срок пребывания:'),
			Field::make('text', 'title-receipt', 'Срок получения: '),
			Field::make('text', 'title-text', 'Требования от Вас'),
			Field::make('text', 'text-paswort', 'паспорт'),
			Field::make('text', 'text-foto', '1 фото (3,5*4,5 см)'),
			Field::make('text', 'text-vextract', 'выписка с карт-счета от 300 €'),
			Field::make('text', 'text-reference', 'справка о доходах'),
			Field::make('text', 'text-discount', 'скидки'),
			Field::make('textarea', 'text-payment', 'оплата')

		])

		->add_tab('Мультивиза деловая', [
			Field::make('text', 'shengen-title-del', 'Информация про нас'),
			Field::make('text', 'title-smull-del', 'Подача личная'),
			Field::make('text', 'title-residence-del', 'Срок пребывания:'),
			Field::make('text', 'title-receipt-del', 'Срок получения:'),
			Field::make('text', 'title-text-del', 'Требования от Вас'),
			Field::make('text', 'text-paswort-del', 'паспорт'),
			Field::make('text', 'text-foto-del', '1 фото (3,5*4,5 см)'),
			Field::make('text', 'text-reference-del', 'справка о доходах'),
			Field::make('text', 'text-agreement-del', 'договор'),
			Field::make('text', 'text-discount-del', 'скидки'),

		]);

	Container::make('post_meta', 'Вывод изображения и заголовка на странице новость')
		->show_on_category('america')
		->add_fields([
			Field::make('image', 'photo-america', 'Изображение туристической визы')
				->set_width(33),
			Field::make('image', 'photo-america-del', 'Изображение деловой визы')
				->set_width(33),
			Field::make('image', 'photo-posts', 'Изображение одиночной записи')
				->set_width(33),
		]);
	Block::make(__('My Shiny Gutenberg Block'))
		->add_fields(array(
			Field::make('text', 'heading', __('Block Heading')),
			Field::make('image', 'image', __('Block Image')),
			Field::make('rich_text', 'content', __('Block Content')),
		))
		->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

		<div class="block">
			<div class="block__heading">
				<h1><?php echo esc_html($fields['heading']); ?></h1>
			</div><!-- /.block__heading -->

			<div class="block__image">
				<?php echo wp_get_attachment_image($fields['image'], 'full'); ?>
			</div><!-- /.block__image -->

			<div class="block__content">
				<?php echo apply_filters('the_content', $fields['content']); ?>
			</div><!-- /.block__content -->
		</div><!-- /.block -->

<?php
		});
}
add_action('carbon_fields_register_fields', 'sv_theme_options');
# Сделать комплексные поля для записей определенной рубрики - полем будет выбор записи тоже из указанной рубрики






/**
 * @see sv_footer_content_img
 * @param $content
 * @return string
 */
function sv_footer_content_img($content)
{
	$attachment_id = carbon_get_theme_option('footer-content-img');

	# Проверяем, если изображение не существует, то выводим контент как есть
	if (empty($attachment_id)) return $content;

	$image = wp_get_attachment_image($attachment_id, 'medium');
	$content .= $image;
	return $content;
}
add_filter('the_content', 'sv_footer_content_img');

// ->add_tab(
// 	'Блок уверено',
// 	[
// 		Field::make('image', 'photo1_klube', 'Фото'),
// 		Field::make('text', 'text1_klube', 'текст'),
// 		Field::make('textarea', 'textarea1_klube', 'текст')

// 	]
// )
// ->add_tab(
// 	'Блок Быстро',
// 	[
// 		Field::make('image', 'photo2_klube', 'Фото'),
// 		Field::make('text', 'text2_klube', 'текст'),
// 		Field::make('textarea', 'textarea2_klube', 'текст')

// 	]
// )
// ->add_tab(
// 	'Блок Качественно',
// 	[
// 		Field::make('image', 'photo3_klube', 'Фото'),
// 		Field::make('text', 'text3_klube', 'текст'),
// 		Field::make('textarea', 'textarea3_klube', 'текст')

// 	]
// );