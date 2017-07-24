<?php

namespace User\Factory\Model\TableGateway;

use 
	User\Model\TableGateway\UserCredentialsTableGateway,
	User\Model\Entity\UserCredentials as UserCredentialsEntity,
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

		$dbResultSetPrototype = new DbResultSet();

		$dbResultSetPrototype->setArrayObjectPrototype( 
			new UserCredentialsEntity
		);

		$tableGateway = 
			new TableGateway(
				"user_credentials",
				$dbAdapter,
				null,
				$dbResultSetPrototype
			);

		$userCredentialsTableGateway = 
			new UserCredentialsTableGateway( 
				$tableGateway 
			);

		return $userCredentialsTableGateway;
	}
}
	
