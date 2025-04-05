<?php
/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */


/**
 * Register widget areas.
 *
 * @package WordPress
 * @subpackage wp_bizone
 */

function wp_bizone_sidebar_left()
{
	if (function_exists('register_sidebar')) {
		register_sidebar(
			array(
				'name' => __('SideBar Left', 'wp-bizone'),
				'id' => 'sidebar_left',
				'description' => __('Appears in the left column of the site.', 'wp-bizone'),
				'before_widget' => '<div id="%1$s" class="widget_left %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget_title_left">',
				'after_title' => '</h3>',
			)
		);
	}
}
add_action('widgets_init', 'wp_bizone_sidebar_left');

function wp_bizone_sidebar_right()
{
	if (function_exists('register_sidebar')) {
		register_sidebar(
			array(
				'name' => __('SideBar Right', 'wp-bizone'),
				'id' => 'sidebar_right',
				'description' => __('Appears in the right column of the site.', 'wp-bizone'),
				'before_widget' => '<div id="%1$s" class="widget_right %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget_title_right">',
				'after_title' => '</h3>',
			)
		);
	}
}
add_action('widgets_init', 'wp_bizone_sidebar_right');

function wp_bizone_header_position_cart()
{
	register_sidebar(
		array(
			'id' => 'header_position_cart',
			'name' => __('header_position_cart', 'wp-bizone'),
			'description' => __('header_position_cart', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_header_position_cart">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_header_position_cart');

function wp_bizone_position_left_header()
{
	register_sidebar(
		array(
			'id' => 'position_left_header',
			'name' => __('position_left_header', 'wp-bizone'),
			'description' => __('Position: position_left_header', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="position_left_header">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_position_left_header');

function wp_bizone_position_center_left_header()
{
	register_sidebar(
		array(
			'id' => 'position_center_left_header',
			'name' => __('position_center_left_header', 'wp-bizone'),
			'description' => __('Position: position_center_left_header', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="position_center_left_header">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_position_center_left_header');

function wp_bizone_position_center_right_header()
{
	register_sidebar(
		array(
			'id' => 'position_center_right_header',
			'name' => __('position_center_right_header', 'wp-bizone'),
			'description' => __('Position: position_center_right_header', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="position_center_right_header">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_position_center_right_header');

function wp_bizone_position_right_header()
{
	register_sidebar(
		array(
			'id' => 'position_right_header',
			'name' => __('position_right_header', 'wp-bizone'),
			'description' => __('Position: position_right_header', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="position_right_header">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_position_right_header');

function wp_bizone_top_left()
{
	register_sidebar(
		array(
			'id' => 'top_left',
			'name' => __('Top: Left', 'wp-bizone'),
			'description' => __('Position: Top Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_top_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_top_left');

function wp_bizone_top_left_center()
{
	register_sidebar(
		array(
			'id' => 'top_left_center',
			'name' => __('Top: Left -> Center', 'wp-bizone'),
			'description' => __('Top: Left -> Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_top_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_top_left_center');

function wp_bizone_top_right_center()
{
	register_sidebar(
		array(
			'id' => 'top_right_center',
			'name' => __('Top: Right -> Center', 'wp-bizone'),
			'description' => __('Top: Right -> Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_top_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_top_right_center');

function wp_bizone_top_right()
{
	register_sidebar(
		array(
			'id' => 'top_right',
			'name' => __('Top: Right', 'wp-bizone'),
			'description' => __('Position Top Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_top_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_top_right');

function wp_bizone_line1_left()
{
	register_sidebar(
		array(
			'id' => 'line1_left',
			'name' => __('Line 1 Left', 'wp-bizone'),
			'description' => __('Line 1 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line1_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line1_left');

function wp_bizone_line1_left_center()
{
	register_sidebar(
		array(
			'id' => 'line1_left_center',
			'name' => __('Line 1 Left Center', 'wp-bizone'),
			'description' => __('Line 1 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line1_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line1_left_center');

function wp_bizone_line1_right_center()
{
	register_sidebar(
		array(
			'id' => 'line1_right_center',
			'name' => __('Line 1 Right Center', 'wp-bizone'),
			'description' => __('Line 1 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line1_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line1_right_center');

function wp_bizone_line1_right()
{
	register_sidebar(
		array(
			'id' => 'line1_right',
			'name' => __('Line 1 Right', 'wp-bizone'),
			'description' => __('Line 1 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line1_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line1_right');

function wp_bizone_line2_left()
{
	register_sidebar(
		array(
			'id' => 'line2_left',
			'name' => __('Line 2 Left', 'wp-bizone'),
			'description' => __('Line 2 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line2_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line2_left');

function wp_bizone_line2_left_center()
{
	register_sidebar(
		array(
			'id' => 'line2_left_center',
			'name' => __('Line 2 Left Center', 'wp-bizone'),
			'description' => __('Line 2 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line2_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line2_left_center');

function wp_bizone_line2_right_center()
{
	register_sidebar(
		array(
			'id' => 'line2_right_center',
			'name' => __('Line 2 Right Center', 'wp-bizone'),
			'description' => __('Line 2 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line2_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line2_right_center');

function wp_bizone_line2_right()
{
	register_sidebar(
		array(
			'id' => 'line2_right',
			'name' => __('Line 2 Right', 'wp-bizone'),
			'description' => __('Line 2 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line2_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line2_right');

function wp_bizone_line3_left()
{
	register_sidebar(
		array(
			'id' => 'line3_left',
			'name' => __('Line 3 Left', 'wp-bizone'),
			'description' => __('Line 3 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line3_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line3_left');

function wp_bizone_line3_left_center()
{
	register_sidebar(
		array(
			'id' => 'line3_left_center',
			'name' => __('Line 3 Left Center', 'wp-bizone'),
			'description' => __('Line 3 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line3_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line3_left_center');

function wp_bizone_line3_right_center()
{
	register_sidebar(
		array(
			'id' => 'line3_right_center',
			'name' => __('Line 3 Right Center', 'wp-bizone'),
			'description' => __('Line 3 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line3_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line3_right_center');

function wp_bizone_line3_right()
{
	register_sidebar(
		array(
			'id' => 'line3_right',
			'name' => __('Line 3 Right', 'wp-bizone'),
			'description' => __('Line 3 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line3_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line3_right');

function wp_bizone_line4_left()
{
	register_sidebar(
		array(
			'id' => 'line4_left',
			'name' => __('Line 4 Left', 'wp-bizone'),
			'description' => __('Line 4 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line4_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line4_left');

function wp_bizone_line4_left_center()
{
	register_sidebar(
		array(
			'id' => 'line4_left_center',
			'name' => __('Line 4 Left Center', 'wp-bizone'),
			'description' => __('Line 4 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line4_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line4_left_center');

function wp_bizone_line4_right_center()
{
	register_sidebar(
		array(
			'id' => 'line4_right_center',
			'name' => __('Line 4 Right Center', 'wp-bizone'),
			'description' => __('Line 4 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line4_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line4_right_center');

function wp_bizone_line4_right()
{
	register_sidebar(
		array(
			'id' => 'line4_right',
			'name' => __('Line 4 Right', 'wp-bizone'),
			'description' => __('Line 4 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line4_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line4_right');

function wp_bizone_center_left()
{
	register_sidebar(
		array(
			'id' => 'center_left',
			'name' => __('Center Left', 'wp-bizone'),
			'description' => __('Center Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_center_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_center_left');

function wp_bizone_center_left_position()
{
	register_sidebar(
		array(
			'id' => 'center_left_position',
			'name' => __('Center Left Position', 'wp-bizone'),
			'description' => __('Center Left Position', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_center_left_position">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_center_left_position');


function wp_bizone_center_right_position()
{
	register_sidebar(
		array(
			'id' => 'center_right_position',
			'name' => __('Center Right Position', 'wp-bizone'),
			'description' => __('Center Right Position', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_center_right_position">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_center_right_position');


function wp_bizone_center_right()
{
	register_sidebar(
		array(
			'id' => 'center_right',
			'name' => __('Center Right', 'wp-bizone'),
			'description' => __('Position Top Four', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_center_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_center_right');

function wp_bizone_line5_left()
{
	register_sidebar(
		array(
			'id' => 'line5_left',
			'name' => __('Line 5 Left', 'wp-bizone'),
			'description' => __('Line 5 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line5_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line5_left');

function wp_bizone_line5_left_center()
{
	register_sidebar(
		array(
			'id' => 'line5_left_center',
			'name' => __('Line 5 Left Center', 'wp-bizone'),
			'description' => __('Line 5 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line5_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line5_left_center');

function wp_bizone_line5_right_center()
{
	register_sidebar(
		array(
			'id' => 'line5_right_center',
			'name' => __('Line 5 Right Center', 'wp-bizone'),
			'description' => __('Line 5 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line5_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line5_right_center');

function wp_bizone_line5_right()
{
	register_sidebar(
		array(
			'id' => 'line5_right',
			'name' => __('Line 5 Right', 'wp-bizone'),
			'description' => __('Line 5 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line5_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line5_right');

function wp_bizone_line6_left()
{
	register_sidebar(
		array(
			'id' => 'line6_left',
			'name' => __('Line 6 Left', 'wp-bizone'),
			'description' => __('Line 6 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line6_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line6_left');

function wp_bizone_line6_left_center()
{
	register_sidebar(
		array(
			'id' => 'line6_left_center',
			'name' => __('Line 6 Left Center', 'wp-bizone'),
			'description' => __('Line 6 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line6_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line6_left_center');

function wp_bizone_line6_right_center()
{
	register_sidebar(
		array(
			'id' => 'line6_right_center',
			'name' => __('Line 6 Right Center', 'wp-bizone'),
			'description' => __('Line 6 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line6_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line6_right_center');

function wp_bizone_line6_right()
{
	register_sidebar(
		array(
			'id' => 'line6_right',
			'name' => __('Line 6 Right', 'wp-bizone'),
			'description' => __('Line 6 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line6_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line6_right');

function wp_bizone_line7_left()
{
	register_sidebar(
		array(
			'id' => 'line7_left',
			'name' => __('Line 7 Left', 'wp-bizone'),
			'description' => __('Line 7 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line7_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line7_left');

function wp_bizone_line7_left_center()
{
	register_sidebar(
		array(
			'id' => 'line7_left_center',
			'name' => __('Line 7 Left Center', 'wp-bizone'),
			'description' => __('Line 7 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line7_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line7_left_center');

function wp_bizone_line7_right_center()
{
	register_sidebar(
		array(
			'id' => 'line7_right_center',
			'name' => __('Line 7 Right Center', 'wp-bizone'),
			'description' => __('Line 7 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line7_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line7_right_center');

function wp_bizone_line7_right()
{
	register_sidebar(
		array(
			'id' => 'line7_right',
			'name' => __('Line 7 Right', 'wp-bizone'),
			'description' => __('Line 7 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line7_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line7_right');

function wp_bizone_line8_left()
{
	register_sidebar(
		array(
			'id' => 'line8_left',
			'name' => __('Line 8 Left', 'wp-bizone'),
			'description' => __('Line 8 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line8_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line8_left');

function wp_bizone_line8_left_center()
{
	register_sidebar(
		array(
			'id' => 'line8_left_center',
			'name' => __('Line 8 Left Center', 'wp-bizone'),
			'description' => __('Line 8 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line8_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line8_left_center');

function wp_bizone_line8_right_center()
{
	register_sidebar(
		array(
			'id' => 'line8_right_center',
			'name' => __('Line 8 Right Center', 'wp-bizone'),
			'description' => __('Line 8 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line8_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line8_right_center');

function wp_bizone_line8_right()
{
	register_sidebar(
		array(
			'id' => 'line8_right',
			'name' => __('Line 8 Right', 'wp-bizone'),
			'description' => __('Line 8 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line8_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line8_right');

function wp_bizone_line9_left()
{
	register_sidebar(
		array(
			'id' => 'line9_left',
			'name' => __('Line 9 Left', 'wp-bizone'),
			'description' => __('Line 9 Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line9_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line9_left');

function wp_bizone_line9_left_center()
{
	register_sidebar(
		array(
			'id' => 'line9_left_center',
			'name' => __('Line 9 Left Center', 'wp-bizone'),
			'description' => __('Line 9 Left Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line9_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line9_left_center');

function wp_bizone_line9_right_center()
{
	register_sidebar(
		array(
			'id' => 'line9_right_center',
			'name' => __('Line 9 Right Center', 'wp-bizone'),
			'description' => __('Line 9 Right Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line9_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line9_right_center');

function wp_bizone_line9_right()
{
	register_sidebar(
		array(
			'id' => 'line9_right',
			'name' => __('Line 9 Right', 'wp-bizone'),
			'description' => __('Line 9 Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_line9_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_line9_right');


function wp_bizone_bottom_left()
{
	register_sidebar(
		array(
			'id' => 'bottom_left',
			'name' => __('Bottom: Left', 'wp-bizone'),
			'description' => __('Bottom: Left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_bottom_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_bottom_left');

function wp_bizone_bottom_left_center()
{
	register_sidebar(
		array(
			'id' => 'bottom_left_center',
			'name' => __('Bottom: Left -> Center', 'wp-bizone'),
			'description' => __('Bottom: Left -> Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_bottom_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_bottom_left_center');

function wp_bizone_bottom_right_center()
{
	register_sidebar(
		array(
			'id' => 'bottom_right_center',
			'name' => __('Bottom: Right -> Center', 'wp-bizone'),
			'description' => __('Bottom: Right -> Center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_bottom_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_bottom_right_center');

function wp_bizone_bottom_right()
{
	register_sidebar(
		array(
			'id' => 'bottom_right',
			'name' => __('Bottom: Right', 'wp-bizone'),
			'description' => __('Bottom: Right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_bottom_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_bottom_right');

function wp_bizone_footer_left()
{
	register_sidebar(
		array(
			'id' => 'footer_left',
			'name' => __('footer_left', 'wp-bizone'),
			'description' => __('footer_left', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_footer_left">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_footer_left');

function wp_bizone_footer_left_center()
{
	register_sidebar(
		array(
			'id' => 'footer_left_center',
			'name' => __('footer_left_center', 'wp-bizone'),
			'description' => __('footer_left_center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_footer_left_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_footer_left_center');

function wp_bizone_footer_right_center()
{
	register_sidebar(
		array(
			'id' => 'footer_right_center',
			'name' => __('footer_right_center', 'wp-bizone'),
			'description' => __('footer_right_center', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_footer_right_center">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_footer_right_center');

function wp_bizone_footer_right()
{
	register_sidebar(
		array(
			'id' => 'footer_right',
			'name' => __('footer_right', 'wp-bizone'),
			'description' => __('footer_right', 'wp-bizone'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="my_widget_title_footer_right">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'wp_bizone_footer_right');



//Do you want to be able to use a shortcode in your blog’s sidebar instead 
//of your post or page, that help ,
add_filter('widget_text', 'do_shortcode');