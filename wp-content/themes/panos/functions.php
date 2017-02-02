<?php
//add support for featured photos and thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size('feature' , 500, 500, true);
add_image_size('thumbnail' , 150, 150, false);
//register navigation menus
register_nav_menus(array(
	'mainNav' => 'Main Navigation'
));
//register blog sidebar
register_sidebar(array(
		'name' => 'Blog Sidebar',
		'id' => 'blog-sidebar',
		'description' => 'This is a sidebar for blogs',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
));
//register social sidebar
register_sidebar(array(
		'name' => 'Social Sidebar',
		'id' => 'social-sidebar',
		'description' => 'This is a sidebar for social/contact',
		'before_widget' => '<aside class="col-sm-12">[sgmb id=1]',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => ''
));
?>