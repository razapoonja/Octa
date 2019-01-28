<?php

function octa_add_admin_page()
{
	add_menu_page('Octa Theme Options', 'Octa', 'manage_options', 'octa_theme', 'octa_create_page', 'dashicons-admin-customizer', 110);

	add_submenu_page('octa_theme', 'Octa Theme Option', 'General', 'manage_options', 'octa_theme', 'octa_create_page');
	add_submenu_page('octa_theme', 'Octa CSS Options', 'Custom CSS', 'manage_options', 'octa_theme_css', 'octa_settings_page');

	add_action('admin_init', 'octa_custom_settings');
}

add_action('admin_menu', 'octa_add_admin_page');

function octa_custom_settings()
{
	register_setting('octa-settings-group', 'first-name');
	add_settings_section();
}

function octa_create_page()
{
	require_once(get_template_directory() . '/inc/templates/octa-admin.php');
}

function octa_settings_page()
{
	echo "<h1>Octa Theme Options</h1>";
}