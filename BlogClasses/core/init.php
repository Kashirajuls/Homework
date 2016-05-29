<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => 'ksyju25',
		'db' => 'Ksyju'
		),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
		),
	'session' => array(
		'session_name' => 'user'
		)
	);
spl_autoload_register(function($class)
{
	require_once 'classes/' . $class .'.php';
});

require_once 'functions/sanitize.php';

?>