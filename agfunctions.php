<?php
include(dirname(__FILE__) . '/lib/dBug.php');

function aginit($current_profile = '')
{
	// include the profile config
	include(DEBUG_DIR . '/config/' . $current_profile . '.php');

	// validate and/or init the deployment
	return initDeployment();
}

// validates the loaded deployment and initializes where necessary
function initDeployment()
{
	$debug_dir = '/debug/';
	$debug_target = '/index.php';
	$addtk_name = '/addtk.php';

	$working_dir = WORKING_DIR;
	$working_dir_exists = file_exists($working_dir);

	if (!$working_dir_exists)
	{
		print_r("Error! $working_dir does not exist!<br />");
		return false;
	}

	$debug_dir = $working_dir . $debug_dir;
	$debug_dir_exists = file_exists($debug_dir);

	if (!$debug_dir_exists)
	{
		print_r("First run - initializing $debug_dir<br />");
		$mkdir_success = mkdir($debug_dir);
		if (!$mkdir_success)
		{
			print_r("Error! Could not make $debug_dir. Does www-data have permissions?<br />");
			return false;
		}
	}

	$debug_target = $debug_dir . $debug_target;
	$debug_target_exists = file_exists($debug_target);

	if (!$debug_target_exists)
	{
		print_r("First run - initializing $debug_target<br />");
		$symlink_success = symlink(DEBUG_DIR . $addtk_name, $debug_target); 

		if (!$symlink_success)
		{
			print_r("Error! Could not make $debug_target. Does www-data have permissions?<br />");
			return false;
		}
	}

	return true;
}

function agbreak($arg = null)
{
	print_r('<font color="red"><b>BREAKPOINT - Stack trace (click to expand)</b></font>');
	agbacktrace(true);
	die($arg);
}

function agbacktrace($collapse = false)
{
	$backtrace = debug_backtrace();
	new dBug($backtrace, "", $collapse);
}

function agvar($var, $label = null, $collapse = false)
{
	if ($label)
	{
		print_r('<i>'.$label . ':</i><br />');
	}

	new dBug($var, "", $collapse);
	print_r('<br />');
}

function aglint($filename)
{
	$absfilename = WORKING_DIR . '/' . $filename;

	$filecontents = file_get_contents($absfilename);
	$output = array();
	$exec_str = '/usr/bin/php -lf "' . $absfilename . '"';
	$result = exec($exec_str, $output);
}

function agassert($lhs, $rhs, $verbose = true, $halt = false)
{
	print_r('<b>not implemented</b><br />');
}

function agprint($text)
{
	print_r('<b>not implemented</b><br />');
}
