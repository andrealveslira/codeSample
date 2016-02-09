/*
** PROGRAMA: global.php
** OBJETIVO: parametros de conexão com banco de dados
**
**
*/

return array(
	'service_manager' => array(
		'factories' => array(
			'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterAbstractServiceFactory'
		)
	),
	'db' => array(
		'driver' => 'Pdo',
		'dsn' => 'mysql:dbname=jvbaseproject;host=localhost',
		'driver_options' => array(
			PDO::MYSQL_ATTR_COMMAND => 'SET NAMES \'UTF-8''
		)
	)
);

