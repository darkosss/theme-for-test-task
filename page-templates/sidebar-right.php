<?php
/**
 * Template Name: Sidebar Right
 *
 * This template displays a page with a sidebar on the right side of the screen.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-for-test-task
 */

use function ACME\wd_s\print_comments;
use function ACME\wd_s\main_classes;

get_header(); ?>

	<div class="<?php echo esc_attr( main_classes( [] ) ); ?>">
		<main id="main" class="content-container">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				print_comments();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
