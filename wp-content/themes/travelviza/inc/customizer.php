<?php

/**
 * travelviza Theme Customizer
 *
 * @package travelviza
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function travelviza_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'travelviza_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'travelviza_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_setting('travelviza_link_color', array(
		'default'   => '#0d6efd',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'travelviza_link_color', array(
		'label'    => 'Цвет ссылок',
		'section'  => 'colors',
		'settings' => 'travelviza_link_color',
	)));


	$wp_customize->add_section('travelviza_site_options', array(
		'title'      => 'Настроики сайта',
		'priority'   => 20,
	));
	$wp_customize->add_setting('travelviza_display_description', array(
		'default'      => true,
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('travelviza_display_description', array(
		'section' => 'travelviza_site_options',
		'label' => 'Отоброжать описание',
		'type' => 'checkbox',

	));

	// phone

	$wp_customize->add_setting('travelviza_phone', array(
		'default'      => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('travelviza_phone', array(
		'section' => 'travelviza_site_options',
		'label' => 'телефон',
		'type' => 'text',

	));
	$wp_customize->add_setting('travelviza_phone1', array(
		'default'      => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('travelviza_phone1', array(
		'section' => 'travelviza_site_options',
		'label' => 'телефон№2',
		'type' => 'text',

	));
}
add_action('customize_register', 'travelviza_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function travelviza_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function travelviza_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function travelviza_customize_preview_js()
{
	wp_enqueue_script('travelviza-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'travelviza_customize_preview_js');

function travelviza_customize_css()
{
?>
	<style type="text/css">
		a {
			color: <?= get_theme_mod('travelviza_link_color', '#000'); ?>;
		}
	</style>
<?php
}

add_action('wp_head', 'travelviza_customize_css');

function travelviza_customizer_live_preview()
{
	wp_enqueue_script(
		'travelviza-customizer',			//Give the script an ID
		get_template_directory_uri() . '../js/customizer.js', //Point to file
		array('jquery', 'customize-preview'),	//Define dependencies
		'',						//Define a version (optional) 
		true						//Put script in footer?
	);
}
add_action('customize_preview_init', 'travelviza_customizer_live_preview');
