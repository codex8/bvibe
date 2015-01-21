<?php

// Library file inclusion
// This code will autoloaded selected libraries specified in the $libraries array()
const LIBPATH = 'libs/';

// array of library file---  
$libraries = array('Bootstrap', 'Controller', 'Model', 'View', 'Database', 'Session', 'Hash');

foreach ($libraries as $library) {
	require LIBPATH. $library.'.php';
}

// configuration file inclusion
const CONFIGPATH = 'config/';


// array of configuration file
// This code will autoloaded selected configurations specified in the $configs array()
$configs = array('paths', 'database', 'config');

foreach ($configs as $config) {
	require CONFIGPATH. $config.'.php';
}

/*
// This function will be loaded automatically all of the libraries in this framework
// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class){
	require LIBS . $class . ".php";
}
*/