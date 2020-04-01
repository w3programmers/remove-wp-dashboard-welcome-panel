<?php
 /*
 Plugin Name: Remove WordPress Dashboard Welcome Panel
 Plugin URI: https://github.com/w3programmers/remove-wp-dashboard-welcome-panel
 Description: Removing Welcome Panel from WordPress Dashboard
 Version: 1.0
 Author: Masud Alam
 Author URI: http://w3programmers.com/bangla
 License: GPLv2
 */

remove_action('welcome_panel', 'wp_welcome_panel');
