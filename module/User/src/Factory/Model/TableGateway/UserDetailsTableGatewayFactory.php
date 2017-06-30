<?php

namespace User\Factory\Model\TableGateway;

use 
	Zend\Db\TableGateway\TableGateway,
	Zend\Db\ResultSet\ResultSet as DbResultSet,
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\Debug\Debug;

class UserDetailsTableGatewayFactory 
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

		$userDetailsEntity = 
			$container->get( "user.details_entity" );

		$dbResultSet = new DbResultSet();

		$dbResultSet->setArrayObjectPrototype( 
			$userDetailsEntity
		);

		$userDetailsTableGateway = 
			new TableGateway( 
				"user_details",
				$dbAdapter,
				null,
				$dbResultSet
			);

		return $userDetailsTableGateway;
	}
}
	
