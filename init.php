<?php
/*
Plugin Name: ru sync
Description:
Version: 0.2
Author URI: http://iothings.asia
 */

function ss_options_install() {

	global $wpdb;

	$table_name = $wpdb->prefix . "ruproperties";
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE $table_name (
			`id` varchar(3) CHARACTER SET utf8 NOT NULL,
			`puid` varchar(20) CHARACTER SET utf8 NOT NULL,
			`ruid` varchar(20) CHARACTER SET utf8 NOT NULL,
			`name` varchar(20) CHARACTER SET utf8 NOT NULL,
			`OwnerID` varchar(20) CHARACTER SET utf8 NOT NULL,
			`DetailedLocationID` varchar(20) CHARACTER SET utf8 NOT NULL,
			`LastMod` varchar(20) CHARACTER SET utf8 NOT NULL,
			`DateCreated` varchar(20) CHARACTER SET utf8 NOT NULL,
			`UserID` varchar(20) CHARACTER SET utf8 NOT NULL,
			PRIMARY KEY (`id`)
		  ) $charset_collate; ";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta($sql);

	$table_name = $wpdb->prefix . "ruproperty";
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE $table_name (
			`id` varchar(3) CHARACTER SET utf8 NOT NULL,
			`ruid` varchar(20) CHARACTER SET utf8 NOT NULL,
			`images` varchar(20) CHARACTER SET utf8 NOT NULL,
			`PaymentMethodID` varchar(20) CHARACTER SET utf8 NOT NULL,
			`Descriptions` varchar(20) CHARACTER SET utf8 NOT NULL,
	PRIMARY KEY (`id`)
	) $charset_collate; ";
	dbDelta($sql);
}

// run the install scripts upon plugin activation
register_activation_hook(__FILE__, 'ss_options_install');

//menu items
add_action('admin_menu', 'ru_modifymenu');
function ru_modifymenu() {

	//this is the main item for the menu
	add_menu_page('RU-Sync', //page title
		'Property List', //menu title
		'manage_options', //capabilities
		'ru_list', //menu slug
		'ru_list' //function
	);

	//this is a submenu
	add_submenu_page('ru_list', //parent slug
		'Add New Property', //page title
		'Sync Now', //menu title
		'manage_options', //capability
		'ru_create', //menu slug
		'ru_create'); //function

	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
		'Update Property', //page title
		'Update', //menu title
		'manage_options', //capability
		'ru_update', //menu slug
		'ru_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once ROOTDIR . 'ru-list.php';
require_once ROOTDIR . 'ru-create.php';
require_once ROOTDIR . 'ru-update.php';
