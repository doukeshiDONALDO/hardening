<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=test_db;',
			'username'   => 'tyanogi',
			'password'   => '0308',
		),
        'identifier'     => '',
	),

    //'development'=> array(
    //    'type'           => 'mysqli',
    //    'connection'     => array(
    //        'hostname'      => 'localhost',
    //        'port'          => '3306',
    //        'database'      => 'test_db',
    //        'username'      => 'tyanogi',
    //        'password'      => '0308',
    //        'persistent'    => false,
    //        'compress'      => false,
    //    ),
    //    'identifier'     => '`',
    //    'table_prefix'   => '',
    //    'charset'        => 'utf8',
    //    'enable_cache'   => true,
    //    'profiling'      => false,
    //    'readonly'       => false,
    //),

    //'production' => array(
    //    'type'           => 'pdo',
    //    'connection'     => array(
    //        'dsn'           => 'mysql:host=localhost;dbname=test_db',
    //        'username'      => 'tyanogi',
    //        'password'      => '0308',
    //        'persistent'    => false,
    //        'compress'      => false,
    //    ),
    //    'identifier'     => '"',
    //    'table_prefix'   => '',
    //    'charset'        => 'utf8',
    //    'enable_cache'   => true,
    //    'profiling'      => false,
    //    //'readonly'       => array('slave1', 'slave2', 'slave3'),
    //)
);
