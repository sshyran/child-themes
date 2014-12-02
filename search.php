<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WPCanvas2
 */

require_once( 'snippets/get-cat-info.php' );
get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<?php if ( ! empty( $category_link ) ) : ?>
					<h1 class="page-title"><?php printf( __( '%s', 'wpcanvas2' ), '<a class="previous-category" href="'.$category_link.'">'.$category_name.'</a>' ); ?></h1>
				<?php else : ?>
					<h1 class="page-title"><?php printf( __( '%s: %s', 'wpcanvas2' ), $category_name, '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php endif; ?>

				<div><p><?php get_search_form(); ?></p></div>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'one-line' ); ?>

			<?php endwhile; ?>

			<?php wpcanvas2_pagination_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
