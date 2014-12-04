<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WPCanvas2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php 
		$defaults = array(
			'theme_location'  => 'all-categories',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'nav-all-categories',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => '',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 2,
			'walker'          => new WPCanvas2_Child_Walker_Nav_Menu
		);

		wp_nav_menu( $defaults );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
