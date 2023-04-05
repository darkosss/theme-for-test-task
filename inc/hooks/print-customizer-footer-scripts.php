<?php
/**
 * Display the customizer footer scripts.
 *
 * @package theme-for-test-task
 */

namespace ACME\wd_s;

/**
 * Display the customizer footer scripts.
 *
 * @author Greg Rickaby
 *
 * @return string Footer scripts.
 */
function print_customizer_footer_scripts() {
	// Check for footer scripts.
	$scripts = get_theme_mod( 'theme_for_test_task_footer_scripts' );

	// None? Bail...
	if ( ! $scripts ) {
		return false;
	}

	// Otherwise, echo the scripts!
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
	echo get_post_content( $scripts );
}

add_action( 'wp_footer', __NAMESPACE__ . '\print_customizer_footer_scripts', 999 );
