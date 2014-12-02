<?php
$category_id = 0;
$category_name = 'Search Results for';
$category_link = '';

if ( is_category() ) {
	$category_id = get_query_var('cat');
}

if ( empty ( $category_id ) ) {
	if ( isset( $_GET['cat'] ) && ! empty( $_GET['cat'] ) ) {
		$category_id = $_GET['cat'];
	}
}

if ( isset( $category_id ) && ! empty( $category_id ) ) {
	$categories = get_term( $category_id, 'category' );
	$category_name = $categories->name;
	$category_id = $categories->term_id;
	$category_link = get_category_link( $category_id );
}
