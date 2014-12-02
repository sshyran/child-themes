<?php
/**
 * @package WPCanvas2
 */
?>
<?php 
$show_post_meta = false;
$class = 'hide-post-meta';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class . ' wpc2-post' ); ?>>
	<header class="entry-header">

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	</header><!-- .entry-header -->
</article><!-- #post-## -->
