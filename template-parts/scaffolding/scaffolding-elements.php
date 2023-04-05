<?php
/**
 * The template used for displaying generic elements in the scaffolding library.
 *
 * @package theme-for-test-task
 */

use function ACME\wd_s\print_scaffolding_section;

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading" id="<?php esc_html_e( 'elements', 'theme-for-test-task' ); ?>"><?php esc_html_e( 'Generic Elements', 'theme-for-test-task' ); ?></h2>

	<?php
	// Right-aligned Image.
	print_scaffolding_section(
		[
			'title'       => 'Numeric Pagination',
			'description' => 'Display numeric pagination.',
			'usage'       => 'theme_for_test_task_print_numeric_pagination()',
			'output'      => '
				<nav class="pagination-container">
					<a class="prev page-numbers" href="#>&laquo;</a>
					<a class="page-numbers" href="#">1</a>
					<span aria-current="page" class="page-numbers current">2</span>
					<a class="page-numbers" href="#">3</a>
					<a class="next page-numbers" href="#">&raquo;</a>
				</nav>
			',
		]
	);

	?>
</section>
