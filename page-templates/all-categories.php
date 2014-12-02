<?php
/**
 * Template Name: All Categories
 *
 * @package WPCanvas2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main all-categories" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'all-categories' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
