<?php
global $category_id;
?>

<?php if ( isset( $category_id ) && ! empty( $category_id ) ) : ?>
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
				<input type="hidden" value="<?php echo $category_id; ?>" name="cat" id="scat" />
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
		</label>
		<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	</form>
<?php endif; ?>
