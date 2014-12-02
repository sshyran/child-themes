<?php
$categories = get_the_category();

$category_id = 0;
$category_name = 'Search Results for';
$category_link = '';

if ( isset( $categories[0] ) ) {
	$category_name = $categories[0]->cat_name;
	$category_id = $categories[0]->cat_ID;
	$category_link = get_category_link( $category_id );
}
else if ( empty ( $categories ) ) {
	if ( ! isset( $category_id ) || empty( $category_id ) ) {
		if ( isset( $_GET['cat'] ) && ! empty( $_GET['cat'] ) ) {
			$categories = get_term( $_GET['cat'], 'category' );
			$category_name = $categories->name;
			$category_id = $categories->term_id;
			$category_link = get_category_link( $category_id );
		}
	}
}

