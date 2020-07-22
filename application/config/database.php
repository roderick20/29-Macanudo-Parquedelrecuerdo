<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;


$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'WIN-P3761AM5DC1\SQLEXPRESS',
	'username' => 'sa',
	'password' => 'Aladino_09',
	'database' => 'PEWeb',
	'dbdriver' => 'sqlsrv',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

//$db['parque'] = array(
//	'dsn'	=> '',
//	'hostname' => 'WIN-P3761AM5DC1\SQLEXPRESS',
//	'username' => 'sa',
//	'password' => 'Aladino_09',
//	'database' => 'Parque',
//	'dbdriver' => 'sqlsrv',
//	'dbprefix' => '',
//	'pconnect' => FALSE,
//	'db_debug' => (ENVIRONMENT !== 'production'),
//	'cache_on' => FALSE,
//	'cachedir' => '',
//	'char_set' => 'utf8',
//	'dbcollat' => 'utf8_general_ci',
//	'swap_pre' => '',
//	'encrypt' => FALSE,
//	'compress' => FALSE,
//	'stricton' => FALSE,
//	'failover' => array(),
//	'save_queries' => TRUE
//);
