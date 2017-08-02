<?php

/*
Plugin Name: Fixed Width Admin
Plugin URI: http://ogilvi.es/fixed-width-admin
Description: Makes entire admin area a fixed width (default is 1300px) instead of being elastic. Activate to turn on, edit CSS file in plug-in folder to change settings.
Author: Scott Ogilvie
Version: 1.1.1
Author URI: http://twitter.com/scottomfg
*/

function my_admin_head() {
        echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('wp-admin.css', __FILE__). '">';
}

add_action('admin_head', 'my_admin_head');

?>
