<?php
/**
 * Returns true if a blog has more than 1 category, else false.
 *
 * @package theme-for-test-task
 */

namespace ACME\wd_s;

/**
 * Returns true if a blog has more than 1 category, else false.
 *
 * @author WebDevStudios
 *
 * @return bool Whether the blog has more than one category.
 */
function get_categorized_blog() {
	$category_count = get_transient( 'theme_for_test_task_categories' );

	if ( false === $category_count ) {
		$category_count_query = get_categories( [ 'fields' => 'count' ] );

		$category_count = isset( $category_count_query[0] ) ? (int) $category_count_query[0] : 0;

		set_transient( 'theme_for_test_task_categories', $category_count );
	}

	return $category_count > 1;
}
