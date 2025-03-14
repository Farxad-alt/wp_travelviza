<?php
// https://codex.wordpress.org/Theme_Customization_API
// https://wp-kama.ru/handbook/theme/customize-api
// https://developer.wordpress.org/reference/classes/page/5/


function travelviza_customize_register($wp_customize)
{
	$wp_customize->add_setting('travelviza_link_color', array(
		'default'   => '#0d6efd',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'travelviza_link_color', array(
		'label'    => 'Цвет ссылок',
		'section'  => 'colors',
		'settings' => 'travelviza_link_color',
	)));

	/*$wp_customize->add_setting( 'travelviza_display_description', array(
		'default'   => true,
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'travelviza_display_description', array(
		'section' => 'title_tagline',
		'label'   => 'Отображать описание',
//		'setting' => 'travelviza_display_description',
//		'settings' => array( 'travelviza_display_description' ),
		'type'    => 'checkbox',
        'priority' => 40,
	) );*/

	// Add Section
	$wp_customize->add_section('travelviza_site_options', array(
		'title'    => 'Настройки сайта',
		'priority' => 10,
	));

	// Display description
	$wp_customize->add_setting('travelviza_display_description', array(
		'default'   => true,
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('travelviza_display_description', array(
		'section' => 'travelviza_site_options',
		'label'   => 'Отображать описание',
		'type'    => 'checkbox',
	));

	// Phone
	$wp_customize->add_setting('travelviza_phone', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('travelviza_phone', array(
		'section' => 'travelviza_site_options',
		'label'   => 'Телефон',
		'type'    => 'text',
	));
}

add_action('customize_register', 'travelviza_customize_register');
