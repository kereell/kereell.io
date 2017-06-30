<?php

namespace User\Factory\Model\TableGateway;

use 
	Zend\Db\TableGateway\TableGateway,
	Zend\Db\ResultSet\ResultSet as DbResultSet,
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\Debug\Debug;

class UserCredentialsTableGatewayFactory 
	implements FactoryInterface
{
	public function __invoke( 
		ContainerInterface $container,
		$requestedName,
		array $options = null
	)
	{
		$dbAdapter = 
			$container->get( "user.db_adapter" );

		$userCredentialsEntity = 
			$container->get( "user.credentials_entity" );

		$dbResultSet = new DbResultSet();

		$dbResultSet->setArrayObjectPrototype( 
			$userCredentialsEntity
		);

		$userCredentialsTableGateway = 
			new TableGateway(
				"user_credentials",
				$dbAdapter,
				null,
				$dbResultSet
			);

		return $userCredentialsTableGateway;
	}
}
	
