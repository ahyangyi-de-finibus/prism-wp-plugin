<?php
/*
* Plugin Name: Prism for De finibus
* Description: Add a customized subset of Prism to my page
* Version: 1.4
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

wp_enqueue_style("prism", plugin_dir_url( __FILE__ ) . "/" . "prism.css");
wp_enqueue_script("prism", plugin_dir_url( __FILE__ ) . "/" . "prism.js");
?>
