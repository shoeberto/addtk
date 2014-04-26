<?php

$root = dirname(__FILE__);

// DEPLOYMENT_URL is the base URL you access the project at (ended a sentence on a preposition, sorry)
define('DEPLOYMENT_URL', '');
// GATEWAY_FILE is the filename of the Ajax controller... thing
define('GATEWAY_FILE', '');
// DEBUG_DIR is just the directory in which addtk lives (this sentence, written without ending on a preposition, is good grammer)
// (split infinitive)
define('DEBUG_DIR', "$root"); 
// GATEWAY_URL is auto-constructed
define('GATEWAY_URL', DEPLOYMENT_URL . '/' . GATEWAY_FILE);
// WORKING_DIR is the filesystem location of your project checkout. Presumably your GATEWAY_FILE lives in the root of this.
// If not, point it to where ever your GATEWAY_FILE lives on the local filesystem.
define('WORKING_DIR', '');
