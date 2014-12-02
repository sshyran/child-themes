<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPCanvas2
 */
require_once( 'snippets/get-cat-info.php' );
get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							printf( __( '%s', 'wpcanvas2' ), single_cat_title( '', false ) );

						elseif ( is_tag() ) :
							printf( __( 'Tag Archives: %s', 'wpcanvas2' ), single_tag_title( '', false ) );

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'wpcanvas2' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'wpcanvas2' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'wpcanvas2' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'wpcanvas2' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'wpcanvas2' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'wpcanvas2' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'wpcanvas2' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'wpcanvas2');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'wpcanvas2');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'wpcanvas2' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'wpcanvas2' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'wpcanvas2' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'wpcanvas2' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'wpcanvas2' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'wpcanvas2' );

						else :
							_e( 'Archives', 'wpcanvas2' );

						endif;
					?>
				</h1>

				<div><p><?php get_search_form(); ?></p></div>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'one-line' );
				?>

			<?php endwhile; ?>

			<?php wpcanvas2_pagination_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
