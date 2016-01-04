<?php
	
	$base_url = function_exists('apache_getenv') == true ? '//localhost:9090' : '//e-inventory.local/';
	$hostname = 'localhost';
	$username = 'revisoft';
	$password = 'revisoft012686';
	$name     = 'e-inventory';

	if ($clear_db = getenv("CLEARDB_DATABASE_URL")) {
		$base_url = '//e-inventory.technodata-store.com/';
		$clear_db = $clear_db != '' ? parse_url($clear_db)			: array();
		$hostname = isset($clear_db['host']) ? $clear_db['host']	: '';
		$username = isset($clear_db['user']) ? $clear_db['user']	: '';
		$password = isset($clear_db['pass']) ? $clear_db['pass']	: '';
		$name = isset($clear_db['path']) ? $clear_db['path']	: '';
	}

	/**
	 |-------------------------------------------------------------------------------
	 |BASE SITE URL
	 |-------------------------------------------------------------------------------  
	 */
	 !defined('APP_BASE_URL') and define('APP_BASE_URL', $base_url);

	 /**
	  |------------------------------------------------------------------------------
	  |DEFiNE CONNECTIVITY SETTINGS
	  |------------------------------------------------------------------------------
	  */
	  !defined('APP_HOSTNAME') and define('APP_HOSTNAME', $hostname);
	  !defined('APP_USERNAME') and define('APP_USERNAME', $username);
	  !defined('APP_PASSWORD') and define('APP_PASSWORD', $password);
	  !defined('APP_DATABASE') and define('APP_DATABASE', $name);
	  !defined('APP_DBPREFIX') and define('APP_DBPREFIX', 'einv_');