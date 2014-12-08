<?php
/**
 * @package WPCanvas2
 */
?>
<?php 
$show_post_meta = false;
$is_basic = false;
$class = 'hide-post-meta';

if ( has_tag('basic') ) {
	$class .= ' basic-tutorial';
	$is_basic = true;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class . ' wpc2-post' ); ?>>
	<header class="entry-header">

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	</header><!-- .entry-header -->

	<?php if ( $is_basic ) : ?>
		<div class="entry-summary clear">

			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>

		</div><!-- .entry-summary -->
	<?php endif; ?>

</article><!-- #post-## -->
