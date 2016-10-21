<?php

add_theme_support('post-thumbnails');

function register_my_menus(){
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
			)
		);
}
add_action('init', 'register_my_menus');

?>

<?php add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {
 if ( is_home() )
 $query->set( 'post_type', array( 'produit' ) );

 return $query;
}
?>