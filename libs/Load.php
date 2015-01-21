<?php
class Load {
	public function __construct(){
		echo "This is the loader! Able to load library, helper etc.";
	}
	
	public static function load($type, $file) {
		require_once $type.'/'.$file.'.php';
	}
}