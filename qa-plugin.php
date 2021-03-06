<?php

/*
	Plugin Name: Ask with Tags list from the URL parameter
	Plugin URI: https://github.com/PublicityPort/q2a-ask-with-tags-list
	Plugin Description: Allows users to load an Ask page with Tags lists through URL. E.g. Like visitors can preselect category using 'cat' parameter in the URL /ask?cat=1, users can now select Tags list through 'tags' parameter in the URL. /ask?tags=tag1,tag2,tag-3
	Plugin Version: 1.0
	Plugin Date: 2017-11-23
	Plugin Author: Publicity Port
	Plugin Author URI: https://publicityport.com/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7.4
	Plugin Update Check URI: https://raw.githubusercontent.com/PublicityPort/q2a-ask-with-tags-list/master/qa-plugin.php

*/

if (!defined('QA_VERSION')) {
	header('Location: ../../');
	exit;
}

/*
// Register file to override the functions
// present in the file
*/
qa_register_plugin_layer('qa-ask-with-tags-layer.php', 'Q2A Ask with tags layer');

qa_register_plugin_module('module', 'qa-ask-with-tags-admin.php', 'qa_ask_with_tags_admin', 'Q2A Ask with Tags Configuration');
