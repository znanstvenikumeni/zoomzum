<?php
/**
 * Zoom ZUM Theme Customizer
 *
 * @package Zoom_ZUM
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zoomzum_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'zoomzum_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'zoomzum_customize_partial_blogdescription',
		) );
		$wp_customize->add_setting( 'header_text' , array(
			'default'   => 'Hola.',
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'header_subtitle' , array(
			'default'   => 'Some text beneath.',
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'header_button' , array(
			'default'   => 'Find out more',
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'header_link' , array(
			'default'   => '/about',
			'transport' => 'refresh',
		) );
		$wp_customize->add_setting( 'video_link' , array(
			'default'   => '/FrontpageCover.mp4',
			'transport' => 'refresh',
		) );
		$wp_customize->add_section( 'zoomzum_settings' , array(
			'title'      => __( 'Theme settings', 'zoomzum' ),
			'priority'   => 30,
		) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_text',
				array(
					'label'          => __( 'Hero title', 'zoomzum' ),
					'section'        => 'zoomzum_settings',
					'settings'       => 'header_text',
					'type'           => 'text'
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_subtitle',
				array(
					'label'          => __( 'Hero subtitle', 'zoomzum' ),
					'section'        => 'zoomzum_settings',
					'settings'       => 'header_subtitle',
					'type'           => 'text'
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_button',
				array(
					'label'          => __( 'Hero button', 'zoomzum' ),
					'section'        => 'zoomzum_settings',
					'settings'       => 'header_button',
					'type'           => 'text'
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_link',
				array(
					'label'          => __( 'Hero link', 'zoomzum' ),
					'section'        => 'zoomzum_settings',
					'settings'       => 'header_link',
					'type'           => 'text'
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'video_link',
				array(
					'label'          => __( 'Hero video link', 'zoomzum' ),
					'section'        => 'zoomzum_settings',
					'settings'       => 'video_link',
					'type'           => 'text'
				)
			)
		);
	}
}
add_action( 'customize_register', 'zoomzum_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function zoomzum_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function zoomzum_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zoomzum_customize_preview_js() {
	wp_enqueue_script( 'zoomzum-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'zoomzum_customize_preview_js' );
