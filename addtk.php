<?php

include(dirname(__FILE__) . '/addtk-config.php');

// enter your current profile here
$current_profile = 'config-base';

// this array holds any ajax request URLs you want to debug
$test_ajax_array = array(
	0 => '',
	1 => '',
	2 => '',
	3 => '',
	4 => '',
	5 => '',
	// add however many you want to use
	);

// this variable is the index into $test_ajax_array - use it to point to the
// ajax string you're currently debugging
$varnum = 0;

// this setting appears useless, much like the rest of php
ini_set('display_errors', '1');
include(dirname(__FILE__) . '/agfunctions.php');

$init_success = aginit($current_profile);

if (!$init_success)
{
	print_r("Error loading configuration for $current_profile.<br />");
}

print_r('<center>ADDTK Debug Output</center>');

$parsed_ajax_request = str_replace(GATEWAY_URL . '?',
	'',
	$test_ajax_array[$varnum]);

// its
// business
// time
parse_str($parsed_ajax_request, $_REQUEST);

print_r('<b>'.$_REQUEST['mode'].'</b><br>');

include(WORKING_DIR . '/' . GATEWAY_FILE);
