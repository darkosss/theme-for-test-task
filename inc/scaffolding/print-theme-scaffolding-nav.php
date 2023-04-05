<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package theme-for-test-task
 */

namespace ACME\wd_s;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'theme-for-test-task' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'theme-for-test-task' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'theme-for-test-task' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'theme-for-test-task' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'theme-for-test-task' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'theme-for-test-task' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'theme-for-test-task' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'theme-for-test-task' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
