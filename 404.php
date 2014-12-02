<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WPCanvas2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main all-categories" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wpcanvas2' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'wpcanvas2' ); ?></p>

					<?php get_template_part( 'content', 'all-categories' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
