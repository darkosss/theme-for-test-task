<?php
/**
 * Customizer sections.
 *
 * @package theme-for-test-task
 */

namespace ACME\wd_s;

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'theme_for_test_task_additional_scripts_section',
		[
			'title'    => esc_html__( 'Additional Scripts', 'theme-for-test-task' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a social links section.
	$wp_customize->add_section(
		'theme_for_test_task_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'theme-for-test-task' ),
			'description' => esc_html__( 'Links here power the print_social_network_links() template tag.', 'theme-for-test-task' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'theme_for_test_task_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'theme-for-test-task' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'theme_for_test_task_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'theme-for-test-task' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', __NAMESPACE__ . '\customize_sections' );
