<?php
/**
 * The template for displaying the search form.
 *
 * @package theme-for-test-task
 */

// Make sure our search forms have unique IDs in the event more than 1 is on a page.
$theme_for_test_task_random_identifier = wp_rand();
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field-<?php echo esc_attr( $random_identifier ); ?>">
		<span class="screen-reader-text"><?php esc_html_e( 'To search this site, enter a search term', 'theme-for-test-task' ); ?></span>
		<input class="search-field" id="search-field-<?php echo esc_attr( $random_identifier ); ?>" type="text" name="s" value="<?php echo get_search_query(); ?>" aria-required="false" autocomplete="off" placeholder="<?php echo esc_attr_e( 'Search', 'theme-for-test-task' ); ?>" />
	</label>
	<input type="submit" id="search-submit" class="button button-search" tabindex="-1" value="<?php esc_attr_e( 'Submit', 'theme-for-test-task' ); ?>" />
</form>
