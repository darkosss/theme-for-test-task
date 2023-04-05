<?php
/**
 * Customizer settings.
 *
 * @package theme-for-test-task
 */

namespace ACME\wd_s;

/**
 * Register additional scripts.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function customize_additional_scripts( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'theme_for_test_task_header_scripts',
		[
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		]
	);

	// Create the setting field.
	$wp_customize->add_control(
		'theme_for_test_task_header_scripts',
		[
			'label'       => esc_attr__( 'Header Scripts', 'theme-for-test-task' ),
			'description' => esc_attr__( 'Additional scripts to add to the header. Basic HTML tags are allowed.', 'theme-for-test-task' ),
			'section'     => 'theme_for_test_task_additional_scripts_section',
			'type'        => 'textarea',
		]
	);

	// Register a setting.
	$wp_customize->add_setting(
		'theme_for_test_task_footer_scripts',
		[
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		]
	);

	// Create the setting field.
	$wp_customize->add_control(
		'theme_for_test_task_footer_scripts',
		[
			'label'       => esc_attr__( 'Footer Scripts', 'theme-for-test-task' ),
			'description' => esc_attr__( 'Additional scripts to add to the footer. Basic HTML tags are allowed.', 'theme-for-test-task' ),
			'section'     => 'theme_for_test_task_additional_scripts_section',
			'type'        => 'textarea',
		]
	);
}

add_action( 'customize_register', __NAMESPACE__ . '\customize_additional_scripts' );

/**
 * Register a social icons setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function customize_social_icons( $wp_customize ) {
	// Create an array of our social links for ease of setup.
	$social_networks = [
		'facebook',
		'instagram',
		'twitter',
		'linkedin',
	];

	// Loop through our networks to setup our fields.
	foreach ( $social_networks as $network ) {

		// Register a setting.
		$wp_customize->add_setting(
			'theme_for_test_task_' . $network . '_link',
			[
				'default'           => '',
				'sanitize_callback' => 'esc_url',
			]
		);

		// Create the setting field.
		$wp_customize->add_control(
			'theme_for_test_task_' . $network . '_link',
			[
				'label'   => /* translators: the social network name. */ sprintf( esc_attr__( '%s URL', 'theme-for-test-task' ), ucwords( $network ) ),
				'section' => 'theme_for_test_task_social_links_section',
				'type'    => 'text',
			]
		);
	}
}

add_action( 'customize_register', __NAMESPACE__ . '\customize_social_icons' );

/**
 * Register copyright text setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function customize_copyright_text( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'theme_for_test_task_copyright_text',
		[
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		]
	);

	// Create the setting field.
	$wp_customize->add_control(
		'theme_for_test_task_copyright_text',
		[
			'label'       => esc_attr__( 'Copyright Text', 'theme-for-test-task' ),
			'description' => esc_attr__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'theme-for-test-task' ),
			'section'     => 'theme_for_test_task_footer_section',
			'type'        => 'textarea',
		]
	);
}

add_action( 'customize_register', __NAMESPACE__ . '\customize_copyright_text' );
