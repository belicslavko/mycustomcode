<?php
/*
Plugin Name: My custom code
Plugin URI: http://alexthemes.com
Description: Plugin for adding custom code
Version: 1.0
Author: AlexThemes.com
Author URI: http://alexthemes.com
License: A "Slug" license name e.g. GPL2
*/


// Include framework
require_once plugin_dir_path(__FILE__).'/codestar-framework/cs-framework.php';

// Include post type
require_once plugin_dir_path(__FILE__).'/inc/post.php';

// Include code hook for view
require_once plugin_dir_path(__FILE__).'/inc/hook-code.php';

// Include shortcode
require_once plugin_dir_path(__FILE__).'/inc/shortcode.php';