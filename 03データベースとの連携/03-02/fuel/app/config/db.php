<?php
/**
 * Base Database Config.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'active' => 'default',

	/**
	 * Base config, just need to set the DSN, username and password in env. config.
	 */
	'default' => array(
		'type'        => 'mysql',
		'connection'  => array(
			'hostname' => ':/Applications/MAMP/tmp/mysql/mysql.sock',
			'database' => 'fuelphp',
			'username' => 'root',
			'password' => 'root',
			'persistent' => false,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'enable_cache' => false,
		'profiling'    => false,
	),

	'redis' => array(
		'default' => array(
			'hostname'  => '127.0.0.1',
			'port'      => 6379,
			'timeout'	=> null,
		)
	),

);
