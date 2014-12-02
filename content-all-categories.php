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
			$args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'list',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => 1,
			'title_li'           => '',
			'show_option_none'   => __( 'No categories' ),
			'number'             => null,
			'echo'               => 1,
			'depth'              => 2,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => new WPCanvas2_Child_Walker_Category
			);
			wp_list_categories( $args ); 
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
