<?php
// Plugin Name: Developer Contact Info
// Version: 1.0
// Author: Jacob Charles Wilson
// Author URI: https://jacobcharleswilson.com
// Adds a widget to the wordpress dashboard detailing my contact info.

function jclwilson_contact_widget() {
	global $wp_meta_boxes;

	function custom_dashboard_help() {
		echo '<p>This WordPress theme built by Jacob Charles Wilson (@jclwilson).</p><p>The code is stored on Github at <a href="https://github.com/jclwilson/">github.com/jclwilson</a>.</p><p>Still need help? Email <a href="mailto:hello@jacobcharleswilson.com">hello@jacobcharleswilson.com</a>.</p>';
	}
	wp_add_dashboard_widget('custom_help_widget', 'About this website', 'custom_dashboard_help');
}
add_action('wp_dashboard_setup', 'jclwilson_contact_widget');

// End Custom Admin Dashboard Widget

?>
