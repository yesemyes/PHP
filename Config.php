<?php
return array(
	/**
	*Database Configuration
	*@var type is driver type
	*@var params is datebase connection params
	*/
	'database' => array(
		'type' => 'mysql',
		'params' => array(
			'dbName' => 'tank_1',
			'dbUser' => 'root',
			'dbPassword' => '',
			'dbCharset' => 'utf8',
			'dbHost' => 'localhost'),
	),
	/*
	*Debug mode
	*@var 1 is enabled, 0 is disables
	*/
	'debug' => 1,
);

?>