<?php

// Plugin Name:			Developer Contact Info
// Plugin URI:			https://github.com/jclwilson/wp-contact-widget
// Description:			Displays Jacob's contact info on the WordPress homescreen. Useful for getting in touch when things break.
// Version:				1.0.0
// Author:				Jacob Charles Wilson
// Author URI:			https://jacobcharleswilson.com
// License:				GNU General Public License v2
// License URI:			http://www.gnu.org/licenses/gpl-2.0.html
// Text Domain:			wp-contact-widget
// GitHub Plugin URI:	https://github.com/jclwilson/wp-contact-widget

function jclwilson_contact_widget() {
	global $wp_meta_boxes;

	function custom_dashboard_help() {
		echo '<p>This WordPress theme was built by Jacob Charles Wilson (@jclwilson).</p><p>The code is stored on Github at <a href="https://github.com/jclwilson/">github.com/jclwilson</a>.</p><p>Still need help? Email <a href="mailto:hello@jacobcharleswilson.com">hello@jacobcharleswilson.com</a>.</p>';
	}
	wp_add_dashboard_widget('custom_help_widget', 'About this website', 'custom_dashboard_help');
}
add_action('wp_dashboard_setup', 'jclwilson_contact_widget');

// End Custom Admin Dashboard Widget

?>
