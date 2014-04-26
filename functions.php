<?php
include(dirname(__FILE__) . '/lib/dBug.php');

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
	print_r('<i>'.$label . ':</i><br />');
	new dBug($var, "", $collapse);
	print_r('<br />');
}

function aglint($filename)
{
	print_r('<b>not implemented</b><br />');
}

function agassert($lhs, $rhs, $verbose = true, $halt = false)
{
	print_r('<b>not implemented</b><br />');
}

function agprint($text)
{
	print_r('<b>not implemented</b><br />');
}
