<?php

function octa_add_admin_page()
{
	add_menu_page('Octa Theme Options', 'Octa', 'manage_options', 'theme-octa', 'octa_theme_create_page', 'dashicons-admin-customizer', 110);
}

add_action('admin_menu', 'octa_add_admin_page');

function octa_theme_create_page()
{
	echo "<h1>Octa Theme Options</h1>";
}