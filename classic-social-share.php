<?php
/*
Plugin Name: Classic Social Share
Plugin URI: https://example.com/classic-social-share
Description: A simple plugin to add social sharing buttons to your posts. This plugin supports sharing on Facebook, Twitter, LinkedIn, and more. Easily customizable and lightweight. This makes it the most <code>Flexible Social Sharing Plugin ever for Everyone.</code>
Version: 1.0
Author: Md Hazrath Ali 
Author URI: https://github.com/Hazrath15
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: classic-social-share
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
// Define the plugin directory and Global Constants
define( 'CSSH_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CSSH_ASSETS_DIR', plugin_dir_path( __FILE__ ) ).'assets/';

// Include the autoloader file
require_once CSSH_PLUGIN_DIR . 'includes/class-loader.php';

// Initialize the autoloader
CSSH_Loader::init();

?>