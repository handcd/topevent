<?php
	$mysqlData = array(
		'db' => 'wit_db',
		'host' => 'localhost',
		'user' => 'root',
		'password' => 'Eddymascota22"'
		);

	$conn = new mysqli(
		$mysqlData['host'],
		$mysqlData['user'],
		$mysqlData['password'],
		$mysqlData['db']
		);

	$conn->set_charset("utf8");
?>