<?php

namespace User\Factory\Model\TableGateway;

use 
	Zend\Db\TableGateway\TableGateway,
	Zend\Db\ResultSet\ResultSet as DbResultSet,
	Interop\Container\ContainerInterface,
	Zend\ServiceManager\Factory\FactoryInterface,
	Zend\Debug\Debug;

class UserAclTableGatewayFactory 
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

		$userAclEntity = 
			$container->get( "user.acl_entity" );

		$dbResultSet = new DbResultSet();

		$dbResultSet->setArrayObjectPrototype( 
			$userAclEntity
		);

		$userAclTableGateway = 
			new TableGateway(
				"user_acl",
				$dbAdapter,
				null,
				$dbResultSet
			);

		return $userAclTableGateway;

	}
}
	
