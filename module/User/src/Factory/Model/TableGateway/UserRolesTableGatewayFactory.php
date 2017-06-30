<?php

namespace User\Factory\Model\TableGateway;

use 
	Zend\Db\TableGateway\TableGateway,
	Zend\Db\ResultSet\ResultSet as DbResultSet,
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\Debug\Debug;

class UserRolesTableGatewayFactory 
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

		$userRolesEntity = 
			$container->get( "user.roles_entity" );

		$dbResultSet = new DbResultSet();

		$dbResultSet->setArrayObjectPrototype(
			$userRolesEntity
		);

		$userRolesTableGateway = 
			new TableGateway( 
				"user_roles",
				$dbAdapter,
				null,
				$dbResultSet
			);

		return $userRolesTableGateway;

	}
}
	
