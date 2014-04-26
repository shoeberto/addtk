<?php
// this setting appears useless, much like the rest of php
ini_set('display_errors', '1');
include(dirname(__FILE__) . '/config.php');
include(dirname(__FILE__) . '/functions.php');

// set this to whatever string you want to debug
$varnum = 1;

// comments go here
$test_str1 = '';
// comments go here
$test_str2 = '';
// comments go here
$test_str3 = '';
// comments go here
$test_str4 = '';
// comments go here
$test_str5 = '';
// comments go here
$test_str6 = '';
// comments go here
$test_str7 = '';
// comments go here
$test_str8 = '';
// comments go here
$test_str9 = '';
// comments go here
$test_str0 = '';

$test_str_var = 'test_str' . $varnum;

$no_true_test_str = str_replace(GATEWAY_URL . '?',
	'',
	$$test_str_var);

// its
// business
// time
parse_str($no_true_test_str, $_REQUEST);

print_r('<center>ADDTK Debug Output</center>');
print_r('<b>'.$_REQUEST['mode'].'</b><br>');

include(WORKING_DIR . '/' . GATEWAY_FILE);
