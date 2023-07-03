<?php
/* 

Plugin Name: iweb remove nag 

Plugin URI: https://tutsplus.com/ 

Description: Plugin to accompany tutsplus guide to creating plugins, registers a post type. 

Version: 1.0 

Author: iweb studios

Author URI: https://rachelmccollin.com/ 

License: GPLv2 or later 

Text Domain: tutsplus 

*/

add_action('admin_enqueue_scripts', 'ds_admin_theme_style');
add_action('login_enqueue_scripts', 'ds_admin_theme_style');
function ds_admin_theme_style() {
	if (!current_user_can( 'manage_options' )) {
		echo '<style>.update-nag, .updated, .error, .is-dismissible { display: none; }</style>';
	}
}
